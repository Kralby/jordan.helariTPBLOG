<?php 
mysql_connect( "127.0.0.1","root","");
mysql_select_db('blog');

	$email="";
	$connect=false;
	
if(isset($_COOKIE['sid']))
{
	$sid=$_COOKIE['sid'];
	$sql="SELECT email FROM utilisateurshelari WHERE sid='".$sid."'";
	$data=mysql_query($sql);
	$info_util = mysql_fetch_array($data);

	if($info_util != NULL)
	{
		$connect=true;
		$email=$info_util['email'];
	}		
}

?>