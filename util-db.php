<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'jdewberr_finalprojectuser', 'PWHZ)o!;q?[~', 'jdewberr_finalproject');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
