<?php
require("src/PHPMailer.php");
require("src/SMTP.php");
require("src/Exception.php");
echo 'PHP version: ' . phpversion();
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP();
$mail->CharSet="UTF-8";
$mail->Host = "pro2.mail.ovh.net"; /* Zależne od hostingu poczty*/
$mail->Port = 587 ; /* Zależne od hostingu poczty, czasem 587 */
$mail->SMTPSecure = 'starttls'; /* Jeżeli ma być aktywne szyfrowanie SSL */
$mail->SMTPAuth = true;
//$mail->IsHTML(true);
$mail->SMTPDebug  = 2;
$mail->Username = "biuro@fastcars24.com"; /* login do skrzynki email często adres*/
$mail->Password = "asddsa12#"; /* Hasło do poczty */
$mail->setFrom("biuro@fastcars24.com", "fastcars24"); /* adres e-mail i nazwa nadawcy */
//$mail->setFrom('undergroundpicks77@gmail.com', 'Podziemnetypy.com'); /* adres e-mail i nazwa nadawcy */
print_r($_POST);
$mail->AddBCC("biuro@fastcars24.com");
$mail->Subject = "Wiadomość od ".$_POST['imie'];/* Tytuł wiadomości */;
$mail->Body = $_POST['content']."\n\n Wiadomość od ".$_POST['email'];
$mail->Send();
$mail->clearAllRecipients();
header("location: /kontakt");
?>
