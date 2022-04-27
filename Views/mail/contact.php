<?php
if(empty($_POST['id']) || empty($_POST['date']) ||  empty($_POST['objet']) ||!filter_var($_POST['description'], FILTER_VALIDATE_description)) {
  http_response_code(500);
  exit();
}

$id = strip_tags(htmlspecialchars($_POST['id']));
$date = strip_tags(htmlspecialchars($_POST['date']));
$m_objet = strip_tags(htmlspecialchars($_POST['objet']));
$description = strip_tags(htmlspecialchars($_POST['description']));



$to = "info@example.com"; // Change this email to your //
$objet = "$m_sobjet:  $id";
$body = " .\n\n"."Here are the details:\n\id: $id\n\n\ndescription: $description\n\nobjet: $m_objet\n\date: $message";
$header = "From: $description";
$header .= "Reply-To: $description";	

if(!mail($to, $objet, $body, $header))
  http_response_code(500);
?>
