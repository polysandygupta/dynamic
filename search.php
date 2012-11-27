<h3 align="cennter">Search Result</h3>
<table border="1" align="center">
<th>ID</th>
<th>Name</th>
<th>Age</th>
<th>Country</th>
<th>Rank</th>
<th>Color</th>
<?php
include 'connect.php';
$sql="select *from test ";
foreach($_POST as $key=>$value)
{
	$$key=$value;
}
$cond="";
$where=" where ";
$type="";
$param="";
if(!empty($name))
{
	$cond.= "name=? and ";
	$type.="s";
	$param.=$name.",";
}
if(!empty($minage))
{
	$cond.= "age between ? and ? and ";
	$type.="ss";
	$param.=$minage.",".$maxage.",";
}
if(!empty($country))
{
	$cond.= "country=? and ";
	$type.="s";
	$param.=$country.",";
}
if(!empty($minrank))
{
	$cond.= "rank between ? and ? and ";
	$type.="ss";
	$param.=$minrank.",".$maxrank.",";
}
if(!empty($color))
{
	$cond.= "color=? and ";
	$type.="s";
	$param.=$color.",";
}

$conn=connect();

if($cond!="")
{
	$cond=substr($cond,0,-4);
	$sql.= $where.$cond;
	if(substr($param, -1)==",")
	{
		$param = substr_replace($param,"",-1);
	}
	$stmt=$conn->prepare($sql);
	echo $sql;
	echo "<br>$type";
	echo "<br>$param";
	$params=explode(",",$param);
	print_r($params);
	array_unshift($params,$type);
	call_user_func_array(array($stmt,'bind_param'),&$params);	
}
else
{
	$stmt=$conn->prepare($sql);
}

$stmt->execute();
$stmt->bind_result($id,$name,$age,$country,$rank,$color);
while ($stmt->fetch())
{
	?>
	<tr>
		<td><?php echo $id; ?></td>
		<td><?php echo $name; ?></td>
		<td><?php echo $age; ?></td>
		<td><?php echo $country; ?></td>
		<td><?php echo $rank; ?></td>
		<td><?php echo $color; ?></td>
	</tr>
<?php
}
$stmt->close();
$conn->close();
	?>
</table>