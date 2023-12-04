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

function insertPokemon($t_id, $p_id, $poke) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `capture` (`trainer_id`, `pokemon_id`, `pokeball`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $t_id, $p_id, $poke);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deletePokemonFromTrainer($c_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from capture where capture_id = ?");
        $stmt->bind_param("i", $c_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
