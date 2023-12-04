<?php
function selectTrainers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT trainer_id, trainer_name, hometown, trainer_url FROM `trainer`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertTrainers($t_name, $home, $t_url) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `trainer` (`trainer_name`, `hometown`, `trainer_url`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $t_name, $home, $t_url);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateTrainers($t_name, $home, $t_url, $t_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `trainer` SET 'trainer_name'=?, 'hometown'=?, 'trainer_url'=? WHERE trainer_id = ?");
        $stmt->bind_param("sssi", $t_name, $home, t_url, $t_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function deleteTrainers($t_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from trainer where trainer_id = ?");
        $stmt->bind_param("i", $t_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
