<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>contact form</title>
</head>
<body>
  <form method="post" action="contact.php">
    <div>Name:</div>
    <input type="text" name="name">
    

    <div>Age:</div>
    <select name="age">
    <option value="20代">20代</option>
    </select>

    <div>Message:</div>
    <textarea name="message"></textarea>

    <div>
      <input type="submit" value="send">
    </div>
  </form>
</dody>
</html>
