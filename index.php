<?php   
    if(isset($_POST['submit'])) {
        $user_name = $_POST['user_name'];
        $user_password = $_POST['user_password'];

        $my_conection = new mysqli('localhost', 'root', '', 'name-and-password-test');

        if ($my_conection-> connect_error) {
            die ("deu merda: " . $my_conection->connect_error);
        }

        $my_db = "INSERT INTO user(`name`, `password`)
        VALUES('$user_name', '$user_password')";

        if ($my_conection->query($my_db)===TRUE) {
            echo("deu bom meu cria");
        } else {
            echo("deu muita merda: " . $my_db . $my_conection.error);
        }

        $my_conection->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="w-full h-min-screen bg-gray-200 px-14 py-14">
    <form action="index.php" method="POST" class="w-full h-full rounded-lg bg-white px-3 py-7">
        <h1 class="text-3xl font-semibold mb-7 text-center text-blue-600">
            Sign Up
        </h1>
        <div class="w-full h-auto flex flex-col justify-center items-center gap-4">
            <input name="user_name" type="text" placeholder="type a name" class="w-full h-12 rounded-lg bg-gray-200 px-3 flex items-center outline-none">
            <input name="user_password" type="password" placeholder="create a password" class="w-full h-12 rounded-lg bg-gray-200 px-3 flex items-center outline-none">
            <button name="submit" class="w-full bg-blue-500 rounded-lg shadow-lg h-14 hover:bg-blue-700 transition-all text-white font-semibold" type="submit">
                Sign Up
            </button>
        </div>
    </form>
</body>
</html>