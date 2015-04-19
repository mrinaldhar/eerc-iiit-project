<?php

define('DB_NAME', 'eerc-es');
define('DB_USER', 'root');
define('DB_PASSWORD', 'mrinaldhar');
define('DB_HOST', 'localhost');

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) 
{
     die('Could not connect: ' . mysqli_error());
}

$db_selected = mysqli_select_db(DB_NAME, $link);

if (!$db_selected) 
{
     die('Can\'t use ' . DB_NAME . ': ' . mysqli_error());
}

#lookup -> change depending on names of forms
$tables[1] = "Form1_Stone_LNS" ; 
$tables[2] = "Form2_Mudhouse_LNS" ;
$tables[3] = "Form3_Stone_LNS" ;
$tables[4] = "Form4_Stone_LNS" ;
$tables[5] = "Form5_Stone_LNS" ;
$tables[6] = "Form6_Stone_LNS" ;
$tables[7] = "Form7_Stone_LNS" ;


for( $i = 1; $i < 8 ; $i++)
{
$r = mysqli_query("SELECT id FROM $tables[$i]");
$t[$i] = mysqli_num_rows($r);

}
$jsonhouse = json_encode($t); #no of each house type
echo $jsonhouse;

for( $i = 2; $i < 6 ; $i++)
{
$p[$i] = 0;
}
for($i = 1; $i < 8 ; $i++)
{
$r = mysqli_query("SELECT id FROM $tables[$i] WHERE zone = 2");
$p[2] += mysqli_num_rows($r);
$r = mysqli_query("SELECT id FROM $tables[$i] WHERE zone = 3");
$p[3] += mysqli_num_rows($r);
$r = mysqli_query("SELECT id FROM $tables[$i] WHERE zone = 4");
$p[4] += mysqli_num_rows($r);
$r = mysqli_query("SELECT id FROM $tables[$i] WHERE zone = 5");
$p[5] += mysqli_num_rows($r);
}
$jsonzone = json_encode($p);# no in each zone
echo $jsonzone;
?>
<!DOCTYPE html>

<html>
<head>
<script type="text/javascript" language="javascript">

</script>
</head>
<body>
<form id="form1" method="POST" action="stat2.php" />

<!-- name the statistics tables this way-->
<select id="house" name="house">
<option value = "randomrubble"> Random Rubble Stone Masonry House </option>
<option value = "mudhouse"> Mud House </option>
<option value = "rcframe"> RC Frame Building </option>
<option value = "ikara"> Ikara House </option>
<option value = "dhajji"> Dhajji-Dewari House </option>
<option value = "confined"> Confined Masonry House </option>
<option value = "burnt"> Burnt Clay Brick Masonry House </option>

</select>
<!-- currently taking as text. should be a dropdown maybe with list of options from statistics db-->
<input type ="text" id="parameter" name="parameter">

<br />

&nbsp;&nbsp;
<input type="submit" name="submit" value="submit"/>
</form>

<?php mysqli_close(); ?>
</body>
</html>
