<?php
class ControleurMail
{

    public static function sendMail()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupération des données
            $name = htmlspecialchars($_POST["name"]);
            $email = htmlspecialchars($_POST["email"]);
            $message = htmlspecialchars($_POST["message"]);

            // Ton adresse mail
            $to = "rewann.tannou@epitech.eu";
            $subject = "Nouveau message de $name";
            $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";
            $headers = "From: $email";

            // Envoi
            if (mail($to, $subject, $body, $headers)) {
                echo "Message envoyé avec succès 🎉";
            } else {
                echo "Erreur lors de l'envoi ❌";
            }
        }
    }

    // public static function sendMail2(){
    //     $result = GestionMailer::sendMail(
    //     'Demande de contact en ligne. Alex Martin vous a écrit',
    //     '', // email du destinataire \ \
    //         [
    //         'senderName' => $data['senderName'],
    //         'recipientName' => $data['recipientName'],
    //         'subject' => 'Demande de contact en ligne. ' . $data['clientFirstName'] . ' ' . $data['clientLastName'] . ' vous a écrit',
    //         'html' => GestionMailer::getTemplate('contact_request_email', $data)/
    //         'text' => 'Hello - Ceci est un test Mailtrap'/
    //         ]
    //     );
    // }

}
