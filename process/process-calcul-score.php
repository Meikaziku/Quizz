<?php

session_start();


require_once '../utils/db-connect.php';


$stmt = $db->prepare('INSERT INTO score (nombre, quizz_id, user_id) VALUES (:nombre,:quizzId,:userId)');
$stmt->execute([

    ':nombre' => $_SESSION['bonneReponses'],
    ':quizzId' => $_SESSION['questions'][0]['quizz_id'],
    ':userId' => $_SESSION['user']['id']


]);







header('Location: ../score.php');
