<!DOCTYPE html>
<html>
<?php include 'header2.php'; ?>
<head>
    <title>Staff Picks</title>
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

    <div class="header">
        <h2>Setting - Staff Picks</h2>
				<style>
    h2 {
        text-align: center;	
    }
	</style>
    </div>

    <form action="process_priority.php" method="post">
        <table>
            <tr>
                <th>Book ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Price</th>
                <th>ISBN</th>
                <th>Genre</th>
                <th>Publisher</th>
                <th>YearPublished</th>
                <th>Set Priority</th>
            </tr>
            <?php
			include "dbconfig.php";
			$conn = mysqli_connect($host, $username, $password, $dbname)
					or die("<br>Cannot connect to DB\n");
					
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Retrieve data from the "abc" table
            $sql = "SELECT * FROM book1.book";
            $result = $conn->query($sql);

            // Display the retrieved data in the table
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["BookID"] . "</td>";
                    echo "<td>" . $row["Title"] . "</td>";
                    echo "<td>" . $row["Author"] . "</td>";
                    echo "<td>" . $row["Price"] . "</td>";
                    echo "<td>" . $row["ISBN"] . "</td>";
                    echo "<td>" . $row["Genre"] . "</td>";
                    echo "<td>" . $row["Publisher"] . "</td>";
                    echo "<td>" . $row["YearPublished"] . "</td>";
                    echo "<td><input type='number' name='priority[]' min='1' max='11'></td>";
                    echo "</tr>";
                }
			}				


// edit code to take the priorty from the webpage
	
			
			
            ?>
        </table>
    </form>

<?php include 'footer.php'; ?>

</body>
</html>
