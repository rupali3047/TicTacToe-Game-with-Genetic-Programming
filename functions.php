<?php
// Checkx1 : Sum of X in board
// Checkx2 : Sum of O in board
// Checkx3 : Number of 2 O's in a row with third open
// Checkx4 : Number of 2 X's in a row with third open
// Checkx5 : Number of 3 O's in a row
// Checkx6 : Number of 3 X's in a row
// Checkx7 : Number of 2 X's in a row with 1 O in row
// Checkx8 : Number of 2 O's in a row with 1 X in row
// Checkx9 : center element with an O
// Checkx10 : center element with an X 

// user=5
// cpu=7


// Sum of X in board
function checkx1($board_status_current,$x)
{
$bso=$board_status_current;
if($x=='a'){$board_status_current=substr_replace($board_status_current,'7',-9,1);}
elseif($x=='b'){$board_status_current=substr_replace($board_status_current,'7',-8,1);}
elseif($x=='c'){$board_status_current=substr_replace($board_status_current,'7',-7,1);}
elseif($x=='d'){$board_status_current=substr_replace($board_status_current,'7',-6,1);}
elseif($x=='e'){$board_status_current=substr_replace($board_status_current,'7',-5,1);}
elseif($x=='f'){$board_status_current=substr_replace($board_status_current,'7',-4,1);}
elseif($x=='g'){$board_status_current=substr_replace($board_status_current,'7',-3,1);}
elseif($x=='h'){$board_status_current=substr_replace($board_status_current,'7',-2,1);}
elseif($x=='i'){$board_status_current=substr_replace($board_status_current,'7',-1,1);}    

$a=substr($board_status_current, -9, 1);
	$b=substr($board_status_current, -8, 1);
	$c=substr($board_status_current, -7, 1);
	$d=substr($board_status_current, -6, 1);
	$e=substr($board_status_current, -5, 1);
	$f=substr($board_status_current, -4, 1);
	$g=substr($board_status_current, -3, 1);
	$h=substr($board_status_current, -2, 1);
	$i=substr($board_status_current, -1, 1);	
	    $x1=0;;
if($a=='5'){$x1++;}   
if($b=='5'){$x1++;}
if($c=='5'){$x1++;}
if($d=='5'){$x1++;}
if($e=='5'){$x1++;}
if($f=='5'){$x1++;}
if($g=='5'){$x1++;}
if($h=='5'){$x1++;}
if($i=='5'){$x1++;}    
    
 return $x1;   
}




// Sum of O in board
function checkx2($board_status_current,$x)
{
$bso=$board_status_current;
if($x=='a'){$board_status_current=substr_replace($board_status_current,'7',-9,1);}
elseif($x=='b'){$board_status_current=substr_replace($board_status_current,'7',-8,1);}
elseif($x=='c'){$board_status_current=substr_replace($board_status_current,'7',-7,1);}
elseif($x=='d'){$board_status_current=substr_replace($board_status_current,'7',-6,1);}
elseif($x=='e'){$board_status_current=substr_replace($board_status_current,'7',-5,1);}
elseif($x=='f'){$board_status_current=substr_replace($board_status_current,'7',-4,1);}
elseif($x=='g'){$board_status_current=substr_replace($board_status_current,'7',-3,1);}
elseif($x=='h'){$board_status_current=substr_replace($board_status_current,'7',-2,1);}
elseif($x=='i'){$board_status_current=substr_replace($board_status_current,'7',-1,1);}    

$a=substr($board_status_current, -9, 1);
	$b=substr($board_status_current, -8, 1);
	$c=substr($board_status_current, -7, 1);
	$d=substr($board_status_current, -6, 1);
	$e=substr($board_status_current, -5, 1);
	$f=substr($board_status_current, -4, 1);
	$g=substr($board_status_current, -3, 1);
	$h=substr($board_status_current, -2, 1);
	$i=substr($board_status_current, -1, 1);	
	    $x2=0;;
if($a=='7'){$x2++;}   
if($b=='7'){$x2++;}
if($c=='7'){$x2++;}
if($d=='7'){$x2++;}
if($e=='7'){$x2++;}
if($f=='7'){$x2++;}
if($g=='7'){$x2++;}
if($h=='7'){$x2++;}
if($i=='7'){$x2++;}    
    
 return $x2;   
}





