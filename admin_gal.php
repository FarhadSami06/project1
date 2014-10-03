<?php


require_once("../config/constants.php");
require_once("../config/database.php");


if(isset($_POST['url']) && !empty($_POST['url'])) {
	
	foreach($_POST['url'] as $url_id => $url)
	{
		$query = 'UPDATE gallery SET
					url="'.addslashes($url).'"
					WHERE `id` = '.(int)$url_id;
					
		mysql_query($query);
	}
		
}


if(isset($_POST['new_url']) && !empty($_POST['new_url'])) {
	$create_query = 'INSERT INTO gallery (url)
				VALUES ("'.addslashes($_POST['new_url']).'")';
	mysql_query($create_query);
}




if(isset($_POST['delete']) && !empty($_POST['delete'])) {
	$delete_query = 'DELETE FROM gallery
						WHERE `id` IN ('.implode(',', $_POST['delete']).')';
						
	mysql_query($delete_query);
}

$query = 'SELECT * FROM gallery';
$result = mysql_query($query);
 

?>
<!DOCTYPE html>
<html>
	<head>
		
	</head>
	<body>
		<form method="post">
			<table>
				<tr>
					<th>URL</th>
					<th>Preview</th>
					<th>Delete</th>
				</tr>
				<?php
				while($row = mysql_fetch_assoc($result)) {
					?>
					<tr>
						<td><input type="text" name="url[<?php echo $row['id'];?>]" value="<?php echo $row['url'];?>" /></td>
						<td><img src="<?php echo $row['url'];?>" height="100" /></td>
						<td><input type="checkbox" name="delete[]" value="<?php echo $row['id'];?>" /></td>
					</tr>
					<?php
				}
				?>
				<tr>
					<td colspan="3"><input type="text" name="new_url" placeholder="URL of Image" style="width: 100%;" /></td>
				</tr>
			</table>
			
			
			
			<input type="submit" value="Save" />
		</form>
	</body>
</html>