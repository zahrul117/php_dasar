<?php 
if(isset($_POST['submit'])){
    if($_POST['username'] == "admin" && $_POST['password'] == "123"){
        header("Location: admin.php");
        exit;
    }else{
        $error = true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if(isset($error)): ?>
<h1>Email/Password salah</h1>
<?php endif; ?>
    <form action="" method="post">
    <label for="username">username : </label>
    <input type="text" name="username" id="username"><br>
    <label for="password">Password : </label>
    <input type="password" name="password" id="password"><br>
    <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>