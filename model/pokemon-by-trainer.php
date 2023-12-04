<?php
function selectPokemonByTrainer($trid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM `trainer` t JOIN capture c ON t.trainer_id = c.trainer_id JOIN pokemon p ON c.pokemon_id = p.pokemon_id JOIN pokemontype pt ON p.type_id=pt.type_id WHERE c.trainer_id = ?");
        $stmt->bind_param("i", $trid);
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
