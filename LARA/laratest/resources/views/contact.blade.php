<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
<body>
    <h1>Contact</h1>

    
    <form method="post">
        @csrf

        <h4>Submit your query</h4>
        <input type="text" name="email" placeholder="Enter Your Email">
        <input type="text" name="phone" placeholder="Enter Your Phone">
        <textarea name="message" ></textarea>
        <input type="file" name="photo">
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>
