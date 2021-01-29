<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="dist/tailwind.css" rel="stylesheet">
    <title>Administration</title>
</head>

<body class="bg-gray-900 font-body">
    
<section class="text-gray-400 bg-gray-900 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-10">
      <h1 class="sm:text-4xl text-3xl font-medium font-title mb-2 text-white">Quiz</h1>
    </div>

    <div class="max-w-screen-lg w-full mx-auto overflow-auto">
      <table class="table-auto w-full text-left whitespace-no-wrap">
        <thead>
          <tr>
            <th class="px-4 py-3 font-title tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tl rounded-bl">#ID</th>
            <th class="px-4 py-3 font-title tracking-wider font-medium text-white text-sm bg-gray-800">Questions</th>
            <th class="px-4 py-3 font-title tracking-wider font-medium text-white text-sm bg-gray-800">Éditer</th>
            <th class="px-4 py-3 font-title tracking-wider font-medium text-white text-sm bg-gray-800">Supprimer</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="px-4 py-3">Start</td>
            <td class="px-4 py-3">5 Mb/s</td>
            <td class="px-4 py-3">15 GB</td>
            <td class="px-4 py-3 text-lg text-white">Free</td>
           
          </tr>
          <tr>
            <td class="border-t-2 border-gray-800 px-4 py-3">Pro</td>
            <td class="border-t-2 border-gray-800 px-4 py-3">25 Mb/s</td>
            <td class="border-t-2 border-gray-800 px-4 py-3">25 GB</td>
            <td class="border-t-2 border-gray-800 px-4 py-3 text-lg text-white">$24</td>
            
          </tr>
          <tr>
            <td class="border-t-2 border-gray-800 px-4 py-3">Business</td>
            <td class="border-t-2 border-gray-800 px-4 py-3">36 Mb/s</td>
            <td class="border-t-2 border-gray-800 px-4 py-3">40 GB</td>
            <td class="border-t-2 border-gray-800 px-4 py-3 text-lg text-white">$50</td>
            
          </tr>
          <tr>
            <td class="border-t-2 border-b-2 border-gray-800 px-4 py-3">Exclusive</td>
            <td class="border-t-2 border-b-2 border-gray-800 px-4 py-3">48 Mb/s</td>
            <td class="border-t-2 border-b-2 border-gray-800 px-4 py-3">120 GB</td>
            <td class="border-t-2 border-b-2 border-gray-800 px-4 py-3 text-lg text-white">$72</td>
            
          </tr>
        </tbody>
      </table>
    </div>
    <div class="flex pl-4 mt-4 max-w-screen-lg w-full mx-auto">
      <a class="text-green-400 inline-flex items-center md:mb-2 lg:mb-0">Learn More
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </a>
      <button class="flex ml-auto text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded">Button</button>
    </div>
  </div>
</section>



    
</body>
</html>