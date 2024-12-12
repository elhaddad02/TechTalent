<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="settings.css">
    <title>settings</title>
    <style>
       
    </style>
</head>
<body>
    @include('navbar')
    <div class="wrapper">
        <div class="buttons" style="border: none">
            <h1>Paramètres</h1>

            <div class="container">
                <button><a href="/generate-pdf">Télecharger votre CV  <i class="fa-solid fa-file-arrow-down"></i></a></button>
            </div>
            <div class="container">   
                <button><a href="/edit-form">Modifier vos données</a></button>
            </div>
            <div class="container">  
                <button><a href="/edit-portfolio">Changer votre Template</a></button>
            </div> 
             
        </div>
    </div>
    @include('footer')
</body>
</html>