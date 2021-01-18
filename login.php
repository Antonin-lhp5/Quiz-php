<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="dist/tailwind.css" rel="stylesheet">
    <title>connexion</title>
</head>

<body class="flex h-screen bg-gray-900 font-body">
    <div class="max-w-xs w-full m-auto bg-gray-700 rounded-lg p-5">
        <h1 class="text-xl text-gray-200 font-light font-title text-center mb-5">Administrateur new</h1>
        <form>
            <div>
                <label class="block mb-2 text-gray-200" for="username">Identifiant</label>
                <input class="w-full p-2 mb-6 text-gray-200 outline-none bg-gray-800 ring-1 ring-gray-900 focus:ring-pink-600" type="text" name="username" id="username">
            </div>
            <div>
                <label class="block mb-2 text-gray-200" for="password">Mot de passe</label>
                <input class="w-full p-2 mb-6 text-gray-200 outline-none bg-gray-800 ring-1 ring-gray-900 focus:ring-pink-600" type="password" name="password" id="password">
            </div>
            <div>
                <input class="w-full bg-pink-700 hover:bg-pink-600 text-gray-200 font-bold py-2 px-4 rounded outline-none" type="submit" value="Se connecter">
            </div>
        </form>
    </div>
</body>

</html>