<?php
    $insert=false;
    if(isset($_POST['firstname'])){

    // $server ="localhost";
    // $username="root";
    // $password="";
    $server ="remotemysql.com";// remote database
    $username="DshHNFZcBN";
    $password="CZnecs4YpG";


    $con=mysqli_connect($server,$username,$password);

    if(!$con)
    {
        die("connection to this database failed due to ".mysqli_connect_error());

    }


    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $age=$_POST['age'];
    $gender =$_POST['gender'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $city=$_POST['city'];
    $sql ="INSERT INTO `DshHNFZcBN`. `user` ( `firstname`, `lastname`, `age`, `gender`, `phone`, `email`, `city`,`date`) VALUES ('firstname', 'lastname', 'age', 'gender', 'phone', 'email', 'city', CURRENT_TIMESTAMP); "; 
  
    if($con->query($sql)==true)
    {
        $insert=true;
        // echo " succesfully inserted";
    }
    else
    {
        echo "error $sql<br> $con->error";
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
    <title>Document</title>
</head>
<body>
    <?php
            if($insert==true)
            {
                echo  "<p>Welcome OnBoard </p>";
            }
    ?>
    <h1>NEW USER</h1>
    <form class="main-form" method="post">
        <input type="text" name="firstname" id="firstname" placeholder="First Name" required><br>
        <input type="text" name="lastname" id="lastname" placeholder="Last Name" required><br>
        <input type="age" name="age" id="age" placeholder="Age" required><br>
        <input type="text" name="gender" id="gender" placeholder="Gender" required><br>
        <input type="phone" name="phone" id="phone" placeholder="Phone" required><br>
        <input type="email" name="email" id="email" placeholder="Email" required><br>
        <input type="city" name="city" id="city" placeholder="city" required><br>
        <button class="submit-button">Submit</button>
    </form>
</body>
</html>
