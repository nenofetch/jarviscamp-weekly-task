<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Sign Up</title>
</head>

<body>
    <h1>Buat Account Baru</h1>
    <form action="/welcome" method="post">
        @csrf
        <h3>Sign Up Form</h3>
        <p>First Name</p>
        <input type="text" name="firstname">
        <p>Last Name</p>
        <input type="text" name="lastname">
        <p>Gender</p>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="Other">
        <label for="other">Other</label>
        <br><br>
        <label for="nationality">Nationality</label>
        <br><br>
        <select name="nationality" id="nationality">
            <option value="Indonesia">Indonesian</option>
            <option value="United States">United States</option>
            <option value="England">England</option>
            <option value="Singapore">Singapore</option>
            <option value="Netherland">Netherland</option>
        </select>
        <p>Language Spoken</p>
        <input type="checkbox" name="language" id="bike">
        <label for="bike">I have a bike</label><br>
        <input type="checkbox" name="language" id="car">
        <label for="car">I have a car</label><br>
        <input type="checkbox" name="language" id="boat">
        <label for="boat">I have a boat</label><br>
        <p>Bio :</p>
        <textarea name="bio" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Sign Up">
    </form>
</body>

</html>
