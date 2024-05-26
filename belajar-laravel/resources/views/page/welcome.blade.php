<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat datang</title>
</head>
<body>
    <h1>Selamat Datang {{ $fname }} {{ $lname }}</h1>
    <p>Gender: {{ $gender }}</p>
    <p>Nationality: {{ $nasional }}</p>
    <p>Language: {{ implode(', ', $bahasa) }}</p> 
    <p>Bio: {{ $bio }}</p>
</body>
</html>