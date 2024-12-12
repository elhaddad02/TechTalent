<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>
        <link rel="stylesheet" href="welcome.css">
        <link rel="stylesheet" href="fontawesome-free-6.0.0-web/css/all.css">

       
           
    </head>
    <body>

       @include('navbar')
       
        <div class="content">
            
        </div>

        <div class="content2">
            <div class="titles">
                <h1>Créez votre portfolio en quelque minutes</h1>
                <h3>Présentez votre travail avec un portfolio en ligne.</h3>
                <button><a href="/portfolioForm">Créer</a></button>
            </div>
            <div class="picture">
                <img src="images/pic.jpg" alt="">
            </div>
        </div>

        <div class="about">
            <div class="container">
                <h1 class="special-heading">À propos de nous</h1>
                <div class="about-content">
                    <div class="image">
                        <img src="test.jpeg" alt="">
                    </div>
                    <div class="text">
                        <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas voluptatum pariatur rerumpraesentium
                        provident non quibusdam nobis natus adipisci blanditiis ipsum autem similique dolor aliquam nam sed ut rem?
                        </p>
                        <hr>
                        <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sed eum amet adipisci, 
                        accusamus nesciunt molestias dolorum temporibus deserunt inventore corrupti recusandae voluptatum nobis?
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="about">
            <div class="container">
                <h1 class="special-heading">Comment créer un portfolio en ligne</h1>
                <div class="about-content">
                    
                    <div class="text">
                        <p>
                            Si vous êtes un développeur ou un concepteur, mettre votre travail en ligne est le meilleur moyen d'atteindre un public plus large. Et vous pouvez le faire en 4 étapes simples.
                        </p>
                        <hr>
                        
                            <h4>1- Inscrivez-vous ou connectez-vous.</h4>
                            <h4>2- Parlez-nous un peu de vous.</h4>
                            <h4>3- Ajoutez quelques informations sur votre parcours éducatif.</h4>
                            <h4>4- Choisissez un modèle pour votre portfolio.</4>
                        
                    </div>
                    <div class="image">
                        <img src="test2.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>


     @include('footer')
    </body>
<script src="welcome.js"></script>
</html>
