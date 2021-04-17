<?php
require("src/PHPMailer.php");
require("src/SMTP.php");
require("src/Exception.php");

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP();
$mail->CharSet="UTF-8";
$mail->Host = "ssl0.ovh.net"; /* Zależne od hostingu poczty*/
$mail->Timeout       =   3; // set the timeout (seconds)
$mail->Port = 465 ; /* Zależne od hostingu poczty, czasem 587 */
$mail->SMTPSecure = 'ssl'; /* Jeżeli ma być aktywne szyfrowanie SSL */
$mail->SMTPAuth = true;
$mail->IsHTML(true);
$mail->SMTPDebug  = 4;
$mail->Username = "biuro@fastcars24.com"; /* login do skrzynki email często adres*/
$mail->Password = "asddsa12#"; /* Hasło do poczty */
$mail->setFrom("biuro@fastcars24.com", "fastcars24.com"); /* adres e-mail i nazwa nadawcy */
//$mail->setFrom('undergroundpicks77@gmail.com', 'Podziemnetypy.com'); /* adres e-mail i nazwa nadawcy */

$mail->AddBCC("csgoforestt@gmail.com");
$mail->Subject = "Nowa płatna subskrypcja!"/* Tytuł wiadomości */;
$mail->Body = "Nowa płatna subskrypcja na twoim profilu, gratulacje! Aby dowiedzieć się więcej wejdź na https://podziemnetypy.com/market.php";
$mail->Send();
$mail->clearAllRecipients();

?>
