<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form method="POST" action="/welcome">
        @csrf <!-- Direkomendasikan untuk keamanan Laravel -->
        <label for="fname">First Name:</label><br>
        <input type="text" id="fname" name="fname"><br>

        <label for="lname">Last Name:</label><br>
        <input type="text" id="lname" name="lname"><br>

        <label for="gender">Gender:</label><br>
        <input type="text" id="gender" name="gender"><br>

        <label for="nasional">Nationality:</label><br>
        <input type="text" id="nasional" name="nasional"><br>

        <label for="bahasa">Language:</label><br>
        <input type="checkbox" id="bahasa" name="bahasa[]" value="Indonesian"> Indonesian<br>
        <input type="checkbox" id="bahasa" name="bahasa[]" value="English"> English<br>
        <input type="checkbox" id="bahasa" name="bahasa[]" value="Other"> Other<br>

        <label for="bio">Bio:</label><br>
        <textarea id="bio" name="bio"></textarea><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>