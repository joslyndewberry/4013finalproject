<?php
function selectPokemon() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT pokemon_id, pokemon_name, type_name, evolution, base_total, image_url, p.type_id FROM `pokemon` p JOIN pokemontype pt ON pt.type_id=p.type_id");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertPokemon($t_id, $p_name, $p_url, $evol, $hp, $atk, $def, $sp_atk, $sp_def, $spd, $total) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `pokemon` (`type_id`, `pokemon_name`, `image_url`, `evolution`, `hp`, `attack`, `defense`, `sp_attack`, `sp_defense`, `speed`, `base_total`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssiiiiiii", $t_id, $p_name, $p_url, $evol, $hp, $atk, $def, $sp_atk, $sp_def, $spd, $total);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deletePokemon($p_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from pokemon where pokemon_id = ?");
        $stmt->bind_param("i", $p_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
