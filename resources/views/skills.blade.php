<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Formulaire de compétences</title>
<link rel="stylesheet" href="portfolioForm.css">
{{-- <style>
  
    body {
        font-family: 'Arial', sans-serif;
        margin: 40px;
        color: #212529;
        background: #13011acc;
    }

    form {
        background: #13011acc;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        margin: auto;
    }

    .form-group {
        margin-bottom: 20px;
        display: flex;
        flex-direction: column;
    }

    label {
        font-size: 16px;
        margin-bottom: 8px;
        font-weight: bold;
        color: #AE445A;
    }

    select[multiple] {
        height: 150px;
        padding: 10px;
        border: 2px solid #ced4da;
        border-radius: 4px;
        background-color: transparent;
        resize: none;
        overflow-y: auto;
        color: #E8BCB9;
    }

    select[multiple]:hover {
        border-color: #E8BCB9;
    }

    select[multiple]:focus {
        border-color: #AE445A;
        box-shadow: 0 0 0 0.2rem #AE445A(0,123,255,.25);
    }

    button {
        width: 100%;
        background-color: #AE445A;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 4px;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #d1697e;
    }

    button:active {
        background-color: #E8BCB9;
        box-shadow: inset 0 3px 5px rgba(0,0,0,.125);
    }

    .center {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
    }

</style> --}}
</head>
<body>
<div class="container">
    <h1>choisissez vos soft skills et vos hard skills</h1>
    <p>Merci d'avoir pris le temps de nous aider à créer votre portfolio</p>
    <form method="POST" action="/addSkills">
        @csrf
        <div class="form-group">
            <label for="programming-languages">Langages de programmation:</label>
            <select multiple id="programming-languages" name="programming_languages[]">
                <option value="python">Python</option>
                <option value="javascript">JavaScript</option>
                <option value="java">Java</option>
                <option value="csharp">C#</option>
                <option value="cpp">C++</option>
                <option value="php">PHP</option>
                <option value="ruby">Ruby</option>
                <option value="go">Go</option>
                <option value="swift">Swift</option>
                <option value="kotlin">Kotlin</option>
                <option value="Html">Html</option>
                <option value="Css">CSS</option>
            </select>
        </div>
        <div class="form-group">
            <label for="frameworks">Frameworks:</label>
            <select multiple id="frameworks" name="frameworks[]">
                <option value="django">Django</option>
                <option value="flask">Flask</option>
                <option value="spring">Spring</option>
                <option value="react">React.js</option>
                <option value="angular">Angular</option>
                <option value="vue">Vue.js</option>
                <option value="net">.NET</option>
                <option value="rails">Rails</option>
                <option value="sinatra">Sinatra</option>
                <option value="laravel">Laravel</option>
                <option value="node.js"></option>
            </select>
        </div>
        <div class="form-group">
            <label for="soft-skills">Soft Skills:</label>
            <select multiple id="soft-skills" name="soft_skills[]">
                <option value="communication">Communication</option>
                <option value="teamwork">Travail en équipe</option>
                <option value="problem-solving">Résolution de problèmes</option>
                <option value="leadership">Leadership</option>
                <option value="adaptability">Adaptabilité</option>
                <option value="creativity">Créativité</option>
                <option value="work-ethic">Éthique de travail</option>
                <option value="interpersonal-skills">Compétences interpersonnelles</option>
            </select>
        </div>
        <div class="form-group">
            <label for="languages">Langues parlées:</label>
            <select multiple id="languages" name="languages[]">
                <option value="french">Français</option>
                <option value="english">Anglais</option>
                <option value="spanish">Espagnol</option>
                <option value="german">Allemand</option>
                <option value="chinese">Chinois</option>
                <option value="japanese">Japonais</option>
                <option value="russian">Russe</option>
                <option value="arabic">Arabe</option>
                <option value="portuguese">Portugais</option>
            </select>
        </div>
        <button type="submit">Soumettre</button>
    </form>
</div> 
</body>
</html>
