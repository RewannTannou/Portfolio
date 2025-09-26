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
            if (isset($_POST["message"])) {
                $message = "Ce message vous a été envoyé via la page contact du site Portfolio.fr\n\n";
                $message .= "Nom : " . htmlspecialchars($_POST['name']) . "\n";
                $message .= "Email : " . htmlspecialchars($_POST['email']) . "\n";
                $message .= "Message : " . htmlspecialchars($_POST['message']);
                require 'vendor/autoload.php';
                $mail = new PHPMailer\PHPMailer\PHPMailer(true);
                try {
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'rewann.tannou@gmail.com';
                    $mail->Password = 'tbmr jnce jdba ursq';
                    $mail->SMTPSecure = 'tls';
                    $mail->Port = 587;

                    $mail->setFrom('rewann.tannou@gmail.com', 'Portfolio');
                    $mail->addAddress('rewann.tannou@gmail.com');
                    $mail->addReplyTo($_POST['email']);

                    $mail->Subject = 'Nouveau message de contact';
                    $mail->Body    = $message;
                    $mail->send();
                    require_once Chemins::VUES . 'v_messageConfirmation.inc.php';
                } catch (Exception $e) {
                    echo "Erreur lors de l'envoi : {$mail->ErrorInfo}";
                }
            }
        }
    }
}
