<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="portfolioForm.css" />
    <style>
    .error {
        color: red;
    }
  </style>
    <title>update Form</title>
</head>
<body>
  <main>
    <div class="container">
        <header>
          <h1 id="title">Mettre à jour vos informations</h1>
        </header>
        
        <form action="/update-data" method="post" enctype="multipart/form-data" id="survey-form">
            @csrf
            <label id="name-label" for="name">Nom complet<input id="name" type="text" name="name" placeholder="Enter votre nom" value="{{$data[0]->name}}" /></label>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
            <label for="picture"><input type="file" name="picture" id="picture"  {{--accept=".jpg,.jpeg"--}} /></label>
            @error('picture')
              <div class="error">{{ $message }}</div>
            @enderror
            <label id="email-label" for="email">Email<input id="email" type="email" name='email' value="{{$data[0]->email}}" placeholder="Enter votre Email" /></label>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
            <label id="birthday-label" for="birthday">Date de Naissance<input id="birthday" type="date" name='birthday' value="{{$data[0]->date_naissance}}" placeholder="Enter your Bithday"/></label>
            @error('birthday')
                <div class="error">{{ $message }}</div>
            @enderror
            <label id="adresse-label" for="adresse">Adresse (pays, ville, adresse)<input id="adresse" type="text" name='adresse' value="{{$data[0]->adresse}}" placeholder="Enter votre Adresse" /></label>
            @error('adresse')
                <div class="error">{{ $message }}</div>
            @enderror
            <fieldset>
              <legend>Je suis :</legend>
              <label for="Developpeur">
                <input id="Developpeur" type="radio" name="metier" value="Developpeur(se)" />
                Developpeur(se)
              </label>
              <label for="designer">
                <input id="designer" type="radio" name="metier" value="designer" />
                designer
              </label>
            </fieldset>
  
            <label for="services">
              Titre professionnel
              <select id="services" name="service" >
                <option value="" disabled selected>Select an option</option>
                <option value="UI/UX Design">UI/UX Designer</option>
                <option value="Frontend Dev">Frontend Developper</option>
                <option value="Backend Dev">Backend Developper</option>
                <option value="Mobile Dev">Mobile Developer</option>
                <option value="Fall Stack Dev">Full Stack Developer</option>
              </select>
            </label>
            <label for="dropdown">
              Which option best describes your current role?
              <select id="dropdown" name="role" >
                <option value="" disabled selected>Select current role</option>
                <option value="Student">Student</option>
                <option value="Full Time Jo">Full Time Job</option>
                <option value="Full Time Learner">Full Time Learner</option>
                <option value="Prefer not to say">Prefer not to say</option>
                <option value="Other">Other</option>
              </select>
            </label>
            <label for="note">
              Biographie ou À propos de moi
              <textarea id="note" placeholder="Enter yor comment here..." rows="7" name='note'>{{$data[0]->biographie}}</textarea>
            </label>
            <div id="formations-prof">
            <h3>Formation et certifications: <span id="add">Ajouter</span></h3>
            @foreach ($diplomas as $d)
            <div id="formation">
              <label for="diplome">Diplôme<input type="text" name="diplome[]" id="diplome" value="{{$d->nom_diplomes}}" placeholder="enter deplome"></label>
              <label for="etablissement">Nom de l'établissement<input type="text" name="etablissement[]" id="etablissement" value="{{$d->nom_etablissement}}" placeholder="votre etablissement"></label>
              <label for="dateFormation">Date de formation<input type="date" name="dateFormation[]" id="dateFormation" value="{{$d->date_formation}}" placeholder="date de formation"></label>
              <span id="remove">x</span>
            </div>
            @endforeach
          </div>
         
        <div class="form-container">
            
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

             
        </div>
    
        <br>
        <br>

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
                    <option value="node.js">Node.js</option>
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
            <button type="submit">Edit</button>
          </form>
    </div>
  </main>
    
    <script src="portfolioForm.js"></script>
</body>
</html>