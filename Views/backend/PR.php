<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['Nom']) && isset($_POST['Prix']) &&
        isset($_POST['Quantité']) 
         {
        
        $Nom = $_POST['Nom'];
        $Prix = $_POST['Prix'];
        $Quantité = $_POST['Quantité'];
        
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "eventn";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            
            $Insert = "INSERT INTO produit(Nom, Prix, Quantité) values(?, ?, ?)";
            $stmt = $conn->prepare($Select);
            
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param($Nom,$Prix,$Quantité);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>