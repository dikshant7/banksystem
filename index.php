<?php
$insert=false;
if(isset($_POST['name'])){

// $server ="localhost";
// $username="root";
// $password="";
$server ="remotemysql.com";// remote database
$username="liDDmjgtOS";
$password="isczbfVqnk";


$con=mysqli_connect($server,$username,$password);

if(!$con)
{
    die("connection to this database failed due to ".mysqli_connect_error());

}


$name=$_POST['name'];
$gender =$_POST['gender'];
$age=$_POST['age'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];
$sql ="INSERT INTO `liDDmjgtOS`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());
";
// echo $sql;
if($con->query($sql)==true)
{
    $insert=true;
    // echo " succesfully inserted";
}
else
{
    echo "<p class='msg'>$con->error </p>";
}
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to travel form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body style="background-image: url('beach1.jpg');" style="opacity: 0.3;" >

    
 
    <div class="container">
        <h1 style="font-size: 50px;">Goa trip form</h1>
        <p style="font-size: 25px;">Enter details to confirm your bookings </p>
        <?php
        if($insert==true)
        {
           echo  "<p class='msg'>Welcome OnBoard </p>";
        }
        ?>
        
        <form action="index.php" method="post">
            
            <input type="text" name="name" id="name" placeholder="Name">
            <input type="age" name="age" id="age" placeholder="Age">
            <input type="text" name="gender" id="gender" placeholder="Gender">
            <input type="email" name="email" id="email" placeholder="Email">
            <input type="phone" name="phone" id="phone" placeholder="Phone">
            <textarea type="desc" name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <a href="record.php">records</a>
            <button style="background-color: rgb(197, 141, 197);" class="btn1">submit</button>
        </form>

    </div>
    <script src="index.js"></script>
</body>
</html>