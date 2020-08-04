<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up SanberBook</title>
</head>

<body>
    <div>
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>
    </div>
    <div>
        <form action="/welcome" method="POST">
        @csrf
            <label for="fname">First Name:</label> <br><br>
            <input type="text" name="fname" id="fname" required> <br><br>

            <label for="lname">Last Name:</label> <br><br>
            <input type="text" name="lname" id="lname" required> <br><br>

            <label>Gender:</label> <br><br>
            <input type="radio" name="gender" value="male"> Male <br>
            <input type="radio" name="gender" value="female"> Female <br>
            <input type="radio" name="gender" value="other"> Other <br><br>

            <label>Nationality:</label> <br><br>
            <select>
                <option value="indonesian" selected>Indonesian</option>
                <option value="malaysian">Malaysian</option>
                <option value="singapore">Singapore</option>
                <option value="australian">Australian</option>
            </select>
            <br><br>

            <label>Language Spoken:</label> <br><br>
            <input type="checkbox" name="languange" value="Indonesia"> Bahasa Indonesia <br>
            <input type="checkbox" name="languange" value="English"> English <br>
            <input type="checkbox" name="languange" value="Other"> Other <br><br>

            <label for="bio">Bio:</label> <br><br>
            <textarea cols="40" rows="7" id="bio" required></textarea> <br>

            <input type="submit" value="Sign Up">
        </form>
    </div>
</body>

</html>