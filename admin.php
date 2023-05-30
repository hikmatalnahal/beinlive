<?php

include 'includess/conniction.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: index2.php");
}

if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE  password='$password' AND username='$user'";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result)>0) {
        $row = mysqli_fetch_assoc($result);
    
        $_SESSION['username'] = $row['username'];
        header("Location: index2.php");
    } else {
        echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" type="text/css" href="style2.css">

    <title>Login Form - Pure Coding</title>

    
<style>
    /* @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap'); */

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    width: 100%;
    min-height: 100vh;
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    width: 450px;
    min-height: 400px;
    background: #FFF;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, .3);
    padding: 20px 30px;
}

.container .login-text {
    color: #111;
    font-weight: 500;
    font-size: 1.1rem;
    text-align: center;
    margin-bottom: 20px;
    display: block;
    text-transform: capitalize;
}

/* .container .login-social {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(50%, 1fr));
    margin-bottom: 25px;
} */

/* 
.container .login-social a {
    padding: 12px;
    margin: 10px;
    border-radius: 3px;
    box-shadow: 0 0 5px rgba(0, 0, 0, .3);
    text-decoration: none;
    font-size: 1rem;
    text-align: center;
    color: #FFF;
    transition: .3s;
} */


.container .login-email .input-group {
    width: 100%;
    height: 50px;
    margin-bottom: 25px;
}

.container .login-email .input-group input {
    width: 85%;
    height: 100%;
    border: 2px solid #e7e7e7;
    padding: 15px 20px;
    margin: 0 0 0 20px;
    font-size: 1rem;
    border-radius: 30px;

    background: transparent;
    outline: none;
    transition: .3s;
}

.container .login-email .input-group input:focus,
.container .login-email .input-group input:valid {
    border-color: #FF6576;
}

.container .login-email .input-group .btn {
    display: block;
    width: 100%;
    padding: 15px 20px;
    text-align: center;
    border: none;
    background: #FA714A;
    outline: none;
    border-radius: 30px;
    font-size: 1.2rem;
    color: #FFF;
    cursor: pointer;
    transition: .3s;
}

.container .login-email .input-group .btn:hover {
    transform: translateY(-5px);
    background: #fc4a19;
}

.login-register-text {
    color: #111;
    font-weight: 600;
}

.login-register-text a {
    text-decoration: none;
    color: #FA714A;
}

@media (max-width: 430px) {
    .container {
        width: 300px;
    }


}
    </style>


</head>
<body>
<div class="container">
    <form action="" method="POST" class="login-email">
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
        <div class="input-group">
            <input type="text" placeholder="Username" name="username" value="<?php echo $user; ?>" required>
        </div>
        <div class="input-group">
            <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
        </div>



        <div class="input-group">
            <button name="submit" class="btn">Login</button>
        </div>
       
    </form>
</div>
</body>
</html>

