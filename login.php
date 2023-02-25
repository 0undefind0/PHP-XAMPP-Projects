<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Sign-In</title>

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


    // Initialize and declare variables
    $emailErr = $passwordErr = null;

    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;
    $rememberMe = isset($_POST['rememberMe']) ? $_POST['rememberMe'] : null;
    $loginSuccess = isset($_POST['loginSuccess']) ? $_POST['loginSuccess'] : null;


    if (isset($_POST['submit'])) {

        // Check/Validate all fields upon submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {


            // Check if email has been entered and is valid
            if (empty($_POST['email'])) {
                $errEmail = 'Please enter a valid email address';
            }

            // Check if a password has been entered
            else if (empty($_POST['password'])) {
                $errPass = '<p class="errText">Invalid password</p>';
            }

            // IF THERE ARE NO ERRORS, PROCEED PROCESSING
            else {
                // echo "The form has been submitted";
                $emailErr = $passwordErr = null; // reset the Errors


                // CHECK THE DATABASE FOR THE RECORD
                // Check Database if record exists
                $sql = "SELECT * FROM accounts WHERE email = '$email';";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    // GET data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        // echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
                        // @TODO check email if it exist in table
                        if ($row["email"] == $email) {
                            // Compare password to the encrypted password in table
                            // @TODO do a verification check if code exist first using NO HASH
                            if (password_verify($password, $row["pass"])) {
                                $loginSuccess = true;
                                echo "Access Granted";

                                session_start();
                                $_SESSION["firstName"] = $row['first_name'];
                                $_SESSION["lastName"] = $row['last_name'];
                                $_SESSION["test"] = true;

                                // Redirect to home page after successful login
                                header('Location: home.php');
                            } else {
                                // $passwordErr = "Invalid Password";
                                echo "Invalid Password";
                            }
                        }
                    }
                } else {
                    $loginSuccess = false;
                }

                mysqli_close($conn);
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


    <!-- MAIN HTML FORM -->
    <main class="form-signin w-100 m-auto px-5">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <img class="my-4 rounded-circle logo-silhouette" src="logo_silohoutte.png" alt="" width="64">
            <h1 class="h3 mb-3 fw-normal">Log in to Ceteris</h1>


            <div class="signing-body border rounded">

                <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required value="<?php echo $email; ?>">
                    <label for="email">Email address</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>


                <div class="checkbox mb-5">
                    <label>
                        <input type="checkbox" name="rememberMe" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit" value="Submit">Log in</button>
                <hr>
                <a href="signon.php" class="w-100 btn btn-md btn-dark">Create an Account</a>

            </div>

            <p class="mt-5 mb-3 text-muted">© 2022</p>
        </form>
    </main>

</body>

</html>