//Number of 2 O's in a row with third open
function checkx3($board_status_current,$x)
{
$bso=$board_status_current;
if($x=='a'){$board_status_current=substr_replace($board_status_current,'7',-9,1);}
elseif($x=='b'){$board_status_current=substr_replace($board_status_current,'7',-8,1);}
elseif($x=='c'){$board_status_current=substr_replace($board_status_current,'7',-7,1);}
elseif($x=='d'){$board_status_current=substr_replace($board_status_current,'7',-6,1);}
elseif($x=='e'){$board_status_current=substr_replace($board_status_current,'7',-5,1);}
elseif($x=='f'){$board_status_current=substr_replace($board_status_current,'7',-4,1);}
elseif($x=='g'){$board_status_current=substr_replace($board_status_current,'7',-3,1);}
elseif($x=='h'){$board_status_current=substr_replace($board_status_current,'7',-2,1);}
elseif($x=='i'){$board_status_current=substr_replace($board_status_current,'7',-1,1);}    

$a=substr($board_status_current, -9, 1);
	$b=substr($board_status_current, -8, 1);
	$c=substr($board_status_current, -7, 1);
	$d=substr($board_status_current, -6, 1);
	$e=substr($board_status_current, -5, 1);
	$f=substr($board_status_current, -4, 1);
	$g=substr($board_status_current, -3, 1);
	$h=substr($board_status_current, -2, 1);
	$i=substr($board_status_current, -1, 1);	
	    $x3=0;
$sum_row1=$a+$b+$c;
$sum_row2=$d+$e+$f;
$sum_row3=$g+$h+$i;
$sum_col1=$a+$d+$g;
$sum_col2=$b+$e+$h;
$sum_col3=$c+$f+$i;
$sum_dia1=$a+$e+$i;
$sum_dia2=$c+$e+$g;
if($sum_row1==14){ $x3++;}        
if($sum_row2==14){ $x3++;}
if($sum_row3==14){ $x3++;}
if($sum_col1==14){ $x3++;}
if($sum_col2==14){ $x3++;}
if($sum_col3==14){ $x3++;}
if($sum_dia1==14){ $x3++;}
if($sum_dia2==14){ $x3++;}        
 return $x3;   
}




//Number of 2 X's in a row with third open
function checkx4($board_status_current,$x)
{
$bso=$board_status_current;
if($x=='a'){$board_status_current=substr_replace($board_status_current,'7',-9,1);}
elseif($x=='b'){$board_status_current=substr_replace($board_status_current,'7',-8,1);}
elseif($x=='c'){$board_status_current=substr_replace($board_status_current,'7',-7,1);}
elseif($x=='d'){$board_status_current=substr_replace($board_status_current,'7',-6,1);}
elseif($x=='e'){$board_status_current=substr_replace($board_status_current,'7',-5,1);}
elseif($x=='f'){$board_status_current=substr_replace($board_status_current,'7',-4,1);}
elseif($x=='g'){$board_status_current=substr_replace($board_status_current,'7',-3,1);}
elseif($x=='h'){$board_status_current=substr_replace($board_status_current,'7',-2,1);}
elseif($x=='i'){$board_status_current=substr_replace($board_status_current,'7',-1,1);}    

$a=substr($board_status_current, -9, 1);
	$b=substr($board_status_current, -8, 1);
	$c=substr($board_status_current, -7, 1);
	$d=substr($board_status_current, -6, 1);
	$e=substr($board_status_current, -5, 1);
	$f=substr($board_status_current, -4, 1);
	$g=substr($board_status_current, -3, 1);
	$h=substr($board_status_current, -2, 1);
	$i=substr($board_status_current, -1, 1);	
	    $x4=0;
$sum_row1=$a+$b+$c;
$sum_row2=$d+$e+$f;
$sum_row3=$g+$h+$i;
$sum_col1=$a+$d+$g;
$sum_col2=$b+$e+$h;
$sum_col3=$c+$f+$i;
$sum_dia1=$a+$e+$i;
$sum_dia2=$c+$e+$g;
if($sum_row1==10){ $x4++;}        
if($sum_row2==10){ $x4++;}
if($sum_row3==10){ $x4++;}
if($sum_col1==10){ $x4++;}
if($sum_col2==10){ $x4++;}
if($sum_col3==10){ $x4++;}
if($sum_dia1==10){ $x4++;}
if($sum_dia2==10){ $x4++;}        
 return $x4;   
}





