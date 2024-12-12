<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="cards.css">
    <title>changer template</title>
    <style>
        a{
            text-decoration: none;
            color: gray;
            font-size: 18px;
            font-weight: 600;
        }
        button:hover{
            background: gray;
        }
        button:hover a{
            color: #eee;
        }
        h1 {
            margin: 40px 0;
            margin-bottom: 16px;
            font-size: 36px;
            font-weight: 700;
            color: #AE445A;
            text-align: center;
        }
        /* .portfolio-border {
            border: 2px solid black; 
        } */

    </style>
</head>
<body>
    <h1>Changez votre template</h1>
    <div class="card-container">
                <form action="/update-template" method="POST" class="card-container">
                    @csrf
                    <div class="card2" style="border-radius: 0">
                        <div class="portfolio">
                            <label for="t1"><img class="card-img" src="t2.jpg" alt="" height="70%" width="90%"></label>
                            <input type="radio" value='template1/template1' id="t1" name="portfolios">
                        </div>
                    </div>
                    <div class="card2" style="border-radius: 0">
                        <div class="portfolio">
                            <label for="t2"><img class="card-img" src="p2.jpg" alt="" style="margin-top: 10px"></label>   
                            <input type="radio" value="template1/template2" id="t2" name="portfolios">
                        </div>
                    </div>
                    <div class="card2" style="border-radius: 0">
                        <div class="portfolio">
                            <label for="t3"><img class="card-img" src="p3.jpg" alt="" height="400px"></label>     
                            <input type="radio" value="template/template3" id="t3" name="portfolios">
                        </div>
                    </div>
                    <div class="card2" style="border-radius: 0">
                        <div class="portfolio">
                            <label for="t4"><img class="card-img" src="p4.jpeg" alt=""></label>
                            <input type="radio" name="portfoios" id="t4" value="template/template4">
                        </div>
                    </div>
                    <div class="card2" style="border-radius: 0">
                        <div class="portfolio">
                            <label for="t5"><img class="card-img" src="portfolio1.jpeg" alt=""></label>
                            <input type="radio" name="portfolios" value="template/template5" id="t5">
                        </div>
                    </div>
                    <div style="display: block">                    
                        <button class="card-btn" type="submit">Submit</button>
                    </div>
                 </form>
    </div>

<script>
    let myCards = document.querySelectorAll('.card2');

    myCards.forEach(card => {
    card.addEventListener('click', function() {
        myCards.forEach(c => c.style.border = 'none');
        card.style.border = 'solid 5px #AE445A';
    });
});


</script>
</body>
</html>