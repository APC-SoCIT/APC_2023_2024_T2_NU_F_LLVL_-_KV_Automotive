<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>LLBL&KV</title> <!-- Change the tab name here -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='%23EFCD52' class='w-6 h-6'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' d='M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12'/%3E%3C/svg%3E">
</head>
<body>

    <div class="wrapper">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <a href="{{ route('home') }}" style="display: block; text-align: center;">
                <img src="{{ asset('storage/llbl.png') }}" alt="Home" title="Go to Home" style="width: 335px; height: auto; margin: 0 auto;" />
            </a>
            <div id="error-message"></div>
            <div class="input-box">
                <input id="email" type="text" placeholder="Email" name="email" :value="old('email')" required autofocus autocomplete="username">
            </div>
            <div class="input-box">
                <input id="password" type="password" placeholder="Password" name="password" required autocomplete="current-password">
                <i class="show-password-icon bx bx-hide"></i>

            </div>
            <div class="remember-forgot">
                <label><input type="checkbox" name="remember">Remember Me</label>
                <a href="{{ route('password.request') }}">Forgot Password</a>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="register-link">
                <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
            </div>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const errorMessageContainer = document.getElementById('error-message');
            const form = document.querySelector('form');

            form.addEventListener('submit', async function (event) {
                event.preventDefault();

                const formData = new FormData(form);
                const response = await fetch(form.action, {
                    method: form.method,
                    body: formData
                });

                const data = await response.json();

                if (response.ok) {
                    // Redirect or perform any action for successful login
                    window.location.href = data.redirect;
                } else {
                    // Display error message
                    errorMessageContainer.innerHTML = `<div class="alert alert-danger">${data.message}</div>`;
                }
            });
        });
    </script>


</body>
</html>



<style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background:url('https://wallpaperset.com/w/full/7/9/e/35761.jpg');
  background-size: cover;
  background-position: center;
}
.wrapper{
  width: 450px;
  background: transparent;
  border: 2px solid rgba(255, 255, 255, .2);
  backdrop-filter: blur(9px);
  color: #fff;
  border-radius: 12px;
  padding: 30px 40px;
  box-shadow: 0 0 30px  #ffffff;;
}
.wrapper h1{
  font-size: 36px;
  text-align: center;
}
#error-message {
        color: #ff0000;
        text-align: center;
        font-size: 14px;
    }
.wrapper .input-box{
  position: relative;
  width: 100%;
  height: 50px;

  margin: 30px 0;
}
.input-box input{
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
.input-box input::placeholder{
  color: #fff;
}
.input-box i{
  position: absolute;
  right: 20px;
  top: 30%;
  transform: translate(-50%);
  font-size: 20px;

}
.wrapper .remember-forgot{
  display: flex;
  justify-content: space-between;
  font-size: 14.5px;
  margin: -15px 0 15px;
}
.remember-forgot label input{
  accent-color: #fff;
  margin-right: 3px;

}
.remember-forgot a{
  color: #c4b215;
  text-decoration: none;

}
.remember-forgot a:hover{
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
        transition: background-color 0.3s ease; /* Added transition property for smooth color change */
    }

    .wrapper .btn:hover {
        background-color: #c4b315c7; /* Change the color to your desired hover color */
        color: #fff; /* Change the text color on hover if needed */
    }
.wrapper .register-link{
  font-size: 14.5px;
  text-align: center;
  margin: 20px 0 15px;

}
.register-link p a{
  color: #c4b215;
  text-decoration: none;
  font-weight: 600;
}
.register-link p a:hover{
  text-decoration: underline;
}

</style>
