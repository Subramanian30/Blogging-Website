<?php

    // Don't display server errors 
    ini_set("display_errors", "off");

    // Initialize a database connection
    $conn = mysqli_connect('localhost','root','subbu123');

    mysqli_select_db($conn,'creation');


    // Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }

    // Get data to display on index page
   
    
    $sql = "SELECT * FROM blog_data";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['new_post'])){
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $title = $_REQUEST['title'];
        $rating = $_REQUEST['rating'];
        $content = $_REQUEST['content'];

        $sql = "INSERT INTO blog_data(name, title,rating, content) VALUES('$name', '$title','$rating', '$content')";
        mysqli_query($conn, $sql);

        echo $sql;

        header("Location: selection.php?info=added");
        exit();
    }

    // Get post data based on id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM blog_data WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    // Delete a post
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM blog_data WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: index.php");
        exit();
    }

    // Update a post
    if(isset($_REQUEST['update'])){
        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $rating = $_REQUEST['rating'];
        $content = $_REQUEST['content'];

        $sql = "UPDATE blog_data SET title = '$title',rating='$rating', content = '$content' WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: index.php");
        exit();
    }


    
if (isset($_POST['comment'])) { // Check press or not Post Comment Button
	$post_id =$_REQUEST['id'];
	$name = $_POST['name']; // Get Name from form
	
	$comment = $_POST['comment']; // Get Comment from form

	$sql = "INSERT INTO section (post_id,name, comment)
			VALUES ('$post_id','$name', '$comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}




?>
