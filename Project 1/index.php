<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
    <?php
        $user = $_POST['user'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        if($user == "" || $email == "" || $pass == ""){
            echo "Please fill all the fields";
        }
        else{
            echo "Registration Successful";
            header("Location: login.html");
        }
    ?>
    <body>
    This is home password_get_info
    </body>
</html>
