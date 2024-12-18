<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <h1>Form Submission Successful</h1>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($_POST['name']); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>
        <p><strong>Phone:</strong> <?php echo htmlspecialchars($_POST['phone']); ?></p>
        <p><strong>Date of Birth:</strong> <?php echo htmlspecialchars($_POST['dob']); ?></p>
        <p><strong>Gender:</strong> <?php echo htmlspecialchars($_POST['gender']); ?></p>
        <p><strong>Comments:</strong> <?php echo nl2br(htmlspecialchars($_POST['comments'])); ?></p>
    </div>
</body>
</html>
