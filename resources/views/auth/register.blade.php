<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<link rel="stylesheet" href="login.css">

<body>
    <div class="wrapper">

        <div class="login-box">
            <form action="/adduser" method="POST">
                @csrf 
                <h2>Registre</h2>

                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="name"></ion-icon>
                    </span>
                    <input type="text" required id="fname" name="fname">
                    <label>Full Name</label>
                </div>

                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="phone"></ion-icon>
                    </span>
                    <input type="text" required id="num_phone" name="num_phone">
                    <label>Number Phone</label>
                </div>

                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" required id="email" name="email">
                    <label>Email</label>
                </div>

                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" required id="password" name="password">
                    <label>Password</label>
                </div>
               

                <button type="submit">Register</button>

                <div class="register-link">
                    <p>I have an account? <a href="/login">Login</a></p>
                </div>
            </form>
        </div>

    </div>
</body>

</html>