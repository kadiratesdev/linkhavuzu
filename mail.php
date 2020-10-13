<?php
include 'class.phpmailer.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->Username = '@gmail.com';
$mail->Password = '';
$mail->SetFrom($mail->Username, 'Link Havuzu');
$mail->AddAddress('@', 'Kadir');
$mail->CharSet = 'UTF-8';
$mail->Subject = 'LinkHavuzu.Com Mail Aktivasyonu';
$mail->MsgHTML('<center><h2>Aramıza Hoşgeldin</h2></center><br/><h4>Hizmetlerimizden Faydalanabilmek için Mail Aktivasyonu Yapman Gerekmekte.</h4><br/> Hesabını Aktive Etmek İçin Tıkla : <a href="http://www.linkhavuzu.com/dogrula.php?email=kadirates6@gmail.com&kod=21321321">http://www.linkhavuzu.com/dogrula.php?email=kadirates6@gmail.com&kod=21321321</a>');
if($mail->Send()) {
    echo 'Mail g�nderildi!';
} else {
    echo 'Mail g�nderilirken bir hata olu�tu: ' . $mail->ErrorInfo;
}
?>
