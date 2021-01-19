<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="dist/tailwind.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Quiz work</title>
</head>

<body class="text-gray-200 font-body">

    <?php include 'menu.php'; ?>

    <main id="news" class="bg-black md:p-14">

        <div class="container mx-auto w-full max-w-screen-xl bg-gray-900 p-5 md:rounded-3xl">

            <div class="w-full flex justify-between items-center">
                <div class="relative w-full">
                    <svg class="w-6 h-6 absolute text-gray-400 top-4 left-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <input type="text" class="group bg-gray-900 h-14 w-full px-12 focus:outline-none hover:cursor-pointer" placeholder="Rechercher un quiz">
                </div>

                <div class="">
                    <div class="">
                        <div class="px-5">Catégories</div>
                    </div>
                </div>

            </div>



            <hr class="border-1 border-gray-700 pb-5">

            <!-- menu catégorie
            <div class="flex items-baseline justify-between pt-2 pb-5 px-3 md:px-20">

                <div class="flex text-sm md:text-base items-center">

                    <h2 class="">Catégorie</h2><span class="ml-2"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg></span>

                </div>

                <div>
                    <div class="flex md:hidden px-2 py-1">
                        <h2 class="text-sm md:text-base">Arts et Lettres</h2>
                        <span class="ml-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </span>
                    </div>
                </div>

                <div class="flex space-x-4 hidden md:block">
                    <a href="#">TOUT</a>
                    <a href="#">Nature</a>
                    <a href="#">Sciences</a>
                    <a href="#">Arts et Lettres</a>
                    <a href="#">Histoire</a>
                    <a href="#">Loisirs</a>
                    <a href="#">Sports</a>
                </div>

            </div> -->

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-2">

                <div>
                    <a href="" class="flex py-2 md:py-3 px-3 group rounded-lg hover:bg-gray-800 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="h-20 w-20 md:h-24 md:w-24 rounded-lg " src="img/gameconsole.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Loisirs</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Nos
                                anciennes consoles de jeux vidéos !</h2>
                        </div>
                    </a>
                </div>

                <div>
                    <a class="flex py-2 md:py-3 px-3 group rounded-lg hover:bg-gray-800 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="h-20 w-20 md:h-24 md:w-24 rounded-lg " src="img/rabbit.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Nature</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Les
                                lapins et leurs terriers</h2>
                        </div>
                    </a>
                </div>

                <div>
                    <a class="flex py-2 md:py-3 px-3 group rounded-lg hover:bg-gray-800 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="h-20 w-20 md:h-24 md:w-24 rounded-lg " src="img/gazelle.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Nature</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Les
                                proies des prédateurs</h2>
                        </div>
                    </a>
                </div>

                <div>
                    <a class="flex py-2 md:py-3 px-3 group rounded-lg hover:bg-gray-800 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="h-20 w-20 md:h-24 md:w-24 rounded-lg " src="img/victorhugo.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Arts et Lettres</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Connaissez-vous Victor Hugo ?</h2>
                        </div>
                    </a>
                </div>

                <div>
                    <a class="flex py-2 md:py-3 px-3 group rounded-lg hover:bg-gray-800 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="h-20 w-20 md:h-24 md:w-24 rounded-lg " src="img/volcan.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Science</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Les
                                différents volcans et leurs présences géographiques</h2>
                        </div>
                    </a>
                </div>

                <div>
                    <a class="flex py-2 md:py-3 px-3 group rounded-lg hover:bg-gray-800 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="h-20 w-20 md:h-24 md:w-24 rounded-lg " src="img/greek.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Histoire</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Les
                                mythes de la grèce antique</h2>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="" class="flex py-2 md:py-3 px-3 group rounded-lg hover:bg-gray-800 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="h-20 w-20 md:h-24 md:w-24 rounded-lg " src="img/gameconsole.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Loisirs</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Nos
                                anciennes consoles de jeux vidéos !</h2>
                        </div>
                    </a>
                </div>

                <div>
                    <a class="flex py-2 md:py-3 px-3 group rounded-lg hover:bg-gray-800 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="h-20 w-20 md:h-24 md:w-24 rounded-lg " src="img/rabbit.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Nature</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Les
                                lapins et leurs terriers</h2>
                        </div>
                    </a>
                </div>

                <div>
                    <a class="flex py-2 md:py-3 px-3 group rounded-lg hover:bg-gray-800 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="h-20 w-20 md:h-24 md:w-24 rounded-lg " src="img/gazelle.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Nature</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Les
                                proies des prédateurs</h2>
                        </div>
                    </a>
                </div>

                <div>
                    <a class="flex py-2 md:py-3 px-3 group rounded-lg hover:bg-gray-800 hover:shadow-lg transition duration-300 ease-in-out">
                        <img class="h-20 w-20 md:h-24 md:w-24 rounded-lg " src="img/victorhugo.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Arts et Lettres</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Connaissez-vous Victor Hugo ?</h2>
                        </div>
                    </a>
                </div>

                <!-- end galerie -->

            </div>
            <div class="py-4 flex justify-center">
                <nav class="block">
                    <ul class="flex pl-0 rounded list-none flex-wrap">
                        <li>
                            <a href="#" class="text-xs font-semibold flex w-8 h-8 mx-1 p-0 rounded-full items-center justify-center leading-tight relative text-white bg-pink-600">
                                1
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-xs font-semibold flex w-8 h-8 mx-1 p-0 rounded-full items-center justify-center leading-tight relative text-white bg-gray-600">
                                2
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-xs font-semibold flex w-8 h-8 mx-1 p-0 rounded-full items-center justify-center leading-tight relative text-white bg-gray-600">
                                3
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </main>


    <?php include 'footer.php'; ?>
    </div>

    <script src="script.js"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
</body>

</html>