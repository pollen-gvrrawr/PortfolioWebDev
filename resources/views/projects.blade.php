<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Projects</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container-fluid d-flex flex-column align-items-center">
        <div class="navbar rounded-4 m-4 jetbrains-mono-reg">
            <ul>
                <li><a href="{{ url('/') }}">home</a></li>
                <li><a href="{{ url('/projects') }}" class="is-active">projects</a></li>
                <li><a href="{{ url('/gallery') }}">gallery</a></li>
                <li><a href="{{ url('/about') }}">about</a></li>
                <li><a href="{{ url('/contact') }}">contact</a></li>
            </ul>
        </div>
        <div class="page-header w-100" style="background-image: url('{{ asset('images/header-bg.jpg') }}');">
            <h1 class="title-text display-1 jetbrains-mono-bold">projects</h1>
            <p class="mb-5">Browse and explore some of my past projects!</p>
        </div>
        <div class="main-body">
            <div class="main-container">
                <div class="project-container">
                    <div class="project2-card">
                        <img src="{{ asset('images/proj-tmb-01.png') }}" alt="project thumbnail">
                        <div class="project-details-box">
                            <p class="jetbrains-mono-bold name-text mb-1">GAStos: Real-Time Community Fuel Price Tracker</p>
                            <p class="mb-0">Gas station locator with real-time crowdsourced data for prices with upvotes and downvotes for data reliability.</p>
                            <div class="d-flex gap-2 mt-3 tags-container">
                                <span>group work</span>
                                <span>React</span>
                                <span>MongoDB</span>
                                <span>fetch api</span>
                            </div>
                        </div>
                    </div>
                    <div class="project2-card">
                        <img src="{{ asset('images/proj-tmb-02.png') }}" alt="project thumbnail">
                        <div class="project-details-box">
                            <p class="jetbrains-mono-bold name-text mb-1">Barangay Management System</p>
                            <p class="mb-0">A digital platform that centralizes resident profiles, doument processing, and community incident reports.</p>
                            <div class="d-flex gap-2 mt-3 tags-container">
                                <span>group work</span>
                                <span>PHP</span>
                                <span>MySQL</span>
                            </div>
                        </div>
                    </div>
                    <div class="project2-card">
                        <img src="{{ asset('images/proj-tmb-03.png') }}" alt="project thumbnail">
                        <div class="project-details-box">
                            <p class="jetbrains-mono-bold name-text mb-1">FoundPawmily: Cats & Dogs Adoption Site</p>
                            <p class="mb-0">An adoption website for cats and dogs across the country with application forms for volunteering in different shelters.</p>
                            <div class="d-flex gap-2 mt-3 tags-container">
                                <span>individual work</span>
                                <span>ASP.NET</span>
                                <span>MySQL</span>
                                <span>Angular</span>
                            </div>
                        </div>
                    </div>
                    <div class="project2-card">
                        <img src="{{ asset('images/proj-tmb-04.jpeg') }}" alt="project thumbnail">
                        <div class="project-details-box">
                            <p class="jetbrains-mono-bold name-text mb-1">Viyarn: Online Crochet Catalog</p>
                            <p class="mb-0">An online crochet catalog that allows customers to browse handmade items, customize design preferences, and submit direct order forms for custom orders.</p>
                            <div class="d-flex gap-2 mt-3 tags-container">
                                <span>group work</span>
                                <span>Bootstrap</span>
                                <span>MySQL</span>
                            </div>
                        </div>
                    </div>
                    <div class="project2-card">
                        <img src="{{ asset('images/proj-tmb-05.png') }}" alt="project thumbnail">
                        <div class="project-details-box">
                            <p class="jetbrains-mono-bold name-text mb-1">To-Do List</p>
                            <p class="mb-0">A simple to-do list web app where users can add, edit, delete, and mark items as done.</p>
                            <div class="d-flex gap-2 mt-3 tags-container">
                                <span>individual work</span>
                            </div>
                        </div>
                    </div>
                    <div class="project2-card">
                        <img src="{{ asset('images/proj-tmb-06.png') }}" alt="project thumbnail">
                        <div class="project-details-box">
                            <p class="jetbrains-mono-bold name-text mb-1">Keluarga Net Income Manager</p>
                            <p class="mb-0">A dedicated native application for the business that automates calculation of total revenue, expenses, and net income while also generating relevant reports.</p>
                            <div class="d-flex gap-2 mt-3 tags-container">
                                <span>group work</span>
                                <span>.NET MAUI</span>
                                <span>SQLite</span>
                                <span>ChartsJS</span>
                            </div>
                        </div>
                    </div>
                    <div class="project2-card">
                        <img src="{{ asset('images/proj-tmb-07.png') }}" alt="project thumbnail">
                        <div class="project-details-box">
                            <p class="jetbrains-mono-bold name-text mb-1">book nook: writing repository</p>
                            <p class="mb-0">A platform design for authors and people with writing hobby to organize, store, and manage drafts, character profiles, and story outlines in one accessible space.</p>
                            <div class="d-flex gap-2 mt-3 tags-container">
                                <span>self project</span>
                                <span>PHP</span>
                                <span>MySQL</span>
                            </div>
                        </div>
                    </div>
                    <div class="project2-card">
                        <img src="{{ asset('images/proj-tmb-08.png') }}" alt="project thumbnail">
                        <div class="project-details-box">
                            <p class="jetbrains-mono-bold name-text mb-1">Aralink: Bridging Students with Quality Education</p>
                            <p class="mb-0">An online donation platform concept designed to connect underprivileged students with donors to fund educational materials, tuition, and learning resources.</p>
                            <div class="d-flex gap-2 mt-3 tags-container">
                                <span>group work</span>
                                <span>UI design</span>
                                <span>Figma</span>
                            </div>
                        </div>
                    </div>
                    <div class="project2-card">
                        <img src="{{ asset('images/proj-tmb-09.png') }}" alt="project thumbnail">
                        <div class="project-details-box">
                            <p class="jetbrains-mono-bold name-text mb-1">JYPSHOP</p>
                            <p class="mb-0">An intuitive UI design concept tailored for browsing, previewing, and ordering official K-pop merchandise, album releases, and exclusive fan collectibles.</p>
                            <div class="d-flex gap-2 mt-3 tags-container">
                                <span>individual work</span>
                                <span>UI design</span>
                                <span>Android Studio</span>
                            </div>
                        </div>
                    </div>
                    <div class="project2-card">
                        <img src="{{ asset('images/proj-tmb-10.png') }}" alt="project thumbnail">
                        <div class="project-details-box">
                            <p class="jetbrains-mono-bold name-text mb-1">Orbit: E-pub Reader</p>
                            <p class="mb-0">A mobile application designed to organize digital book collections with user account and authentication supported.</p>
                            <div class="d-flex gap-2 mt-3 tags-container">
                                <span>individual work</span>
                                <span>Android Studio</span>
                                <span>Firebase Auth</span>
                            </div>
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