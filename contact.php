<!DOCTYPE html>
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
            transition: transform 0.3s, box-shadow 0.3s; /* Animasi transisi */
            border: 1px solid #dee2e6; /* Border default */
            border-radius: 8px; /* Sudut melengkung */
        }

        .service-card:hover {
            transform: scale(1.05); /* Zoom saat hover */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Bayangan saat hover */
        }

        .btn-custom {
            background-color: #007bff; /* Warna tombol */
            color: white; /* Warna teks tombol */
        }
        
        .btn-custom:hover {
            background-color: #0056b3; /* Warna saat hover */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Portofolio Dava</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="myskill.php">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="portofolio.php">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
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
    <footer class="bg-dark text-center text-white py-3">
        <p>&copy; 2024 Dava Pangestu Putera. All rights reserved.</p>
    </footer>
    </body>
    </html>
