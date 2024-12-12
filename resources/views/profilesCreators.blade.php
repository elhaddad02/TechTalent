<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="cards.css">
    <title>profiles creators</title>
</head>
<style>
    a{
        text-decoration: none;
        color: white;
        font-size: 1em;
        font-weight: 600;
    }
</style>
<body>
    
    @include('navbar')
    <div class="card-container">
        @foreach ($creators as $creator)
            
        <div class="card">
            <div class="profile">
                <img src="{{ Storage::url($creator->photo) }}" alt="User Photo" class="card-img" width="150" height="150">

                <div class="card-content">
                    <h2 class="card-title">{{$creator->name}}</h2>
                    <p class="card-text">{{$creator->metier}}</p>
                    <button class="card-btn"><a href="/afficher-details/{{$creator->id}}" target="_blank">Voir plus</a></button>
                </div>
            </div>
        </div>

        @endforeach
    </div>
    @include('footer')

</body>
</html>