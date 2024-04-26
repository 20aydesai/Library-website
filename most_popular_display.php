<!DOCTYPE html>
<html>
<head>
    <title>Most Popular Books</title>
</head>
<body>
    <h2>Most Popular Books </h2>
    <table>
        <tr>
            <th>Title</th>
        </tr>
        <?php

		include "dbconfig.php";

		$conn = mysqli_connect($host, $username, $password, $dbname)
				or die("<br>Cannot connect to DB\n");

        $sql = "SELECT title FROM book1.book ORDER BY popular_priority";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["title"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "No Records Found";
        }

        $conn->close();
        ?>
		
		


		
    </table>
</body>
</html>
