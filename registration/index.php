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
            <?php
      include("db_connect.php");

            $sql = "SELECT * FROM classrooms";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
    ?>


            <select>
            <?php while ($row = mysqli_fetch_array($result)) { ?>
              <option> <?php  echo $row['name']; ?> </option>
              <?php } ?>

            </select>
            <?php } ?>

            <br />
            <button type="submit" id="submit" name="import" class="btn-submit">Import</button>
            <br />
        </div>
        <br />
        <br />
    </form>

    <?php
      include("db_connect.php");

            $sql = "SELECT * FROM students";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
    ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>MATRICULE</th>
                    <th>NOM</th>
                    <th>PRENOMS</th>
                    <!-- <th>STATUT</th> -->
                </tr>
            </thead>
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <tbody>
                    <tr>
                        <td> <?php  echo $row['id']; ?> </td>
                        <td> <?php  echo $row['matricule']; ?> </td>
                        <td> <?php  echo $row['nom']; ?> </td>
                        <td> <?php  echo $row['prenoms']; ?> </td>
                        <!-- <td> <?php  echo $row['statut']; ?> </td> -->
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
  width: 80%;
}

th {
  height: 70px;
}
</style>

</body>
</html>