<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz</title>
    <link href="../dist/tailwind.css" rel="stylesheet">

</head>

<body class="font-body">

    <div class="mx-auto max-w-lg mt-20">
        <h1 class="text-center text-4xl font-bold font-title">Quiz algo</h1>
        <p class="text-center text-lg mt-10">Question <br> 1/5</p>


        <from method="post" action="process.php">
            <div class="grid lg:grid-cols-2 gap-2 md:gap-4 mt-10">
                <button name="choice" type="submit" value="1" class="w-full h-20 bg-gray-500 text-white rounded-lg p-4 text-center">Les chats mangent des souris</button>
                <button name="choice" type="submit" value="1" class="w-full h-20 bg-gray-500 text-white rounded-lg p-4 text-center">Les chats mangent des choux</button>
                <button name="choice" type="submit" value="1" class="w-full h-20 bg-gray-500 text-white rounded-lg p-4 text-center">Les chats mangent des chiens</button>
                <button name="choice" type="submit" value="1" class="w-full h-20 bg-gray-500 text-white rounded-lg p-4 text-center">Les chats mangent du bambou</button>
            </div>
        </from>







    </div>

</body>

</html>