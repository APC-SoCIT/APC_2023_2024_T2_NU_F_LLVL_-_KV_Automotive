<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

</head>
<body>

    <div class="wrapper">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <a href="{{ route('home') }}" style="display: block; text-align: center;">
                <img src="{{ asset('https://scontent.fmnl4-2.fna.fbcdn.net/v/t1.15752-9/413151349_1303008093729218_6211963685636022506_n.png?_nc_cat=101&ccb=1-7&_nc_sid=8cd0a2&_nc_eui2=AeHMn9SJYzRlohYf-YBhd7QrBGvc-wTNTLcEa9z7BM1Mt8-vvNRZwX0GaFZc8Pv1yiEyLI5Nxw_eQz4SV81E6_mA&_nc_ohc=EPL73D9l_wEAX_ncohn&_nc_ht=scontent.fmnl4-2.fna&oh=03_AdQ6pD2FG1QLX_07DdaJcRzN4mbARUmwkgmfi-2PIk1_DQ&oe=65CB7103') }}" alt="Home" title="Go to Home" style="width: 335px; height: auto; margin: 0 auto;" />
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
        // Get the form, email, password, and error message elements
        const form = document.querySelector('form');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const errorMessage = document.getElementById('error-message');

        // Attach an event listener to the form submission
        form.addEventListener('submit', function (event) {
            // Reset the error message
            errorMessage.textContent = '';

            // Perform your custom validation here
            const email = emailInput.value;
            const password = passwordInput.value;

            // For demonstration purposes, let's check if the email and password are both 'incorrect'
            if (email === 'incorrect' && password === 'incorrect') {
                // Display the error message
                errorMessage.textContent = 'Email or password is incorrect.';
                errorMessage.style.color = 'red';

                // Prevent the form submission
                event.preventDefault();
            }
            // You can add more complex validation based on your requirements
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
