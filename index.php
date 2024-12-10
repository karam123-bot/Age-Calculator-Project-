<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Age Calculator</h1>
        <form method="POST" action="">
            <label for="dob">Enter Your Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>
            <button type="submit">Calculate Age</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dob = $_POST['dob'];

            if ($dob) {
                $dobDate = new DateTime($dob);
                $currentDate = new DateTime();
                $age = $dobDate->diff($currentDate);

                echo "<div class='result'>";
                echo "<p>Your Age: " . $age->y . " years, " . $age->m . " months, and " . $age->d . " days.</p>";
                echo "</div>";
            } else {
                echo "<p class='error'>Please enter a valid date.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
