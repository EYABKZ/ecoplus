<?php

set_time_limit(300);
include '../Controller/materielc.php';
$error = "";

// create materiel
$materiel = null;

// create an instance of the controller
$materielc = new materielc();

if (
    isset($_POST["nom"]) &&
    isset($_POST["impact_environmental"]) &&
    isset($_POST["cout"])
) {
    if (
        !empty($_POST['nom']) &&
        !empty($_POST["impact_environmental"]) &&
        !empty($_POST["cout"])
    ) {
        $materiel = new materiel(
            null,
            $_POST['nom'],
            $_POST['impact_environmental'],
            $_POST['cout']
        );
        $materielc->ajoutermateriel($materiel);
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
    <a href="Listmateriel.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table border="1" align="center">

            <tr>
                <td>
                    <label for="nom"> Nom:
                    </label>
                </td>
                <td><input type="text" name="nom" id="nom"></td>
            </tr>
            <tr>
                <td>
                    <label for="impact_environmental">impact_environmental:
                    </label>
                </td>
                <td><input type="text" name="impact_environmental" id="impact_environmental"></td>
            </tr>
            <tr>
                <td>
                    <label for="cout">cout:
                    </label>
                </td>
                <td>
                    <input type="text" name="cout" id="cout">
                </td>
            </tr>
           
            </tr>
            <tr align="center">
                <td>
                    <input type="submit" value="Save">
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>