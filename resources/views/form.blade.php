<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<h1>Selamat Datang</h1>
    <form action="/siapa">
    <label for="firstname">First name:</label><br>
        <input type="text"><br>
        <label for="lastname">Last name:</label><br>
        <input type="text"><br>
        <label for="gender">Gender:</label><br>
        <input type="radio"name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio"name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio"name="gender" value="other">
        <label for="other">Other</label><br>
        <label>Nationality:</label><br>
        <select>
            <option value="Indonesian">Indonesian</option>
            <option value="Singapuran">Singapuran</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Australian">Australian</option>
        </select> <br>
        <Label>Language Spoken:</Label><br>
        <input type="checkbox">Bahasa Indonesia <br>
        <input type="checkbox">English <br>
        <input type="checkbox">Other <br>
        <label >Bio:</label><br>
        <textarea cols="30" rows="10"></textarea><br>
       <input type="submit" value="Sign Up">
    </form>
</body>
</html>