<!-- filepath: d:\Back-End\Mohamed230105474\resources\views\sign-up.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
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

        .signup-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            width: 450px;
        }

        .signup-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .signup-header h1 {
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

        .password-rules {
            font-size: 0.8em;
            color: #666;
            margin: 10px 0;
        }

        .terms {
            margin: 20px 0;
            font-size: 0.9em;
            color: #666;
        }

        .terms a {
            color: #4ecdc4;
            text-decoration: none;
        }

        .signup-button {
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

        .signup-button:hover {
            background: #45b7b0;
            transform: translateY(-2px);
        }

        .login-link {
            text-align: center;
            margin-top: 25px;
            color: #666;
        }

        .login-link a {
            color: #4ecdc4;
            text-decoration: none;
        }

        @media (max-width: 480px) {
            .signup-container {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <div class="signup-header">
            <h1>Create Account</h1>
            <p>Join our community today</p>
        </div>

        <form id="signupForm" method="POST" action="{{ route('auth.signup') }}">
            @csrf
            <div class="input-group">
                <input type="text" name="name" required>
                <label>Full Name</label>
            </div>

            <div class="input-group">
                <input type="email" name="email" required>
                <label>Email Address</label>
            </div>

            <div class="input-group">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>

            <div class="input-group">
                <input type="password" name="password_confirmation" required>
                <label>Confirm Password</label>
            </div>

            <div class="password-rules">
                Password must contain:
                <ul>
                    <li>At least 8 characters</li>
                    <li>One uppercase letter</li>
                    <li>One number</li>
                </ul>
            </div>

            <div class="terms">
                <label>
                    <input type="checkbox" required> I agree to the
                    <a href="#">Terms of Service</a> and
                    <a href="#">Privacy Policy</a>
                </label>
            </div>

            <button type="submit" class="signup-button">Create Account</button>
        </form>

        <div class="login-link">
            Already have an account? <a href="{{ route('auth.login') }}">Login here</a>
        </div>
    </div>

    <script>
        document.getElementById('signupForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = {
                name: this.querySelector('input[name="name"]').value,
                email: this.querySelector('input[name="email"]').value,
                password: this.querySelector('input[name="password"]').value,
                confirmPassword: this.querySelector('input[name="password_confirmation"]').value
            };

            if(formData.password !== formData.confirmPassword) {
                alert('Passwords do not match!');
                return;
            }

            if(formData.password.length < 8) {
                alert('Password must be at least 8 characters');
                return;
            }

            // Add additional validation as needed
            alert('Account created successfully!');
            // window.location.href = 'dashboard.html';
        });
    </script>
</body>
</html>
