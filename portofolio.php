<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/stiling.css">
    <title>Portfolio</title>
    <style>
        /* Tambahkan CSS untuk efek hover */
        .service-card {
            transition: transform 0.2s, box-shadow 0.2s;
            border: 1px solid #dee2e6;
            border-radius: 8px;
        }

        .service-card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-custom {
            background-color: #007bff;
            color: white;
        }
        
        .btn-custom:hover {
            background-color: #0056b3;
        }

        /* Portfolio Section */
        .portfolio-section {
            padding: 60px 0;
        }

        .portfolio-item {
            transition: transform 0.3s;
            border-radius: 8px;
            overflow: hidden;
        }

        .portfolio-item img {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease;
        }

        .portfolio-item:hover img {
            transform: scale(1.1);
        }

        .portfolio-title {
            margin-top: 15px;
            text-align: center;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Portofolio Dava </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-light" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="myskill.php">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="portofolio.php">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section id="home" class="hero-section d-flex align-items-center" style="height: 100vh; background-image: url('suasana kelas.png'); background-size: cover; background-position: center;">
    <div class="container text-center text-white">
        <h1 class="display-4 fw-bold">Hello, I'm Dava Pangestu Putera</h1>
        <h2 class="mb-3 animated-text">Informatics Student at Universitas Pembangunan Jaya</h2>
        <p class="lead">Passionate about web development, design, and creating impactful digital experiences.</p>
        <a href="#about" class="btn btn-custom mt-4">More About Me</a>
    </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio-section">
    <div class="container">
        <h2 class="text-center mb-5">My Portfolio</h2>
        <div class="row">
            <!-- Portfolio Item 1 -->
            <div class="col-md-4 mb-4">
                <div class="portfolio-item">
                    <img src="neraca gaota.png" alt="Project 1" class="img-fluid">
                    <div class="portfolio-title">
                        <h5>Financial Office</h5>
                        <p>bertanggung jawab untuk mengelola keuangan, termasuk pengelolaan anggaran, pembukuan, pelaporan keuangan, pengelolaan kas, dan kepatuhan pajak.</p>
                    </div>
                </div>
            </div>
            <!-- Portfolio Item 2 -->
            <div class="col-md-4 mb-4">
                <div class="portfolio-item">
                    <img src="Screenshot 2024-10-23 200533.png" alt="Project 2" class="img-fluid">
                    <div class="portfolio-title">
                        <h5>Website And DataBase Project</h5>
                        <p>Merancang dan mengembangkan situs web responsif untuk sebuah bisnis lokal menggunakan HTML, CSS, JavaScript, dan MySQL.</p>
                    </div>
                </div>
            </div>
            <!-- Portfolio Item 3 -->
            <div class="col-md-4 mb-4">
                <div class="portfolio-item">
                    <img src="gambar ngasal.jpeg" alt="Project 3" class="img-fluid">
                    <div class="portfolio-title">
                        <h5>Backgorund ilustrator</h5>
                        <p> saya memiliki keahlian dalam menciptakan latar belakang yang mendukung narasi visual dalam berbagai proyek, termasuk animasi, game, dan saya memakai alpikasi clip studi paint</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="contact.php" class="btn btn-custom">Contact Me for More</a>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Contact Me</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form id="contactForm">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-custom">Send Message</button>
                </form>
                <div id="formMessage" class="mt-3"></div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-4">
    <p class="mb-0">© 2024 Dava Pangestu Putera | Connect with me</p>
    <div class="social-icons mt-2">
        <a href="#"><i class="fab fa-instagram text-white mx-2"></i></a>
        <a href="#"><i class="fab fa-whatsapp text-white mx-2"></i></a>
        <a href="#"><i class="fab fa-tiktok text-white mx-2"></i></a>
        <a href="#"><i class="fab fa-linkedin text-white mx-2"></i></a>
    </div>
</footer>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const contactForm = document.getElementById('contactForm');
        const formMessage = document.getElementById('formMessage');

        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(this);

                fetch('submit_form.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    formMessage.innerHTML = data.message;
                    formMessage.className = data.success ? 'alert alert-success' : 'alert alert-danger';
                    if (data.success) {
                        contactForm.reset();
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    formMessage.innerHTML = 'An error occurred. Please try again later.';
                    form
