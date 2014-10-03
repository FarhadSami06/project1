<?php 


require_once("config/constants.php");
require_once("config/database.php");

if(!isset($_GET['id'])) {
	$id = 1;
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
				<div class="bottom-content">
				<?php echo $page_content; ?>
				</div>
			</div>
			
<?php include "php_template/footer.php"; 	

///<img id="home-image" src="img/jane12.jpg" 
?>	