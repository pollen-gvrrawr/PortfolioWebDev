<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container-fluid d-flex flex-column align-items-center">
        <div class="navbar rounded-4 m-4 jetbrains-mono-reg">
            <ul>
                <li><a href="{{ url('/') }}" class="is-active">home</a></li>
                <li><a href="{{ url('/projects') }}">projects</a></li>
                <li><a href="{{ url('/gallery') }}">gallery</a></li>
                <li><a href="{{ url('/about') }}">about</a></li>
                <li><a href="{{ url('/contact') }}">contact</a></li>
            </ul>
        </div>
        <div class="header w-100" style="background-image: url('{{ asset('images/header-bg.png') }}');">
            <div class="row" style="height: 100vh">
                <div class="col-8 d-flex flex-column justify-content-center" style="padding-left: 5rem;">
                    <h1 class="jetbrains-mono-bold fs-1">hi, i'm <span class="jetbrains-mono-bold name-text">sam guevarra</span></h1>
                    <p class="jetbrains-mono-bold display-4 title-text">Web Developer<br>& Designer</p>
                    <p style="width: 36vw">Creating meaningful and seamless website designs that reflect the brand's image and evoke emotions from its users.</p>
                    <a href="{{ asset('files/CV.pdf') }}" download="Sam_Guevarra_CV.pdf" class="dl-btn text-decoration-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#FFFFFF"><g fill="none"><path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"/><path fill="#FFFFFF" d="M20 15a1 1 0 0 1 1 1v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4a1 1 0 1 1 2 0v4h14v-4a1 1 0 0 1 1-1ZM12 2a1 1 0 0 1 1 1v10.243l2.536-2.536a1 1 0 1 1 1.414 1.414l-4.066 4.066a1.25 1.25 0 0 1-1.768 0L7.05 12.121a1 1 0 1 1 1.414-1.414L11 13.243V3a1 1 0 0 1 1-1Z"/></g></svg>
                        Download CV
                    </a>
                    <div class="d-flex align-items-center header-contacts">
                        <a href="https://www.linkedin.com/in/smnth-pln-guevarra/" target="_blank"><img src="{{ asset('images/linkedin.webp') }}" alt="linkedin logo"></a>
                    <a href="https://github.com/pollen-gvrrawr" target="_blank"><img src="{{ asset('images/github.webp') }}" alt="github logo"></a>
                    </div>
                </div>
                <div class="col-4 p-0 d-flex flex-column align-items-end justify-content-center p-5">
                    <div class="d-flex flex-column header-side-stats">
                        <p class="jetbrains-mono-bold fs-1">3+</p>
                        <p class="fs-6">dev years</p>
                    </div>
                    <hr class="line-stats">
                    <div class="d-flex flex-column header-side-stats">
                        <p class="jetbrains-mono-bold fs-1">20+</p>
                        <p class="fs-6">projects</p>
                    </div>
                    <hr class="line-stats">
                    <div class="d-flex flex-column header-side-stats">
                        <p class="jetbrains-mono-bold fs-1">10+</p>
                        <p class="fs-6">technologies</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-body">
            <div class="main-container">
                <div class="about row gap-4">
                    <div class="col">
                        <h1 class="title-text jetbrains-mono-bold display-2">about me</h1>
                        <p class="about-parag">Hi! I'm currently a fourth-year IT student from the University of Santo Tomas, specializing in web and mobile application development. I aspire to pave my career path as a full-stack developer and explore more programming technologies. The following are my primary interests and hobbies.</p>
                    </div>
                    <div class="col about-card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="rgb(169, 11, 11)"><g fill="none"><path d="M0 0h24v24H0z"/><path fill="rgb(169, 11, 11)" d="M14.486 3.143a1 1 0 0 1 .692 1.233l-4.43 15.788a1 1 0 0 1-1.926-.54l4.43-15.788a1 1 0 0 1 1.234-.693ZM7.207 7.05a1 1 0 0 1 0 1.414L3.672 12l3.535 3.535a1 1 0 1 1-1.414 1.415L1.55 12.707a1 1 0 0 1 0-1.414L5.793 7.05a1 1 0 0 1 1.414 0Zm9.586 1.414a1 1 0 1 1 1.414-1.414l4.243 4.243a1 1 0 0 1 0 1.414l-4.243 4.242a1 1 0 0 1-1.414-1.414L20.328 12l-3.535-3.536Z"/></g></svg>
                        <h3 class="name-text jetbrains-mono-bold">web development</h3>
                        <p class="about-parag">Pursuing a career in Information Technology naturally led me to <span style="font-style: italic">(somewhat)</span> enjoy web development, particularly UI design and front-end development!</p>
                        <p>01</p>
                    </div>
                    <div class="col about-card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="rgb(169, 11, 11)"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"/><path fill="rgb(169, 11, 11)" d="M3.255 3.667A1.01 1.01 0 0 1 4.022 2H16.5a4.5 4.5 0 1 1 0 9H4.022a1.01 1.01 0 0 1-.767-1.667l.754-.88a3 3 0 0 0 0-3.905l-.754-.88ZM6.062 4a5.004 5.004 0 0 1 0 5H16.5a2.5 2.5 0 0 0 0-5H6.062ZM3 16.5A4.5 4.5 0 0 1 7.5 12h12.478a1.01 1.01 0 0 1 .767 1.667l-.755.88a3 3 0 0 0 0 3.905l.755.88A1.01 1.01 0 0 1 19.978 21H7.5A4.5 4.5 0 0 1 3 16.5ZM7.5 14a2.5 2.5 0 0 0 0 5h10.438a5.004 5.004 0 0 1 0-5H7.5Z"/></g></svg>    
                        <h3 class="name-text jetbrains-mono-bold">literature</h3>
                        <p class="about-parag">Reading—and sometimes writing—fictional stories is one of my favorite pastimes; novels, comics, and fanfiction alike. I am also gradually getting into musicals and plays.</p>
                        <p>02</p>
                    </div>
                    <div class="col about-card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="rgb(169, 11, 11)"><g fill="none"><path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"/><path fill="rgb(169, 11, 11)" d="M10.077 2.614c.338-.76 1.379-.797 1.787-.114l.059.114l1.042 2.345a11 11 0 0 0 4.337 4.931l.322.189l1.85 1.04a1.01 1.01 0 0 1 .109 1.692l-.108.07l-1.851 1.04a11 11 0 0 0-4.502 4.782l-.157.338l-1.042 2.345c-.338.76-1.379.797-1.787.114l-.059-.114l-1.042-2.345a11 11 0 0 0-4.337-4.931l-.322-.189l-1.85-1.04a1.01 1.01 0 0 1-.109-1.692l.108-.07l1.851-1.04a11 11 0 0 0 4.502-4.782l.157-.338l1.042-2.345Zm9.144-.493a5.732 5.732 0 0 0 2.414 2.674c.16.09.16.32 0 .41A5.732 5.732 0 0 0 19.22 7.88a.241.241 0 0 1-.44 0a5.732 5.732 0 0 0-2.415-2.674a.236.236 0 0 1 0-.41A5.732 5.732 0 0 0 18.78 2.12a.241.241 0 0 1 .44 0Z"/></g></svg>
                        <h3 class="name-text jetbrains-mono-bold">graphic design</h3>
                        <p class="about-parag">Creating publication materials started as an academic requirement, but soon grew on me. I also enjoy digital art and have a small collection of my works.</p>
                        <p>03</p>
                    </div>
                </div>
                <hr class="section-line">
                <div class="skills row w-100">
                    <div class="col-7 p-0">
                        <h1 class="title-text jetbrains-mono-bold display-2">skills</h1>
                        <div class="d-flex flex-column gap-3">
                            <div class="row gap-3">
                            <div class="col skill-card">
                                <img src="{{ asset('images/skill-1.png') }}" alt="layers">
                                <div class="d-flex flex-column">
                                    <p class="fs-4">core frontend</p>
                                    <p>Building interactive, responsive UI layouts using HTML5, CSS3, and JavaScript.</p>
                                </div>
                            </div>
                            <div class="col skill-card">
                                <img src="{{ asset('images/skill-2.png') }}" alt="database">
                                <div class="d-flex flex-column">
                                    <p class="fs-4">database</p>
                                    <p>Storing, querying, and managing structured and relational data using SQL.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row gap-3">
                            <div class="col skill-card">
                                <img src="{{ asset('images/skill-3.png') }}" alt="API">
                                <div class="d-flex flex-column">
                                    <p class="fs-4">APIs & data fetching</p>
                                    <p>Connecting to backend services to request, parse, and display dynamic data.</p>
                                </div>
                            </div>
                            <div class="col skill-card">
                                <img src="{{ asset('images/skill-4.png') }}" alt="git branch">
                                <div class="d-flex flex-column">
                                    <p class="fs-4">version control</p>
                                    <p>Tracking code changes, managing branches, and collaborating.</p>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-5 p-0 ps-5">
                        <h1 class="name-text jetbrains-mono-bold" style="position: relative; top: 2rem; margin-bottom: 3rem">toolkit</h1>
                        <div class="toolkit-container">
                            <div class="toolkit-badge">
                                <img src="{{ asset('images/html.png') }}" alt="icon" class="toolkit-icon" /> HTML
                            </div>
                            <div class="toolkit-badge">
                                <img src="{{ asset('images/css.png') }}" alt="icon" class="toolkit-icon" /> CSS
                            </div>
                            <div class="toolkit-badge">
                                <img src="{{ asset('images/js.png') }}" alt="icon" class="toolkit-icon" /> JS
                            </div>
                            <div class="toolkit-badge">
                                <img src="{{ asset('images/react.png') }}" alt="icon" class="toolkit-icon" /> React
                            </div>
                            <div class="toolkit-badge">
                                <img src="{{ asset('images/php.png') }}" alt="icon" class="toolkit-icon" /> PHP
                            </div>
                            <div class="toolkit-badge">
                                <img src="{{ asset('images/aspnet.png') }}" alt="icon" class="toolkit-icon" /> ASP.NET
                            </div>
                            <div class="toolkit-badge">
                                <img src="{{ asset('images/kotlin.png') }}" alt="icon" class="toolkit-icon" /> Kotlin
                            </div>
                            <div class="toolkit-badge">
                                <img src="{{ asset('images/java.png') }}" alt="icon" class="toolkit-icon" /> Java
                            </div>
                            <div class="toolkit-badge">
                                <img src="{{ asset('images/mysql.png') }}" alt="icon" class="toolkit-icon" /> MySQL
                            </div>
                            <div class="toolkit-badge">
                                <img src="{{ asset('images/sqlite.png') }}" alt="icon" class="toolkit-icon" /> SQLite
                            </div>
                            <div class="toolkit-badge">
                                <img src="{{ asset('images/figma.png') }}" alt="icon" class="toolkit-icon" /> Figma
                            </div>
                            <div class="toolkit-badge">
                                <img src="{{ asset('images/mongodb.svg') }}" alt="icon" class="toolkit-icon" /> MongoDB
                            </div>
                            <div class="toolkit-badge">
                                <img src="{{ asset('images/bootstrap.webp') }}" alt="icon" class="toolkit-icon" /> Bootstrap
                            </div>
                            <div class="toolkit-badge">
                                <img src="{{ asset('images/maui.png') }}" alt="icon" class="toolkit-icon" /> .NET MAUI
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="section-line">
                <div class="projects w-100">
                    <h1 class="title-text jetbrains-mono-bold display-2 mb-4">sample projects</h1>
                    <div class="row gap-3">
                        <div class="col project-card">
                            <img src="{{ asset('images/viyarn.png') }}" alt="viyarn banner">
                            <h3 class="jetbrains-mono-bold name-text">Viyarn</h3>
                            <p>An online shop website to cater the business' customers. The page showcases the brand's different crochet and crafts available for selling.</p>
                        </div>
                        <div class="col project-card">
                            <img src="{{ asset('images/aralink.png') }}" alt="aralink banner">
                            <h3 class="jetbrains-mono-bold name-text">Aralink</h3>
                            <p>A donation website to connect interested donors with children in need of financial assistance for their education. Displays inspirational stories from past beneficiaries.</p>
                        </div>
                        <div class="col project-card">
                            <img src="{{ asset('images/found-pawmily.png') }}" alt="found pawmily banner">
                            <h3 class="jetbrains-mono-bold name-text">Found Pawmily</h3>
                            <p>An adoption website, specifically for cats and dogs in the Philippines, to find their furever homes. This includes a pet gallery, adoption, and volunteering forms.</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="contact row w-100">
            <div class="col">
                <h1 class="jetbrains-mono-bold title-text display-3">hit me up!</h1>
                <p>Send me a message through my email or any of my socials!</p>
            </div>
            <div class="col socials-container">
                <div class="socials">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="rgb(169, 11, 11)"><g fill="none"><path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"/><path fill="rgb(169, 11, 11)" d="M20 4a2 2 0 0 1 1.995 1.85L22 6v12a2 2 0 0 1-1.85 1.995L20 20H4a2 2 0 0 1-1.995-1.85L2 18V6a2 2 0 0 1 1.85-1.995L4 4h16Zm0 3.414l-6.94 6.94a1.5 1.5 0 0 1-2.12 0L4 7.414V18h16V7.414ZM18.586 6H5.414L12 12.586L18.586 6Z"/></g></svg>
                    <a href="mailto:sampauleenguevarra@gmail.com<">sampauleenguevarra@gmail.com</a>
                </div>
                <div class="socials">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="rgb(169, 11, 11)"><g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"/><path fill="rgb(169, 11, 11)" d="M8.172 15.829c3.845 3.845 7.408 4.266 8.454 4.305c1.264.046 2.554-.986 3.112-2.043c-.89-1.044-2.049-1.854-3.319-2.732c-.748.748-1.67 2.138-2.9 1.64c-.699-.281-2.425-1.076-3.933-2.585C8.077 12.906 7.283 11.18 7 10.482c-.498-1.231.896-2.156 1.645-2.905c-.878-1.29-1.674-2.479-2.716-3.324c-1.072.56-2.11 1.84-2.063 3.121c.039 1.046.46 4.609 4.306 8.455Zm8.38 6.303c-1.44-.053-5.521-.616-9.795-4.89c-4.273-4.273-4.836-8.353-4.89-9.794c-.08-2.196 1.602-4.329 3.545-5.162a1.47 1.47 0 0 1 1.445.159c1.608 1.173 2.717 2.95 3.67 4.342A1.504 1.504 0 0 1 10.35 8.7l-1.356 1.357C9.309 10.752 9.95 11.95 11 13c1.05 1.05 2.248 1.691 2.944 2.006l1.355-1.356a1.503 1.503 0 0 1 1.918-.171c1.42.984 3.088 2.077 4.304 3.634a1.47 1.47 0 0 1 .189 1.485c-.837 1.953-2.955 3.616-5.158 3.535Z"/></g></svg>
                    <a href="tel:+639603660492">+63 960 366 0492</a>
                </div>
                <div class="d-flex align-items-center header-contacts">
                    <a href="https://www.linkedin.com/in/smnth-pln-guevarra/" target="_blank"><img src="{{ asset('images/linkedin.webp') }}" alt="linkedin logo"></a>
                    <a href="https://github.com/pollen-gvrrawr" target="_blank"><img src="{{ asset('images/github.webp') }}" alt="github logo"></a>
                    <a href="https://www.instagram.com/pollen4u/" target="_blank"><img src="{{ asset('images/instagram.webp') }}" alt="instagram logo"></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>