<?php
include '../Controller/materielc.php';
$materielc = new materielc();
$list = $materielc->listmateriel();
?>
<html>

<head></head>

<body>
<a href="../index.php">Back ADMIN </a>
    <center>
        <h1>List of materiel</h1>
        <h2>
            <a href="addmateriel.php">Add materiel</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>id </th>
            <th>nom</th>
            <th>impact_environmental</th>
            <th>cout</th>
         
        </tr>
        <?php
        foreach ($list as $materiel) {
        ?>
            <tr>
                <td><?= $materiel['id']; ?></td>
                <td><?= $materiel['nom']; ?></td>
                <td><?= $materiel['impact_environmental']; ?></td>
                <td><?= $materiel['cout']; ?></td>
              
                <td align="center">
                    <form method="POST" action="updatemateriel.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $materiel['id']; ?> name="id">
                    </form>
                </td>
                <td>
                    <a href="deletemateriel.php?idmateriel=<?php echo $materiel['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>