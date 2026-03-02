<?php
header("Content-Type: application/json");

$conn = new mysqli("localhost", "root", "", "game_scores");

if ($conn->connect_error) {
    die(json_encode(["status"=>"error"]));
}

$game  = $_POST['game'] ?? '';
$name  = $_POST['name'] ?? '';
$score = $_POST['score'] ?? '';

if ($game && $name && is_numeric($score)) {

    $stmt = $conn->prepare("INSERT INTO scores (game_name, player_name, score) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $game, $name, $score);
    $stmt->execute();

    echo json_encode(["status"=>"success"]);
} else {
    echo json_encode(["status"=>"error"]);
}

$conn->close();
?>