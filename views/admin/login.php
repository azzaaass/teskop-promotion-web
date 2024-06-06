<?php
if (isset($_POST["submit"])) {
    $username = htmlentities(strip_tags(trim($_POST["username"])));
    $password = htmlentities(strip_tags(trim($_POST["password"])));

    $error_message = "";

    if (empty($username)) {
        $error_message .= "- Username belum diisi <br>";
    }

    if (empty($password)) {
        $error_message .= "- Password belum diisi <br>";
    }

    include ("../templates/database.php");

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $password_sha1 = sha1($password);
    $query = "
      SELECT * FROM users 
      WHERE username = '$username' AND password = '$password_sha1'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 0) {
        $error_message .= "- Username dan/atau Password tidak sesuai";
    }

    mysqli_free_result($result);
    mysqli_close($connection);

    if ($error_message === "") {
        session_start();
        $_SESSION["username"] = $username;
        header("Location: coffee-admin.php");
        }
} else {
    $error_message = "";
    $username = "";
    $password = "";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-sm p-6 bg-white rounded-lg shadow-md">
        <h2 class="mb-6 text-2xl font-bold text-center text-gray-700">Login</h2>
        <form action="login.php" method="post">
            <div class="mb-4">
                <label for="username" class="block mb-2 text-sm font-medium text-gray-600">Username:</label>
                <input type="text" name="username" id="username" value="<?php echo $username ?>"
                    class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:border-blue-500"
                    required>
            </div>
            <div class="mb-4">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-600">Password:</label>
                <input type="password" name="password" id="password"
                    class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:border-blue-500"
                    required>
            </div>
            <div>
                <p class="text-sm text-[#b7292e]"><?php echo $error_message?></p>
            </div>
            <br>
            <div class="mb-4">
                <button type="submit" name="submit"
                    class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Login</button>
            </div>
        </form>
        
    </div>
</body>

</html>