//Number of 3 O's in a row 
function checkx5($board_status_current,$x)
{
$bso=$board_status_current;
if($x=='a'){$board_status_current=substr_replace($board_status_current,'7',-9,1);}
elseif($x=='b'){$board_status_current=substr_replace($board_status_current,'7',-8,1);}
elseif($x=='c'){$board_status_current=substr_replace($board_status_current,'7',-7,1);}
elseif($x=='d'){$board_status_current=substr_replace($board_status_current,'7',-6,1);}
elseif($x=='e'){$board_status_current=substr_replace($board_status_current,'7',-5,1);}
elseif($x=='f'){$board_status_current=substr_replace($board_status_current,'7',-4,1);}
elseif($x=='g'){$board_status_current=substr_replace($board_status_current,'7',-3,1);}
elseif($x=='h'){$board_status_current=substr_replace($board_status_current,'7',-2,1);}
elseif($x=='i'){$board_status_current=substr_replace($board_status_current,'7',-1,1);}    

$a=substr($board_status_current, -9, 1);
	$b=substr($board_status_current, -8, 1);
	$c=substr($board_status_current, -7, 1);
	$d=substr($board_status_current, -6, 1);
	$e=substr($board_status_current, -5, 1);
	$f=substr($board_status_current, -4, 1);
	$g=substr($board_status_current, -3, 1);
	$h=substr($board_status_current, -2, 1);
	$i=substr($board_status_current, -1, 1);	
	    $x5=0;
$sum_row1=$a+$b+$c;
$sum_row2=$d+$e+$f;
$sum_row3=$g+$h+$i;
$sum_col1=$a+$d+$g;
$sum_col2=$b+$e+$h;
$sum_col3=$c+$f+$i;
$sum_dia1=$a+$e+$i;
$sum_dia2=$c+$e+$g;
if($sum_row1==21){ $x5++;}        
if($sum_row2==21){ $x5++;}
if($sum_row3==21){ $x5++;}
if($sum_col1==21){ $x5++;}
if($sum_col2==21){ $x5++;}
if($sum_col3==21){ $x5++;}
if($sum_dia1==21){ $x5++;}
if($sum_dia2==21){ $x5++;}        
 return $x5;   
}




//Number of 3 X's in a row 
function checkx6($board_status_current,$x)
{
$bso=$board_status_current;
if($x=='a'){$board_status_current=substr_replace($board_status_current,'7',-9,1);}
elseif($x=='b'){$board_status_current=substr_replace($board_status_current,'7',-8,1);}
elseif($x=='c'){$board_status_current=substr_replace($board_status_current,'7',-7,1);}
elseif($x=='d'){$board_status_current=substr_replace($board_status_current,'7',-6,1);}
elseif($x=='e'){$board_status_current=substr_replace($board_status_current,'7',-5,1);}
elseif($x=='f'){$board_status_current=substr_replace($board_status_current,'7',-4,1);}
elseif($x=='g'){$board_status_current=substr_replace($board_status_current,'7',-3,1);}
elseif($x=='h'){$board_status_current=substr_replace($board_status_current,'7',-2,1);}
elseif($x=='i'){$board_status_current=substr_replace($board_status_current,'7',-1,1);}    

$a=substr($board_status_current, -9, 1);
	$b=substr($board_status_current, -8, 1);
	$c=substr($board_status_current, -7, 1);
	$d=substr($board_status_current, -6, 1);
	$e=substr($board_status_current, -5, 1);
	$f=substr($board_status_current, -4, 1);
	$g=substr($board_status_current, -3, 1);
	$h=substr($board_status_current, -2, 1);
	$i=substr($board_status_current, -1, 1);	
	    $x6=0;
$sum_row1=$a+$b+$c;
$sum_row2=$d+$e+$f;
$sum_row3=$g+$h+$i;
$sum_col1=$a+$d+$g;
$sum_col2=$b+$e+$h;
$sum_col3=$c+$f+$i;
$sum_dia1=$a+$e+$i;
$sum_dia2=$c+$e+$g;
if($sum_row1==15){ $x6++;}        
if($sum_row2==15){ $x6++;}
if($sum_row3==15){ $x6++;}
if($sum_col1==15){ $x6++;}
if($sum_col2==15){ $x6++;}
if($sum_col3==15){ $x6++;}
if($sum_dia1==15){ $x6++;}
if($sum_dia2==15){ $x6++;}        
 return $x6;   
}



