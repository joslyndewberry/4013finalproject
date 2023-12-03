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

?>
