<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="cards.css">
    <title>les templates des portfolios</title>
    <style>
        a{
            text-decoration: none;
            color: gray;
            font-size: 18px;
            font-weight: 600;
        }
        /* button{
            background: none;
            padding: 10px;
            border: gray 1px solid;
            border-radius: 28px;
            outline: none;
            margin: 15px;
            /* width: 50%; */
        /* } */ 
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
    <h1>Choisissez votre template préféré</h1>
    
            <form action="/addTepmlate" method="POST" class="card-container">
                    
                    @csrf
                <div class="card-container">
                    <div class="card2" style="border-radius: 0">
                        <div class="portfolio">
                            <label for="t1"><img class="card-img" src="t2.jpg" alt="" height="70%" width="90%"></label>
                            {{-- <input type="radio" value="template1/template1" id="t1"> --}}
                            <input type="radio" value='template1/template1' id="t1" name="portfolios">
                            {{-- <a href="/templateOne">Template 1</a> --}}
                        </div>
                    </div>
                    <div class="card2" style="border-radius: 0">
                        <div class="portfolio">
                            <label for="t2"><img class="card-img" src="p2.jpg" alt="" style="margin-top: 10px"></label>   
                            <input type="radio" value="template1/template2" id="t2" name="portfolios">
                            {{-- <a href="/templateTwo">Template 2</a> --}}
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
                    
                </div>
                <div style="display: block; margin-bottom: 40px">                    
                    <button class="card-btn" type="submit">Submit</button>
                </div>
            </form>
    

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