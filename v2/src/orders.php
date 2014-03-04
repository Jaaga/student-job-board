<?php
try
{
$pdo = new PDO('mysql:host=localhost;dbname=sjb', 'root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
$error = 'Unable to connect to the database server.';
exit();
}?>

<!Doctype HTML>
<html>
<head>
	<title>Orders.php</title>
	</head>
	<body>
		<h1>
		<?php	try{
				$sql='SELECT * FROM user WHERE user_id=1';
				$result=$pdo->query($sql);
				while ($row = $result->fetch())
					{
						$name= $row['name'];
					}
					echo $name;
			}
			catch (PDOException $e)
			{ user_id = $userid'
				$error = 'Error fetching data ' . $e->getMessage();
				exit();
			}
		 ?></h1>
		 <br><br><br>
		 <table>
		 		<tr><td><?php try{
				$sql='SELECT * FROM orders WHERE user_id=1';
				$result=$pdo->query($sql);
				
				while ($row = $result->fetch())
					{
						?><tr><td><?php $orderNo= $row['order_id']; echo $orderNo; ?></td> &nbsp; <td><a href="order.php"><?php
						$detail= $row['details'];
						echo $detail;
						?></a></td> &nbsp; <td><?php $status=$row['status']; echo $status; ?></td></tr><?php

					}
					
			}
			catch (PDOException $e)
			{
				$error = 'Error fetching data ' . $e->getMessage();
				exit();
			} ?>
		 		<tr><td></td></tr>
		 </table>
	</body>
</html>