//Number of 2 X's in a row with 1 O in row
function checkx7($board_status_current,$x)
{
$bso=$board_status_current;
if($x=='a'){$board_status_current=substr_replace($board_status_current,'7',-9,1);}
elseif($x=='b'){$board_status_current=substr_replace($board_status_current,'7',-8,1);}
elseif($x=='c'){$board_status_current=substr_replace($board_status_current,'7',-7,1);}
elseif($x=='d'){$board_status_current=substr_replace($board_status_current,'7',-6,1);}
elseif($x=='e'){$board_status_current=substr_replace($board_status_current,'7',-5,1);}
elseif($x=='f'){$board_status_current=substr_replace($board_status_current,'7',-4,1);}
elseif($x=='g'){$board_status_current=substr_replace($board_status_current,'7',-3,1);}
elseif($x=='h'){$board_status_current=substr_replace($board_status_current,'7',-2,1);}
elseif($x=='i'){$board_status_current=substr_replace($board_status_current,'7',-1,1);}    

$a=substr($board_status_current, -9, 1);
	$b=substr($board_status_current, -8, 1);
	$c=substr($board_status_current, -7, 1);
	$d=substr($board_status_current, -6, 1);
	$e=substr($board_status_current, -5, 1);
	$f=substr($board_status_current, -4, 1);
	$g=substr($board_status_current, -3, 1);
	$h=substr($board_status_current, -2, 1);
	$i=substr($board_status_current, -1, 1);	
	    $x7=0;
$sum_row1=$a+$b+$c;
$sum_row2=$d+$e+$f;
$sum_row3=$g+$h+$i;
$sum_col1=$a+$d+$g;
$sum_col2=$b+$e+$h;
$sum_col3=$c+$f+$i;
$sum_dia1=$a+$e+$i;
$sum_dia2=$c+$e+$g;
if($sum_row1==17){ $x7++;}        
if($sum_row2==17){ $x7++;}
if($sum_row3==17){ $x7++;}
if($sum_col1==17){ $x7++;}
if($sum_col2==17){ $x7++;}
if($sum_col3==17){ $x7++;}
if($sum_dia1==17){ $x7++;}
if($sum_dia2==17){ $x7++;}        
 return $x7;   
}





//Number of 2 O's in a row with 1 X in row
function checkx8($board_status_current,$x)
{
$bso=$board_status_current;
if($x=='a'){$board_status_current=substr_replace($board_status_current,'7',-9,1);}
elseif($x=='b'){$board_status_current=substr_replace($board_status_current,'7',-8,1);}
elseif($x=='c'){$board_status_current=substr_replace($board_status_current,'7',-7,1);}
elseif($x=='d'){$board_status_current=substr_replace($board_status_current,'7',-6,1);}
elseif($x=='e'){$board_status_current=substr_replace($board_status_current,'7',-5,1);}
elseif($x=='f'){$board_status_current=substr_replace($board_status_current,'7',-4,1);}
elseif($x=='g'){$board_status_current=substr_replace($board_status_current,'7',-3,1);}
elseif($x=='h'){$board_status_current=substr_replace($board_status_current,'7',-2,1);}
elseif($x=='i'){$board_status_current=substr_replace($board_status_current,'7',-1,1);}    

$a=substr($board_status_current, -9, 1);
	$b=substr($board_status_current, -8, 1);
	$c=substr($board_status_current, -7, 1);
	$d=substr($board_status_current, -6, 1);
	$e=substr($board_status_current, -5, 1);
	$f=substr($board_status_current, -4, 1);
	$g=substr($board_status_current, -3, 1);
	$h=substr($board_status_current, -2, 1);
	$i=substr($board_status_current, -1, 1);	
	    $x8=0;
$sum_row1=$a+$b+$c;
$sum_row2=$d+$e+$f;
$sum_row3=$g+$h+$i;
$sum_col1=$a+$d+$g;
$sum_col2=$b+$e+$h;
$sum_col3=$c+$f+$i;
$sum_dia1=$a+$e+$i;
$sum_dia2=$c+$e+$g;
if($sum_row1==19){ $x8++;}        
if($sum_row2==19){ $x8++;}
if($sum_row3==19){ $x8++;}
if($sum_col1==19){ $x8++;}
if($sum_col2==19){ $x8++;}
if($sum_col3==19){ $x8++;}
if($sum_dia1==19){ $x8++;}
if($sum_dia2==19){ $x8++;}        
 return $x8;   
}


