
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

</head>
<body class="bg-light">
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
        <a href="blog.php" class="navbar-brand">
            <h3 class="px-5 ml-5">
                <i class="fab fa-blogger-b"></i> Eco<small>JEE</small> Blog
            </h3>
        </a>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav mr-5">
                <a href="http://localhost/organic/account.php?Well" class="nav-item nav-link active mr-5">
                    <h5 class="cart"><i class="fas fa-home"></i></h5>
                </a>    
            </div>
        </div>

    </nav>
</header>

<!--------------- php ------------>

<?php
	// connecting to the database
	$connection = mysqli_connect('localhost', 'root', '', 'final_project');
	// checking the connection
	if ( !$connection ) {
		die("Error - database connection failed");
	}
	// checking if url parameter is present
	if ( isset($_GET['blog_id']) ) {
		$blog_id = mysqli_real_escape_string($connection, $_GET['blog_id']);
		$query   = "SELECT * FROM blog WHERE blog_id = {$blog_id} LIMIT 1";		
	} else {
		// getting the latest blog post
		$query   = "SELECT * FROM blog ORDER BY blog_id DESC LIMIT 1";
	}
	// executing the query
	$result_set = mysqli_query($connection, $query);
	// checking if the query is successful
	if ( $result_set ) {
		if ( mysqli_num_rows($result_set) == 1 ) {
			// prepare to display the record
			$blog_post = mysqli_fetch_assoc($result_set);
			$blog_title = stripslashes($blog_post['blog_title']);
			$blog_date = stripslashes($blog_post['blog_date']);
			$blog_text = stripslashes($blog_post['blog_text']);
		} else {
			// no records found. going back to home page
			header('Location: /organic/?error=blog-not-found');
		}
	} else {
		// database query failed		
		echo $query; die();
		header('Location: blog.php?error=database-query-failed');
	}
	// preparing a list of previous posts
	$query  = "SELECT blog_id, blog_short_title FROM blog ORDER BY blog_id LIMIT 10";
	$result_set = mysqli_query($connection, $query);
	$blog_nav = '<ul>';
	if ( $result_set ) {
		if ( mysqli_num_rows($result_set) > 0 ) {
			while ( $result = mysqli_fetch_assoc($result_set) ) {
				$blog_nav .= '<li class="mt-1"><a class="text-secondary" href="/organic/blog/blog.php?blog_id=' . $result['blog_id'] . '">' . $result['blog_short_title'] . '</a></li>';
			}
		} else {
			// no records found			
		}		
	} else {
		// datbase query failed		
	}
	$blog_nav .= '</ul>';
?>

<!--------------- php close ------------>


<!--------------- blog-page-content ------------>

<div class="container">

    <div class="row mt-5">

        <div class="col-8">
            <h1 class="text-primary"><?php echo $blog_title; ?></h1>
            <p class=" text-secondary">DATE POSTED: <?php echo $blog_date; ?></p>
            <div class="text-secondary"><?php echo $blog_text; ?></div> 
        </div>

        <div class="col-4 pl-5 border-left">
            <h2 class="text-center text-primary">PREVIOUS POSTS</h2>
            <div class="mt-4 text-secondary"><?php echo stripslashes($blog_nav); ?></div>  
            
            <!-- -----------latest posts---------- -->
            <div class="mt-4">
            <h2 class="text-center text-primary mb-4">Latest Posts</h2>
            <?php
                $query = "SELECT * FROM blog ORDER BY blog_id DESC LIMIT 2";
                $result_set = mysqli_query($connection, $query);
                $latest_posts = '';
                // checking if the query is successful
                if ( $result_set ) {
                    while ( $result = mysqli_fetch_assoc($result_set) ) {
                        $blog_id    = $result['blog_id'];
                        $blog_title = $result['blog_short_title'];
                        $blog_date  = $result['blog_date'];
                        $blog_text  = strip_tags(substr($result['blog_text'], 0, 150)) ;
                        // preparing the html
                        $latest_posts .= '<div class="mb-4 text-secondary">';
                        $latest_posts .= '<h6>' . $blog_title . '</h6>';
                        $latest_posts .= '<div class="text-secondary">';
                        $latest_posts .= $blog_date;
                        $latest_posts .= '</div> <!-- postinfo -->';
                        $latest_posts .= '<p>' . $blog_text . '</p>';
                        $latest_posts .= '<a href="/organic/blog/blog.php?blog_id=' . $blog_id . '" class="readmore">Read more &raquo;</a>';
                        $latest_posts .= '</div> <!-- blogpost -->';

                    }
                }
                echo $latest_posts;
            ?>
            </div>

        </div>

    </div>

</div>

<!--------------- blog-page-content close ------------>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
