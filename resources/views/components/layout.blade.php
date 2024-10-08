<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <!--FONT AWESOME-->
        
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<body>

    <x-navbar/>
    
   
    <div class="min-vh-100">
        {{$slot}}
    </div>

    <x-footer/>
    <script src="https://kit.fontawesome.com/cbb9acc64a.js" crossorigin="anonymous"></script>
    
</body>
</html>