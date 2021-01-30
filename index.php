<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="dist/tailwind.css" rel="stylesheet">
    <title>Blablaquiz</title>
</head>

<body class="bg-gray-900 text-gray-200 font-body">
    <?php include 'menu.php'; ?>
    <!-- head -->

    <header class="text-gray-300 bg-cover bg-local bg-fixed" style="background-image: url(/img/leaf.jpg)">
        <div class="container mx-auto flex px-5 pt-10 pb-20 items-center justify-center flex-col">
            <div class="text-center lg:w-2/3 w-full">
                <h2 class="text-sm text-indigo-200 uppercase tracking-widest pb-5">Les quiz de Vendredi</h2>
                <h1 class="flex flex-wrap space-x-4 justify-center items-center sm:text-4xl text-3xl mb-4 font-bold text-white font-title">
                    <div>Joue</div>
                    <span class="h-5 md:h-8 w-1 bg-white"></span>
                    <div>Triomphe</div>
                    <span class="h-5 md:h-8 w-1 bg-white"></span>
                    <div>Apprend</div>
                </h1>
                <p class="leading-relaxed text-white mb-8">Avec Quiz Vendredi améliore ta culture générale en t'amusant, lance toi
                    des défis et apprend plein de nouvelles choses. De nouveaux quiz arrivent chaque semaine.</p>
                <div class="flex justify-center">
                    <a href="explorer.php" class="rounded-md bg-gray-200 border-pink-600 shadow text-gray-700 hover:text-pink-600 font-bold py-2 px-6">
                        Explorer
                    </a>
                    <button class="rounded-md bg-gray-700 shadow text-gray-200 hover:bg-pink-600 font-bold py-2 px-6 ml-4">
                        Aléatoire
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- category -->

    <section id="category" class="bg-gray-900 sm:pt-3 sm:px-3 lg:pt-10">
        <div class="container mx-auto shadow-lg bg-black shadow-xl rounded-lg p-5 md:p-8">
            <div class="">
                <!-- text intro -->
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3 mr-5">
                        <h1 class="text-white text-xl sm:text-4xl font-title">Quiz catégories</h1>
                        <div class="bg-pink-600 h-1 w-40 rounded-lg my-3"></div>
                        <p class="text-sm sm:text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe praesentium quo necessitatibus
                            asperiores minus tempora, alias ullam cum voluptatum.</p>
                    </div>

                    <!-- grid -->
                    <div class="pt-5 md:pt-0 grid grid-cols-1 md:grid-cols-2 gap-4 w-full">

                        <div>
                            <a class="flex p-5 group rounded-lg border border-gray-700 border-opacity-75 flex items-center justify-between">
                                <h2 class="border-b-2 border-transparent group-hover:border-indigo-700 text-base sm:text-lg text-white font-medium font-title mb-2">Arts & Lettres</h2>
                                <div class="flex p-2 group-hover:bg-indigo-700 rounded-full transition ease-out delay-200 duration-700 ">
                                    <ion-icon size="large" name="image-outline"></ion-icon>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="flex p-5 group rounded-lg border border-gray-700 border-opacity-75 flex items-center justify-between">
                                <h2 class="border-b-2 border-transparent group-hover:border-indigo-700 text-base sm:text-lg text-white font-medium font-title mb-2">Nature</h2>
                                <div class="flex p-2 group-hover:bg-indigo-700 rounded-full transition ease-out delay-200 duration-700 ">
                                    <ion-icon size="large" name="leaf-outline"></ion-icon>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="flex p-5 group rounded-lg border border-gray-700 border-opacity-75 flex items-center justify-between">
                                <h2 class="border-b-2 border-transparent group-hover:border-indigo-700 text-base sm:text-lg text-white font-medium font-title mb-2">Sciences</h2>
                                <div class="flex p-2 group-hover:bg-indigo-700 rounded-full transition ease-out delay-200 duration-700 ">
                                    <ion-icon size="large" name="magnet-outline"></ion-icon>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="flex p-5 group rounded-lg border border-gray-700 border-opacity-75 flex items-center justify-between">
                                <h2 class="border-b-2 border-transparent group-hover:border-indigo-700 text-base sm:text-lg text-white font-medium font-title mb-2">Sports</h2>
                                <div class="flex p-2 group-hover:bg-indigo-700 rounded-full transition ease-out delay-200 duration-700 ">
                                    <ion-icon size="large" name="tennisball-outline"></ion-icon>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="flex p-5 group rounded-lg border border-gray-700 border-opacity-75 flex items-center justify-between">
                                <h2 class="border-b-2 border-transparent group-hover:border-indigo-700 text-base sm:text-lg text-white font-medium font-title mb-2">Loisirs</h2>
                                <div class="flex p-2 group-hover:bg-indigo-700 rounded-full transition ease-out delay-200 duration-700 ">
                                    <ion-icon size="large" name="film-outline"></ion-icon>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="flex p-5 group rounded-lg border border-gray-700 border-opacity-75 flex items-center justify-between">
                                <h2 class="border-b-2 border-transparent group-hover:border-indigo-700 text-base sm:text-lg text-white font-medium font-title mb-2">Histoire</h2>
                                <div class="flex p-2 group-hover:bg-indigo-700 rounded-full transition ease-out delay-200 duration-700 ">
                                    <ion-icon size="large" name="finger-print-outline"></ion-icon>
                                </div>
                            </a>
                        </div>



                    </div>
                </div>
            </div>
    </section>

    <!-- Nouveauté -->
    <section id="news" class="bg-gray-900 py-14">
        <div class="container mx-auto max-w-screen-lg">
            <div class="flex justify-center items-center px-2 pb-8 lg:pb-10">
                <ion-icon class="mr-3 w-6 h-6 text-indigo-400" name="megaphone"></ion-icon>
                <h1 class="tracking-wide text-xl font-semibold sm:text-2xl font-title">Nouveau sur Blabla<span class="text-indigo-400">quiz</span></h1>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 md:gap-4 px-2">

            <?php 
                for ($i = 1; $i <= 6; $i++) { ?>

                    <div>
                    <a href="#" class="flex py-2 md:py-3 px-3 group rounded-lg bg-gray-800 ring-1 ring-black ring-opacity-10 shadow-lg hover:bg-gray-700 transition duration-300 ease-in-out">
                        <img class="h-20 w-20 object-cover md:h-24 md:w-24 flex-shrink-0 rounded-lg" src="img/cat.jpg" alt="">
                        <div class="pl-5 py-1 space-y-1">
                            <h1 class="text-xs sm:text-sm">Nature</h1>
                            <h2 class="text-sm sm:text-base custom-truncate leading-tight group-hover:text-indigo-200">
                                Les chats dans l'Histoire avec un grand H</h2>
                        </div>
                    </a>
                </div>

               <?php } ?>

                <!-- end galerie -->
            </div>
        </div>
    </section>


    <?php include 'footer.php'; ?>

    <script src="script.js"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>

</body>

</html>