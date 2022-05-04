<html>
    <body>
    <?php
        $mysqli = new mysqli( "mysql.eecs.ku.edu", "b640d099", "ohe7phee", "b640d099" );
        if ( $mysqli->connect_errno ){
            echo "<h1> Connect failed </h1>";
            exit();
        } else {
            $valUser = False;
            $query = "SELECT user_id FROM Users WHERE user_id='$_POST[username]'";
            if( $result = $mysqli->query($query) ){
                while( $row = $result->fetch_assoc() ){
                    $valUser = True;
                }
                $result->free();
            }
            if ( $_POST["username"] == "" || $_POST["Po"] == "" ){
                echo "<h1> Field was empty </h1>";
            } else if ( !$valUser ){
                echo "<h1> Not a valid user </h1>";
            } else {
                echo "<h2>". $_POST["Po"]. "</h2>";
                echo "<h2>". $_POST["username"]. "</h2>";
                $query = "INSERT INTO Posts ( content, author_id ) VALUES ( '$_POST[Po]', '$_POST[username]' )";
                $mysqli->query($query);
                echo "<h1> Post added </h1>";
            }
        }
        $mysqli->close();
    ?>
    </body>
</html>