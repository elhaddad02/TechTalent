<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>
        <link rel="stylesheet" href="welcome.css">
        <link rel="stylesheet" href="fontawesome-free-6.0.0-web/css/all.css">
       
        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
       
       
        {{-- <style>
            nav ul {
                list-style: none;
                margin: 0;
                padding: 0;
            }
            nav ul li {
                display: inline-block;
                position: relative;
            }

            nav ul li a {
                display: block;
                padding: 10px 20px;
                text-decoration: none;
                color: #333;
                transition: background-color 0.3s;
            }

            nav ul li a:hover {
                background-color: #f0f0f0;
            }

            nav ul li ul {
                display: none;
                position: absolute;
                background-color: #fff;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                border: 1px solid #ccc;
            }

            nav ul li:hover ul {
                display: block;
            }

            nav ul li ul li {
                display: block;
                white-space: nowrap;
            }

            nav ul li ul li a {
                display: block;
                padding: 10px 20px;
                text-decoration: none;
                color: #333;
                transition: background-color 0.3s;
            }

            nav ul li ul li a:hover {
                background-color: #f0f0f0;
            }

       </style> --}}
        
    </head>
    <body>
        
        <nav class="navbar">
            {{-- <a class="navbar-logo" href="#">--}}
            <img src="GG.png" alt="">
            {{-- </a> --}}
            <div class="navbarContent" id="navbarContent">
                <ul class="navbar-list">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Accueil</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/afficherData">Portfolio</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="">Components</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="/profiles-creator">Créateurs</a>
                    </li>                    
                    @guest
                    <li class="lg">
                        <a href="/login">Login</a>
                    </li>
                    @endguest
                    @auth
                    <li class="user">{{ Auth::user()->name }}</li>                      
                    <li class="nav-item"><a class="nav-link" href="/logout"><i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>    
                    @endauth
                    <li class="nav-item">
                        <a  class="nav-link" href="/settings">                    
                            <i style="color: #000000" class="fa-solid fa-gear"></i>                        
                        </a>
                    </li>
                    
                   
                </ul>
               
            </div>
        </nav>   


    <script>
       function toggleDropdown(event) {
            event.preventDefault();
            const dropdownMenu = event.target.closest('.dropdown').querySelector('.dropdown-menu');
            dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';

        // Close the dropdown if clicked outside
            document.addEventListener('click', function onClickOutside(event) {
                if (!event.target.closest('.dropdown')) {
                    dropdownMenu.style.display = 'none';
                    document.removeEventListener('click', onClickOutside);
                }
            });
        }

    </script>
    </body>