<?php
class ControleurContact
{
    public function afficherContact()
    {
        require Chemins::VUES . 'v_contact.inc.php';
    }
    public function SendMail()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $captcha = $_POST['g-recaptcha-response'] ?? '';
            $check = $this->isValid($captcha, $_SERVER['REMOTE_ADDR']);

            if (!$check['success']) {
                echo "❌ " . $check['message'];
                return;
            }


            // 2. Vérification basique des champs
            if (!isset($_POST["name"], $_POST["email"], $_POST["message"])) {
                echo "❌ Formulaire incomplet.";
                return;
            }

            $message = "Ce message vous a été envoyé via la page contact du site Portfolio.fr\n\n";
            $message .= "Nom : " . htmlspecialchars($_POST['name']) . "\n";
            $message .= "Email : " . htmlspecialchars($_POST['email']) . "\n";
            $message .= "Message : " . htmlspecialchars($_POST['message']);

            require 'vendor/autoload.php';
            $mail = new PHPMailer\PHPMailer\PHPMailer(true);

            try {
                // Config Gmail SMTP
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'rewann.tannou@gmail.com';
                $mail->Password = 'tbmr jnce jdba ursq'; // ⚠️ attention : évite de mettre ton mot de passe en clair
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                // Destinataires
                $mail->setFrom('rewann.tannou@gmail.com', 'Portfolio');
                $mail->addAddress('rewann.tannou@gmail.com');
                $mail->addReplyTo($_POST['email']);

                // Contenu
                $mail->Subject = 'Nouveau message de contact';
                $mail->Body    = $message;

                // Envoi
                $mail->send();

                require_once Chemins::VUES . 'v_messageConfirmation.inc.php';
            } catch (Exception $e) {
                echo "❌ Erreur lors de l'envoi : {$mail->ErrorInfo}";
            }
        }
    }

    //Le code est relativement simple et consiste seulement à appeler l'URL en question avec les paramètres correspondants et de décoder le json que l'on obtient en retour. On cherche ensuite à connaitre la valeur de success qui nous donne true si le captcha et valide et false sinon
    /**
     * Vérifie le reCAPTCHA Google
     * @param string $code  Code du reCAPTCHA envoyé par le formulaire
     * @param string|null $ip  IP de l'utilisateur (optionnel)
     * @return array ['success' => bool, 'message' => string]
     */
    function isValid($code, $ip = null)
    {
        if (empty($code)) {
            return ['success' => false, 'message' => 'Captcha manquant.'];
        }

        $params = [
            'secret'   => "6Lf3ENsrAAAAADhsA6bJGIF4D3wo4wLv23FyyqUX",
            'response' => $code
        ];

        if ($ip) {
            $params['remoteip'] = $ip;
        }

        $url = "https://www.google.com/recaptcha/api/siteverify?" . http_build_query($params);

        if (function_exists('curl_version')) {
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_TIMEOUT, 5);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
            $response = curl_exec($curl);
            curl_close($curl);
        } else {
            $response = file_get_contents($url);
        }

        if (empty($response)) {
            return ['success' => false, 'message' => 'Erreur lors de la vérification du captcha.'];
        }

        $json = json_decode($response, true);

        if (!isset($json['success']) || !$json['success']) {
            // Message détaillé en fonction des codes renvoyés par Google
            $errorMsg = 'Captcha invalide.';
            if (isset($json['error-codes']) && is_array($json['error-codes'])) {
                $codes = implode(', ', $json['error-codes']);
                $errorMsg .= " Codes : $codes";
            }
            return ['success' => false, 'message' => $errorMsg];
        }

        return ['success' => true, 'message' => 'Captcha validé.'];
    }
}
