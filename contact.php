<?php
/*
this php script manage the contact form, it write on a .txt file the data of the user
*/

$nom = $_POST[nom];
$mail = $_POST[mail];
$txt = $_POST[msg];
$langue = $_POST[lang];
$ip = $_SERVER['REMOTE_ADDR'];
// time zone

date_default_timezone_set('Europe/Paris');
// langue :
if($langue == "FR")
{
  $langue = "Francais";
}else if($langue == "EN")
{
  $langue = "Anglais";
}else
{
  $langue = "Error, wrong info";
}

// écriture dans un fichier
$date= date("d_m_Y");
$heure= date("H:i");
$file_name = "contact_list/".$date."_".$heure.".txt";


$file = fopen($file_name, "a+") or die ("Un problème est survenu");

//info of user
fwrite($file, "Date : ".date("d/m/Y")."\n");
fwrite($file, "Heure : ".date("H:i:s")."\n");
fwrite($file, "Ip utilisateur : ".$ip."\n");
fwrite($file, "Langue utilisateur : ".$langue."\n");
fwrite($file, "\n");
//info from user
$temp_txt = "Nom : ".$nom."\n";
fwrite($file, $temp_txt);
$temp_txt = "Mail : ".$mail."\n";
fwrite($file, $temp_txt);
$temp_txt = "Message : ".$txt."\n";
fwrite($file, $temp_txt);
fclose($file);

//mail delivery system
$recep_mail ="santosphilippe93@gmail.com";
$send_mail ="contact@transway.fr";
$subject = 'contact: '.$nom;
$content = "Date : ".date("d/m/Y")."\n"."Heure : ".date("H:i:s")."\n"."Nom : ".$nom."\n"."Mail : ".$mail."\n"."Message : ".$txt."\n";
$headers = array(
    'From' => $send_mail ,
    'Reply-To' => $mail ,
    'X-Mailer' => 'PHP/'.phpversion()
);
mail($recep_mail, $subject ,$content, $headers);

header('Location: index.html');
?>
