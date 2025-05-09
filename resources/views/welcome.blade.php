<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>I.P.S. Auto Parts - Chat Admin</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #e60000 !important;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .hero-section {
            background-color: #e60000;
            color: white;
            padding: 80px 0;
        }
        .features-section {
            padding: 80px 0;
        }
        .feature-card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
            height: 100%;
        }
        .feature-card:hover {
            transform: translateY(-5px);
        }
        .feature-icon {
            font-size: 2.5rem;
            color: #e60000;
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #e60000;
            border-color: #e60000;
        }
        .btn-primary:hover {
            background-color: #cc0000;
            border-color: #cc0000;
        }
        .btn-outline-light:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        .footer {
            background-color: #343a40;
            color: white;
            padding: 40px 0;
        }
        .logo-container {
            background-color: #e60000;
            padding: 20px;
            border-radius: 8px;
            display: inline-block;
            margin-bottom: 20px;
        }
        .logo-text {
            font-weight: 700;
            font-size: 2.5rem;
            letter-spacing: 2px;
        }
        .auto-parts-text {
            font-size: 1.5rem;
            letter-spacing: 4px;
            font-weight: 500;
        }
    </style>
</head>
<body>
  

  
    <section class="hero-section">
        <div class="container text-center">
            <div class="logo-container mb-4">
                <div class="logo-text">I.P.S.</div>
                <div class="auto-parts-text">AUTO PARTS</div>
            </div>
            <h1 class="display-4 fw-bold mb-4">Chat Admin Panel</h1>
            <p class="lead mb-5">Manage all your customer inquiries and auto parts communications in one place</p>
            <div class="d-flex justify-content-center gap-3">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-light btn-lg px-4">Go to Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-light btn-lg px-4">Login</a>
                    <!-- @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg px-4">Register</a>
                    @endif -->
                @endauth
            </div>
        </div>
    </section>

   <section class="features-section">
        <div class="container">
            <h2 class="text-center mb-5">Key Features</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card feature-card p-4">
                        <div class="card-body text-center">
                            <div class="feature-icon">
                                <i class="bi bi-chat-dots"></i>
                            </div>
                            <h3 class="card-title">Real-time Chat</h3>
                            <p class="card-text">Connect with customers instantly and provide immediate assistance for their auto parts inquiries.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card p-4">
                        <div class="card-body text-center">
                            <div class="feature-icon">
                                <i class="bi bi-graph-up"></i>
                            </div>
                            <h3 class="card-title">Analytics Dashboard</h3>
                            <p class="card-text">Track customer inquiries, response times, and popular auto parts to improve your service.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card p-4">
                        <div class="card-body text-center">
                            <div class="feature-icon">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <h3 class="card-title">Secure Access</h3>
                            <p class="card-text">Role-based permissions ensure that your customer data remains protected at all times.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer">
        <div class="container text-center">
            <p>&copy; {{ date('Y') }} I.P.S. Auto Parts. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>