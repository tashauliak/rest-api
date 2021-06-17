<?php

function getKey() {
    return ["1304", "nct", "abc"];
}

function isValid($input) {
    $apikey = $input["api_key"];
    if (in_array($apikey, getKey())) {
        return true;
    } else {
        return false;
    }
}

function jsonOut($status, $message, $data) {
    $respon = ["status" => $status, "message" => $message, "data" => $data];

    header("Content-type: application/json");
    echo json_encode($respon);
}

function getMember() {
    $film = [
        ["nama" => "Jeong Jaehyun", "Posisi" => "Main Vocal"],
        ["nama" => "Moon Taeil", "Posisi" => "Lead Vocal"],
        ["nama" => "Lee Jeno", "Posisi" => "Main Rapper"]
    ];
    return $film;
}

if (isValid($_GET)) {
    jsonOut("berhasil", "apikey valid", getMember());
} else {
    jsonOut("gagal", "apikey not valid!!!", null);
}

?>