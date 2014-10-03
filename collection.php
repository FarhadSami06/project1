<?php 

require_once("../config/constants.php");
require_once("../config/database.php");


$sql = 'SELECT * FROM gallery';
$res = mysql_query($sql) or die("fail");





include "php_template/header.php"; ?>

			<div class="main-container">
				<?php include "php_template/nav.php"; ?>
				<div id="collection-list">
				<ul class="list-clean">
	<?php	while ($row = mysql_fetch_assoc($res)){
		echo '<li><img src="'.$row['url'].'"></li>';
}
?>					
				</ul>
				</div>
			</div>
			
<?php include "php_template/footer.php"; ?>		