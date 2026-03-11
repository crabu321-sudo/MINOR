<?php
header("Content-Type: application/json");

/* Render database connection */
$host = "dpg-d6ms0975r7bs73cl4690-a";
$user = "scores_o92q_user";
$pass = "qb7GWiXnEjHRTSYNPtJJQ4KZ6PW6jJDz";
$db   = "scores_o92q";
$port = 5432;   // sometimes render uses 5432

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die(json_encode(["status"=>"error","message"=>"DB Connection Failed"]));
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
    echo json_encode(["status"=>"error","message"=>"Invalid Data"]);
}

$conn->close();
?>
