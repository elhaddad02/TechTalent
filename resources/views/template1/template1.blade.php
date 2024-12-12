<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$data[0]->name}}</title>
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.0.0-web/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/styles.css') }}">
    {{-- <link rel="stylesheet" href="styles/styles.css"> --}}
    <link rel="preconnect" href="{{ asset('https://fonts.googleapis.com') }}">
    <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com" crossorigin') }}">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer') }}" />
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet') }}">
</head>
<body>
    {{-- @include('navbar') --}}
    <div class="main-content">
        <header class="container header active" id="home">
            <div class="header-content">
                <div class="left-header">
                    <div class="h-shape"></div>
                    <div class="image">
                        <img src="{{ Storage::url($data[0]->photo) }}" alt="">
                    </div>
                </div>
                <div class="right-header">
                    <h1 class="name">
                        Hello, I'm <span>{{$data[0]->name}}</span>.</br>
                        I'm a {{$data[0]->titre_professionnel}}.
                    </h1>
                    <p>
                        {{$data[0]->biographie}}
                    </p>
                    {{-- <div class="btn-con">
                        <a href="https://drive.google.com/file/d/1VuclWi8s5HNoOaTDLWDH2akzpUqMiu-4/view?usp=sharing" class="main-btn">
                            <span class="btn-text">Download CV</span>
                            <span class="btn-icon"><i class="fas fa-download"></i></span>
                        </a>
                    </div> --}}
                    
                </div>
               
            </div>
        </header>
        <main>
            <section class="container about" id="about">
                <div class="main-title">
                    <h2>About <span>me</span><span class="bg-text">my stats</span></h2>
                </div>
                <div class="about-container">
                    <div class="left-about">
                        <h4>Information About me</h4>
                        <p>
                            {{$data[0]->biographie}}
                        </p>
                        {{-- <div class="btn-con">
                            <a href="https://drive.google.com/file/d/1VuclWi8s5HNoOaTDLWDH2akzpUqMiu-4/view?usp=sharing" class="main-btn">
                                <span class="btn-text">Download CV</span>
                                <span class="btn-icon"><i class="fas fa-download"></i></span>
                            </a>
                        </div> --}}
                    </div>
                    <div class="right-about">
                        <div class="about-item">
                            <div class="abt-text">
                                <p class="large-text">30+</p>
                                <p class="small-text">Projects <br /> Completed</p>
                            </div>
                        </div>
                        <div class="about-item">
                            <div class="abt-text">
                                <p class="large-text">03+</p>
                                <p class="small-text">Years of <br /> experience</p>
                            </div>
                        </div>
                        <div class="about-item">
                            <div class="abt-text">
                                <p class="large-text">09+</p>
                                <p class="small-text">Happy <br /> Clients</p>
                            </div>
                        </div>
                        <div class="about-item">
                            <div class="abt-text">
                                <p class="large-text">57+</p>
                                <p class="small-text">Customer <br /> reviews</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-stats">
                    <h4 class="stat-title">My Skills</h4>
                    <div class="progress-bars">
                        
                        <div class="progress-bar">
                            <p><h3 style="font-weight: bold">programming Languages: </h3><span class="prog-title" id="prog-lang">{{$data[0]->programming_languages}}</span></p></br>
                            <div class="progress-con">
                                <div class="progress">
                                    <span class="Back-End"></span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-bar">
                            <p><h3 style="font-weight: bold">Frameworks: </h3><span class="prog-title" id="frameworks">{{$data[0]->frameworks}}</span></br>  </p>
                            <div class="progress-con">
                                <div class="progress">
                                    <span class="Frameworks"></span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-bar">
                            <p><h3 style="font-weight: bold">Soft Skills:</h3><span class="prog-title" id="soft-skills">{{$data[0]->soft_skills}}</span></br>   </p>
                            <div class="progress-con">
                                <div class="progress">
                                    <span class="Desktop"></span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-bar">
                            <p ><h3 style="font-weight: bold">Langues: </h3><span class="prog-title" id="lang">{{$data[0]->languages}}</span></br>  </p>
                            <div class="progress-con">
                                <div class="progress">
                                    <span class="Desktop"></span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-bar">
                            <p><h3 style="font-weight: bold">Database_data:</h3><span class="prog-title">MySQL, MongoDB, NoSQL, SQLite, SQL Server.</span></br></p>
                            <div class="progress-con">
                                <div class="progress">
                                    <span class="Database_data"></span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-bar">
                            <p ><h3 style="font-weight: bold"> Design methods: </h3><span class="prog-title">UML, MERISE, AGILE.</span></br></p>
                            <div class="progress-con">
                                <div class="progress">
                                    <span class="design_methods"></span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-bar">
                            <p><h3>Logiciel / IDE:</h3><span class="prog-title">Pycharm 3.2, Python IDLE 3.10, 
                                Jira, Code Visual Studio, MySQL (workbench), GanttProject, Star UML, Figma, Adobe XD, Docker, SonarQube, Git, Githup, Android Studio. </span></br></p>
                            <div class="progress-con">
                                <div class="progress">
                                    <span class="Logiciel_IDE"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="stat-title">My Timeline</h4>
                <div class="timeline">
                    @for($i=0; $i<count($diplomas); $i++)
                    <div class="timeline-item">
                        <div class="tl-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        {{-- <p>{{count($diplomas)}}</p> --}}
                        <p class="tl-duration">{{$diplomas[$i]->date_formation}}</p>
                        <h4>{{$diplomas[$i]->nom_diplomes}}</h4>
                        <h5> {{$diplomas[$i]->nom_etablissement}} </h5>
                    </div>
                    @endfor

                    {{-- <div class="timeline-item">
                        <div class="tl-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <p class="tl-duration">2020 — 2022</p>
                        <h5>IT Development Diploma<span> - OFPPT NTIC1</span></h5>
                    
                    </div>
                    <div class="timeline-item">
                        <div class="tl-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <p class="tl-duration">01/12/2022 — 31/05/2023</p>
                        <h5>Marketer, and parameter programmer (remote)<span> - Flash Growing</span></h5>
                        
                    </div>
                    <div class="timeline-item">
                        <div class="tl-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <p class="tl-duration">01/04/2022 — 08/05/2022</p>
                        <h5>final training course <span> - KARAMF TEXTILE  </span></h5>
                        
                    </div> --}}
                </div>
            </section>
            <section class="container" id="portfolio">
                <div class="main-title">
                    <h2>My <span>Portfolio</span><span class="bg-text">My Work</span></h2>
                </div>
                <p class="port-text">
                    Here is some of my work that I've done in various programming languages.
                </p>
                <div class="portfolios">
                    <div class="portfolio-item">
                        <div class="image">
                            <img src="{{ Storage::url($data[0]->project_image) }}" alt="">
                        </div>
                        <div style="text-align: center">
                            <h3><span class="">{{$data[0]->project_title}}</span></h3>
                            <a style="color: gray" href="{{$data[0]->project_link}}" class="icon">
                                <i class="fa-solid fa-link"></i> voir le projet
                            </a>
                        </div>
                    </div>
                    <div class="portfolio-item">
                        <div class="image">
                            <img src="{{ asset('img/hi5.png') }}" alt="">
                        </div>
                        <div style="text-align: center">
                            <h3><span class="">Restaurent</span></h3>
                            <a style="color: gray" href="{{$data[0]->project_link}}" class="icon">
                                <i class="fa-solid fa-link"></i> voir le projet
                            </a>
                        </div>
                    
                    </div>
                    {{-- <div class="portfolio-item">
                        <div class="image">
                            <img src="img/hi1.png" alt="">
                        </div>
                        
                    </div> --}}
                    <div class="portfolio-item">
                        <div class="image">
                            <img src="{{ asset('img/hi2.png') }}" alt="">
                        </div>
                        <div style="text-align: center">
                            <h3><span class="">Agence Voyage</span></h3>
                            <a style="color: gray" href="{{$data[0]->project_link}}" class="icon">
                                <i class="fa-solid fa-link"></i> voir le projet
                            </a>
                        </div>
                        
                    </div>
                    <div class="portfolio-item">
                        <div class="image">
                            <img src="{{ asset('img/hi3.png') }}" alt="">
                        </div>
                        <div style="text-align: center">
                            <h3><span class="">{{$data[0]->project_title}}</span></h3>
                            <a style="color: gray" href="https://enassirisouhaila.github.io/adex-master/" class="icon">
                                <i class="fa-solid fa-link"></i> voir le projet
                            </a>
                        </div>

                        
                    </div>
                    <div class="portfolio-item">
                        <div class="image">
                            <img src="{{asset('img/hi4.png')}}" alt="">
                        </div>
                    
                        <div style="text-align: center">
                            <h3><span class="">{{$data[0]->project_title}}</span></h3>
                            <a style="color: gray" href="https://enassirisouhaila.github.io/adex-master/" class="icon">
                                <i class="fa-solid fa-link"></i> voir le projet
                            </a>
                        </div>

                    </div>
                    <div class="portfolio-item">
                        <div class="image">
                            <img src="{{ asset('img/hi6.png')}}" alt="">
                        </div>
                        <div style="text-align: center">
                            <h3><span class="">{{$data[0]->project_title}}</span></h3>
                            <a style="color: gray" href="https://enassirisouhaila.github.io/Restaurant-Landing-Page/" class="icon">
                                <i class="fa-solid fa-link"></i> voir le projet
                            </a>
                        </div>
                        
                            
                    </div>
                </div>
            </section>
            
            <section class="container contact" id="contact">
                <div class="contact-container">
                    <div class="main-title">
                        <h2>Contact <span>Me</span><span class="bg-text">Contact</span></h2>
                    </div>
                    <div class="contact-content-con">
                        <div class="left-contact">
                            <h4>Contact me here</h4>
                            <p>
                                If you find a problem with this site or something you think I should do, 
                                thank you for sharing your reviews with me, so that all about me,if you need more information
                                or some help, just contact me.
                            </p>
                            <div class="contact-info">
                                <div class="contact-item">
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Location</span>
                                    </div>
                                    <p>
                                        : {{$data[0]->adresse}}
                                    </p>
                                </div>
                                <div class="contact-item">
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                        <span>Email</span>
                                    </div>
                                    <p>
                                        <span>: {{$data[0]->email}}</span>
                                    </p>
                                </div>
                                <div class="contact-item">
                                    <div class="icon">
                                        <i class="fas fa-user-graduate"></i>
                                        <span>Mobile Number</span>
                                    </div>
                                    <p>
                                        <span>: {{$data[0]->numberphone}}</span>
                                    </p>
                                </div>
                                
                            </div>
                            <div class="contact-icons">
                                <div class="contact-icon">
                                    <a href="https://shorturl.at/hmMO7" target="_blank">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                    <a href="https://github.com/ENASSIRISOUHAILA" target="_blank">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="right-contact">
                            {{-- <div class="submit-btn">
                                <a href="https://drive.google.com/file/d/1VuclWi8s5HNoOaTDLWDH2akzpUqMiu-4/view?usp=sharing" class="main-btn">
                                    <span class="btn-text">Download CV</span>
                                    <span class="btn-icon"><i class="fas fa-download"></i></span>
                                </a>
                            </div> --}}
                            <form action="https://formsubmit.co/souhailaennassiri4@gmail.com" method="post" class="contact-form">
                                <div class="input-control i-c-2">
                                    <input type="text" required placeholder="YOUR NAME" name="name">
                                    <input type="email" required placeholder="YOUR EMAIL" name="email">
                                </div>
                                <div class="input-control">
                                    <textarea  cols="15" rows="8"  type="textarea" required placeholder="YOUR MESSAGE..." name="message"></textarea>
                                </div> 

                                <input type="hidden" name="_captcha" value="false">
                                <input type="hidden" name="_next" value="http://127.0.0.1:5500/">
                                <button  style="background-color: #ff0505; ; color: rgb(255, 255, 255); font-size:20px ;" type="submit">send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <div class="controls">
            <div class="control active-btn" data-id="home" >
                <i class="fas fa-home"></i>
            </div>
            <div class="control" data-id="about">
                <i class="fas fa-user"></i>
            </div>
            <div class="control" data-id="portfolio">
                <i class="fas fa-briefcase"></i>
            </div>
            {{-- <div class="control" data-id="blogs">
                <i class="far fa-newspaper"></i>
            </div> --}}
            <div class="control" data-id="contact">
                <i class="fas fa-envelope-open"></i>
            </div>
        </div>
        <div class="theme-btn">
            <i class="fas fa-adjust"></i>
        </div>
    </div>
    <script src="{{ asset('app.js')}}"></script>
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