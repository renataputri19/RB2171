<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PADAMU NEGRI</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Hero Section */
        .hero {
            background: url('images/kantor 2.jpg') no-repeat center center/cover;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        .hero-content {
            background: rgba(0, 0, 0, 0.6); /* Dark overlay for better text visibility */
            padding: 20px;
            color: white;
            text-align: center;
            border-radius: 8px;
        }

        /* Footer */
        .footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 15px;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }
        .footer a {
            color: #0dcaf0;
        }
        .footer a:hover {
            text-decoration: underline;
        }

        /* Body for full height */
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Main container */
        .main-content {
            flex: 1;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">PADAMU NEGRI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @if(Auth::check())
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary text-white px-4" href="/admin/nilai">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link btn btn-success text-white px-4" href="/admin/login">Login</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="main-content">
        <section class="hero">
            <div class="hero-content">
                <h1 class="display-4 fw-bold">PADAMU NEGRI</h1>
                <p class="lead">PengumpulAn DatA MenujU zoNa intEGRItas</p>
                <a href="/admin/login" class="btn btn-primary btn-lg">Get Started</a>
            </div>
        </section>

        <!-- Additional Content Section -->
        <section class="text-center p-5">
            <h2>About Us</h2>
            <p>
                Our mission is to ensure data accuracy and integrity in achieving Zona Integritas.
                We focus on collaboration, transparency, and excellence in service delivery.
            </p>
        </section>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>© 2024 BPS Kota Batam: <a href="https://batamkota.bps.go.id" target="_blank">batamkota.bps.go.id</a></p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
