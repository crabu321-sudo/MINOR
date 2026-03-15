<?php
header("Content-Type: application/json");

require 'db.php';

$game  = $conn->real_escape_string($_POST['game'] ?? '');
$score = $_POST['score'] ?? '';

if ($game && is_numeric($score)) {
    $stmt = $conn->prepare("INSERT INTO scores (game_name, score) VALUES (?, ?)");
    $stmt->bind_param("si", $game, $score);
    $stmt->execute();
    echo json_encode(["status" => "success"]);
} else {
    echo json_encode(["status" => "error", "message" => "Invalid Data"]);
}

$conn->close();
?>
