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

<body class="h-screen bg-[url('../images/Background.png')] bg-cover flex flex-col">


    <header class="w-40">
        <img class="xl:hidden" src="./images/logo-transparent-png.png" alt="logo du site quiz">

    </header>

    <main class="h-full flex justify-center relative xl:items-center">




        <section class="bg-[#C8BDBD]/66 w-9/10 h-19/20 rounded-lg backdrop-blur-[3px] flex flex-col justify-center max-w-[460px] sm:max-w-[830px] xl:max-w-[1200px] ">




            <form class="items-center flex flex-col p-5 gap-8 xl:p-0 xl:items-center xl:px-8 xl:h-9/10 xl:gap-16" action="">

            <div class="xl:w-full">
                <div class="xl:flex xl:flex-row xl:justify-between">
                    <img class="w-40 xl:flex hidden" src="./images/logo-transparent-png.png" alt="logo du site quiz">
                    <div><p class=" font-[Varela_Round] text-2xl bg-white rounded-full py-2 px-3 text-center flex items-center">Question 1/4</p></div>
                </div>
            </div>

                <div class="xl:flex xl:flex-row xl:gap-8 items-center ">
                    <div class="xl:flex xl:flex-col xl:gap-8 xl:w-5/10 flex flex-col gap-8">
                        <h2 class="font-[Varela_Round] text-4xl text-center xl:text-5xl xl:text-start">Quel est le nom de ce personnage :</h2>

                        <div class="sm:px-24 md:px-32 xl:p-0  "><img class="border-4 border-white rounded-xl" src="./images/rayman-legends.jpg" alt="Personnage a décrire"></div>
                    </div>

                    <div class="flex flex-col gap-6 lg:w-full xl:flex xl:flex-col xl:gap-8  xl:w-5/10 items-center xl:pt-32 pt-8">
                        <div class="flex gap-3 xl:flex xl:flex-col xl:gap-8 xl:w-full md:w-full">

                            <div class="md:w-5/10 xl:w-full ">
                                <label for="ques1 font-[Varela_Round]">
                                    <div class="bg-white rounded-full py-2 px-3 text-center flex gap-5 items-center">
                                        <h3 class="bg-black rounded-full text-white xl:w-10 xl:h-10 w-8 h-8 font-[Varela_Round] text-2xl xl:text-3xl">A</h3>
                                        <p class="font-[Varela_Round] text-2xl">Neymar</p>
                                    </div>
                                </label>
                                <input class="hidden" type="radio" name="idReponse" id="rep1" value="reponse1">
                            </div>
                            <div class="md:w-5/10 xl:w-full">
                                <label for="ques2 font-[Varela_Round]">
                                    <div class="bg-white rounded-full py-2 px-3 text-center flex gap-5 items-center">
                                        <h3 class="bg-black rounded-full text-white xl:w-10 xl:h-10 w-8 h-8 font-[Varela_Round] text-2xl xl:text-3xl">B</h3>
                                        <p class="font-[Varela_Round] text-2xl">Reynane</p>
                                    </div>
                                </label>
                                <input class="hidden" type="radio" name="idReponse" id="rep2" value="reponse2">
                            </div>

                        </div>
                        <div class="flex gap-3 xl:flex xl:flex-col xl:gap-8 xl:w-full md:w-full ">

                            <div class="xl:w-full md:w-5/10 ">
                                <label for="ques3 font-[Varela_Round]">
                                    <div class="bg-white rounded-full py-2 px-3 text-center flex gap-5 items-center">
                                        <h3 class="bg-black rounded-full text-white xl:w-10 xl:h-10 w-8 h-8 font-[Varela_Round] text-2xl xl:text-3xl">C</h3>
                                        <p class="font-[Varela_Round] text-2xl">Rayman</p>
                                    </div>
                                </label>
                                <input class="hidden" type="radio" name="idReponse" id="rep3" value="reponse3">
                            </div>
                            <div class="md:w-5/10 xl:w-full ">
                                <label for="ques4 font-[Varela_Round]">
                                    <div class="bg-white rounded-full py-2 px-3 text-center flex gap-5 items-center   ">
                                        <h3 class="bg-black rounded-full text-white w-8 h-8 xl:w-10 xl:h-10 font-[Varela_Round] text-2xl xl:text-3xl ">D</h3>
                                        <p class="font-[Varela_Round] text-2xl">Reyman</p>
                                    </div>
                                </label>
                                <input class="hidden" type="radio" name="idReponse" id="rep4" value="reponse4">
                            </div>

                        </div>
                    </div>
                </div>




                <button class="bg-[#E37F7C] text-black rounded-full px-8 py-2 font-[Varela_Round] text-2xl xl:w-full" type="submit">Valider</button>


            </form>

        </section>

    </main>

</body>

</html>