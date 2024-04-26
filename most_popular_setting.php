<!DOCTYPE html>
<html>
<?php include 'header2.php'; ?>
<head>
    <title>Set Most Popular</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
		body {
            font-family: Arial, sans-serif;
        }
        .divider {
            border-bottom: 2px solid #000;
            margin: 20px 0;
        }
        .image-container img {
            width: 23%;
            margin-right: 1%;
        }
		.images {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        img {
            width: 100%;
            height: auto;
        }
        audio {
            width: 50%;
            margin-top: 20px;
			margin-right: 20%;
			margin-left: 25%;
        }
		.times-font {
            font-family: "Times New Roman", Times, serif;
			font-size: 18px;
			float: center;
			text-align: center;
        }
		.logo {
            display: block; /* Center the logo image */
            margin: 10px auto; /* Centering horizontally */
            width: 128px; /* Adjusted width for scaling */
            height: 128px; /* Maintain aspect ratio */
            background-size: contain;
        }
		.logo:hover {
            background-image: url(hover.png');
        }
    </style>
	
		    <!-- Logo Image -->
		<a href="index.html" class="logo">
    <img src="logo2.png" alt="Logo" onmouseover="this.src='hover.png';" onmouseout="this.src='logo2.png';">
	</a>
	
</head>
<body>
    <h2>Setting - Most Popular</h2>
		<style>
    h2 {
        text-align: center;	
    }
	</style>
    <form action="update_priority.php" method="post">
        <table>
            <tr>
                <th>Book ID</th>
                <th>title</th>
                <th>Author</th>
                <th>Price</th>
                <th>ISBN</th>
                <th>Genre</th>
                <th>Publisher</th>
                <th>YearPublished</th>
				<th>Popularity</th>
            </tr>
			
            <?php
			include "dbconfig.php";
			$conn = mysqli_connect($host, $username, $password, $dbname)
					or die("<br>Cannot connect to DB\n");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT BookID, title, Author, Price, ISBN, Genre, Publisher, YearPublished, popular_priority FROM book1.book";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
					echo "<tr>";
                    echo "<td>" . $row["BookID"] . "</td>";
                    echo "<td>" . $row["title"] . "</td>";
                    echo "<td>" . $row["Author"] . "</td>";
                    echo "<td>" . $row["Price"] . "</td>";
                    echo "<td>" . $row["ISBN"] . "</td>";
                    echo "<td>" . $row["Genre"] . "</td>";
                    echo "<td>" . $row["Publisher"] . "</td>";
                    echo "<td>" . $row["YearPublished"] . "</td>";
					echo "<td>" . $row["popular_priority"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "0 results";
            }

            $conn->close();
            ?>
        </table>
		
		<form action="update_priority.php" method="post">
    <label for="name">Select Book:</label>
    <select name="name" id="name">
        <?php
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT title FROM book1.book";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
            echo "<option value='" . $row["title"] . "'>" . $row["title"] . "</option>";
        }
        $conn->close();
        ?>
    </select>
    <label for="priority">Set Priority:</label>
    <input type="number" id="priority" name="priority" min="1" max="15">
    <input type="submit" value="Update Priority">
</form>
		
		
    </form>
</body>
<?php include 'footer.php'; ?>
</html>
