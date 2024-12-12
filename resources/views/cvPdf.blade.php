<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.icon">
	{{-- <link rel="stylesheet" href="fontawesome-free-6.0.0-web/css/all.css">
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet"> --}}
	<link rel="stylesheet" href="stylesPDF.css">
	<title>Document</title>
	
</head>

<body>
	<div class="resume">
		<div class="base">
			<div class="name"><h1>{{$data[0]->name}}</h1></div>
			<hr>
			<div class="profile">
				<div class="photo">
					@php
						$photoUrl = public_path(Storage::url($data[0]->photo));
					@endphp
					<img src="{{ $photoUrl }}" alt="Photo" >
				</div>
				<div class="info">
					<h2 class="job">{{$data[0]->metier}}</h2>
				</div>
			</div>
			<div class="about">
				<h3>About Me</h3> <hr> {{$data[0]->biographie}}
			</div>
			<div class="contact">
				<h3>Contact Me</h3>
				<hr>
				<div class="call"><span>{{$data[0]->numberphone}}</span></div>
				<div class="address"><span>{{$data[0]->adresse}}</span></div>		
				<div class="email"><span>{{$data[0]->email}}</span></div>
			</div>
		  
			<div class="func">
				<div class="work">
					<h3>Experience</h3>
					<hr>
					<ul>
					<li><span>Technical Consultant -Web Design</span><small>Fiserv</small><small>Apr 2018 - Now</small></li>
					<li><span>Web Designer</span><small>Lynden</small><small>Jan 2018 - Apr 2018</small></li>
					<li><span>Intern - Web Design</span><small>Lynden</small><small>Aug 2017 - Dec 2017</small></li>
					</ul>
				</div>
				<div class="edu">
					<h3>Education</h3>
					<hr>
						@for($i=0; $i<count($diplomas); $i++)
							<div class="timeline-item">
								<span style="color: gray; font-size:14px" class="tl-duration">{{$diplomas[$i]->date_formation}}</span>
								<h4 style="margin: 0; color: #333">{{$diplomas[$i]->nom_diplomes}}</h2>
								<h5 style="margin: 0"> {{$diplomas[$i]->nom_etablissement}} </h4>
							</div>
							<br><br>
						@endfor
				</div>
				<div class="skills-prog">
					<h3>Skills</h3>
					<hr>
					@php
						$programmingLanguages = json_decode($data[0]->programming_languages);
					@endphp
					<ul id="prog-lang">
						@foreach($programmingLanguages as $language)
							<li>{{ $language }}</li>
						@endforeach
					</ul>
						
				</div>
				<div class="skills-soft">
					<h3>Soft Skills</h3>
					<hr>
					@php
						$soft_skills = json_decode($data[0]->soft_skills)
					@endphp
					<ul>
						@foreach ($soft_skills as $skill)
							<li>{{ $skill }}</li>
						@endforeach
					</ul>
				</div>
				<div class="interests">
					<h3>Interests</h3>
					<hr>
					<div class="interests-items">
					<div class="art"><i class="fas fa-palette"></i><span>Art</span></div>
					<div class="art"><i class="fas fa-book"></i><span>Books</span></div>
					<div class="movies"><i class="fas fa-film"></i><span>Movies</span></div>
					<div class="music"><i class="fas fa-headphones"></i><span>Music</span></div>
					<div class="games"><i class="fas fa-gamepad"></i><span>Games</span></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
        let programmingLanguages = document.querySelectorAll("#prog-lang");
        for(i=0; i<programmingLanguages.length; i++){
            let array = JSON.parse(programmingLanguages[i].innerHTML);
            
            let ul = document.createElement("ul");

            array.forEach(element => {
                let li = document.createElement("li");
                li.textContent = element;
                ul.appendChild(li);
            });
            programmingLanguages[i].innerHTML = '';
            programmingLanguages[i].appendChild(ul);
        }

        let frameworks = document.querySelectorAll("#frameworks");
        for(i=0; i<frameworks.length; i++){
            let array = JSON.parse(frameworks[i].innerHTML);
            
            let ul = document.createElement("ul");

            array.forEach(element => {
                let li = document.createElement("li");
                li.textContent = element;
                ul.appendChild(li);
            });
            frameworks[i].innerHTML = '';
            frameworks[i].appendChild(ul);
        }
        let softSkills = document.querySelectorAll("#soft-skills");

        for(i=0; i<softSkills.length; i++){
            let array = JSON.parse(softSkills[i].innerHTML);
            
            let ul = document.createElement("ul");

            array.forEach(element => {
                let li = document.createElement("li");
                li.textContent = element;
                ul.appendChild(li);
            });
            softSkills[i].innerHTML = '';
            softSkills[i].appendChild(ul);
        }
        let languages = document.querySelectorAll("#lang");

        for(i=0; i<languages.length; i++){
            let array = JSON.parse(languages[i].innerHTML);
            
            let ul = document.createElement("ul");

            array.forEach(element => {
                let li = document.createElement("li");
                li.textContent = element;
                ul.appendChild(li);
            });
            languages[i].innerHTML = '';
            languages[i].appendChild(ul);
        }
    </script>
</body>
</html>
