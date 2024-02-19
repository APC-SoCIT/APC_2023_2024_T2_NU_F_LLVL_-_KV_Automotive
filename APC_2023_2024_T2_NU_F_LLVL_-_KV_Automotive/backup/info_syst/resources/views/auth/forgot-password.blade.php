<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>LLBL&KV</title> <!-- Change the tab name here -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='%23EFCD52' class='w-6 h-6'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' d='M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12'/%3E%3C/svg%3E">
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
            width: 400px; /* Increased width */
            max-width: 80%; /* Responsive max-width */
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .2);
            backdrop-filter: blur(9px);
            color: #fff;
            border-radius: 12px;
            padding: 30px 40px;
            box-shadow: 0 0 30px #ffffff;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .wrapper h2 {
            margin-bottom: 20px;
            font-size: 1.5rem;
            text-align: center;
        }

        .error-message {
            color: #ff0000;
            font-size: 14px;
            margin-top: 10px;
            text-align: center;
        }

        .input-box {
            position: relative;
            margin-bottom: 20px;
            width: 100%;
        }

        .input-box input {
            width: 100%;
            height: 50px;
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid rgba(255, 255, 255, .2);
            border-radius: 40px;
            font-size: 16px;
            color: #fff;
            padding: 0 20px;
        }

        .input-box input::placeholder {
            color: #ffe603;
        }

        .btn-wrapper {
            display: flex;
            justify-content: flex-end; /* Align button to the right */
            width: 100%;
        }

        .btn {
            width: auto; /* Adjusted width */
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
            padding: 0 30px; /* Adjusted padding */
        }

        .btn:hover {
            background-color: #c4b315c7;
            color: #fff;
        }

        .image-wrapper {
            margin-bottom: 20px; /* Add bottom margin to the image wrapper */
            display: flex;
            justify-content: center; /* Center image horizontally */
        }

        .image-wrapper img {
            width: 335px;
            height: auto;
        }

        .text-message {
            text-align: justify;
            margin-bottom: 20px; /* Add margin to the bottom */
        }

    </style>
</head>
<body>
    <div class="wrapper">
        <div class="image-wrapper">
            <a href="{{ route('home') }}" style="display: block; text-align: center;">
            <img src="{{ asset('storage/llbl.png') }}" alt="Home" title="Go to Home" />
        </a>
        </div>

        <h2>Forgot your password?</h2>
        <p class="text-sm text-gray-600 mb-4 text-message">No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="input-box">
                <input id="email" type="email" placeholder="Email" name="email" :value="old('email')" required autocomplete="email">
            </div>

            <div class="btn-wrapper">
                <button type="submit" class="btn">EMAIL PASSWORD RESET LINK</button>
            </div>

            <div class="error-message">
                @error('email')
                    {{ $message }}
                @enderror
            </div>
        </form>
    </div>
</body>
</html>
