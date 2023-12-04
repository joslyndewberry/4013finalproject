<?php
function selectPokemonByType($tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM `pokemontype` pt JOIN pokemon p ON pt.type_id=p.type_id WHERE p.type_id=?");
        $stmt->bind_param("i", $tid);
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
