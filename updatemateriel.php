<?php

include '../Controller/materielc.php';

$error = "";

// create materiel
$materiel = null;

// create an instance of the controller
$materielc = new materielc();

if (
    isset($_POST["id"]) &&
    isset($_POST["nom"]) &&
    isset($_POST["impact_environmental"]) &&
    isset($_POST["cout"])
) {
    if (
        !empty($_POST["id"]) &&
        !empty($_POST['nom']) &&
        !empty($_POST["impact_environmental"]) &&
        !empty($_POST["cout"])
    ) {
        $materiel = new materiel(
            $_POST['id'],
            $_POST['nom'],
            $_POST['impact_environmental'],
            $_POST['cout']
        );
        $materielc->updatemateriel($materiel, $_POST["id"]);
        header('Location:listmateriel.php');
    }
}

     else
        $error = "Missing information";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>

<body>
    <button><a href="listmateriel.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['id'])) {
        $materiel = $materielc->showmateriel($_POST['id']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id">id:
                        </label>
                    </td>
                    <td><input type="text" name="id" id="id" value="<?php echo $materiel['id']; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="nom">nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" value="<?php echo $materiel['nom']; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="impact_environmental">impact_environmental:
                        </label>
                    </td>
                    <td><input type="text" name="impact_environmental" id="impact_environmental" value="<?php echo $materiel['impact_environmental']; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="cout">cout:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="cout" value="<?php echo $materiel['cout']; ?>" id="cout">
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Update">
                    </td>
                    <td>
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>