<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">   
</head>
<body>

    <div class="container" id="Signup" style="display: none;">
        <h2 class="form-title">Create your Meta account</h2>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName" placeholder="First Name" required>
                <label for="fName">First Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                <label for="lName">Last Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-phone"></i>
                <input type="text" name="cellphone" id="cellphone" placeholder="Cellphone Number" required>
                <label for="cellphone">Cellphone Number</label>
            </div>
            <div class="input-group">
                <i class="fas fa-address-card"></i>
                <input type="text" name="address" id="address" placeholder="Address" required>
                <label for="address">Address</label>
            </div>
            <div class="input-group">
                <i class="fas fa-globe"></i>
                <input type="text" name="country" id="country" placeholder="Country" required>
                <label for="country">Country</label>
            </div>
            <div class="input-group">
                <i class="fas fa-city"></i>
                <input type="text" name="city" id="city" placeholder="City" required>
                <label for="city">City</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <input type="submit" class="btn" value="Sign Up" name="signUp">
        </form>
        <p class="or">----------or----------</p>
        <div class="icons">
            <a href="#"><i class="fab fa-google"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
        </div>
        <div class="links">
            <p>Have an account already?</p>
            <button id="signInButton">Sign In</button>
        </div>
    </div>

    <div class="container" id="Signin">
        <h2 class="form-title">Sign In to your Meta account</h2>
        <form method="post" action="register.php">
            

            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>

            <p class="recover"> <a href="#">Forgot password</a> </p>

            <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>

        <p class="or">
            ----------or----------
        </p>

        <div class="icons">
            <a href="#"><i class="fab fa-google"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
        </div>

        <div class="links">
            <p>Don't have an account?</p>
            <button id="signUpButton">Sign Up</button><br/>         
        </div>
        <div class="links">
            <button id="AdminSignInButton">Admin Login</button>
        </div>
    </div>

    <div class="container" id="AdminSignUp" style="display: none;">
        <h2 class="form-title">Register new admin member</h2>
        <form method="post" action="adminregister.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="AfName" id="AfName" placeholder="First Name" required>
                <label for="Afame">First Name</label>
            </div>

            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="AlName" id="AlName" placeholder="Last Name" required>
                <label for="AlName">Last Name</label>
            </div>

            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="text" name="Aemail" id="Aemail" placeholder="Email" required>
                <label for="Aemail">Email</label>
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="text" name="ACode" id="ACode" placeholder="Admin Code" required>
                <label for="ACode">Personal Admin Code</label>
            </div>
            <p class="or">------------------------------------------------------------------------</p>
            <p align="center"><strong>Note:The Admin code you create now will be required everytime you login as an Admin</strong></p>
            <p class="or">------------------------------------------------------------------------</p>
            <input type="submit" class="btn" value="Sign Up" name="AdminSignUp">
        </form>

        <p class="or">
            ----------or----------
        </p>

        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>

        <div class="links">
            <p>Have an admin account Already?</p>
            <button id="AdminSignInButton">Sign In</button>
        </div>
        
    </div>

    <div class="container" id="AdminSignIn" style="display: none;">
    <h2 class="form-title">Admin Sign In</h2>
    <form method="post" action="adminregister.php">
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="text" name="ACode" id="ACode" placeholder="Admin Code" required>
            <label for="ACode">Personal Admin Code</label>
        </div>

        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="Apassword" id="Apassword" placeholder="Password" required>
            <label for="Apassword">Password</label>
        </div>

        <p class="recover">
            <a href="#">Recover Password</a>
        </p>

        <input type="submit" class="btn" value="Sign In" name="AdminSignIn">
    </form>

    <p class="or">
        ----------or----------
    </p>

    <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
    </div>

    <div class="links">
        <p>Don't have an account?</p>
        <button id="AdminSignUpButton">Sign Up</button>
    </div>
    <div class="links">
            <button id="signInButton">User Login</button>
        </div>
</div>

    </div>

    <script src="Scripts/script.js"></script>
</body>
</html>
