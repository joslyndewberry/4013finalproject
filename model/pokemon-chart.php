<?php
function selectPokemon($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM `pokemon` p JOIN pokemontype pt ON p.type_id=pt.type_id WHERE pokemon_id=?");
        $stmt->bind_param("i", $pid);
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
