<html>
    <body>
    <?php
        $mysqli = new mysqli( "mysql.eecs.ku.edu", "b640d099", "ohe7phee", "b640d099" );
        if ( $mysqli->connect_errno ){
            echo "<h1> Connect failed </h1>";
            exit();
        } else {
            echo "<h3>I thought since I didn't do the rest of exercises, how could you check database so here it is</h3>";
            echo "<h4> user_id </h4>";
            $query = "SELECT user_id FROM Users";
            if( $result = $mysqli->query($query) ){
                while( $row = $result->fetch_assoc() ){
                    $a = $row["user_id"];
                    echo "<p>".$a."</p>";
                }
                $result->free();
            }
            echo "<h4> post_id </h4>";
            $query = "SELECT post_id FROM Posts";
            if( $result = $mysqli->query($query) ){
                while( $row = $result->fetch_assoc() ){
                    $a = $row["post_id"];
                    echo "<p>".$a."</p>";
                }
                $result->free();
            }
            echo "<h4> content </h4>";
            $query = "SELECT content FROM Posts";
            if( $result = $mysqli->query($query) ){
                while( $row = $result->fetch_assoc() ){
                    $a = $row["content"];
                    echo "<p>".$a."</p>";
                }
                $result->free();
            }
            echo "<h4> author_id </h4>";
            $query = "SELECT author_id FROM Posts";
            if( $result = $mysqli->query($query) ){
                while( $row = $result->fetch_assoc() ){
                    $a = $row["author_id"];
                    echo "<p>".$a."</p>";
                }
                $result->free();
            }
        }
        $mysqli->close();
        ?>
    </body>
</html>