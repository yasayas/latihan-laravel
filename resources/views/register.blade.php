<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Account Baru!</title>
    <style>
       
    </style>
</head>
<body>

    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
      @csrf
      <label for="firstname" style="display: block;">First name:</label>
      <br>
      <input type="text" name="firstname" id="firstname">

      <br><br>
      <label for="lastname" style="display: block;">Last name:</label>
      <br>
      <input type="text" name="lastname" id="lastname">

      <p>Gender:</p>
        <input type="radio" name="gender" id="male" value="male">
        <label for="male">Male</label>
        <br>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female">Female</label>
        <br>
        <input type="radio" name="gender" id="other" value="other">
        <label for="other">Other</label>

      <p>Nationality</p>
        <select name="nationality" id="nationality">
          <option value="indonesian">Indonesian</option>
          <option value="singaporean">Singaporean</option>
          <option value="malaysian">Malaysian</option>
          <option value="australian">Australian</option>
        </select>

      <p>Language Spoken:</p>
        <input type="checkbox" name="language" id="bahasa-indo" value="bahasa indonesia">
        <label for="bahasa-indo">Bahasa Indonesia</label>
        <br>
        <input type="checkbox" name="language" id="english" value="english">
        <label for="english">English</label>
        <br>
        <input type="checkbox" name="language" id="other" value="other">
        <label for="other">Other</label>

      <p>Bio:</p>
        <textarea name="bio" cols="30" rows="10"></textarea>
      <br>

      <button type="submit" name="submit">Sign Up</button>

    </form>

</body>
</html>