v<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Michael Joseph James </title>
  <meta name="Michael Joseph James">
  <link rel="stylesheet" href="./css/main.css">


</head>

<body>
 
    <ul id="topnav">
      <li ><a class="navBar" href="index.html">Home</a></li>
      <li><a class="navBar" href="projects.html">Projects</a></li>
      <li><a class="navBar"href="contact.html">Contacts</a></li>
      </ul>
    </body> 
    </br>
    <H1>Welcome to Michael Joseph James' Portfolio</H1>
    <div id="main"><h2>Revisions to Pen and Paper RPG maker</h2><p>Before we made a pen and paper rpg character generator. Each time we created a charector we only created it in the browser. Once our browser was closed the charector did not exhist anymore. So this time we will make a connection with PHP and save the charector to a database. This way we can recall all charectors we created and make more. We will first have to make a generate button to create a new roleplaying charector.</br></br>
    <form method ="post">
  <label for="fname">Name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Class:</label>
  <input type="text" id="class" name="class"><br><br>        
  <button type="submit" name="button1" value = "button1">Generate Charector</button>
  </form>
<?php
     include 'pdo.php';
    if(isset($_POST['button1'])){
         $num = array();
     for ($x = 0; $x < 10; $x++){
       array_push($num, rand(1,100));
     }
     // foreach($num as $value){
       // echo $value;
       // echo "\n";
      $fname =  $_POST["fname"];
      $class = $_POST["class"];
     // }
     $sql = "INSERT INTO actor (name,class,str,agi,end,intu,log,will,cha,luck,rep,magic)VALUES ('$fname','$class', $num[0],$num[1],$num[2],$num[3],$num[4],$num[5],$num[6],$num[7],$num[8],$num[9])";
     if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }

  
?>
 
</p>

  
</div>
    

<footer>©Michael Joseph James 2021.</footer>
</body>
</htm