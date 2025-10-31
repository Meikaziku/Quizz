<?php 

session_start();


if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    header('Location: ../score.php?error=1');
    return;
}

if (
    !isset(
        $_POST['action']

    )
) {
    header('Location: ../score.php?error=2');
    return;
}



if (
    empty($_POST['action'])

) {
    header('Location: ../score.php?error=3');
    return;
}

// Input sanitization (Nettoyage d'input)
$action = htmlspecialchars(trim($_POST['action']));
var_dump($action);
require_once '../utils/db-connect.php';


// Si l'utilisateur recommence le quiz
if ($action === "1") {

   $_SESSION['numeroQuestions'] = 0;
   $_SESSION['bonneReponses'] = 0;
   header('Location: ../questions.php');

}

// Si l'utilisateur retourne au choi du quiz
if ($action === "2") {

    session_destroy();
    header('Location: ../index.php');

}


?>