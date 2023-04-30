<?php
include '../Controller/MaterielC.php';
$materielC = new materielC();
$list = $materielC->listmateriel();
?>
<html>

<head><link rel="stylesheet" href="../backc.css"></head>

<body>
<a href="../back/html/table-basic.php">Back ADMIN </a>

    <center>
        <h1>SUPPRESSION DES MATERIAUX</h1>
    </center>
    <table border="1" align="center" width="50%">
        <tr>
            <th>Id materiel</th>
            <th>Name</th>
            <th>impact_environmental</th>
            <th>cout</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $materiel) {
        ?>
            <tr>
                <td><?= $materiel['idmateriel']; ?></td>
                <td><?= $materiel['nom']; ?></td>
                <td><?= $materiel['impact_environmental']; ?></td>
                <td><?= $materiel['cout']; ?></td>
                <td align="center">
                <a href="deleteMateriel.php?idmateriel=<?php echo $materiel['idmateriel']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
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
			<img src="../view/ecoplus.png" alt="ecoplus">
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
			<img src="../view/ecoplus.png" alt="ecoplus">
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