//center element with an O
function checkx9($board_status_current,$x)
{
$bso=$board_status_current;
if($x=='a'){$board_status_current=substr_replace($board_status_current,'7',-9,1);}
elseif($x=='b'){$board_status_current=substr_replace($board_status_current,'7',-8,1);}
elseif($x=='c'){$board_status_current=substr_replace($board_status_current,'7',-7,1);}
elseif($x=='d'){$board_status_current=substr_replace($board_status_current,'7',-6,1);}
elseif($x=='e'){$board_status_current=substr_replace($board_status_current,'7',-5,1);}
elseif($x=='f'){$board_status_current=substr_replace($board_status_current,'7',-4,1);}
elseif($x=='g'){$board_status_current=substr_replace($board_status_current,'7',-3,1);}
elseif($x=='h'){$board_status_current=substr_replace($board_status_current,'7',-2,1);}
elseif($x=='i'){$board_status_current=substr_replace($board_status_current,'7',-1,1);}    

$a=substr($board_status_current, -9, 1);
	$b=substr($board_status_current, -8, 1);
	$c=substr($board_status_current, -7, 1);
	$d=substr($board_status_current, -6, 1);
	$e=substr($board_status_current, -5, 1);
	$f=substr($board_status_current, -4, 1);
	$g=substr($board_status_current, -3, 1);
	$h=substr($board_status_current, -2, 1);
	$i=substr($board_status_current, -1, 1);	
	    $x9=0;
if($e==7){ $x9++;}        
 return $x9;   
}

//center element with an X
function checkx10($board_status_current,$x)
{
$bso=$board_status_current;
if($x=='a'){$board_status_current=substr_replace($board_status_current,'7',-9,1);}
elseif($x=='b'){$board_status_current=substr_replace($board_status_current,'7',-8,1);}
elseif($x=='c'){$board_status_current=substr_replace($board_status_current,'7',-7,1);}
elseif($x=='d'){$board_status_current=substr_replace($board_status_current,'7',-6,1);}
elseif($x=='e'){$board_status_current=substr_replace($board_status_current,'7',-5,1);}
elseif($x=='f'){$board_status_current=substr_replace($board_status_current,'7',-4,1);}
elseif($x=='g'){$board_status_current=substr_replace($board_status_current,'7',-3,1);}
elseif($x=='h'){$board_status_current=substr_replace($board_status_current,'7',-2,1);}
elseif($x=='i'){$board_status_current=substr_replace($board_status_current,'7',-1,1);}    

$a=substr($board_status_current, -9, 1);
	$b=substr($board_status_current, -8, 1);
	$c=substr($board_status_current, -7, 1);
	$d=substr($board_status_current, -6, 1);
	$e=substr($board_status_current, -5, 1);
	$f=substr($board_status_current, -4, 1);
	$g=substr($board_status_current, -3, 1);
	$h=substr($board_status_current, -2, 1);
	$i=substr($board_status_current, -1, 1);	
	    $x10=0;
if($e==5){ $x10++;}        
 return $x10;   
}



