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
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname">
    
        <p>gender:</p>
    
        <form>
          <input type="radio" id="male" name="fav_language" value="male">
          <label for="male">male</label><br>
          <input type="radio" id="famele" name="fav_language" value="Famele">
          <label for="famele">Famele</label><br>
          <input type="radio" id="other" name="fav_language" value="other">
          <label for="other">other</label>
    
          <p>nationality:</p>
    
          <select>
            <option> Indonesian </option>
            <option> English</option>
            <option> other</option>
        </select>
    
        <p>languenge spoken:</p>
    
            <input type="checkbox" name="vehicle1" value="Bike">
            <label for="vehicle1"> Bahasa Indonesia </label><br>
            <input type="checkbox" name="vehicle2" value="Car">
            <label for="vehicle2"> English </label><br>
            <input type="checkbox"  name="vehicle3" value="Boat">
            <label for="vehicle3"> Other </label> 
            
            <p>Bio:</p>
            <textarea name="message" rows="10" cols="30"></textarea> <br>
            <a href="/welcome"><button type="button">Sign in</button></a>
    </form>
</body>
</html>
