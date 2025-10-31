<?php



if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    header('Location: ../index.php?error=1');
    return;
}

if (
    !isset(
        $_POST['pseudo'],
        $_POST['idQuizz']

    )
) {
    header('Location: ../index.php?error=2');
    return;
}



if (
    empty($_POST['pseudo']) ||
    empty($_POST['idQuizz'])

) {
    header('Location: ../index.php?error=3');
    return;
}

// Input sanitization (Nettoyage d'input)
$pseudo = htmlspecialchars(trim($_POST['pseudo']));
$idQuizz = htmlspecialchars(trim($_POST['idQuizz']));


require_once '../utils/db-connect.php';

$user =  $db->prepare('SELECT * FROM `user` WHERE `pseudo` = :pseudo ');
$user->execute([
    ':pseudo' => $pseudo
]);
$userInformations = $user->fetch(PDO::FETCH_ASSOC);


if (!$userInformations) {
    $insert = $db->prepare('INSERT INTO user (pseudo) VALUES (:pseudo)');
    $insert->execute([':pseudo' => $pseudo]);


    $stmt = $db->prepare('SELECT * FROM user WHERE pseudo = :pseudo');
    $stmt->execute([':pseudo' => $pseudo]);
    $userInformations = $stmt->fetch(PDO::FETCH_ASSOC);
}

session_start();

$_SESSION['user'] = $userInformations;

try {
    $stmt = $db->prepare('SELECT * FROM question WHERE question.quizz_id = :idQuizz');
    $stmt->execute([
        ':idQuizz' => $idQuizz


    ]);

    $quizzQuestions = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $error) {
    echo "Erreur lors de la requete : " . $error->getMessage();
}

foreach ($quizzQuestions as &$question) {  
    try {
        $stmt = $db->prepare('SELECT * FROM reponse WHERE reponse.question_id = :idQuestion');
        $stmt->execute([
            ':idQuestion' => $question['id']
        ]);

        $questionReponses = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $question["reponses"] = $questionReponses;  
    } catch (Exception $error) {
        echo "Erreur lors de la requete : " . $error->getMessage();
    }
}

unset($question);

$_SESSION['questions'] = $quizzQuestions;
$_SESSION['numeroQuestions'] = 0;
$_SESSION['bonneReponses'] = 0;


// var_dump($_SESSION['questions'][$_SESSION['numeroQuestion']]);

header('Location: ../questions.php');

