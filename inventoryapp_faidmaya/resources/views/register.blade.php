<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h1>Buat Account Baru!</h1>
<h3>Sign Up Form</h3>

<form action="/welcome" method="POST">
    @csrf

    <label>First Name:</label><br>
    <input type="text" name="first_name"><br><br>

    <label>Last Name:</label><br>
    <input type="text" name="last_name"><br><br>

    <label>Gender:</label><br>
    <input type="radio" name="gender" value="Male"> Male <br>
    <input type="radio" name="gender" value="Female"> Female <br>
    <input type="radio" name="gender" value="Other"> Other <br><br>

    <label>Nationality:</label><br>
    <select name="nationality">
        <option>Indonesia</option>
        <option>Malaysia</option>
        <option>Singapore</option>
    </select>
    <br><br>

    <label>Language Spoken:</label><br>
    <input type="checkbox" name="language[]" value="Bahasa Indonesia"> Bahasa Indonesia <br>
    <input type="checkbox" name="language[]" value="English"> English <br>
    <input type="checkbox" name="language[]" value="Other"> Other <br><br>

    <label>Bio:</label><br>
    <textarea name="bio" rows="5" cols="40"></textarea>
    <br><br>

    <button type="submit">Sign Up</button>
</form>

</body>
</html>
