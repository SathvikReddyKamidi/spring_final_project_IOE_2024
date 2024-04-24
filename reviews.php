<?php
    require_once('inc_dbConfig.php');
    // Create connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userName = htmlspecialchars($_POST["userName"]);
        $contact = htmlspecialchars($_POST["contact"]);
        $review = htmlspecialchars($_POST["review"]);
        $rating = $_POST["rating"];

        // Server-side validation
        $errors = array();
        if (empty($userName)) {
            $errors['userName'] = "Name is required";
        }
        if (empty($contact)) {
            $errors['contact'] = "Contact is required";
        } elseif (strlen($contact) != 10 || !ctype_digit($contact)) {
            $errors['contact'] = "Contact should be 10 digits";
        }

        // If there are no errors, insert into database
        if (empty($errors)) {
            $sql = "INSERT INTO reviews (user_name, contact, review, rating) VALUES ('$userName', '$contact', '$review', $rating)";

            if ($conn->query($sql) === TRUE) {
                //echo "Thank you for your review! We truly appreciate it";
            } else {
                echo "Error. Please fill all the details. " . $sql . "<br>" . $conn->error;
            }
        }
    }

    $conn->close();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bookstore Reviews</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <style>
            .error { color: red; }
            /* Style for labels */
        </style>
    </head>
    <body>
        <header>
            <div class="content-wrapper">
                <h1>BBK PAPERBACK STORE</h1>
                <nav>
                    <a id="home" href="index.php">Home</a>
                    <a href="inc_QueryResults.php">Menu</a>
                    <a href="best.php">Best&nbsp;Sellers</a>
                    <a href="reviews.php">Reviews</a>
                    <a href="about.php">About&nbsp;Us</a>
                    <a href="contact.php">Contact&nbsp;Us</a>
                </nav>  
            </div>
        </header>

        <h2>Leave a Review</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="userName">Name:</label>
            <input type="text" id="userName" name="userName" required style="padding: 10px; width: auto;">
            <span class="error"><?php if(isset($errors['userName'])) echo $errors['userName']; ?></span><br><br>

            <label for="contact">Contact:</label>
            <input type="tel" id="contact" name="contact" required style="padding: 10px; width: auto;">
            <span class="error"><?php if(isset($errors['contact'])) echo $errors['contact']; ?></span><br><br>

            <label for="review">Review:</label><br>
            <textarea id="review" name="review" rows="4" cols="50" style="padding: 10px; width: auto;"></textarea><br><br>

            <label for="rating">Rating:</label>
                <select id="rating" name="rating" style="padding: 5px; width: auto;">
                <option value="5">5 ⭐️ (Excellent😃)</option>
                <option value="4">4 ⭐️  (Good😊)</option>
                <option value="3">3 ⭐️ (Not Bad🙂)</option>
                <option value="2">2 ⭐️ (Bad😟)</option>
                <option value="1">1 ⭐️ (Dissapointed😠)</option>
            </select><br><br>

            <input type="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($errors)) {
            echo '<p>Thank you for your review😄! We truly appreciate it🫡</p>';
        }
        ?>

        <footer>
            <p>&copy; <?php echo date("Y"); ?> BBK Online Bookstore</p>
        </footer>
    </body>
</html>