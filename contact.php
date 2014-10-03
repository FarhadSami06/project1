<?php 



require_once("../config/constants.php");
require_once("../config/database.php");

if(!isset($_GET['id'])) {
	$id = 4;
} else {
	$id = $_GET['id'];
}

include "php_template/header.php";

$sql = "SELECT * FROM pages WHERE id= ".(int)$id;
$query = mysql_query($sql, $db_link) or die(mysql_error());

	while($row = mysql_fetch_assoc($query)) {
		$page_id = $row["id"];
		$page_title = $row["title"];
		$page_picture = $row["picture"];
		$page_content = $row["content"];
}
?>


			<div class="main-container">
				<?php include "php_template/nav.php"; ?>
				<?php echo '<img id="home-image" src="'.$page_picture.'" /> '?>
				
					<?php echo $page_content ; ?>
				</div>
			</div> 
			
<?php include "php_template/footer.php"; 

/*
<p id="address">7374 Melrose Ave <br />Los Angeles, CA 90046</p>
				<div id="form-shift" class="bottom-content">
					<h4>Contact Homaira Boutique</h4>
					<form class="contact-form">
						<div class="form-info">
						<label for="name">Your Name:</label>
						<input type="text" name="name" placeholder="Full Name" />
						</div>
						<div class="form-info">
						<label for="email">Your Email:</label>
						<input type="text" name="email" placeholder="Email Address" />
						</div>
						<div class="form-info">
						<label for="message">Message:</label>
						<textarea name="message" placeholder="Your Message Here"></textarea>
						</div>
						<input id="send" type="submit" value="Send" />							
					</form>
				</div>
*/

?>		




