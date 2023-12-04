<?php
function selectPokemonByType($tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT pokemon_id, pokemon_name, evolution, p.type_id, type_name FROM `pokemon` p JOIN pokemontype pt WHERE p.type_id = pt.type_id where p.type_id=?");
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
