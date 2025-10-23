<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Titre de site </title>
</head>
<body class="bg-gray-50">
    <x-navigation/>
    <x-fil-ariane/>
    <x-hero-section/>
    <x-main-sect/>
    <x-categories/>
    
    @yield('content') 
    
    

</body>
</html>