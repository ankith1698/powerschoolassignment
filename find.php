< ?php

	$db         = mysqli_connect('localhost', 'root', '', 'search');
	
	$cars    = $_GET['cars'];
	
	$sql        = "SELECT name FROM carname WHERE name like '$cars%' ORDER BY name";
	
	$res        = $db->query($sql);
	
	if(!$res)
		echo mysqli_error($db);
	else
		while( $row = $res->fetch_object() )
			echo "<option value='".$row->name."'>";
		
?>
</option>
