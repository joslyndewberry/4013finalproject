<?php
function selectTrainers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT trainer_id, trainer_name, hometown FROM `trainer`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
