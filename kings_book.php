<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Part Page</title>
    <style>
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
        }
		.logo:hover {
            background-image: url(hover.png');
        }
		
    </style>
	
	
	    <!-- Logo Image -->
		<a href="index.php" class="logo">
    <img src="logo2.png" alt="Logo" onmouseover="this.src='hover.png';" onmouseout="this.src='logo2.png';">
	</a>
	
</head>
<body>


    <h1>The King's Mirror by <span>Anthony Hope</span></h1>
	<style>
    h1 {
        text-align: center;	
    }
</style>



<style>
h1 span {
    font-weight: bold;
    font-size: 30px; /* Specific font size */
    color: red; /* Example to change color */
}
</style>


    <div class="divider"></div>

    <div id="part1">
        <p class="times-font">
"The King's Mirror" by Anthony Hope is a captivating historical fiction novel that immerses readers in the intrigue and drama of medieval Europe. Set against the backdrop of courtly politics and royal machinations, this compelling tale follows the story of a young nobleman who becomes entangled in a web of power, love, and betrayal.
As the protagonist navigates the treacherous world of royalty, readers are drawn into a rich tapestry of vivid characters, lavish settings, and gripping plot twists. The author's masterful storytelling weaves together elements of romance, adventure, and political maneuvering, creating a spellbinding narrative that keeps readers on the edge of their seats.</p>
    </div>
    <div class="divider"></div>

    <!-- Section Header for Part 2 -->
    <div class="section-header">
        <h2>Book Preview</h2>
    </div>


    <div id="part2" class="image-container">
        <img src="kings1.png" alt="Image 1">
        <img src="kings2.png" alt="Image 2">
        <img src="kings3.png" alt="Image 3">
        <img src="kings4.png" alt="Image 4">
    </div>
    <div class="divider"></div>

	    <!-- Section Header for Part 2 -->
    <div class="section-header">
        <h2>Audio Preview</h2>
    </div>


    <div id="part3">
        <audio controls>
            <source src="kings.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
    </div>
</body>
<?php include 'footer.php'; ?>
</html>
