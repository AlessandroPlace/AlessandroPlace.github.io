<?php



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $nomeCognome = $_POST['nome'];
  $email = $_POST['email'];
  $azienda = "";
  $azienda = $_POST['azienda'];
  $nTelefono = $_POST['telefono'];
  $perCosaCiContatti = $_POST['perCosaCiContatti'];
  $doveCiHaiTrovati = $_POST['doveCiHaiTrovati'];
  $messaggio = $_POST['messaggio'];
  $date = date('Y-m-d H:i:s');



  //$to_email_address = "info@involveproductions.com";
  $to_email_address = "alessandro.piazza@involveproductions.com";
  $subject = "Nuova richiesta per Involve Group";
  $message = "ATTENZIONE: NON CLICCARE SU NESSUN LINK SOSPETTO.\n\nNome e Cognome: " . $nomeCognome . ",\nEmail: " . $email . ",\nAzienda: " . $azienda . ",\nNumero di telefono: " . $nTelefono . ",\nPer cosa ci contatta: " . $perCosaCiContatti . ",\nCome ci hai trovati: " . $doveCiHaiTrovati . ",\nMessaggio: " . $messaggio . ",";
  $headers = "From: hello@involvegroup.it\r\n";

  if (mail($to_email_address, $subject, $message, $headers)) {
    /*$sql = "INSERT INTO contattaci (nomeCognome, email, azienda, nTelefono, perCosaCiContatti, doveCiHaiTrovati, messaggio, data)
                VALUES ('". $nomeCognome ."','".$email."','".$azienda."','".$nTelefono."','".$perCosaCiContatti."','".$doveCiHaiTrovati."','".$messaggio."','".$date."')";
        //echo $sql;
        /*if ($conn->query($sql) === TRUE) {*/
    echo "Messaggio inviato correttamente.";
    header('Refresh: 5; URL=/index');
    echo "<br>Redirecting . . .";
    /*} else {
          echo "Messaggio non inviato. Riprova più tardi.";
          header('Refresh: 5; URL=/index');
          echo "<br>Redirecting . . .";
        }*/
  } else {
    echo "Messaggio non inviato. Riprova più tardi.";
    header('Refresh: 5; URL=/index');
    echo "<br>Redirecting . . .";
  }
  $conn->close();
} else {
  echo "Messaggio non inviato. Riprova più tardi.";
  header('Refresh: 5; URL=/index');
  echo "<br>Redirecting . . .";
}
?>