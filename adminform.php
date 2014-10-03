<?php
	require_once("../config/constants.php");
	require_once("../config/database.php");




//THIS IS MY UPDATE QUERY. 
$page_id = $_GET['id'];
if (!isset($_GET['id'])) {
	die ('id not specified');
}

if(isset($_POST['title'])) {
	$update_query_format = 'UPDATE `pages` 					
								SET `title`="%s",
									`picture`="%s",
									`content`="%s"
									WHERE  `id`=%d';
	$update_query = sprintf($update_query_format, addslashes($_POST['title']), addslashes($_POST['picture']), addslashes($_POST['content']), $page_id);

mysql_query($update_query);

}




//THIS IS MY SELECT QUERY. I AM SELECTING THE DATA FROM THE DATABASE 

$sql = "SELECT * FROM ".pages." WHERE `id`=$page_id";
$query = mysql_query($sql, $db_link) or die(mysql_error());

	while($row = mysql_fetch_assoc($query)) {
		$page_title = $row["title"];
		$page_picture = $row["picture"];
		$page_content = $row["content"];
}

?>	

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style>
			
		</style>
	</head>
	<body>
		<div class="layout-container">
			
			<h1>Update</h1>
			<form  method="post" >
				<label for="title">Title:</label>
				<input type="text" name="title" value="<?php echo $page_title;?>" /></br>
				<label for="picture">Image:</label>
				<input type="text" name="picture" value="<?php echo $page_picture ;?>" /></br>
				<label for="content">Content:</label>
				<?php echo '<textarea name="content">'.htmlentities($page_content).'</textarea>';?>
				<input type="submit" value="Submit">
			</form>
		</div>
	</body>
</html>
