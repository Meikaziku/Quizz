<?php

session_start();
// session_destroy();

if (empty($_SESSION)) {
    header('Location: ./index.php');
}

require_once './utils/db-connect.php';

$request = $db->prepare('SELECT SUM(score.nombre) AS sommeScore, COUNT(*) AS nombreJoueur FROM score WHERE score.quizz_id = :quizzId');
$request->execute([
    ':quizzId' => $_SESSION['questions'][0]['quizz_id'],
]);

$scoreGlobal = $request->fetch(PDO::FETCH_ASSOC);
$scoreMoyen = $scoreGlobal['sommeScore'] / $scoreGlobal['nombreJoueur'];
$scoreMoyenPourcent = round($scoreMoyen / $_SESSION['numeroQuestions'] * 100, 2);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/output.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Manrope:wght@200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Rokkitt:ital,wght@0,100..900;1,100..900&family=Varela+Round&display=swap');
    </style>
</head>

<body class="h-screen bg-[url('../images/background/Background.png')] bg-cover">

    <main class="h-full flex justify-center items-center">




        <section class="bg-[#C8BDBD]/66 backdrop-blur-[3px] rounded-lg w-9/10 h-19/20 flex justify-center p-4">
            <div class="flex flex-col gap-8 items-center text-center lg:gap-24">
                <img class="w-35" src="./images/logo/logoQuizz.png" alt="logo quizz du Site">

                <h2 class="font-[Varela_Round] text-2xl lg:text-4xl">Félicitations <span class="text-[#E37F7C]"><?= $_SESSION['user']['pseudo'] ?></span>, tu as <span class="text-[#E37F7C]"><?= $_SESSION['bonneReponses'] ?></span> bonnes réponses sur <span class="text-[#E37F7C]"><?= $_SESSION['numeroQuestions'] ?></span>!</h2>
                <div class="flex flex-col gap-16 lg:gap-24">

                    
                    <div class="flex flex-col gap-8 lg:flex lg:flex-row lg:gap-24 items-center">
                        <!-- score utilisateur -->
                        <h3 class="font-[Varela_Round] shadow-lg text-3xl bg-[#E37F7C] rounded-full w-45 h-45 flex items-center p-7 lg:text-4xl lg:w-55 lg:h-55">TON SCORE : <?= round($_SESSION['bonneReponses']/$_SESSION['numeroQuestions'] * 100, 2) ?>%</h3>

                        <!-- score global -->
                        <h3 class="font-[Varela_Round] shadow-md text-3xl bg-[#A1C2FE] rounded-full w-45 h-45 flex items-center p-7 lg:text-4xl lg:w-55 lg:h-55">SCORE GLOBAL : <?= $scoreMoyenPourcent ?>%</h3>

                    </div>



                    <form class="flex sm:flex-row gap-4 sm:gap-8 lg:gap-16 justify-center" action="./process/process-fin-quizz.php" method="post">
                        <!-- bouton recommencer quiz -->
                        <button type="submit" value="1" name="action" class="flex-1 text-center font-[Varela_Round] text-white rounded-xl px-4 py-2 shadow-sm bg-[#E37F7C] hover:bg-[#d67875]  ">
                            Recommencer le quiz
                        </button>

                        <!-- bouton changer de theme -->
                        <button type="submit" value="2" name="action" class="flex-1   text-center font-[Varela_Round] text-white rounded-xl px-4 py-2 shadow-sm bg-[#A1C2FE] hover:bg-[#8eace4] ">
                            Retour au choix des thèmes
                        </button>

                    </form>


                </div>
            </div>

        </section>

    </main>

</body>

</html>