<?php
use PHPMailer\PHPMailer\PHPMailer;
$msg = '';
if (array_key_exists('email', $_POST)) {
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->Port = 465;
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->Username = 'hello@americanflooringproducts.com';
    $mail->Password = '12022Afp!';
    $mail->setFrom('hello@americanflooringproducts.com', 'American Flooring');
    $mail->addAddress('erazo.luan@gmail.com', 'Receiver Name');
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'PHPMailer contact form';
        $mail->isHTML(false);
        $mail->Body = <<<EOT
            Email: {$_POST['email']}
            Name: {$_POST['name']}
            Message: {$_POST['notes']}
EOT;
        if (!$mail->send()) {
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Message sent! Thanks for contacting us.';
        }
    } else {
        $msg = 'Share it with us!';
    }
}
?>
