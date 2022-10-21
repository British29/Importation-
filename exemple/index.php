<!DOCTYPE html>
<html>

<head>
  <title>Comment importer un fichier CSV dans MySQL avec PHP</title>
</head>

<body>

    <form enctype="multipart/form-data" action="import_csv.php" method="post">
        <div class="input-row">
            <label class="col-md-4 control-label">Choisir un fichier CSV</label>
            <input type="file" name="file" id="file" accept=".csv">
            <br />
            <br />
            <button type="submit" id="submit" name="import" class="btn-submit">Import</button>
            <br />
        </div>
    </form>

    <?php
      // Connect to database
      include("db_connect.php");

            $sql = "SELECT * FROM classroom";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
    ?>
        <table>
            <thead>
                <tr>
                    <th>IDENTIFIANT</th>
                    <th>CLASSE</th>
                    <th>AFFECTER</th>
                    <th>NON AFFECTER</th>
                    <th>PEC</th>
                    <th>TOTAL EFFECTIF</th>
                </tr>
            </thead>
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <tbody>
                    <tr>
                        <td> <?php  echo $row['id']; ?> </td>
                        <td> <?php  echo $row['nom']; ?> </td>
                        <td> <?php  echo $row['affecte']; ?> </td>
                        <td> <?php  echo $row['nonaffecte']; ?> </td>
                        <td> <?php  echo $row['pec']; ?> </td>
                        <td> <?php  echo $row['effectif']; ?> </td>
                    </tr>
            <?php } ?>
                </tbody>
        </table>
        <?php } ?>


        <style>
table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th {
  height: 70px;
}
</style>

</body>
</html>