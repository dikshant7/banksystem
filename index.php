<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>login page</title>
</head>
<body class="body-background">
    <div class="background">
        <h1 class="main-heading">Welcome to ----- bank</h1>
        <h2 class="sub-heading">Login to your account</h2><br>
        <form class="loginform">
            <label><b>Name &nbsp&nbsp&nbsp&nbsp&nbsp</b> </label>  
            <input type="text" class="loginform-control" name="name" id="name" required><br><br></p>
            <label><b>USER ID &nbsp</b></label> 
            <input type="password" class="loginform-control" name="userid" id="userid" required><br><br></p>
            <button class="loginform-button" type="submit" >Login</button><br><br>
            <a href="createUser.php">Create a new account</a>
        </form>
    </div>
</body>
</html>
