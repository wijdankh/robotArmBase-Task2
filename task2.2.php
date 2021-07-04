<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  background-color:#CCFFFF;
   text-shadow: 5px 5px 10px #FFFF00;
 font-family: "Sofia", sans-serif;
  text-align: center;
  font-size: 300%;
  
}
</style>
</head>
<html>

<?php
ini_set ('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);


 
if (isset($_POST["forward"])) {
	print '<h1><br><br>move to forward </h1>';
}elseif (isset($_POST["left"])){
	print '<h1>move to left </h1>';
}elseif(isset($_POST["stop1"])){
	print '<h1>stop </h1>';
}elseif(isset($_POST["right"])){
	print '<h1>move to right </h1>';
}elseif(isset($_POST["backward"])){
	print '<h1>move to backward </h1>';
}
	
?>
	
	
<?php
 include 'dbconnection.php';
 if(isset($_POST['forward'])) {
    $sql = "INSERT INTO movement (_forward) VALUES (1)";
	$stmt = $conn-> prepare($sql);
	$stmt-> execute();
    //$result = mysqli_query($conn, $sql);

}else if(isset($_POST['left'])) {
    $sql = "INSERT INTO movement (_left) VALUES (1)";
	$stmt = $conn-> prepare($sql);
	$stmt-> execute();
    //$result = mysqli_query($conn, $sql);
}else if(isset($_POST['stop1'])) {
    $sql = "INSERT INTO movement (_stop) VALUES (1)";
	$stmt = $conn-> prepare($sql);
	$stmt-> execute();
    //$result = mysqli_query($conn, $sql);
}else if(isset($_POST['right'])) {
    $sql = "INSERT INTO movement (_right) VALUES (1)";
	$stmt = $conn-> prepare($sql);
	$stmt-> execute();
    //$result = mysqli_query($conn, $sql);
}else if(isset($_POST['backward'])) {
    $sql = "INSERT INTO movement (_backward) VALUES (1)";
	$stmt = $conn-> prepare($sql);
	$stmt-> execute();
    //$result = mysqli_query($conn, $sql);
}

?>