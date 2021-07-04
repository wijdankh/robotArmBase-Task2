<html>
<head>
<title>task2(Robot arm & base)</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<style>


h1 {
  color: white;
   text-shadow: 2px 2px 5px Gray;
  font-family: Lucida Handwriting;
  text-align: center;
  font-size: 300%;

  
  
}
label {
  color: white;
  font-weight: bold;
  font-family: Lucida Handwriting;
  text-align: center;
  margin: 10px;
  font-size: 150%;
  
}
                                             /*                      background                  */
body {
  background-image:linear-gradient(125deg,#2c3e50,#27ae60,#2980b9,#ffee009c,#8e44ad);
  background-size:400% 400% ;
  animation: bganimation 10s infinite
  
 
}
@keyframes bganimation 
{ 0%
{
background-position:0% 50%;
}
50%
{
background-position:100% 50%;
}
100%
{
background-position:0% 50%;
}
}
form {
 text-align: center;
 
}
input[type=button] , input[type=submit]{
    padding: 6px;
	width: 30%;
    font-family: Lucida Handwriting;
	font-weight: bold;
	font-size: 100%;
	background-color: white;
	cursor: pointer;
	
}

input[type=button]:hover , input[type=submit]:hover{
background-color: gray;
  color: white;
}
button{
	 padding: 6px;
	width: 20%;
    font-family: Lucida Handwriting;
	font-weight: bold;
	font-size: 90%;
	background-color: lightgray;
	cursor: pointer;
	border: 2px solid #33FFFF;
	border-radius:10px;
	
	
}button:hover{background-color: #33FFFF;
  color: white;}
 
</style>
                                          
</head>
<body>
                                                                        




<br><h1> <strong>control panel</strong> </h1><br>
<br><br>

                                                                            

 <form action=""  method = "POST">
 
 <label for="motor"> motor 1 : </label> <label > 0° <input type="range" id="motor" name="m1" min="0" max="180"> 180°</label>
        <br><label > motor 2 : </label> <label > 0° <input type="range" id="motor" name="m2" min="0" max="180"> 180°</label>
        <br><label > motor 3 : </label> <label > 0° <input type="range" id="motor" name="m3" min="0" max="180"> 180°</label>
        <br><label > motor 4 : </label> <label > 0° <input type="range" id="motor" name="m4" min="0" max="180"> 180°</label>
        <br><label > motor 5 : </label> <label > 0° <input type="range" id="motor" name="m5" min="0" max="180"> 180°</label>
        <br><label > motor 6 : </label> <label > 0° <input type="range" id="motor" name="m6" min="0" max="180"> 180°</label>
 
<br><br> <br> <input type="submit"  name = save onclick="alert('saved')" value="save " >
<br><br> <input type="submit" name = run value="run" > <input type="submit" name = stop value="stop"  > <br><br>
<hr style="height:2px;border-width:0;color:#33FFFF;background-color:#33FFFF">
</form>



                                                                         
<br>
<form action="task2.2.php" method="post">
<div id="containar2">
<button type="submit" name="forward" id= "b1" value="forward"  > <span class ="button_ _ icon"> <ion-icon name="arrow-round-up"></ion-icon> </span>
</button>
<br><br><button type="submit" name="left" id= "b2" value=" left  ">  <span class ="button_ _ icon"> <ion-icon name="arrow-back"></ion-icon> </span> </button> <button type="submit" name="stop1" id= "b3" value=" stop " > <span class ="button_ _ icon"> <ion-icon name="square"></ion-icon> </span> </button> <button type="submit" name="right" id= "b4" value="  right "> <span class ="button_ _ icon"> <ion-icon name="arrow-forward"></ion-icon> </span> </button>
<br><br><button type="submit" name="backward" id= "b5" value="backward "><span class ="button_ _ icon"> <ion-icon name="arrow-down"></ion-icon> </span> </button>
</div>


</form>

<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>
<?php

 include 'dbconnection.php';
if(isset($_POST['save'])){
	$sql="INSERT INTO armcontrol (arm1, arm2, arm3, arm4, arm5, arm6) VALUES (:m1, :m2, :m3, :m4, :m5, :m6)";
$stmt = $conn-> prepare($sql);
	$stmt-> execute(array(
':m1' => $_POST['m1'],
':m2' => $_POST['m2'],
':m3' => $_POST['m3'],
':m4' => $_POST['m4'],
':m5' => $_POST['m5'],
':m6' => $_POST['m6'],
));

}else if(isset($_POST['run'])) {
    $sql = "INSERT INTO on_off (_on) VALUES (1)";
	$stmt = $conn-> prepare($sql);
	$stmt-> execute();
    //$result = mysqli_query($conn, $sql);

}else if(isset($_POST['stop'])) {
    $sql = "INSERT INTO on_off (_off) VALUES (1)";
	$stmt = $conn-> prepare($sql);
	$stmt-> execute();
    //$result = mysqli_query($conn, $sql);
}
?>


