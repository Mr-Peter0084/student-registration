<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $res = $conn->query("SELECT * FROM students WHERE id=$id");
    $row = $res->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id     = $_POST['id'];
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $phone  = $_POST['phone'];
    $course = $_POST['course'];

    $conn->query("UPDATE students SET name='$name', email='$email', phone='$phone', course='$course' WHERE id=$id");
    header("Location: view.php");
}
?>

<h2>Edit Student</h2>
<form method="POST">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    <input type="text" name="name" value="<?= $row['name'] ?>" required><br>
    <input type="email" name="email" value="<?= $row['email'] ?>" required><br>
    <input type="text" name="phone" value="<?= $row['phone'] ?>" required><br>
    <input type="text" name="course" value="<?= $row['course'] ?>" required><br>
    <button type="submit">Update</button>
</form>
