<?php
 error_reporting(0);
 include"inc/var.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>
<?php if($appname !="" || !empty($appname))
{
	
echo $appname;
}
else{
	echo ucwords(" Enter your portfolio name");
}
?>
</title>
<meta charset="UTF-8">
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
<meta name="viewport" content="width=device-width, user-scalable=no,maximum-scale=1,initial-scale=1">
 <link href="<?php echo $css_lite;?>" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="<?php echo $fa ;?>" rel="<?php echo $rel;?>" type="<?php echo $type;?>">
    <link href="<?php echo $gfonts;?>" rel="<?php echo $rel;?>" type="<?php echo $type;?>">

    <!-- Custom styles for this template -->

    <link href="<?php echo $css;?>" rel="<?php echo $rel;?>"  type="<?php echo $type;?>">
    
    <link href="<?php echo $wtf;?>" rel="<?php echo $rel;?>"  type="<?php echo $type;?>">
    
    <link href="Css/normalize.css" rel="<?php echo $rel;?>"  type="<?php echo $type;?>">
    <style>
.charles{
	color:#fff;
}
a:link,a:visited,a:hover{
	text-decoration:none;
}
.charley{
	border:solid 2px;
	border-radius:10px;
	
}
body{
	 background-image: url(img/code.jpg); 
	 color:#fff;
	 margin-top:100px;
	
}
	
</style>
</head>