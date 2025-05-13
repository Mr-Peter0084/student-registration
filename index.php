<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
    <h2>Student Registration Form</h2>
    <form action="insert.php" method="post">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Phone Number" required>
        <input type="text" name="course" placeholder="Course" required>
        <button type="submit">Register</button>
    </form>
    <a href="view.php">View Registered Students</a>
</div>

</body>
</html>
