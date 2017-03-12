<!--<?php
$dbc = mysqli_connect("localhost", "id1008977_haykhaen", "357753h","id1008977_trump_db");
if ($dbc==false) {
	echo "Տեխնիկական խնդիրներ";
	echo mysqli_connect_error();
	exit();
}
?>
  -->
<!DOCTYPE html>
<html>
<head>
	<link href="styles.css" rel="stylesheet" media="all and (max-width: 1024px)">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../style/style.css">
  <title>Trump hotel</title>
</head>
<body>
<div class="navbar">
  <div class="menu"><div class="menu1"><p class="text"><a href="../index.php" class="notdecoratin">Home</a></p></div></div>
  <div class="menu"><div class="menu12"><p class="text"><a href="about.php" class="notdecoratin">About</a></p></div></div>
  <div class="menu"><div class="menu1"><p class="text"><a href="contact.php" class="notdecoratin">contacts</a></p></div></div>
</div><br><br><br>
<?php
$sql = "SELECT * FROM `trump` WHERE item_id='1'";
$result = $dbc->query($sql);
while($row = $result->fetch_assoc()) {
echo $row['text'];
    
}
?>
<?php
$sql = "SELECT * FROM `trump` WHERE item_id='2'";
$result = $dbc->query($sql);
while($row = $result->fetch_assoc()) {
echo $row['text'];
    
}
?>
<br><br>
<img src="../images/Снимок.JPG">
</div><br>
<div  align="center">
<iframe width="700" height="400" src="https://www.youtube.com/embed/4Up5BFQH31U" frameborder="0" allowfullscreen></iframe>
</div>
<div>
<p align="left">Powered by haykhaen</p>
</div>
</body>
</html>