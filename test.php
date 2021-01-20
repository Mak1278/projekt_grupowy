<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>tytulstrony</title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

 
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php
if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
}
?>

</head>
<?php
include_once 'dbConnection.php';
?>



<body>
<div class="header">

<div class="row">

<div class="col-lg-6">

<!--<span class="logo">Skill's Breaker</span>-->
</div>

<div class="col-md-4 col-md-offset-2">

</div></div>

</div>
<!--
<form name="formaaa" novalidate action="/nasz_quiz/account.php" method="post"/>

<select name="Wyb_kat">
  <option value="/listing" selected>Wybierz kategorie</option>
  <option value="Zabawa">Zabawa</option>
  <option value="/nasz_quiz/account.php?q=1&Wyb_kat=kat2">kat.2</option>
</select>
<input type="submit" value="Wyślij" />   
</form>-->

<form method="GET" action="account.php">
  <select name="Wyb_kat" required>
    <option value="Zadna">Zadna</option>
    <option value="Zabawa">Zabawa</option>
    <option value="3">Kij</option>
  </select>
  <input type="submit" value="Submit">
</form>

<form action="index.php" method="get">
miesiac: <input type="submit" name="poprzedni" value="minus1">
</form>



<br></br><br></br><br></br><br></br>
	<li><a href="index.php?msc=<?php echo $mies - 1; ?>"><span></span>&nbsp;<<< </a></li>
	
	
	<br></br>
	<li><a href="index.php?msc=<?php echo $mies + 1; ?>"><span>
			<?php
	$mies=$mies+1;
	echo $mies;
	?>
	</span>&nbsp;>>> </a>

	</li>

			



			<?php if (@$_GET['msc'] == 0)?> <?php$zaz_mies=0; echo $zaz_mies?>
			<br></br><br></br><br></br><br></br>
<!--



 < ?php
include_once 'dbConnection.php';
session_start();


	if(isset($_POST['Wyb_kat'])){
    $Wyb_kat = $_POST['Wyb_kat'];
	
	
	//echo 'account.php?q=1&kat='. $Wyb_kat .'></a>';
	
    if($Wyb_kat=='Zadna') {
            echo 'zadna byku<br/>';
	}
	elseif ($Wyb_kat=='Zabawa'){
        
		//echo '<form id="forma" action="account.php?q=1&kat='.$Wyb_kat.' " method="POST"  class="form-horizontal"><br />';
		
		//echo '<form id="qform" action="update.php?q=quiz&step=2&eid=' . $eid . '&n=' . $sn . '&t=' . $total . '&qid=' . $qid . '" method="POST"  class="form-horizontal"><br />';
		
		
		
		
		
        //echo '<a href="account.php?q=1&kat=Zabawa"></a>';
		//echo '<a href="account.php?q=1&kat=". $Wyb_kat.></a>';
		echo '<a href="account.php?q=1&kat=' . $Wyb_kat.'></a>';
	}
else {echo 'no i kij wywaliło sie';}
    
}

	
	
	
	? >
	-->


</body>
</html>
