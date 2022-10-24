<?php
  // Connect to database
  session_start();
  include("db_connect.php");

  if (isset($_POST["import"])) {
    

    $_SESSION['id'] = $row["id"];
    $fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {
      
      $file = fopen($fileName, "r");
      
    //   while (($column = fgetcsv($file, 10000, ";")) !== FALSE) {
    //     echo $file;
    //     $sql = "INSERT into students (matricule, nom, prenoms, statut)
    //          values ('" . $column[0] . "', '" . $column[1] . "', '" . $column[2] . "', '" . $column[5] . "')";

    //     $result = mysqli_query($conn, $sql);

    // //    $sql->closeCursor();
        
    //     if (! empty($result)) {
    //       $type = "success";
    //       $message = "Les Données sont importées dans la base de données";
    //     } else {
    //       $type = "error";
    //       $message = "Problème lors de l'importation de données CSV";
    //     }
    //   }
    }
  }
  //Retourner à la page index.php
  header('Location: ./index.php');
  exit;


// 0707928540

  /*
  */
?>