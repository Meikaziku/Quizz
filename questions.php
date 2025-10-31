<?php



session_start();
// session_destroy();

if (empty($_SESSION)) {
    header('Location: ./index.php');
}

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

<body class="h-screen bg-[url('../images/background/background.png')] bg-cover flex flex-col">


    <header class="w-40">
        <img class="xl:hidden" src="./images/logo/logoQuizz.png" alt="logo du site quiz">

    </header>

    <main class="h-full flex justify-center relative xl:items-center">

        <section class="bg-[#C8BDBD]/66 w-9/10  rounded-lg backdrop-blur-[3px] flex flex-col justify-center max-w-[460px] sm:max-w-[830px] xl:max-w-[1200px] xl:h-19/20">

            <form class="items-center flex flex-col p-5 gap-8 xl:py-0 xl:px-8 xl:items-center xl:h-9/10 xl:gap-16" action="./process/process-inter-questions.php" method="post">

                <header class="xl:w-full">
                    <div class="xl:flex xl:flex-row xl:justify-between">
                        <img class="w-40 xl:flex hidden" src="./images/logo/logoQuizz.png" alt="logo du site quiz">
                        <div>
                            <p class=" font-[Varela_Round] text-2xl bg-white rounded-full py-2 px-3 text-center flex items-center">Question <?= $_SESSION['numeroQuestions'] + 1 ?>/<?= count($_SESSION['questions']) ?></p>
                        </div>
                    </div>
                </header>

                <!-- Container Question + Réponses -->
                <div class="gap-8 items-center flex flex-col w-full">

                    <h2 class="font-[Varela_Round] text-2xl text-center sm:text-4xl xl:text-5xl xl:text-center"><?= $_SESSION['questions'][$_SESSION['numeroQuestions']]['intitule'] ?></h2>

                    <div class="flex flex-col gap-8 xl:flex-row xl:gap-8 xl:w-full">
                        <!-- Quand on a une image : -->
                        <?php if ($_SESSION['questions'][$_SESSION['numeroQuestions']]['chemin_img']) { ?>
                            <!-- image de la question -->
                            <div class="flex justify-center xl:w-5/10">
                                <img class="border-4 border-white rounded-xl sm:w-8/10 xl:w-full xl:h-full" src="<?= $_SESSION['questions'][$_SESSION['numeroQuestions']]['chemin_img'] ?>" alt="Personnage a décrire">
                            </div>
                            <!-- image de la question -->



                            <!-- Container des Réponses -->
                            <div class="flex flex-wrap justify-between gap-6 lg:w-full xl:flex-col xl:gap-8 xl:w-5/10 ">
                                <?php foreach ($_SESSION['questions'][$_SESSION['numeroQuestions']]['reponses'] as $index => $reponse) { ?>
                                    <div class="sm:w-47/100 xl:w-full ">

                                        <input class="hidden peer" type="radio" name="idReponse" id="rep<?= $reponse['id'] ?>" value="<?= $reponse['id'] ?>">

                                        <label for="rep<?= $reponse['id'] ?>" class="bg-white rounded-full w-full py-2 px-3 text-center flex items-center gap-5 hover:border-gray-600 hover:bg-blue-600/50 peer-checked:bg-black peer-checked:text-white transition-colors">
                                            <div class="bg-black rounded-full flex items-center justify-center w-8 h-8 xl:w-10 xl:h-10">
                                                <h3 class=" text-white font-[Varela_Round] text-2xl xl:text-3xl"><?= chr(65 + $index) ?></h3>
                                            </div>
                                            <p class="font-[Varela_Round] text-2xl"><?= $reponse['description'] ?></p>
                                        </label>
                                    </div>


                                <?php } ?>

                            </div>

                        <?php } else { ?>
                            <!-- Quand on a pas d'image : -->
                            <!-- Container des Réponses -->
                            <div class="flex flex-wrap justify-between gap-6 lg:w-full xl:gap-8">
                                <?php foreach ($_SESSION['questions'][$_SESSION['numeroQuestions']]['reponses'] as $index => $reponse) { ?>
                                    <div class="sm:w-47/100">
                                        <input class="hidden peer" type="radio" name="idReponse" id="rep<?= $reponse['id'] ?>" value="<?= $reponse['id'] ?>">

                                        <label for="rep<?= $reponse['id'] ?>" class="bg-white rounded-full w-full py-2 px-3 text-center flex items-center gap-5  hover:border-gray-600 hover:bg-blue-600/50 peer-checked:bg-black peer-checked:text-white transition-colors">
                                            <div class="bg-black rounded-full flex items-center justify-center w-8 h-8 xl:w-10 xl:h-10">
                                                <h3 class=" text-white font-[Varela_Round] text-2xl xl:text-3xl"><?= chr(65 + $index) ?></h3>
                                            </div>
                                            <p class="font-[Varela_Round] text-2xl"><?= $reponse['description'] ?></p>
                                        </label>
                                    </div>
                                <?php } ?>

                            </div>
                        <?php } ?>
                    </div>

                </div>

                <button class="bg-[#E37F7C] text-black rounded-full px-8 py-2 font-[Varela_Round] text-2xl xl:w-full " type="submit">Valider</button>


            </form>

        </section>

    </main>

</body>

</html>