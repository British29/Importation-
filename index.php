<!-- <?php
if (!empty($_FILES['file'])) {
    // var_dump($_FILES['file']);
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=souclou;charset=utf8', 'root', '', [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec('delete from classroom');
    } catch (Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
    if (isset($_FILES["file"]["type"]) != "application/vnd.ms-excel") {
        die("Ce n'est pas un fichier de type .csv");
    } elseif (is_uploaded_file($_FILES['file']['tmp_name'])) {
        $req = $pdo->prepare('INSERT INTO classroom ( nom, affecte, nonaffecte, pec, effectif) VALUES(?, ?, ?, ?, ?)');
        $file = new SplFileObject($_FILES['file']['tmp_name']);
        $file->setFlags(SplFileObject::READ_CSV | SplFileObject::SKIP_EMPTY);
        foreach ($file as $row) {
            $req->execute([$row[0], $row[1], $row[2], $row[3], $row[4]]);
        }

        $req->closeCursor();
    var_dump($file);
    } else {
        echo 'epic fail<br />';
    }
}
?>



<form enctype="multipart/form-data" action="" method="POST">
    <div class="form-group">
        <input name="file" type="file" />
        <p><input type="submit" value="Envoyez le fichier"/></p>
    </div>
</form> -->