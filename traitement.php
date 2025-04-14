<?php 
// Importation des classes PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

session_start();
@$name    = $_POST["name"];
@$email   = $_POST["email"];
@$contact = $_POST["number"];
@$text    = $_POST["text"];
@$textera = $_POST["textera"];
@$valider = $_POST["valider"];
$erreur   = "";

if (isset($valider)) {
    if (empty($name))    $erreur= "<li> Mila fenoina lay name azafady!</li>";
    if (empty($email))   $erreur.= "<li> Mila fenoina lay email azafady!</li>";
    if (empty($contact)) $erreur.= "<li> Mila fenoina lay number azafady!</li>";
    if (empty($text))    $erreur.= "<li> Mila fenoina lay text azafady!</li>";
    if (empty($textera)) $erreur.= "<li> Mila fenoina lay textera azafady!</li>";

    if (!empty($erreur)) {
        $_SESSION["autoriser"] = "non";
        $_SESSION["erreur"] = $erreur;
    } else {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'ednesstelli1313@gmail.com';
            $mail->Password   = 'lvql fsgw ejsr ervz'; // mot de passe d'application Gmail
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            $mail->setFrom('ednesstelli1313@gmail.com', 'Telli');
            $mail->addAddress('ednesstelli1313@gmail.com');

            $mail->isHTML(true);
            $mail->Subject = 'Message depuis le formulaire';
            $mail->Body    = "
                <h3>Message depuis le site</h3>
                <p><strong>Nom:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Numéro:</strong> $contact</p>
                <p><strong>Sujet:</strong> $text</p>
                <p><strong>Message:</strong> $textera</p>
            ";
            $mail->AltBody = "Nom: $name\nEmail: $email\nNuméro: $contact\nSujet: $text\nMessage: $textera";

            if ($mail->send()) {
                $_SESSION["autoriser"] = "oui";
                header("Location: session.php");
                exit();
            } else {
                $_SESSION["autoriser"] = "non";
                $_SESSION["erreur"] = "Échec de l'envoi de l'email.";
            }

        } catch (Exception $e) {
            $_SESSION["autoriser"] = "non";
            $_SESSION["erreur"] = "Erreur PHPMailer: {$mail->ErrorInfo}";
        }
    }
}
?>