<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Most Popular</title>
    <style>
        .image-container {
            border: 2px solid black;
            margin: 10px;
            padding: 10px;
            box-sizing: border-box; /* Ensures padding and border are included in width */
        }
        h1, h2 {
            text-align: center;
            margin: 0; /* Removes default margin to make the layout tighter */
        }
        .images {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .image-box {
            width: 20%; /* Adjusts the width to about half of what it was */
            margin: auto; /* Centers the image box within the container */
        }
		body {
            font-family: Arial, sans-serif;
        }
        .divider {
            border-bottom: 2px solid #000;
            margin: 20px 0;
        }
        .image-container img {
            width: 100%;
            margin-right: 1%;
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
        }
		a {
            text-decoration: none; /* Removes underline from links */
            color: inherit; /* Inherits text color from parent elements */
        }
    </style>
	
		    <!-- Logo Image -->
		<a href="index.php" class="logo">
    <img src="logo2.png" alt="Logo" onmouseover="this.src='hover.png';" onmouseout="this.src='logo2.png';">
	</a>
	
</head>
<body>
    <h1>Most Popular Books!</h1>
    <div class="images">
        <?php
        $images = [
            "popular1.jpg",
            "popular2.jpg",
            "popular3.jpg",
            "popular4.jpg"
        ];
        $headers = ["Header 1", "Header 2", "Header 3", "Header 4"];
		$links = [
            "http://localhost/dracula_book.php",
            "http://localhost/gatsby_book.php",
            "http://localhost/sea_book.php",
            "http://localhost/time_book.php"
        ];

        for ($i = 0; $i < 4; $i++) {
            echo "<div class='image-container'>";
            echo "<a href='" . $links[$i] . "'>";
            echo "<h2>" . $headers[$i] . "</h2>";
            echo "<div class='image-box'>";
            echo "<img src='" . $images[$i] . "' alt='Image " . ($i + 1) . "'>";
            echo "</div>";
            echo "</a>";
            echo "</div>";
        }
        ?>
    </div>
</body>
<?php include 'footer.php'; ?>
</html>
