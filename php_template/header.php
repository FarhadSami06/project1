
<?php


$sql = "SELECT * FROM pages WHERE id= ".(int)$id;
$query = mysql_query($sql, $db_link) or die(mysql_error());

	while($row = mysql_fetch_assoc($query)) {
		$page_id = $row["id"];
		$page_title = $row["title"];
		$page_picture = $row["picture"];
		$page_content = $row["content"];
}


?>


<!DOCTYPE html>
<html id="index-page">
	<head>
		<title><?php echo 'Homaira | '.$page_title; ?></title>
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body>
		<div class="wrapper">
			<div class="header-container">
				<h1>Homaira Boutique</h1>
			</div>
			


