<?php
header("Content-Type: application/json");

require 'db.php';

$game = $conn->real_escape_string($_GET['game'] ?? '');

$stmt = $conn->prepare("SELECT MAX(score) as top_score FROM scores WHERE game_name = ?");
$stmt->bind_param("s", $game);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

echo json_encode(["score" => $row['top_score']]);
$conn->close();
?>
