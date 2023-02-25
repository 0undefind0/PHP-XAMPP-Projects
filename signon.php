<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Sign-On</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="signon.css">
</head>

<body>

    <?php
    // Connect to DBAProject database
    include 'dbconnect.php';


    // Define variables and set to empty values    
    // $firstName = $lastName = $email = $password = $confirmPassword = null;
    $firstNameErr = $lastNameErr = $emailErr = $passwordErr = $confirmPasswordErr = null;
    $rememberMe = false;

    $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : null;
    $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;
    $confirmPassword = isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : null;



    if (isset($_POST['submit'])) {

        // Check/Validate all fields upon submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Check if firstName has been entered and is valid
            if (empty($_POST['email'])) {
                $firstNameErr = 'Please enter a valid email address';
            }

            // Check if lastName has been entered and is valid
            else if (empty($_POST['email'])) {
                $lastNameErr = 'Please enter a valid email address';
            }

            // Check if email has been entered and is valid
            else if (empty($_POST['email'])) {
                $errEmail = 'Please enter a valid email address';
            }

            // Check if a password has been entered
            else if (empty($_POST['password'])) {
                $errPass = '<p class="errText">Invalid password</p>';
            }

            // Check if a confirmPassword has been entered and matches the password
            else if (empty($_POST['confirmPassword']) || $_POST['confirmPassword'] != $_POST['password']) {
                $errPass = '<p class="errText">Invalid password</p>';
            }

            // IF THERE ARE NO ERRORS, PROCEED PROCESSING
            else {
                // echo "The form has been submitted";
                $firstNameErr = $lastNameErr = $emailErr = $passwordErr = $confirmPasswordErr = null; // reset the Errors


                // Check Database if record exists
                $sql = "SELECT * FROM accounts WHERE email = '$email';";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    // Email already exists
                    $email = "";
                    $emailErr = "Email already exists";
                    echo '<div class="alert alert-danger" role="alert">
                    Email already exists! Please enter a unique email address.
                    </div>';
                } else {
                    // Email is unique
                    echo '<div class="alert alert-success" role="alert">
                    Email is valid!
                    </div>';

                    // Check if every field is filled out THEN Create Record Account in DATABASE
                    if (isset($firstName, $lastName, $email, $password, $confirmPassword)) {
                        echo "HELL YEAHHASHDHASDHA";
                        $hashedPass = password_hash($password, PASSWORD_DEFAULT);
                        $sql = "INSERT INTO accounts (first_name, last_name, email, pass)
                        VALUES ('$firstName', '$lastName', '$email', '$hashedPass')";
                        if (mysqli_query($conn, $sql)) {
                            echo "New record created successfully";

                            // Redirect to login page after successful login
                            header('Location: login.php');
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                    }
                }

                mysqli_close($conn);
            }

            // Remember-Me toggle field
            if (!empty($_POST["rememberMe"])) {
                if ($_POST["rememberMe"] == "remember-me") {
                    $rememberMe = true;
                } else {
                    $rememberMe = false;
                }
            }
        }
    }


    // Clean Input Data to prevent XSS & SQL-Injection
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>



    <?php
    echo "<h2>Your Input:</h2>";
    echo $firstName;
    echo "<br>";
    echo $lastName;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $password;
    echo "<br>";
    echo $confirmPassword;
    echo "<br>";
    echo $rememberMe ? "true" : "";
    ?>

    <!-- MAIN HTML FORM -->
    <main class="form-signin w-100 m-auto px-5">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <img class="mb-4" src="logo.png" alt="" width="128">
            <h1 class="h3 mb-3 fw-normal">Create an account</h1>

            <div class="signing-body border rounded">
                <div class="form-floating">
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required value="<?php echo $firstName; ?>">
                    <label for="firstName">First Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" value="<?php echo $lastName; ?>">
                    <label for="lastName">Last Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required value="<?php echo $email; ?>">
                    <label for="email">Email address</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required value="<?php echo $password; ?>">
                    <label for="password">Password</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Password" required>
                    <label for="confirmPassword">Confirm Password</label>
                </div>

                <div class="checkbox mb-5">
                    <label>
                        <input type="checkbox" name="rememberMe" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit" value="Submit">Sign on</button>
                <a href="login.php" class="text-secondary login-link">already have an account? Click here to Login</a>
            </div>
            
            <p class="mt-5 mb-3 text-muted">© 2022</p>
        </form>
    </main>

</body>

</html>