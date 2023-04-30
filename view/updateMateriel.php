<?php

include '../Controller/MaterielC.php';

$error = "";

// create materiel
$materiel = null;

// create an instance of the controller
$materielC = new materielC();
if (
    isset($_POST["idmateriel"]) &&
    isset($_POST["nom"]) &&
    isset($_POST["impact_environmental"]) &&
    isset($_POST["cout"])
) {
    if (
        !empty($_POST["idmateriel"]) &&
        !empty($_POST['nom']) &&
        !empty($_POST["impact_environmental"]) &&
        !empty($_POST["cout"])
    ) {
        $materiel = new materiel(
            $_POST['idmateriel'],
            $_POST['nom'],
            $_POST['impact_environmental'],
            $_POST['cout']
        );
        $materielC->updatemateriel($materiel, $_POST["idmateriel"]);
        header('Location:../back/html/table-basic.php');
    } else
        $error = "Missing information";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../backc.css">
    <title>User Display</title>
</head>

<body>
    <button><a href="../back/html/table-basic.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idmateriel'])) {
        $materiel = $materielC->showmateriel($_POST['idmateriel']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="idmateriel">Id materiel:
                        </label>
                    </td>
                    <td><input type="text" name="idmateriel" id="idmateriel" value="<?php echo $materiel['idmateriel']; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="nom">Name:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" value="<?php echo $materiel['nom']; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="impact_environmental">Impact_environmental:
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
<html lang="en">
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ECOPLUS</title>
    <div class="left-sidebar">
		<div class="logo">
			<img src="../assets/images/ecoplus.png" alt="ecoplus">
		</div>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="backc.css">
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
			font-size: 16px;
			line-height: 1.5;
			background-color: #f0f0f0;
		}
		.left-sidebar {
			position: fixed;
			top: 0;
			left: 0;
			width: 200px;
			height: 100%;
			background-color: #333;
			color: #fff;
			padding: 20px;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: space-between;
		}

		.logo {
			display: block;
			margin-bottom: 20px;
		}

		.logo img {
			width: 100px;
		}

		.left-sidebar h1 {
			margin: 0;
			font-size: 24px;
			font-weight: bold;
			text-align: center;
			margin-bottom: 20px;
		}

		.left-sidebar ul {
			list-style: none;
			padding: 0;
			margin: 0;
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		.left-sidebar li {
			margin-bottom: 10px;
		}

		.left-sidebar a {
			display: flex;
			align-items: center;
			color: #fff;
			text-decoration: none;
			padding: 10px;
			transition: background-color 0.3s;
		}

		.left-sidebar a:hover {
			background-color: #666;
		}

		.left-sidebar a i {
			margin-right: 10px;
		}

		.main-content {
			margin-left: 200px;
			padding: 20px;
			background-color: #fff;
			min-height: 100vh;
		}
	</style>
</head>
<body>
	<div class="left-sidebar">
		<div class="logo">
			<img src="../assets/images/ecoplus.png" alt="ecoplus">
		</div>
	
		<ul>
			<li><a href="#"><i class="fas fa-user"></i> dashboard</a></li>
			<li><a href="#"><i class="fas fa-table"></i> profile</a></li>
			<li><a href="#"><i class="fas fa-chart-bar"></i> table</a></li>
			<li><a href="#"><i class="fas fa-cog"></i> icon</a></li>
			<li><a href="#"><i class="fas fa-question-circle"></i> blank</a></li>
		</ul>
	</div>
	
</body>
</html>