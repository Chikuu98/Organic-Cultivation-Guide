<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="news.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
</head>

<body>
<!------------------navbar----------------->
    <section class="header">
        <nav style="background:linear-gradient(to right, #013243, #1989d3,#013243)">
            <a href="#">
                <i class="fa fa-newspaper fa-2x navbar-icon"></i> <b class="b">Eco News</b>
            </a>
            <div class="nav-links" id="navLinks">
                <a href="http://localhost/organic/account.php?Well">
                    <i class="fas fa-home home"></i>
                </a>
            </div>
        </nav>
        <!-----------image slider start----------->
        <div class="slider-body">
        <div class="slider">
            <div class="slides">
                <!-----------radio button start----------->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <!-----------radio button end----------->
                <!-----------slide images start----------->
                <div class="slide first">
                    <img src="sliderImages/1.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="sliderImages/2.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="sliderImages/3.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="sliderImages/4.jpg" alt="">
                </div>
                <!-----------slide images end----------->
                <!-----------automatic navigation start----------->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
                <!-----------automatic navigation end----------->
            </div>
            <!-----------manual navigation start----------->
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>
            <!-----------manual navigation end----------->
        </div>
    </div>
    <script type="text/javascript">
        var counter = 1;
        setInterval(function() {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 4) {
                counter = 1;
            }
        }, 4500);
    </script>
    <!-----------image slider end----------->
    <div class="latest-news">
            <h1>Latest News Updates</h1>
        </div>
    </section>
    <!--------------- php ------------>

<?php
	// connecting to the database
	$connection = mysqli_connect('localhost', 'root', '', 'final_project');
	// checking the connection
	if ( !$connection ) {
		die("Error - database connection failed");
	}

	// preparing a list of previous news
	$query  = "SELECT * FROM news ORDER BY news_id DESC LIMIT 15";
	$result_set = mysqli_query($connection, $query);

	if ( $result_set ) {
		if ( mysqli_num_rows($result_set) > 0 ) {
			while ( $result = mysqli_fetch_assoc($result_set) ) {
				?>
<!------------------news-------------------->
    <div class="news">
        <div class="news-card">
            <div class="card-img">
                <img src="<?php echo $result['news_img']; ?>" alt="">
            </div>
            <div class="news-info">
                <div class="news-date">
                    <span><?php echo $result['weekday']; ?></span>
                    <span><?php echo $result['date']; ?></span>
                </div>
                <h1 class="news-title"><?php echo $result['news_title']; ?></h1>
                <p class="short-text"><?php echo $result['short_news']; ?>...</p>
                <a href="<?php echo $result['news_link']; ?>" class="news-link">Read More</a>
            </div>
        </div>
    </div>
<!--------*---------news close---*---------->
                <?php
			}
		} else {
			// no records found			
		}		
	} else {
		// datbase query failed		
	}
?>

<!--------------- php close ------------>
    
    
<!--------------------------footer---------------------->
    <footer>
        <div class="move-up">
            <span><a href="#"><i style="color: white;" class="fas fa-arrow-circle-up fa-2x"></i></a></span>
        </div>
        <div class="rowf">
            <div class="colf">
                <h3 class="logof"><i class="fa fa-pagelines" aria-hidden="true"></i> Cultivation Guide</h3>
                <p>To promote agriculture and food systems that build healthy land, people, communities and quality of life, for present and future generations.</p>
            </div>
            <div class="colf">
                <h3>Address
                    <div class="underlinef"><span></span></div>
                </h3>
                <p>Yatiyana Road</p>
                <p>Aparekka,Matara</p>
                <p>Sothern Province, Sri Lanka</p>
                <p class="email-idf">chiranjonline@gmail.com</p>
                <h4>+94- 779980990</h4>
            </div>
            <div class="colf">
                <h3>Links
                    <div class="underlinef"><span></span></div>
                </h3>
                <ul class="ulf">
                    <li><a href="">Home</a></li>
                    <li><a href="">Buy & Sell</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">News & Inst.</a></li>
                    <li><a href="">Account</a></li>
                </ul>
            </div>
            <div class="colf">
                <h3>Newsletter
                    <div class="underlinef"><span></span></div>
                </h3>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <form class="frmf">
                    <input type="email" placeholder="Enter your  email" required>
                    <Button type="submit"><i class="fas fa-arrow-right" aria-hidden="true"></i></Button>
                </form>
                <div class="social-iconsf">
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-whatsapp-square"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin"></i>
                </div>
            </div>
        </div>
        <hr class="hrf">
        <p class="copyrightf">Chiran Jeewantha Vidanagamage <i class="far fa-copyright"></i> 2021 - All Rights Reserved</p>
    </footer>
</body>

</html>