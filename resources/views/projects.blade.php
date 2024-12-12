<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Projet</title>
    <link rel="stylesheet" href="portfolioForm.css">
</head>

<body>
    <div class="container">
        <h1>Ajoutez vos projets créés</h1>
        <p>Merci d'avoir pris le temps de nous aider à créer votre portfolio</p>
        <div class="form-container">
            <form action="/addProjects" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="project_image">Image du Projet:</label>
                <input type="file" id="project_image" name="project_image" >
                @error('project_image')
                    <p style="color: red">{{ $message }}</p>
                @enderror

                <label for="project_title">Titre du Projet:</label>
                <input type="text" id="project_title" name="project_title" >
                @error('project_title')
                    <p style="color: red">{{ $message }}</p>
                @enderror

                <label for="project_link">Lien du Projet:</label>
                <input type="text" id="project_link" name="project_link" >
                @error('project_link')
                    <p style="color: red">{{ $message }}</p>
                @enderror

                <button type="submit">Ajouter Projet</button>
            </form>
        </div>
    </div>
</body>
</html>
