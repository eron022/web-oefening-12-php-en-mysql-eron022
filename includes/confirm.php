<div class="jumbotron">
    <h1 class="display-4">Klaar om deel te nemen? Shoot!</h1>
</div>
<div class="row">
    <div class="col-md-12 invoer">
        <?php 
            echo '<p>Naam: '.$_POST["naam"].'</p>';
            echo '<p>Straat: '.$_POST["straat"].'</p>';
            echo '<p>Postcode: '.$_POST["postcode"].'</p>';
            echo '<p>Gemeente: '.$_POST["gemeente"].'</p>'; 
            echo '<p>Telefoonnummer: '.$_POST["telefoon"].'</p>'; 
            echo '<p>E-mailadres: '.$_POST["email"].'</p>'; 
            echo '<p>Geboortedatum: '.$_POST["geboortedatum"].'</p>'; 
            echo '<p>Titel foto: '.$_POST["fotoTitel"].'</p>'; 
            echo '<p>Camera: '.$_POST["camera"].'</p>'; 
            echo '<p>Lens: '.$_POST["lens"].'</p>'; 
            echo '<p>Beschrijving foto: '.$_POST["beschrijving"].'</p>'; 
        ?>
    </div>
</div>

<?php
$to = "test@localhost"; 
$subject = "Inzending formulier";  

$bericht = 'Naam: '.$_POST['naam'].'
Straat: '.$_POST['straat'].'
Gemeente: '.$_POST['gemeente'].' 
Postcode: '.$_POST['postcode'].'
Telefoonnummer: '.$_POST['telefoon'].'
E-mail adres: '.$_POST['email'].'
Geboortedatum: '.$_POST['geboortedatum'].'

Lens: '.$_POST['lens'].'
Commentaar: '.$_POST['beschrijving'];

$headers = "From: Test User <test@localhost>";

$message = $bericht;

if(mail($to, $subject, $message, $headers)) {
    echo "E-mail verzonden";
} else{
    echo "E-mail niet verzonden";
}


function saveToDB(){
    $servername = "localhost";
    $username ="test";
    $password = "Test1234";
    $dbname = "gagandeep";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO wedstrijd (Naam, Straat, Postcode, Gemeente, Telefoonnummer, `E-mail adres`, Geboortedatum) 
        VALUES ('" . $_POST["naam"] . "','" . $_POST["straat"] . "','" . $_POST["postcode"] . "','" . $_POST["gemeente"] . "','" . $_POST["telefoon"] . "','" . $_POST["email"] . "','" . $_POST["geboortedatum"] . "')";

echo $sql;
    if ($conn->query($sql) === TRUE){
    echo "New record created succesfully";
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    
    }

    $conn->close();


}
?>