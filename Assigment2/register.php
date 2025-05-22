





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
       body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: skyblue;
        }
        .container {
            text-align: center;
        }
        input {
            display: block;
            margin: 10px auto;
            padding: 5px;
            cursor: pointer;
            border-radius: 20px;
            border-color: none;
       
        }
        .register-button  {
            width: 230px;
            /* border-radius: 20px; */
        }
        button{
            cursor: pointer;
             border-radius: 20px;
        }
        .account-login {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-top: 10px;
        }


    </style>
</head>
<body>
   <div class="container">
     <form action="login.php" >
        <h3>Register</h3>
        <input type="text" name="name" placeholder="Name">
        <input type="number" name="phone" placeholder="Phonenumber">
        <input type="text" name="address" placeholder="Address">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button class="Register-button">Register</button>
        <div class="account-login">
            <p>Do you have a account?</p>
        <!-- <button>Login</button> -->
         <a href="index.php">Login</a>
        </div>
    </form> 
   </div>
</body>
</html>