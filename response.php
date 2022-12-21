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
            


            // $sql="INSERT INTO logs (FNAME, LNAME, SEX, USERNAME, PASSWORD, CONDITIONS) values('$fname', '$lname', $sex, '$username', '$password', '$conditions');";
            // $result=mysqli_query($conn, $sql);
            // if ($result) {
            //     echo "New record created successfully";
            // } else {
            //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            // }

            mysqli_close($conn);
    ?>
    </head>
    <body>
        <!-- <p>Your First Name is: <?= htmlspecialchars($_POST['FNAME']) ?></p><br>
        <p>Your Last Name is: <?= htmlspecialchars($_POST['LNAME']) ?></p><br>
        <p>Your UserName is: <?= htmlspecialchars($_POST['USERNAME']) ?></p><br>
        <p>Your Password is: <?= htmlspecialchars($_POST['PASSWORD']) ?></p><br>
        <p>Your Gender is: <?= $sex ?></p><br>
        <p>Your Conditions are: <?= htmlspecialchars($_POST['CONDITIONS']) ?></p><br> -->
        <?= $searchterm ?>
    </body>
</html>