<?php

    include "logic.php";

?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Comment System in PHP - Pure Coding</title>
</head>
<body>
    
    <div class="navbar">
                <img src="logo.jpg" class="logo">
                <ul>
                    <li><b><a href="home.php">Home</a></b></li>
                    
                    <li><b><a href="userreview.php">Reviews</a></b></li>
                    <li><b><a href="feedback.html">FeedBack</a></b></li>
                    
                    

                </ul>
            </div>

	<div class="wrapper">
		<form action="" method="POST" class="form">
            <input type="hidden" name="id" value="<?php echo $id?>">
			<div class="row">
                

				<div class="input-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" placeholder="Enter your Name" required>
				</div>
				
			</div>
			<div class="input-group textarea">
				<label for="comment">Comment</label>
				<textarea id="comment" name="comment" placeholder="Comment to see what others say" required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Post Comment</button>
                
                
                
			</div>
		</form>
        
    
           
		<div class="prev-comments">
			<?php 
            
			
			$sql = "SELECT * FROM section WHERE post_id = $post_id";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">
				<h4><?php echo $row['name']; ?></h4>
				
				<p><?php echo $row['comment']; ?></p>
			</div>
			<?php

				}
			}
			
			?>
		</div>
	</div>
    
</body>
</html>