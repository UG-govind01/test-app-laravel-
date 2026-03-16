<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h2>Register</h2>

<form action="/register" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" name="name" placeholder="Name">
    <br><br>

    <input type="email" name="email" placeholder="Email">
    <br><br>

    <input type="password" name="password" placeholder="Password">
    <br><br>

    <input type="file" name="image">
    <br><br>

    <button type="submit">Register</button>

</form>

<br>

<a href="/login">Already have an account? Login</a>

</body>
</html>