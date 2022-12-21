<!DOCTYPE HTML>
<html>
    <head>
    <?php
            $server="localhost";
            $username="alessio";
            $password="Password01";
            $database="final";
            $conn=mysqli_connect($server, $username, $password, $database);

            $searchterm=htmlspecialchars($_POST['searchbar']);
            $ip=($_SERVER['REMOTE_ADDR']);
            


            $sql="INSERT INTO logs (ip_address, search_term) values('$ip', '$searchterm');";
            // Debugging Tools
            // $result=mysqli_query($conn, $sql);
            // if ($result) {
            //     echo "New record created successfully";
            // } else {
            //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            // }

            mysqli_close($conn);
            
            header("Location: https://www.google.com/search?q=$searchterm");
    ?>
    </head>
    <body>
        <!-- Debugging Tools -->
        <!-- <?= $searchterm ?>
        <?= $ip ?> -->
    </body>
</html>