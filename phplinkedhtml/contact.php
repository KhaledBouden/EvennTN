<?php
if(isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['email'])&&
isset($_POST['tel'])&&isset($_POST['Adresse'])&&isset($_POST['codepostal']))
{
if(!empty($_POST['nom'])&&!empty($_POST['prenom'])&&!empty($_POST['email'])&&
!empty($_POST['Adresse'])&&!empty($_POST['codepostal'])&& !empty($_POST['tel']))
{
$nom= $_POST['nom'];
$prenom= $_POST['prenom'];
$email= $_POST['email'];
$tel= $_POST['tel'];
$Adresse= $_POST['Adresse'];
$codepostal= $_POST['codepostal'];
?>
      <table border=2>
      <tr>
          <th>Nom</th>
          <th>Prenom</th>
          <th>email</th>
          <th>tel</th>
          <th>Adresse</th>
          <th>codepostal </th>
      </tr>
      <tr>
          
          <th><?php echo $nom;?></th>
          <th><?php echo $prenom; ?></th>
          <th><?php echo $email; ?></th>
          <th><?php echo $tel; ?></th>
          <th><?php echo $Adresse; ?></th>
          <th><?php echo $codepostal; ?></th>
      </tr>

    </table>
    <?php
}}
?>