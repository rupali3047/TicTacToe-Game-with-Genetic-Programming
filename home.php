<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TicTacToe</title>
</head>

<body>
Tic Tac Toe!! <br />
Make Your Move!!
<?php //1 = USER
// 2 == CPU
?>

<br />
<?php 

if(!empty($_GET['board_status_current']))
{
    $board_status_current=$_GET['board_status_current'];
}
else
{
 $board_status_current='000000000'; 
 }
 $a=substr($board_status_current, -9, 1);
	$b=substr($board_status_current, -8, 1);
	$c=substr($board_status_current, -7, 1);
	$d=substr($board_status_current, -6, 1);
	$e=substr($board_status_current, -5, 1);
	$f=substr($board_status_current, -4, 1);
	$g=substr($board_status_current, -3, 1);
	$h=substr($board_status_current, -2, 1);
	$i=substr($board_status_current, -1, 1);	

 
 
 ?> 
<form  action="playgame.php" ENCTYPE="multipart/form-data" method="GET">
<table cellspacing="50">
<tr>
<td><?php if($a=='0'){ ?><input type="radio" name="move" value="a" required/><?php } elseif($a=='5') { ?> <font size="4">X</font> <?php } elseif($a=='7') { ?> <font size="4">O</font><?php } ?> </td><td> <?php if($b==0){ ?><input type="radio" name="move" value="b" /><?php } elseif($b==5) { ?> <font size="4">X</font> <?php } elseif($b==7) { ?> <font size="4">O</font><?php } ?></td>
<td><?php if($c==0){ ?><input type="radio" name="move" value="c" /><?php } elseif($c==5) { ?> <font size="4">X</font> <?php } elseif($c==7) { ?> <font size="4">O</font><?php } ?></td>
</tr>
<tr>
<td><?php if($d==0){ ?><input type="radio" name="move" value="d" /><?php } elseif($d==5) { ?> <font size="4">X</font> <?php } elseif($d==7) { ?> <font size="4">O</font><?php } ?></td><td><?php if($e==0){ ?><input type="radio" name="move" value="e" /><?php } elseif($e==5) { ?> <font size="4">X</font> <?php } elseif($e==7) { ?> <font size="4">O</font><?php } ?></td>
<td><?php if($f==0){ ?><input type="radio" name="move" value="f" /><?php } elseif($f==5) { ?> <font size="4">X</font> <?php } elseif($f==7) { ?> <font size="4">O</font><?php } ?></td>
</tr>
<tr>
<td><?php if($g==0){ ?><input type="radio" name="move" value="g" /><?php } elseif($g==5) { ?> <font size="4">X</font> <?php } elseif($g==7) { ?> <font size="4">O</font><?php } ?></td><td><?php if($h==0){ ?><input type="radio" name="move" value="h" /><?php } elseif($h==5) { ?> <font size="4">X</font> <?php } elseif($h==7) { ?> <font size="4">O</font><?php } ?></td><td><?php if($i==0){ ?><input type="radio" name="move" value="i" /><?php } elseif($i==5) { ?> <font size="4">X</font> <?php } elseif($i==7) { ?> <font size="4">O</font><?php } ?>
</td>
</tr>
</table>
<input type="hidden" name="status" value="<?php echo $board_status_current; ?>" />
<input type="submit" value="Make Move!!" />
</form>

</body>
</html>
