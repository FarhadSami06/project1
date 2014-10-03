<?php

require_once("../config/constants.php");
require_once("../config/database.php");





$create_input = $_POST["create"];
	if(!empty($create_input)) {
$insert_query = 'INSERT INTO pages (title) VALUES ("'.addslashes($create_input).'")' or die ('warning');
mysql_query($insert_query);

	}

$delete_input = (int)$_POST["delete"];
	if($delete_input ==1 || $delete_input ==2 || $delete_input ==3) {
		echo "You  cannot delete this page ";
	}
	else if(!empty($delete_input))
{ $delete_query = 'DELETE FROM pages WHERE id='.$delete_input;
mysql_query($delete_query);

}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>

	.layout-container {
		margin: 0 auto;
		background-color: #71D6A1;
		
	}
	
	.header {
		height: 100%;
		border: 1px solid;
		text-align: center;
	}
	#admin_nav {
		text-align: center;
		padding: 0;
		
	}
	#admin_nav li, a {
		list-style-type: none;
		text-decoration: none;
		padding: 10px;
		text-transform: uppercase;
		font-family:"Courier New", Courier, monospace;
		font-weight: normal;
		color: #000000;
		
	}
	#admin_nav li, a:hover {
		color: #fff;
	}
	h1 {
		text-transform: uppercase;
		font-family:"Courier New", Courier, monospace;
		font-weight: normal;
	}
	.create_form {
		text-align: center;
	}
	.delete_form {
		text-align: center;
		
	}
</style>
</head>
<body>

<div class="layout-container">
	<div class="header">
		<h1>Admin Page</h1>
	</div>
	<div>
		<ul id="admin_nav">
			
<?php


$pageinfo = "SELECT * FROM pages";
$res = mysql_query ($pageinfo);
while ($row = mysql_fetch_assoc($res)){
	echo '<li><a href="adminform.php?id='. $row['id'] . '">ID:'.$row['id'].' ' . $row['title']. '</a></li>';
	/*?><li><a href="adminform.php?id=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></li>          ---This is the same thing as concatenation*/
}
?>
		</ul>
	</div>
	<div class="create_form">
		<h3>Create</h3>
		<form method="post">
			<label>Title: </label>
			<input type="text" name="create" />
			<button type="submit">Create</button>
		</form>
	</div>
		<div class="delete_form">
		<h3>Delete</h3>
		<form method="post">
			<label>Enter Page ID</label>
			<input type="text" name="delete" />
			<button type="submit">Delete</button>
		</form>
	</div>
</div>
</body>
</html>



