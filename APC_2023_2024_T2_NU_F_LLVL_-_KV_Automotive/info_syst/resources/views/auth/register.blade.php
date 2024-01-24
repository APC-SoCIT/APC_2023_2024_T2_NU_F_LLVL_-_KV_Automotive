<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url('https://wallpaperset.com/w/full/7/9/e/35761.jpg');
            background-size: cover;
            background-position: center;
        }

        .wrapper {
            width: 550px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .2);
            backdrop-filter: blur(9px);
            color: #fff;
            border-radius: 12px;
            padding: 30px 40px;
            box-shadow: 0 0 30px #ffffff;
            position: relative;
        }

        .wrapper a {
            display: block;
            text-align: center;
            margin-bottom: 20px;
        }

        .wrapper img {
            width: 335px;
            height: auto;
            margin: 0 auto;
        }

        .error-message {
            color: #ff0000;
            font-size: 14px;
            margin-top: 10px;
        }

        .wrapper .input-box {
            position: relative;
            width: 100%;
            height: 50px;
            margin: 10px 0;
        }

        .input-box input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid rgba(255, 255, 255, .2);
            border-radius: 40px;
            font-size: 16px;
            color: #fff;
            padding: 20px 45px 20px 20px;
        }

        .input-box input::placeholder {
            color: #ffe603;
        }

        .input-box i {
            position: absolute;
            right: 20px;
            top: 30%;
            transform: translate(-50%);
            font-size: 20px;
        }

        .wrapper .remember-forgot {
            display: flex;
            justify-content: space-between;
            font-size: 14.5px;
            margin: -15px 0 15px;
        }

        .remember-forgot label input {
            accent-color: #fff;
            margin-right: 3px;
        }

        .remember-forgot a {
            color: #c4b215;
            text-decoration: none;
        }

        .remember-forgot a:hover {
            text-decoration: underline;
        }

        .wrapper .btn {
            width: 100%;
            height: 45px;
            background: #e4e4e4;
            border: none;
            outline: none;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            cursor: pointer;
            font-size: 16px;
            color: #333;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .wrapper .btn:hover {
            background-color: #c4b315c7;
            color: #fff;
        }

        .wrapper .register-link {
            font-size: 14.5px;
            text-align: center;
            margin: 20px 0 15px;
        }

        .register-link p a {
            color: #c4b215;
            text-decoration: none;
            font-weight: 600;
        }

        .register-link p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <a href="{{ route('home') }}">
            <img src="{{ asset('https://scontent.fmnl4-2.fna.fbcdn.net/v/t1.15752-9/413151349_1303008093729218_6211963685636022506_n.png?_nc_cat=101&ccb=1-7&_nc_sid=8cd0a2&_nc_eui2=AeHMn9SJYzRlohYf-YBhd7QrBGvc-wTNTLcEa9z7BM1Mt8-vvNRZwX0GaFZc8Pv1yiEyLI5Nxw_eQz4SV81E6_mA&_nc_ohc=EPL73D9l_wEAX_ncohn&_nc_ht=scontent.fmnl4-2.fna&oh=03_AdQ6pD2FG1QLX_07DdaJcRzN4mbARUmwkgmfi-2PIk1_DQ&oe=65CB7103') }}" alt="Home" title="Go to Home" />
        </a>

        <div class="error-message">
            @error('password')
                {{ $message }}
            @enderror
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="input-box">
                <input id="name" type="text" placeholder="Name" name="name" :value="old('name')" required autofocus autocomplete="name">
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input id="email" type="email" placeholder="Email" name="email" :value="old('email')" required autocomplete="email">
                <i class='bx bxs-envelope'></i>
            </div>

            <div class="input-box">
                <input id="password" type="password" placeholder="Password" name="password" required autocomplete="new-password">
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="input-box">
                <input id="password_confirmation" type="password" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                <i class="show-password-icon bx bx-hide"></i>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="remember-forgot">
                    <label><input type="checkbox" name="terms" required> I agree to the <a target="_blank" href="{{ route('terms.show') }}">Terms of Service</a> and <a target="_blank" href="{{ route('policy.show') }}">Privacy Policy</a></label>
                </div>
            @endif

            <button type="submit" class="btn">Register</button>

            <div class="register-link">
                <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const passwordInput = document.getElementById("password");
            const confirmPasswordInput = document.getElementById("password_confirmation");
            const showPasswordIcon = document.querySelector(".show-password-icon");

            showPasswordIcon.addEventListener("click", function() {
                const type = passwordInput.type === "password" ? "text" : "password";
                passwordInput.type = type;
                confirmPasswordInput.type = type;
            });
        });
    </script>
</body>
</html>
