<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <center><h1>Login</h1></center>
        <center>
        <form action="../controllers/user_controller.php" method="post" onsubmit="return doRegValidation()">
            <input type="text" id="name" placeholder="Name" name="name"><span id="err_name" style="color:red;"></span><br>
            <input type="text" id="username" placeholder="Username" name="username"><span id="err_username" style="color:red;"></span><br>
            <input type="password" id="password" placeholder="Password" name="password"><span id="err_password" style="color:red;"></span><br>
            <input type="text" id="email" placeholder="Email" name="email"><span id="err_email" style="color:red;"></span><br>
            <input type="number" id="phone" placeholder="Phone" name="phone"><span id="err_phone" style="color:red;"></span><br>
            <input type="submit" name="register" value="Register">
        </form>
        </center>
        <script src="../scripts/validation.js"></script>
    </body>
</html>