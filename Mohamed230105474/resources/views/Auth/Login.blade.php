<!-- filepath: d:\Back-End\Mohamed230105474\resources\views\login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
        }

        .login-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            width: 400px;
        }

        .login-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .login-header h1 {
            color: #333;
            font-size: 1.8em;
            margin-bottom: 10px;
        }

        .input-group {
            margin-bottom: 20px;
            position: relative;
        }

        .input-group input {
            width: 100%;
            padding: 15px;
            border: none;
            border-bottom: 2px solid #ddd;
            outline: none;
            font-size: 1em;
            transition: 0.3s;
            background: transparent;
        }

        .input-group input:focus,
        .input-group input:valid {
            border-bottom-color: #4ecdc4;
        }

        .input-group label {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
            pointer-events: none;
            transition: 0.3s;
        }

        .input-group input:focus ~ label,
        .input-group input:valid ~ label {
            top: -5px;
            font-size: 0.8em;
            color: #4ecdc4;
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            margin: 20px 0;
            font-size: 0.9em;
        }

        .remember-forgot a {
            color: #666;
            text-decoration: none;
        }

        .remember-forgot a:hover {
            color: #4ecdc4;
        }

        .login-button {
            width: 100%;
            padding: 15px;
            background: #4ecdc4;
            color: white;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            font-size: 1em;
            transition: 0.3s;
        }

        .login-button:hover {
            background: #45b7b0;
            transform: translateY(-2px);
        }

        .social-login {
            margin-top: 30px;
            text-align: center;
        }

        .social-login p {
            color: #666;
            margin-bottom: 15px;
        }

        .social-icons a {
            display: inline-block;
            margin: 0 10px;
            color: #666;
            font-size: 1.5em;
            transition: 0.3s;
        }

        .social-icons a:hover {
            color: #4ecdc4;
        }

        @media (max-width: 480px) {
            .login-container {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1>Welcome Back</h1>
            <p>Please login to continue</p>
        </div>

        <form id="loginForm" method="POST" action="{{ route('auth.login') }}">
            @csrf
            <div class="input-group">
                <input type="email" name="email" required>
                <label>Email Address</label>
            </div>

            <div class="input-group">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>

            <div class="remember-forgot">
                <label>
                    <input type="checkbox" name="remember"> Remember me
                </label>
                <!-- <a href="{{ route('password.request') }}">Forgot Password?</a> -->
            </div>

            <button type="submit" class="login-button">Sign In</button>
        </form>

        <div class="social-login">
            <p>Or sign in with</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-google"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Add your login validation logic here
            const email = this.querySelector('input[name="email"]').value;
            const password = this.querySelector('input[name="password"]').value;

            if(email && password) {
                // Simulate successful login
                alert('Login successful!');
                // window.location.href = 'dashboard.html';
            } else {
                alert('Please fill in all fields');
            }
        });
    </script>
</body>
</html>
