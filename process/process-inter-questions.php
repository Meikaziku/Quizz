<?php

session_start();





if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    header('Location: ../index.php?error=1');
    return;
}

if (
    !isset(
        $_POST['idReponse']

    )
) {
    header('Location: ../index.php?error=2');
    return;
}



if (
    empty($_POST['idReponse'])

) {
    header('Location: ../index.php?error=3');
    return;
}

// Input sanitization (Nettoyage d'input)
$idReponse = htmlspecialchars(trim($_POST['idReponse']));

require_once '../utils/db-connect.php';

try {

    $request = $db->prepare('SELECT reponse.is_correcte FROM reponse WHERE reponse.id = :idReponse');
    $request->execute([
        ':idReponse' => $idReponse
    ]);

    $reponseUtilisateur = $request->fetch(PDO::FETCH_ASSOC);
} catch (Exception $error) {
    echo "Erreur : " . $error->getMessage();
}

// Si l'utilisateur a donné une bonne réponse
if ($reponseUtilisateur['is_correcte'] === 1) {
    $_SESSION['bonneReponses']++;
}

$_SESSION['numeroQuestions']++;

if ($_SESSION['numeroQuestions'] >= count($_SESSION['questions'])) {
    header('Location: ./process-calcul-score.php');
} else {
    header('Location: ../questions.php');
}