// game_over_check
function game_over_check($board_status_current)
{
$a=substr($board_status_current, -9, 1);
	$b=substr($board_status_current, -8, 1);
	$c=substr($board_status_current, -7, 1);
	$d=substr($board_status_current, -6, 1);
	$e=substr($board_status_current, -5, 1);
	$f=substr($board_status_current, -4, 1);
	$g=substr($board_status_current, -3, 1);
	$h=substr($board_status_current, -2, 1);
	$i=substr($board_status_current, -1, 1);	
	    $game_over=0;
$sum_row1=$a+$b+$c;
$sum_row2=$d+$e+$f;
$sum_row3=$g+$h+$i;
$sum_col1=$a+$d+$g;
$sum_col2=$b+$e+$h;
$sum_col3=$c+$f+$i;
$sum_dia1=$a+$e+$i;
$sum_dia2=$c+$e+$g;
if($sum_row1==21){ $game_over='2';}        
if($sum_row2==21){ $game_over='2';}
if($sum_row3==21){ $game_over='2';}
if($sum_col1==21){ $game_over='2';}
if($sum_col2==21){ $game_over='2';}
if($sum_col3==21){ $game_over='2';}
if($sum_dia1==21){ $game_over='2';}
if($sum_dia2==21){ $game_over='2';}
if($sum_row1==15){ $game_over='1';}        
if($sum_row2==15){ $game_over='1';}
if($sum_row3==15){ $game_over='1';}
if($sum_col1==15){ $game_over='1';}
if($sum_col2==15){ $game_over='1';}
if($sum_col3==15){ $game_over='1';}
if($sum_dia1==15){ $game_over='1';}
if($sum_dia2==15){ $game_over='1';}

if($a!='0' && $b!='0'&& $c!='0'&& $d!='0'&& $e!='0'&& $f!='0'&& $g!='0'&& $h!='0'&& $i!='0' && $game_over=='0'){$game_over='3';}        
 return $game_over;   
}






//Weight Update user first
function weight_update($vtrain,$w1,$w2,$w3,$w4,$w5,$w6,$w7,$w8,$w9,$w10,$index)
{
    
    require_once 'db.inc.php';
require_once 'project_http_functions.inc.php';
$db = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD) or
die ('Unable to connect. Check your connection parameters.');

mysql_select_db(MYSQL_DB, $db) or die(mysql_error($db));

    $neta=0.01;
    
   $sql="SELECT * FROM gamemoves order by id DESC";
    $sql=mysql_query($sql,$db) or die(mysql_error($db)); 
	  $t=0;
      while($info=mysql_fetch_array($sql))
      {
         $x1[$t]=$info['x1'];
         $x2[$t]=$info['x2'];
         $x3[$t]=$info['x3'];
         $x4[$t]=$info['x4'];
         $x5[$t]=$info['x5'];
         $x6[$t]=$info['x6'];
         $x7[$t]=$info['x7'];
         $x8[$t]=$info['x8'];
         $x9[$t]=$info['x9'];
         $x10[$t]=$info['x10'];
         $v[$t]=$info['v'];
         $t++;
      }   
      for($n=0;$n<$t;$n++)
      {
        $w1=$w1 + $neta*($vtrain-$v[$n])*$x1[$n];
        $w2=$w2 + $neta*($vtrain-$v[$n])*$x2[$n];
        $w3=$w3 + $neta*($vtrain-$v[$n])*$x3[$n];
        $w4=$w4 + $neta*($vtrain-$v[$n])*$x4[$n];
        $w5=$w5 + $neta*($vtrain-$v[$n])*$x5[$n];
        $w6=$w6 + $neta*($vtrain-$v[$n])*$x6[$n];
        $w7=$w7 + $neta*($vtrain-$v[$n])*$x7[$n];
        $w8=$w8 + $neta*($vtrain-$v[$n])*$x8[$n];
        $w9=$w9 + $neta*($vtrain-$v[$n])*$x9[$n];
        $w10=$w10 + $neta*($vtrain-$v[$n])*$x10[$n];
        $vtrain=$v[$n]; 
      }
   $sql="UPDATE weights SET w1='$w1',w2='$w2',w3='$w3',w4='$w4',w5='$w5',w6='$w6',w7='$w7',w8='$w8',w9='$w9',w10='$w10' where id='$index'";
    $sql=mysql_query($sql,$db) or die(mysql_error($db)); 
  
return ;
}



function weight_update_cpu1($vtrain,$w1c,$w2c,$w3c,$w4c,$w5c,$w6c,$w7c,$w8c,$w9c,$w10c,$index)
{
    
    require_once 'db.inc.php';
require_once 'project_http_functions.inc.php';
$db = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD) or
die ('Unable to connect. Check your connection parameters.');

