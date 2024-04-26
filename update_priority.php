<?php

		include "dbconfig.php";

		$conn = mysqli_connect($host, $username, $password, $dbname)
				or die("<br>Cannot connect to DB\n");
				
				


# $title = $_POST['title'];
#-- $popular_priority = $_POST['popular_priority'];

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

$sql = "UPDATE book1.book SET popular_priority = ? WHERE title = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("is", $popular_priority, $title);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Priority updated successfully.";
} else {
    echo "No records were updated.";
}

$stmt->close();
$conn->close();


exit();
?>
