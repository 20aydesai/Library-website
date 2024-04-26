<!DOCTYPE html>
<html>
<head>
    <title>Book List</title>
    <style>
        /* Add your CSS styles here */
        .navbar {
            background-color: #c5fb71;
            overflow: hidden;
        }
		body {
            font-family: Arial, sans-serif;
            background-image: url('background.png');
			background-size: cover;
            margin: 0;
            padding: 0;
		}
		header, footer {
            background-color: transparent;
            text-align: center;
            padding: 20px 0;
        }
        .navbar a {
            float: center;
            display: inline-block;
			justify-content: center;
            color: blue;
            text-align: center;
            padding: 0px 30px;
            text-decoration: none;
			margin: 10px 15px; /* Spacing between the buttons */
			list-style: none;
        }
        .navbar a:hover {
            background-color: #fffd75;
            color: purple;
        }
		.navbar li {
			display: inline-block; /* Aligns items in a line and respects padding and margins */
			margin: 20px 15px; /* Spacing between the buttons */
		}
		.section-header {
            background-color: #c4f970;  /* Light grey background */
            padding: 10px 20px;
            margin: 20px 0;
            border: 1px solid #ccc; /* Light grey border */
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1); /* Optional: adds shadow for better visibility */
		}
		.section-header:hover {
            background-color: #f99169;
            color: purple;
			text-decoration: underline;
        }
		.times-font {
            font-family: "Times New Roman", Times, serif;
        }


    </style>

    <div class="navbar">
        <a href="index.php">Home</a>
		<a href="staff_picks.php">Staff Picks</a>
		<a href="most_popular.php">Most Popular</a>
        <a href="insert.php">Add New Product</a>
        <a href="update.php">Change Quantity</a>
        <a href="delete.php">Remove Product</a>
        <a href="select.php">View Product</a>
        <a href="logout.php">Logout!</a>
    </div>
    
        </nav>
    
    <main>