mysql_select_db(MYSQL_DB, $db) or die(mysql_error($db));

    $neta=0.01;
    
   $sql="SELECT * FROM gamemovescpu1 order by id DESC";
    $sql=mysql_query($sql,$db) or die(mysql_error($db)); 
	  $t=0;
      while($info=mysql_fetch_array($sql))
      {
         $x1[$t]=$info['x1'];
         $x2[$t]=$info['x2'];
         $x3[$t]=$info['x3'];
         $x4[$t]=$info['x4'];
         $x5[$t]=$info['x5'];
         $x6[$t]=$info['x6'];
         $x7[$t]=$info['x7'];
         $x8[$t]=$info['x8'];
         $x9[$t]=$info['x9'];
         $x10[$t]=$info['x10'];
         $v[$t]=$info['v'];
         $t++;
      }   
      for($n=0;$n<$t;$n++)
      {
        $w1c=$w1c + $neta*($vtrain-$v[$n])*$x1[$n];
        $w2c=$w2c + $neta*($vtrain-$v[$n])*$x2[$n];
        $w3c=$w3c + $neta*($vtrain-$v[$n])*$x3[$n];
        $w4c=$w4c + $neta*($vtrain-$v[$n])*$x4[$n];
        $w5c=$w5c + $neta*($vtrain-$v[$n])*$x5[$n];
        $w6c=$w6c + $neta*($vtrain-$v[$n])*$x6[$n];
        $w7c=$w7c + $neta*($vtrain-$v[$n])*$x7[$n];
        $w8c=$w8c + $neta*($vtrain-$v[$n])*$x8[$n];
        $w9c=$w9c + $neta*($vtrain-$v[$n])*$x9[$n];
        $w10c=$w10c + $neta*($vtrain-$v[$n])*$x10[$n];
        $vtrain=$v[$n]; 
      }
   $sql="UPDATE weights SET w1='$w1c',w2='$w2c',w3='$w3c',w4='$w4c',w5='$w5c',w6='$w6c',w7='$w7c',w8='$w8c',w9='$w9c',w10='$w10c' where id='$index'";
    $sql=mysql_query($sql,$db) or die(mysql_error($db)); 
  
return ;
}




//Mutate Function

function mutate($id1,$id2)
{
    
    require_once 'db.inc.php';
require_once 'project_http_functions.inc.php';
$db = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD) or
die ('Unable to connect. Check your connection parameters.');

mysql_select_db(MYSQL_DB, $db) or die(mysql_error($db));

    $len = 2;  // total number of numbers
$min = 1; // minimum
$max = 10; // maximum
$range=array();
foreach(range(0, $len - 1) as $i){
    while(in_array($num = mt_rand($min, $max), $range)){}
    $range[] = $num;
}
    
    
    $rand0=$range[0];
    $rand1=$range[1];
    
   $sql="SELECT * FROM weights where id='$id1'";
    $sql=mysql_query($sql,$db) or die(mysql_error($db)); 
	  
      while($info=mysql_fetch_array($sql))
      {
         $x1[0]=$info['w0'];
         $x1[1]=$info['w1'];
         $x1[2]=$info['w2'];
         $x1[3]=$info['w3'];
         $x1[4]=$info['w4'];
         $x1[5]=$info['w5'];
         $x1[6]=$info['w6'];
         $x1[7]=$info['w7'];
         $x1[8]=$info['w8'];
         $x1[9]=$info['w9'];
         $x1[10]=$info['w10'];
               }   
      
      $x1[$rand0]=1/$x1[$rand0];
      $x1[$rand1]=1/$x1[$rand1];
      
      
   $sql="SELECT * FROM weights where id='$id1'";
    $sql=mysql_query($sql,$db) or die(mysql_error($db)); 
	  
      while($info=mysql_fetch_array($sql))
      {
         $x2[0]=$info['w0'];
         $x2[1]=$info['w1'];
         $x2[2]=$info['w2'];
         $x2[3]=$info['w3'];
         $x2[4]=$info['w4'];
         $x2[5]=$info['w5'];
         $x2[6]=$info['w6'];
         $x2[7]=$info['w7'];
         $x2[8]=$info['w8'];
         $x2[9]=$info['w9'];
         $x2[10]=$info['w10'];
      }   
      
      $x2[$rand0]=1/$x2[$rand0];
      $x2[$rand1]=1/$x2[$rand1];
   
   
   $sql="UPDATE weights SET w0='$x1[0]', w1='$x1[1]',w2='$x1[2]',w3='$x1[3]',w4='$x1[4]',w5='$x1[5]',w6='$x1[6]',w7='$x1[7]',w8='$x1[8]',w9='$x1[9]',w10='$x1[10]' where id='$id1'";
    $sql=mysql_query($sql,$db) or die(mysql_error($db)); 
    $sql="UPDATE weights SET w0='$x2[0]', w1='$x2[1]',w2='$x2[2]',w3='$x2[3]',w4='$x2[4]',w5='$x2[5]',w6='$x2[6]',w7='$x2[7]',w8='$x2[8]',w9='$x2[9]',w10='$x2[10]' where id='$id2'";
    $sql=mysql_query($sql,$db) or die(mysql_error($db)); 
  
