<?php
    $host = "sql111.infinityfree.com"; //database server
    $user = "if0_38463087";            //database username 
    $db_pass = "Jbelkerf";            //database passwd
    $db_name = "if0_38463087_users";   //database name

    $connection = mysqli_connect($host, $user, $db_pass, $db_name);

    if (!$connection)
    {
        die("Connection failed: ".mysqli_connect_error());
    }

    if (isset($_POST['email'], $_POST['psw']))
    {
        $email = $_POST['email'];
        $passwd = $_POST['psw'];
    }
    else
        echo "all fields are requered";

    $query = "SELECT * FROM Users WHERE email = '$email'";

    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0)
    {
        $user = mysqli_fetch_assoc($result);
        if ($user["passwd"] == $passwd)
        {
            header("Location: welcome.php?name=" .urlencode($user["username"]));
            exit();
        }
        else
            echo "incorrect passwd!"; 
    }
    else
        echo "no user with this email";
    mysqli_close($connection);
?>