<?php
    # Open database connection.
    include ( '../connect_db.php' );

    if ( isset( $_GET['id'] ) ) $id = $_GET['id'] ;    
        $sql = "DELETE FROM items WHERE item_id='$id'";
    if ($link->query($sql) === TRUE) {
        header("Location: home.php");
    } else {
        echo "Error deleting record: " . $link->error;
    }

    # Close database connection.
    mysqli_close($link);
?>