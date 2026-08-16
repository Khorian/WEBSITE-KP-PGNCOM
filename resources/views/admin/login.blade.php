<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Admin - PGASCOM</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            min-height: 100vh;
            background: #ffffff;
        }

        .login-container {
            min-height: 100vh;
            display: flex;
        }

        /* =========================
           BAGIAN KIRI
        ========================= */

        .login-left {
            width: 50%;
            min-height: 100vh;
            background: linear-gradient(135deg, #173b7a, #2169d8);

            display: flex;
            flex-direction: column;
            justify-content: space-between;

            padding: 55px;
            color: white;
        }

        .logo-area img {
            width: 250px;
            max-width: 100%;
            height: auto;
        }

        .admin-title {
            margin-top: 50px;
        }

        .admin-title h1 {
            font-size: 45px;
            font-weight: 700;
            margin-bottom: 18px;
        }

        .admin-title p {
            font-size: 16px;
            letter-spacing: 0.5px;
        }

        .copyright-left {
            font-size: 13px;
            opacity: 0.8;
        }


        /* =========================
           BAGIAN KANAN
        ========================= */

        .login-right {
            width: 50%;
            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;

            background: #ffffff;
        }

        .login-box {
            width: 70%;
            max-width: 500px;
        }

        .login-box h2 {
            font-size: 32px;
            color: #14294d;
            margin-bottom: 8px;
        }

        .login-subtitle {
            color: #777;
            margin-bottom: 35px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #24334d;
            margin-bottom: 8px;
        }

        .input-wrapper input {
            width: 100%;
            height: 50px;

            border: 1px solid #d9dfe8;
            border-radius: 7px;

            padding: 0 15px;

            font-size: 14px;
            outline: none;
        }

        .input-wrapper input:focus {
            border-color: #2874dc;
            box-shadow: 0 0 0 2px rgba(40, 116, 220, 0.1);
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;

            margin: 5px 0 25px;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 7px;

            font-size: 13px;
            color: #26344d;
        }

        .remember input {
            accent-color: #2874dc;
        }

        .forgot {
            color: #1970e8;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
        }

        .login-button {
            width: 100%;
            height: 50px;

            border: none;
            border-radius: 7px;

            background: #2874dc;
            color: white;

            font-size: 14px;
            font-weight: 600;

            cursor: pointer;
        }

        .login-button:hover {
            background: #185fc0;
        }

        .copyright-right {
            text-align: center;
            margin-top: 8px;

            color: #777;
            font-size: 12px;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 800px) {

            .login-container {
                flex-direction: column;
            }

            .login-left,
            .login-right {
                width: 100%;
            }

            .login-left {
                min-height: 40vh;
                padding: 35px;
            }

            .login-right {
                min-height: 60vh;
                padding: 40px 20px;
            }

            .admin-title h1 {
                font-size: 32px;
            }

            .login-box {
                width: 90%;
            }
        }
    </style>
</head>

<body>

<div class="login-container">

    <!-- BAGIAN KIRI -->

    <div class="login-left">

        <div class="logo-area">

            <img
                src="{{ asset('images/logo-pgascom.png') }}"
                alt="PGASCOM"
            >

        </div>

        <div class="admin-title">

            <h1>DASHBOARD ADMIN</h1>

            <p>
                PT PGASCOM REGIONAL OFFICE LAMPUNG
            </p>

        </div>

        <div class="copyright-left">
            © 2026 PT PGASCOM RO LAMPUNG
        </div>

    </div>


    <!-- BAGIAN KANAN -->

    <div class="login-right">

        <div class="login-box">

            <h2>Welcome!</h2>

            <p class="login-subtitle">
                masuk sebagai admin
            </p>


            <form method="POST" action="{{ route('login.process') }}">
    @csrf

                <!-- EMAIL -->

                <div class="form-group">

                    <label for="email">
                        Email admin
                    </label>

                    <div class="input-wrapper">

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Masukkan email admin"
                            required
                        >

                    </div>

                </div>


                <!-- PASSWORD -->

                <div class="form-group">

                    <label for="password">
                        Kata sandi
                    </label>

                    <div class="input-wrapper">

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Masukkan kata sandi"
                            required
                        >

                    </div>

                </div>


                <!-- REMEMBER & FORGOT -->

                <div class="form-options">

                    <label class="remember">

                        <input
                            type="checkbox"
                            name="remember"
                        >

                        Remember Me

                    </label>


                    <a href="#" class="forgot">
                        Forgot Password?
                    </a>

                </div>


                <!-- LOGIN BUTTON -->

                <button
                    type="submit"
                    class="login-button"
                >
                    Login to Portal →
                </button>

            </form>


            <div class="copyright-right">
                © 2026 PT PGASCOM RO LAMPUNG
            </div>

        </div>

    </div>

</div>

</body>
</html>