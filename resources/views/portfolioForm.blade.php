<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf8" />
    <meta name="viewport" content="width=device-width, initial-scal=1.0" />
    <link rel="stylesheet" href="portfolioForm.css" />
    <style>
      .error {
          color: red;
      }
  </style>
  </head>

  <body>
    <div class="container">
      <header>
        <h1 id="title">Notre Formulaire de Portfolio</h1>
        <p id="description">
            Merci d'avoir pris le temps de nous aider à créer votre portfolio
        </p>
      </header>
      <main>
        <form id="survey-form" action="/store-data" method="post" enctype="multipart/form-data">
          @csrf
          <label id="name-label" for="name">Nom complet<input id="name" type="text" name="name" placeholder="Enter votre nom" /></label>
          @error('name')
              <div class="error">{{ $message }}</div>
          @enderror
          <label for="picture"><input type="file" name="picture" id="picture"  {{--accept=".jpg,.jpeg"--}} /></label>
          @error('picture')
            <div class="error">{{ $message }}</div>
          @enderror
          <label id="email-label" for="email">Email<input id="email" type="email" name='email' placeholder="Enter votre Email" /></label>
          @error('email')
              <div class="error">{{ $message }}</div>
          @enderror
          <label id="birthday-label" for="birthday">Date de Naissance<input id="birthday" type="date" name='birthday' placeholder="Enter your Bithday"/></label>
          @error('birthday')
              <div class="error">{{ $message }}</div>
          @enderror
          <label id="adresse-label" for="adresse">Adresse (pays, ville, adresse)<input id="adresse" type="text" name='adresse' placeholder="Enter votre Adresse" /></label>
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
            <textarea id="note" placeholder="Enter yor comment here..." rows="7" name='note'></textarea>
          </label>
          <div id="formations-prof">
          <h3>Formation et certifications: <span id="add">Ajouter</span></h3>
          <div id="formation">
            <label for="diplome">Diplôme<input type="text" name="diplome[]" id="diplome" placeholder="enter deplome"></label>
            <label for="etablissement">Nom de l'établissement<input type="text" name="etablissement[]" id="etablissement" placeholder="votre etablissement"></label>
            <label for="dateFormation">Date de formation<input type="date" name="dateFormation[]" id="dateFormation" placeholder="date de formation"></label>
            <span id="remove">x</span>
          </div>
        </div>
         
          <button id="submit">Submit</button>
        </form>

        
      </main>
    </div>

    <script src="portfolioForm.js"></script>
  </body>


</html>
