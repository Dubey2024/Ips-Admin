<x-guest-layout>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login - I.P.S. Auto Parts</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   
        <style>
            :root {
                --primary: #e60000;
                --primary-light: #ff3333;
                --dark: #121a2e;
                --card-bg: #1a1a1a;
                --card-outer: rgba(30, 41, 59, 0.8);
                --light: #ffffff;
                --gray: #94a3b8;
                --input-bg: #f1f5f9;
                --input-border: #e2e8f0;
            }
            
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            body {
                font-family: 'Inter', sans-serif;
                background-image: url('asset/images/background.png');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                color: var(--light);
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 20px;
            }
            
            .container {
                position: relative;
                z-index: 1;
                width: 100%;
                max-width: 450px;
            }
            
            .login-card-wrapper {
                background-color: var(--card-outer);
                border-radius: 12px;
                padding: 2px;
                box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
                overflow: hidden;
            }
            
            .login-card {
                background-color: var(--card-bg);
                border-radius: 10px;
                width: 100%;
                padding: 40px 30px;
                position: relative;
                overflow: hidden;
            }
            
            .login-card::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 4px;
                background: var(--primary);
            }
            
            .logo-container {
                text-align: center;
                margin-bottom: 30px;
            }
            
            .logo-img {
                /* width: 90px; */
                height: 90px;
                object-fit: contain;
                /* background-color: white; */
                border-radius: 0; 
                padding: 0; 
                display: inline-block; 
            }
            
            .login-title {
                font-size: 1.75rem;
                font-weight: 700;
                text-align: center;
                margin-bottom: 30px;
                color: var(--light);
            }
            
            .form-group {
                margin-bottom: 24px;
            }
            
            .form-label {
                display: block;
                margin-bottom: 8px;
                font-size: 0.95rem;
                font-weight: 500;
                color: var(--gray);
            }
            
            .input-wrapper {
                position: relative;
            }
            
            .form-input {
                width: 100%;
                padding: 12px 16px;
                background-color: var(--input-bg);
                border: 1px solid var(--input-border);
                border-radius: 6px;
                color: #0f172a;
                font-family: 'Inter', sans-serif;
                font-size: 0.95rem;
                transition: all 0.2s ease;
            }
            
            .form-input:focus {
                outline: none;
                border-color: var(--primary);
                box-shadow: 0 0 0 2px rgba(230, 0, 0, 0.2);
            }
            
            .password-toggle {
                position: absolute;
                right: 12px;
                top: 50%;
                transform: translateY(-50%);
                background: none;
                border: none;
                color: #64748b;
                cursor: pointer;
                font-size: 1rem;
                padding: 4px;
                transition: color 0.2s ease;
            }
            
            .password-toggle:hover {
                color: var(--primary);
            }
            
            .form-footer {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 24px;
                flex-wrap: wrap;
                gap: 10px;
            }
            
            .remember-me {
                display: flex;
                align-items: center;
            }
            
            .remember-checkbox {
                appearance: none;
                -webkit-appearance: none;
                width: 18px;
                height: 18px;
                background-color: transparent;
                border: 1px solid var(--gray);
                border-radius: 4px;
                margin-right: 8px;
                position: relative;
                cursor: pointer;
                transition: all 0.2s ease;
            }
            
            .remember-checkbox:checked {
                background-color: var(--primary);
                border-color: var(--primary);
            }
            
            .remember-checkbox:checked::after {
                content: '';
                position: absolute;
                top: 3px;
                left: 6px;
                width: 4px;
                height: 8px;
                border: solid white;
                border-width: 0 2px 2px 0;
                transform: rotate(45deg);
            }
            
            .remember-text {
                font-size: 0.9rem;
                color: var(--gray);
            }
            
            .forgot-password {
                font-size: 0.9rem;
                color: var(--gray);
                text-decoration: none;
                transition: all 0.2s ease;
            }
            
            .forgot-password:hover {
                color: var(--primary);
            }
            
            .btn-login {
                display: block;
                width: 100%;
                padding: 12px;
                background-color: var(--primary);
                color: var(--light);
                border: none;
                border-radius: 6px;
                font-family: 'Inter', sans-serif;
                font-size: 1rem;
                font-weight: 600;
                cursor: pointer;
                transition: all 0.2s ease;
                position: relative;
                overflow: hidden;
            }
            
            .btn-login:hover {
                background-color: var(--primary-light);
            }
            
            .btn-login::after {
                content: '';
                position: absolute;
                top: 50%;
                left: 50%;
                width: 100%;
                height: 100%;
                background-color: rgba(255, 255, 255, 0.1);
                border-radius: 50%;
                transform: translate(-50%, -50%) scale(0);
                transition: transform 0.4s ease-out;
            }
            
            .btn-login:active::after {
                transform: translate(-50%, -50%) scale(2);
                opacity: 0;
            }
            
            
            .error-message {
                color: var(--primary-light);
                font-size: 0.8rem;
                margin-top: 5px;
            }
            
            .status-message {
                background-color: rgba(0, 128, 0, 0.1);
                border: 1px solid rgba(0, 128, 0, 0.2);
                color: #10b981;
                padding: 10px;
                border-radius: 6px;
                margin-bottom: 20px;
                font-size: 0.9rem;
            }
            
            @media (max-width: 480px) {
                .login-card {
                    padding: 30px 20px;
                }
                
                .login-title {
                    font-size: 1.5rem;
                }
                
                .form-footer {
                    flex-direction: column;
                    align-items: flex-start;
                }
                
                .forgot-password {
                    margin-top: 10px;
                }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="login-card-wrapper">
                <div class="login-card">
                    <div class="logo-container">
                        <img src="{{asset('asset/images/ipslogo.jpg') }}" alt="I.P.S. Auto Parts" class="logo-img">
                    </div>
                    
                    <h1 class="login-title">Admin Login</h1>
                    
                    <!-- Session Status -->
                    @if (session('status'))
                        <div class="status-message">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <!-- Email Address -->
                        <div class="form-group">
                            <label for="email" class="form-label">Email Address</label>
                            <div class="input-wrapper">
                                <input id="email" class="form-input" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                            </div>
                            @error('email')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <!-- Password -->
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-wrapper">
                                <input id="password" class="form-input" type="password" name="password" required autocomplete="current-password">
                                <button type="button" class="password-toggle" id="togglePassword">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                            </div>
                            @error('password')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <!-- Remember Me and Forgot Password -->
                        <div class="form-footer">
                            <div class="remember-me">
                                <input id="remember_me" type="checkbox" class="remember-checkbox" name="remember">
                                <label for="remember_me" class="remember-text">Remember me</label>
                            </div>
                            
                            @if (Route::has('password.request'))
                                <a class="forgot-password" href="{{ route('password.request') }}">
                                    Forgot password?
                                </a>
                            @endif
                        </div>
                        
                        <button type="submit" class="btn-login">
                            Log in
                        </button>
                    </form>
                </div>
            </div>
        </div>
        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const togglePassword = document.getElementById('togglePassword');
                const passwordInput = document.getElementById('password');
                
                togglePassword.addEventListener('click', function() {
                    // Toggle the type attribute
                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);
                    
                    // Toggle the icon
                    this.querySelector('i').classList.toggle('fa-eye');
                    this.querySelector('i').classList.toggle('fa-eye-slash');
                });
            });
        </script>
    </body>
    </html>
</x-guest-layout>