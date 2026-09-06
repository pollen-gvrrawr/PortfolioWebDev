<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Contact</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container-fluid d-flex flex-column align-items-center">
        <div class="navbar rounded-4 m-4 jetbrains-mono-reg">
            <ul>
                <li><a href="{{ url('/') }}">home</a></li>
                <li><a href="{{ url('/projects') }}">projects</a></li>
                <li><a href="{{ url('/gallery') }}">gallery</a></li>
                <li><a href="{{ url('/about') }}">about</a></li>
                <li><a href="{{ url('/contact') }}" class="is-active">contact</a></li>
            </ul>
        </div>
        <div class="contact-body">
            <div class="contact-container">
                <h1 class="name-text jetbrains-mono-bold">send me a message!</h1>
                <form action="" class="contact-form">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="" id="name" class="form-control mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="" id="email" class="form-control mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea name="" id="message" class="form-control mb-4" style="resize: none;" rows="3"></textarea>
                    <div class="row d-flex align-items-center">
                        <div class="col d-flex align-items-center">
                            <button type="submit" class="submit-btn">submit</button>
                        </div>
                        <div class="col d-flex justify-content-end align-items-center">
                            <div class="d-flex align-items-center contact-form-icons ">
                                <a href="https://www.linkedin.com/in/smnth-pln-guevarra/" target="_blank"><img src="{{ asset('images/linkedin.webp') }}" alt="linkedin logo"></a>
                                <a href="https://github.com/pollen-gvrrawr" target="_blank"><img src="{{ asset('images/github.webp') }}" alt="github logo"></a>
                                <a href="https://www.instagram.com/pollen4u/" target="_blank"><img src="{{ asset('images/instagram.webp') }}" alt="instagram logo"></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>