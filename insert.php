<?php
// Start the session if not already started (uncomment the line below if using sessions)
// session_start();

// Include the login.php file to establish a database connection
include 'login.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $authors = $_POST['authors'];
    $price = $_POST['price'];
    $isbn = $_POST['isbn'];
    $genre = $_POST['genre'];
    $publisher = $_POST['publisher'];
    $yearPublished = $_POST['year_published'];

    // Sanitize inputs to prevent SQL injection
    $title = mysqli_real_escape_string($conn, $title);
    $price = mysqli_real_escape_string($conn, $price);
    $isbn = mysqli_real_escape_string($conn, $isbn);
    $genre = mysqli_real_escape_string($conn, $genre);
    $publisher = mysqli_real_escape_string($conn, $publisher);
    $yearPublished = mysqli_real_escape_string($conn, $yearPublished);

    // Convert authors string to an array
    $authorsArray = array_map('trim', explode(',', $authors));
    $authorsString = implode(', ', array_map(function ($author) use ($conn) {
        return "'" . mysqli_real_escape_string($conn, $author) . "'";
    }, $authorsArray));

    // Prepare the query to insert book details into the database
    $sql = "INSERT INTO book (Title, Author, Price, ISBN, Genre, Publisher, YearPublished) 
            VALUES ('$title', $authorsString, '$price', '$isbn', '$genre', '$publisher', '$yearPublished')";

    if ($conn->query($sql) === true) {
        echo "Book added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>


<!DOCTYPE html>
<?php include 'header2.php'; ?>
<html>
<head>
    <title>Insert Book</title>
</head>
<body>

<style>
		.logo {
            display: block; /* Center the logo image */
            margin: 10px auto; /* Centering horizontally */
            width: 128px; /* Adjusted width for scaling */
            height: 128px; /* Maintain aspect ratio */
            background-size: contain;
        }
		.logo:hover {
            background-image: url(hover.png');
</style>

<!-- Logo Image -->
		<a href="index.php" class="logo">
    <img src="logo2.png" alt="Logo" onmouseover="this.src='hover.png';" onmouseout="this.src='logo2.png';">
	</a>

<h2>Add a New Book</h2>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title"><br>

    <label for="authors">Authors (comma-separated):</label><br>
    <input type="text" id="authors" name="authors"><br>

    <label for="price">Price:</label><br>
    <input type="number" id="price" name="price"><br>

    <label for="isbn">ISBN:</label><br>
    <input type="number" id="isbn" name="isbn"><br>

    <label for="genre">Genre:</label><br>
    <input type="text" id="genre" name="genre"><br>

    <label for="publisher">Publisher:</label><br>
    <input type="text" id="publisher" name="publisher"><br>

    <label for="year_published">Year Published:</label><br>
    <input type="number" id="year_published" name="year_published"><br>

    <input type="submit" value="Submit">
</form>

</body>

<?php include 'footer.php'; ?>
</html>

