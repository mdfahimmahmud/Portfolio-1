

    <?php
    // Check if the form was submitted
    if (isset($_POST['submit'])) {
        // Retrieve form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $email = $_POST['phone'];
        $email = $_POST['message'];
        
        // Display submitted data
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Phone: $phone</p>";
        echo "<p>Messaage: $message</p>";
    } else {
        // If the form was not submitted, display a message
        echo "<p>No data submitted.</p>";
    }
    ?>
