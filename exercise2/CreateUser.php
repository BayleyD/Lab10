<html>
    <body>
    <?php
        $mysqli = new mysqli( "mysql.eecs.ku.edu", "b640d099", "ohe7phee", "b640d099" );
        if ( $mysqli->connect_errno ){
            echo "<h1> Connect failed </h1>";
            exit();
        } else {
            $dup = False;
            $query = "SELECT user_id FROM Users";
            if( $result = $mysqli->query($query) ){
                while( $row = $result->fetch_assoc() ){
                    $a = $row["user_id"];
                    if( $_POST["username"] == $a ){
                        $dup = True;
                    }
                }
                $result->free();
            }
            if ( $_POST["username"] == "" ){
                echo "<h1> Field was empty </h1>";
            } else if ( $dup ){
                echo "<h1> Duplicate Username found </h1>";
            } else {
                $query = "INSERT INTO Posts ( user_id ) VALUES ( '$_POST[username]' )";
                $mysqli->query($query);
                echo "<h1> Username added </h1>";
            }
        }
        $mysqli->close();
    ?>
    </body>
</html>