return ;
}



//CroSsOver Function

function crossover($id1,$id2)
{
    
    require_once 'db.inc.php';
require_once 'project_http_functions.inc.php';
$db = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD) or
die ('Unable to connect. Check your connection parameters.');

mysql_select_db(MYSQL_DB, $db) or die(mysql_error($db));

    $len = 4;  // total number of numbers
$min = 0; // minimum
$max = 10; // maximum
$range=array();
foreach(range(0, $len - 1) as $i){
    while(in_array($num = mt_rand($min, $max), $range)){}
    $range[] = $num;
}
    $rand0=$range[0];
    $rand1=$range[1];
    $rand2=$range[2];
    $rand3=$range[3];
    
   $sql="SELECT * FROM weights where id='$id1'";
    $sql=mysql_query($sql,$db) or die(mysql_error($db)); 
	  
      while($info=mysql_fetch_array($sql))
      {
         $x1[0]=$info['w0'];
         $x1[1]=$info['w1'];
         $x1[2]=$info['w2'];
         $x1[3]=$info['w3'];
         $x1[4]=$info['w4'];
         $x1[5]=$info['w5'];
         $x1[6]=$info['w6'];
         $x1[7]=$info['w7'];
         $x1[8]=$info['w8'];
         $x1[9]=$info['w9'];
         $x1[10]=$info['w10'];
    
      }   
      
      
      
      
   $sql="SELECT * FROM weights where id='$id2'";
    $sql=mysql_query($sql,$db) or die(mysql_error($db)); 
	  
      while($info=mysql_fetch_array($sql))
      {
         $x2[0]=$info['w0'];
         $x2[1]=$info['w1'];
         $x2[2]=$info['w2'];
         $x2[3]=$info['w3'];
         $x2[4]=$info['w4'];
         $x2[5]=$info['w5'];
         $x2[6]=$info['w6'];
         $x2[7]=$info['w7'];
         $x2[8]=$info['w8'];
         $x2[9]=$info['w9'];
         $x2[10]=$info['w10'];
         
      }   
      
      $tmp=$x2[$rand0];
      $x2[$rand0]=$x1[$rand0];
      $x1[$rand0]=$tmp;
      $tmp=$x2[$rand1];
      $x2[$rand1]=$x1[$rand1];
      $x1[$rand1]=$tmp;
      $tmp=$x2[$rand2];
      $x2[$rand2]=$x1[$rand2];
      $x1[$rand2]=$tmp;
      $tmp=$x2[$rand3];
      $x2[$rand3]=$x1[$rand3];
      $x1[$rand3]=$tmp;
      
   
   $sql="UPDATE weights SET w0='$x1[0]', w1='$x1[1]',w2='$x1[2]',w3='$x1[3]',w4='$x1[4]',w5='$x1[5]',w6='$x1[6]',w7='$x1[7]',w8='$x1[8]',w9='$x1[9]',w10='$x1[10]' where id='$id1'";
    $sql=mysql_query($sql,$db) or die(mysql_error($db)); 
    $sql="UPDATE weights SET w0='$x2[0]', w1='$x2[1]',w2='$x2[2]',w3='$x2[3]',w4='$x2[4]',w5='$x2[5]',w6='$x2[6]',w7='$x2[7]',w8='$x2[8]',w9='$x2[9]',w10='$x2[10]' where id='$id2'";
    $sql=mysql_query($sql,$db) or die(mysql_error($db)); 
  
return ;
}

?>