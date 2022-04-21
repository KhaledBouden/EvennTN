<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>fff</title>

<!-- CSS -->
<style>
.myForm {
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
font-size: 0.8em;
width: 20em;
padding: 1em;
border: 1px solid #ccc;
}

.myForm * {
box-sizing: border-box;
}

.myForm fieldset {
border: none;
padding: 0;
}

.myForm legend,
.myForm label {
padding: 0;
font-weight: bold;
}

.myForm label.choice {
font-size: 0.9em;
font-weight: normal;
}

.myForm input[type="text"],
.myForm input[type="tel"],
.myForm input[type="email"],
.myForm input[type="datetime-local"],
.myForm select,
.myForm textarea {
display: block;
width: 100%;
border: 1px solid #ccc;
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
font-size: 0.9em;
padding: 0.3em;
}

.myForm textarea {
height: 100px;
}

.myForm input[type="submit"] {
padding: 1em;
border-radius: 0.5em;
background: #eee;
border: none;
font-weight: bold;
margin-top: 1em;
}
.myForm input[type="reset"] {
padding: 1em;
border-radius: 0.5em;
background: #eee;
border: none;
font-weight: bold;
margin-top: 1em;
}

.myForm input[type="submit"]:hover {
background: #ccc;
cursor: pointer;
}
.myForm input[type="reset"]:hover {
background: #ccc;
cursor: pointer;
}
</style>

</head>
<body>
<center>
<form class="myForm" method="get"  action="localhost/base.php">

<p>
<label>Nom</label>
<input type="text" name="nom" id="nom" required>
</p>

<p>
<label>prenom</label>
<input type="text" name="prenom" id="prenom" required>
</p>

<p>
<label>email</label>
<input type="email" name="mail" id="mail" required>
</p>

<p>
<label>telephone</label>
<input type="tel" name="tell" id="tell">

</p>

<p>
<label>adresse</label>
<textarea name="adresse" id="adresse" maxlength="500"></textarea>

</p>




<p>
<label>code postal</label>
<input type="text" name="cpost" id="cpost" required list="codepost">


<datalist id="codepost">
<option value="1">
<option value="2">
<option value="3">
</datalist>
</p>



<input type="submit" name="envoyer" value="Envoyer"> <input type="reset" name="annuler" value="annuler">

</form>
</center>
</body>
</html>
<?php



$personne = array('noma' =>'' ,'prenoma' =>'' ,'emaila' =>'' ,'telephonea' =>'' ,'adressea' =>'' ,'codeposta' => '' );


$personne['noma']= $_GET['nom'];
$personne['prenoma']= $_GET['prenom'];
$personne['emaila']= $_GET['mail'];
$personne['telephonea']= $_GET['tell'];
$personne['adressea']= $_GET['adresse'];
$personne['codeposta']= $_GET['cpost'];

print_r($personne);




 ?>