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

<body class="h-screen bg-[url('../images/Background.png')] bg-cover flex flex-col gap-2">

    <header class="flex justify-between pr-8 xl:hidden">
        <img class="max-w-[200px] object-contain" src="./images/logo-transparent-png.png" alt="logo quizz du Site">

        <div class="flex items-center gap-3">
            <nav>
                <img class="min-h-16 w-24 object-contain" src="./images/AppStoreBlue.png" alt="logo app store">
            </nav>

            <nav>
                <img class="h-16 w-24 object-contain" src="./images/GooglePlayBlack.png" alt="logo google play">
            </nav>
        </div>
    </header>

    <main class="flex justify-center h-full">

        <section class="bg-[#C8BDBD]/66 w-9/10 max-w-[460px] rounded-t-lg backdrop-blur-[3px] gap-16 p-8 sm:max-w-[921px] xl:max-w-[1200px] 2xl:max-w-[1400px]">

            <div class="flex justify-between pr-8 xl:flex hidden">
                <img class="max-w-[200px] object-contain" src="./images/logo-transparent-png.png" alt="">


            </div>

            <form class="flex flex-col gap-8 items-center xl:flex-row xl:gap-7 xl:pt-20">

                <div class="xl:flex xl:flex-col items-center xl:gap-24 xl:items-start  ">
                    <h1 class="font-[Varela_Round] text-2xl md:text-4xl text-center xl:text-start xl:text-5xl ">Cliquez sur un thème et entrez votre nom pour commencer le quiz.</h1>

                    <div class="items-center hidden xl:flex gap-4 xl:gap-0">
                        <label for="pseudo"></label>
                        <input class="bg-[#FFFFFF] border py-1 px-2 " placeholder="Entrez votre pseudo" type="text" name="pseudo" id="pseudo">

                        <button class="bg-[#E37F7C] text-white font-semibold rounded-xl px-8 py-2 xl:ml-6 " type="submit">Play</button>
                    </div>
                </div>

                <div class="flex flex-col  max-w-[320px] xl:pr-16 xl:max-w-[400px] gap-2 xl:gap-8 ">
                    <div class="flex gap-8">
                        <div>
                            <label for="cat1"><img class="bg-[#F0CE9E] py-4 px-4 rounded-xl border-2" src="./images/recherche (1).png" alt="catégorie littérature"></label>
                            <input class="hidden" type="radio" name="idQuizz" id="cat1" value="categorie1">
                        </div>

                        <div>
                            <label for="cat2"><img class="bg-[#A1C2FE] py-4 px-4 rounded-xl border-2" src="./images/sport (2).png" alt="catégorie sport"></label>
                            <input class="hidden" type="radio" name="idQuizz" id="cat2" value="categorie2">
                        </div>
                    </div>

                    <div class="flex gap-8">
                        <div>
                            <label for="cat3"><img class="bg-[#A1C2FE] py-4 px-4 rounded-xl border-2" src="./images/controleur-de-jeu.png" alt="catégorie jeux vidéo"></label>
                            <input class="hidden" type="radio" name="idQuizz" id="cat3" value="categorie3">
                        </div>

                        <div>
                            <label for="cat4"><img class="bg-[#F0CE9E] py-4 px-4 rounded-xl border-2" src="./images/cinema.png" alt="catégorie cinema"></label>
                            <input class="hidden" type="radio" name="idQuizz" id="cat4" value="categorie4">
                        </div>
                    </div>

                    <div class="flex gap-8">
                        <div>
                            <label for="cat5"><img class="bg-[#F0CE9E] py-4 px-4 rounded-xl border-2" src="./images/notes-de-musique.png" alt="catégorie musique"></label>
                            <input class="hidden" type="radio" name="idQuizz" id="cat5" value="categorie5">
                        </div>

                        <div>
                            <label for="cat6"><img class="bg-[#A1C2FE] py-4 px-4 rounded-xl border-2 " src="./images/la-science.png" alt="catégorie science"></label>
                            <input class="hidden" type="radio" name="idQuizz" id="cat6" value="categorie6">
                        </div>
                    </div>
                </div>

                <div class="flex gap-4 items-center xl:hidden">
                    <label for="pseudo"></label>
                    <input class="bg-[#FFFFFF] border py-1 px-2" placeholder="Entrez votre pseudo" type="text" name="pseudo" id="pseudo">

                    <button class="bg-[#E37F7C] text-white font-semibold rounded-xl px-8 py-2 " type="submit">Play</button>
                </div>

            </form>




        </section>



    </main>
</body>

</html>