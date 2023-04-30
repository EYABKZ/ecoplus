<?php
include '../Controller/ReservationC.php';
$reservationC = new reservationC();
$listreservation = $reservationC->listreservation();
?>
<html lang="en">
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="../backc.css"></head>

<body>
<a href="../back/html/table-basic.php">Back ADMIN </a>
    <center>
        <h1>LIST DES RESERVATION</h1>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th></th>
            <th>quantité reservé</th>
            <th>id du materiel reservé</th>
           
    
		<div class="image">
			
		</div>

        </tr>
        <?php
        foreach ($list as $reservation)
         {
        ?>
            <tr>
                <td><?= $reservation['quantité']; ?></td>
                <td><?= $reservation['idmateriel']; ?></td>
    
                <td align="center">
                <a href="showreservation.php?id_reservation=<?php echo $reservation['id_reservation']; ?>"></a>
                </td>
            </tr>
        <?php
        }
        ?>
       
 
    </table>
    
</body>
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
        table {
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 2em;
}

/* Style des cellules du tableau */
td {
  padding: 0.8em;
  border: 1px solid #ddd;
}

/* Style des en-têtes de colonnes */
th {
  background-color: #ddd;
  color: #333;
  font-weight: bold;
  padding: 0.8em;
  border: 1px solid #aaa;
  text-align: left;
}

/* Style des lignes impaires du tableau */
tr:nth-child(odd) {
  background-color: #f5f5f5;
}

/* Style des lignes au survol */
tr:hover {
  background-color: #ebebeb;
}
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