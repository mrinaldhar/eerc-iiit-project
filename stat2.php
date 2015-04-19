<?php

define('DB_NAME1', 'eerc-es');
define('DB_USER', 'root');
define('DB_PASSWORD', 'mrinaldhar');
define('DB_HOST', 'localhost');

#lookup -> change depending on names of forms
$formname[1] = "Form1_Stone_LNS" ; 
$formname[2] = "Form2_Mudhouse_LNS" ;
$formname[3] = "Form3_Stone_LNS" ;
$formname[4] = "Form4_Stone_LNS" ;
$formname[5] = "Form5_Stone_LNS" ;
$formname[6] = "Form6_Stone_LNS" ;
$formname[7] = "Form7_Stone_LNS" ;

#lookup -> name the statistics tables this way
$housename[1] = "randomrubble";
$housename[2] = "mudhouse";
$housename[3] = "rcframe";
$housename[4] = "ikara";
$housename[5] = "dhajji";
$housename[6] = "confined" ;
$housename[7] = "burnt" ;

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) 
{
     die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME1, $link);

if (!$db_selected) 
{
     die('Can\'t use ' . DB_NAME1 . ': ' . mysql_error());
}

define('DB_NAME2', 'eerc-es');
$link1 = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD,true);

if (!$link1) 
{
     die('Could not connect: ' . mysql_error());
}

$db_selected1 = mysql_select_db(DB_NAME2, $link1);

if (!$db_selected1) 
{
     die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}




if($_POST['submit'] == "submit")
{
	$temptable = $_POST['house'];	
	for($k = 1 ; $k < 8 ; $k++)
	{
		if ($temptable == $housename[$k])
		{
			$table = $formname[$k];
		}
	}
	
	$r = mysql_query("SELECT id FROM $table WHERE zone = 2",$link1);
	$count[2] = mysql_num_rows($r);
	$r = mysql_query("SELECT id FROM $table WHERE zone = 3",$link1);
	$count[3] = mysql_num_rows($r);
	$r = mysql_query("SELECT id FROM $table WHERE zone = 4",$link1);
	$count[4] = mysql_num_rows($r);
	$r = mysql_query("SELECT id FROM $table WHERE zone = 5",$link1);
	$count[5] = mysql_num_rows($r);

	$jsonhousezone = json_encode($count); # selected house type, zone wise distribution
	echo $jsonhousezone;
	
	$para = $_POST['parameter'];
	$res = mysql_query("SELECT question,answer,type FROM $temptable WHERE text = '$para'",$link);
	while($row = mysql_fetch_array($res))
	{
		$q = $row['question'];
		$t = $row['type'];
		$a = $row['answer'];
	}

	$res1 = mysql_query("SELECT $q,zone FROM $t" ,$link1);
	
		
	for ($i = 2 ; $i < 6; $i++)
	{
		$pzcount[$i] = 0;
	}
	while($line = mysql_fetch_array($res1))
	{
		$pos = strpos($line[$q],$a);
		if($pos !== false)
		{
			$pzcount[$line['zone']]+=1;
		}
	}
	$jsonhouseparazone = json_encode($pzcount); # selected house type, parameter, zone wise distribution
	echo $jsonhouseparazone;

}

?>
<!DOCTYPE html>

<html>
<head>
<script type="text/javascript" language="javascript">

</script>
</head>
<body>

<?php mysql_close(); ?>
</body>
</html>



