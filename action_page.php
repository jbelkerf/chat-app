<html>
    <body>
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

            if (isset($_POST['full_name'], $_POST['email'], $_POST['psw']))
            {
                $username = $_POST['full_name'];
                $email = $_POST['email'];
                $passwd = $_POST['psw'];
            }
            else
                echo "all fields are requered";
            if ($username && $email && $passwd)
            {
                $query = "INSERT INTO Users (username, email, passwd) VALUES ('$username', '$email', '$passwd')";
        
                if (mysqli_query($connection, $query)) {
                $url = "http://jbelkerf.42web.io/sign_in.html";
                header('Location: '.$url);
                die();
                }
                else
                {
                    echo "<h2>Error: " . mysqli_error($connection) . "</h2>";
                }
            }
            else
                echo "<h2>All fields are required!</h2>";
        ?>
    </body>
</html>