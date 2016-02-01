<?php
// User = 5
// CPU = 7
require_once 'functions.php';
require_once 'db.inc.php';
require_once 'project_http_functions.inc.php';

$db = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD) or
    die ('Unable to connect. Check your connection parameters.');

mysql_select_db(MYSQL_DB, $db) or die(mysql_error($db));

//Starting Game
set_time_limit ( 5000 );
$userwon=0;
$cpuwon=0;
$gamedraw=0;
$count=0;
$index=1;
for($index=1;$index<=30;$index++)
{
    $userwon=0;
$cpuwon=0;
$gamedraw=0;
$count=0;
for ($repeat=1; $repeat<=10; $repeat++)
{
    $count++;
$board_status_current='000000000';

$sql="SELECT * FROM weights where id='$index'";
$sql=mysql_query($sql,$db) or die(mysql_error($db)); 
	  while($info=mysql_fetch_array($sql))
      {
        $w0=$info['w0'];
        $w1=$info['w1'];
        $w2=$info['w2'];
        $w3=$info['w3'];
        $w4=$info['w4'];
        $w5=$info['w5'];
        $w6=$info['w6'];
        $w7=$info['w7'];
        $w8=$info['w8'];
        $w9=$info['w9'];
        $w10=$info['w10'];
      }
      


// 1st User/CPU1 move
$a=substr($board_status_current, -9, 1);
	$b=substr($board_status_current, -8, 1);
	$c=substr($board_status_current, -7, 1);
	$d=substr($board_status_current, -6, 1);
	$e=substr($board_status_current, -5, 1);
	$f=substr($board_status_current, -4, 1);
	$g=substr($board_status_current, -3, 1);
	$h=substr($board_status_current, -2, 1);
	$i=substr($board_status_current, -1, 1);	
        $available_moves='';
	if($a=='0'){$available_moves=$available_moves.'a';}
	if($b=='0'){$available_moves=$available_moves.'b';}
	if($c=='0'){$available_moves=$available_moves.'c';}
	if($d=='0'){$available_moves=$available_moves.'d';}
	if($e=='0'){$available_moves=$available_moves.'e';}
	if($f=='0'){$available_moves=$available_moves.'f';}
	if($g=='0'){$available_moves=$available_moves.'g';}
	if($h=='0'){$available_moves=$available_moves.'h';}
	if($i=='0'){$available_moves=$available_moves.'i';}	
    $range=strlen($available_moves);
    $nm=rand(1,$range);
	$nm=$nm-1;
	$x=substr($available_moves, $nm, 1);
    
    if($x=='a'){$board_status_current=substr_replace($board_status_current,'5',-9,1);}
elseif($x=='b'){$board_status_current=substr_replace($board_status_current,'5',-8,1);}
elseif($x=='c'){$board_status_current=substr_replace($board_status_current,'5',-7,1);}
elseif($x=='d'){$board_status_current=substr_replace($board_status_current,'5',-6,1);}
elseif($x=='e'){$board_status_current=substr_replace($board_status_current,'5',-5,1);}
elseif($x=='f'){$board_status_current=substr_replace($board_status_current,'5',-4,1);}
elseif($x=='g'){$board_status_current=substr_replace($board_status_current,'5',-3,1);}
elseif($x=='h'){$board_status_current=substr_replace($board_status_current,'5',-2,1);}
elseif($x=='i'){$board_status_current=substr_replace($board_status_current,'5',-1,1);}
 
 
 // 1st User/CPU1 move End
// 1st CPU2 move Start


   $a=substr($board_status_current, -9, 1);
	$b=substr($board_status_current, -8, 1);
	$c=substr($board_status_current, -7, 1);
	$d=substr($board_status_current, -6, 1);
	$e=substr($board_status_current, -5, 1);
	$f=substr($board_status_current, -4, 1);
	$g=substr($board_status_current, -3, 1);
	$h=substr($board_status_current, -2, 1);
	$i=substr($board_status_current, -1, 1);	
	$available_moves='';
	if($a=='0'){$available_moves='a';}
	if($b=='0'){$available_moves=$available_moves.'b';}
	if($c=='0'){$available_moves=$available_moves.'c';}
	if($d=='0'){$available_moves=$available_moves.'d';}
	if($e=='0'){$available_moves=$available_moves.'e';}
	if($f=='0'){$available_moves=$available_moves.'f';}
	if($g=='0'){$available_moves=$available_moves.'g';}
	if($h=='0'){$available_moves=$available_moves.'h';}
	if($i=='0'){$available_moves=$available_moves.'i';}
    $range=strlen($available_moves);
    $z=0;
    for($ct=0;$ct<$range;$ct++)
    {
        $x=substr($available_moves, $ct, 1);
        $x1=checkx1($board_status_current,$x);
        $x2=checkx2($board_status_current,$x);
        $x3=checkx3($board_status_current,$x);
        $x4=checkx4($board_status_current,$x);
        $x5=checkx5($board_status_current,$x);
        $x6=checkx6($board_status_current,$x);
        $x7=checkx7($board_status_current,$x);
        $x8=checkx8($board_status_current,$x);
        $x9=checkx9($board_status_current,$x);
        $x10=checkx10($board_status_current,$x);
        $v=$w0+($w1*$x1)+($w2*$x2)+($w3*$x3)+($w4*$x4)+($w5*$x5)+($w6*$x6)+($w7*$x7)+($w8*$x8)+($w9*$x9)+($w10*$x10);
        mysql_query("INSERT INTO gamemovestry (next_move,x1,x2,x3,x4,x5,x6,x7,x8,x9,x10,v) values ('$x','$x1','$x2','$x3','$x4','$x5','$x6','$x7','$x8','$x9','$x10','$v')") or die(mysql_error($db));
    }
    
    $sql="SELECT MAX(v) as maxv FROM gamemovestry";
    $sql=mysql_query($sql,$db) or die(mysql_error($db)); 
	  
      while($info=mysql_fetch_array($sql))
      {
        
        $v1=$info['maxv'];
        
      }
      
   $sql="SELECT * FROM gamemovestry where v='$v1'";
    $sql=mysql_query($sql,$db) or die(mysql_error($db)); 
	  $t=0;
      while($info=mysql_fetch_array($sql))
      {
        $nx[$t]=$info['next_move'];
        $nx1[$t]=$info['x1'];
        $nx2[$t]=$info['x2'];
        $nx3[$t]=$info['x3'];
        $nx4[$t]=$info['x4'];
        $nx5[$t]=$info['x5'];
        $nx6[$t]=$info['x6'];
        $nx7[$t]=$info['x7'];
        $nx8[$t]=$info['x8'];
        $nx9[$t]=$info['x9'];
        $nx10[$t]=$info['x10'];  
        $nv1[$t]=$info['v'];
        
        $t++;
      }
      $t=rand(0,$t-1);
   mysql_query("INSERT INTO gamemoves (next_move,x1,x2,x3,x4,x5,x6,x7,x8,x9,x10,v) values ('$nx[$t]','$nx1[$t]','$nx2[$t]','$nx3[$t]','$nx4[$t]','$nx5[$t]','$nx6[$t]','$nx7[$t]','$nx8[$t]','$nx9[$t]','$nx10[$t]','$nv1[$t]')") or die(mysql_error($db));
  $sql="TRUNCATE TABLE gamemovestry";  
  mysql_query($sql,$db) or die(mysql_error($db));   
  $x=$nx[$t];


      if($x=='a'){$board_status_current=substr_replace($board_status_current,'7',-9,1);}
      elseif($x=='b'){$board_status_current=substr_replace($board_status_current,'7',-8,1);}
      elseif($x=='c'){$board_status_current=substr_replace($board_status_current,'7',-7,1);}
      elseif($x=='d'){$board_status_current=substr_replace($board_status_current,'7',-6,1);}
      elseif($x=='e'){$board_status_current=substr_replace($board_status_current,'7',-5,1);}
      elseif($x=='f'){$board_status_current=substr_replace($board_status_current,'7',-4,1);}
      elseif($x=='g'){$board_status_current=substr_replace($board_status_current,'7',-3,1);}
      elseif($x=='h'){$board_status_current=substr_replace($board_status_current,'7',-2,1);}
      elseif($x=='i'){$board_status_current=substr_replace($board_status_current,'7',-1,1);}
  




// 1st CPU2 move End
// 2nd User/CPU1 move Start


$a=substr($board_status_current, -9, 1);
	$b=substr($board_status_current, -8, 1);
	$c=substr($board_status_current, -7, 1);
	$d=substr($board_status_current, -6, 1);
	$e=substr($board_status_current, -5, 1);
	$f=substr($board_status_current, -4, 1);
	$g=substr($board_status_current, -3, 1);
	$h=substr($board_status_current, -2, 1);
	$i=substr($board_status_current, -1, 1);	
        $available_moves='';
	if($a=='0'){$available_moves=$available_moves.'a';}
	if($b=='0'){$available_moves=$available_moves.'b';}
	if($c=='0'){$available_moves=$available_moves.'c';}
	if($d=='0'){$available_moves=$available_moves.'d';}
	if($e=='0'){$available_moves=$available_moves.'e';}
	if($f=='0'){$available_moves=$available_moves.'f';}
	if($g=='0'){$available_moves=$available_moves.'g';}
	if($h=='0'){$available_moves=$available_moves.'h';}
	if($i=='0'){$available_moves=$available_moves.'i';}	
    $range=strlen($available_moves);
    $nm=rand(1,$range);
	$nm=$nm-1;
	$x=substr($available_moves, $nm, 1);
 
 if($x=='a'){$board_status_current=substr_replace($board_status_current,'5',-9,1);}
elseif($x=='b'){$board_status_current=substr_replace($board_status_current,'5',-8,1);}
elseif($x=='c'){$board_status_current=substr_replace($board_status_current,'5',-7,1);}
elseif($x=='d'){$board_status_current=substr_replace($board_status_current,'5',-6,1);}
elseif($x=='e'){$board_status_current=substr_replace($board_status_current,'5',-5,1);}
elseif($x=='f'){$board_status_current=substr_replace($board_status_current,'5',-4,1);}
elseif($x=='g'){$board_status_current=substr_replace($board_status_current,'5',-3,1);}
elseif($x=='h'){$board_status_current=substr_replace($board_status_current,'5',-2,1);}
elseif($x=='i'){$board_status_current=substr_replace($board_status_current,'5',-1,1);}
 // 2nd User/CPU1 move End
// 2nd CPU2 move Start


   $a=substr($board_status_current, -9, 1);
	$b=substr($board_status_current, -8, 1);
	$c=substr($board_status_current, -7, 1);
	$d=substr($board_status_current, -6, 1);
	$e=substr($board_status_current, -5, 1);
	$f=substr($board_status_current, -4, 1);
	$g=substr($board_status_current, -3, 1);
	$h=substr($board_status_current, -2, 1);
	$i=substr($board_status_current, -1, 1);	
	$available_moves='';
	if($a=='0'){$available_moves='a';}
	if($b=='0'){$available_moves=$available_moves.'b';}
	if($c=='0'){$available_moves=$available_moves.'c';}
	if($d=='0'){$available_moves=$available_moves.'d';}
	if($e=='0'){$available_moves=$available_moves.'e';}
	if($f=='0'){$available_moves=$available_moves.'f';}
	if($g=='0'){$available_moves=$available_moves.'g';}
	if($h=='0'){$available_moves=$available_moves.'h';}
	if($i=='0'){$available_moves=$available_moves.'i';}
    $range=strlen($available_moves);
    $z=0;
    for($ct=0;$ct<$range;$ct++)
    {
        $x=substr($available_moves, $ct, 1);
        $x1=checkx1($board_status_current,$x);
        $x2=checkx2($board_status_current,$x);
        $x3=checkx3($board_status_current,$x);
        $x4=checkx4($board_status_current,$x);
        $x5=checkx5($board_status_current,$x);
        $x6=checkx6($board_status_current,$x);
        $x7=checkx7($board_status_current,$x);
        $x8=checkx8($board_status_current,$x);
        $x9=checkx9($board_status_current,$x);
        $x10=checkx10($board_status_current,$x);
        $v=$w0+($w1*$x1)+($w2*$x2)+($w3*$x3)+($w4*$x4)+($w5*$x5)+($w6*$x6)+($w7*$x7)+($w8*$x8)+($w9*$x9)+($w10*$x10);
        mysql_query("INSERT INTO gamemovestry (next_move,x1,x2,x3,x4,x5,x6,x7,x8,x9,x10,v) values ('$x','$x1','$x2','$x3','$x4','$x5','$x6','$x7','$x8','$x9','$x10','$v')") or die(mysql_error($db));
    }
    
    $sql="SELECT MAX(v) as maxv FROM gamemovestry";
    $sql=mysql_query($sql,$db) or die(mysql_error($db)); 
	  
      while($info=mysql_fetch_array($sql))
      {
        
        $v1=$info['maxv'];
        
      }
      
   $sql="SELECT * FROM gamemovestry where v='$v1'";
    $sql=mysql_query($sql,$db) or die(mysql_error($db)); 
	  $t=0;
      while($info=mysql_fetch_array($sql))
      {
        $nx[$t]=$info['next_move'];
        $nx1[$t]=$info['x1'];
        $nx2[$t]=$info['x2'];
        $nx3[$t]=$info['x3'];
        $nx4[$t]=$info['x4'];
        $nx5[$t]=$info['x5'];
        $nx6[$t]=$info['x6'];
        $nx7[$t]=$info['x7'];
        $nx8[$t]=$info['x8'];
        $nx9[$t]=$info['x9'];
        $nx10[$t]=$info['x10'];  
        $nv1[$t]=$info['v'];
        
        $t++;
      }
      $t=rand(0,$t-1);
   mysql_query("INSERT INTO gamemoves (next_move,x1,x2,x3,x4,x5,x6,x7,x8,x9,x10,v) values ('$nx[$t]','$nx1[$t]','$nx2[$t]','$nx3[$t]','$nx4[$t]','$nx5[$t]','$nx6[$t]','$nx7[$t]','$nx8[$t]','$nx9[$t]','$nx10[$t]','$nv1[$t]')") or die(mysql_error($db));
  $sql="TRUNCATE TABLE gamemovestry";  
  mysql_query($sql,$db) or die(mysql_error($db));   
  $x=$nx[$t];


      if($x=='a'){$board_status_current=substr_replace($board_status_current,'7',-9,1);}
      elseif($x=='b'){$board_status_current=substr_replace($board_status_current,'7',-8,1);}
      elseif($x=='c'){$board_status_current=substr_replace($board_status_current,'7',-7,1);}
      elseif($x=='d'){$board_status_current=substr_replace($board_status_current,'7',-6,1);}
      elseif($x=='e'){$board_status_current=substr_replace($board_status_current,'7',-5,1);}
      elseif($x=='f'){$board_status_current=substr_replace($board_status_current,'7',-4,1);}
      elseif($x=='g'){$board_status_current=substr_replace($board_status_current,'7',-3,1);}
      elseif($x=='h'){$board_status_current=substr_replace($board_status_current,'7',-2,1);}
      elseif($x=='i'){$board_status_current=substr_replace($board_status_current,'7',-1,1);}
 



// 2nd CPU2 move End
// 3rd User/CPU1 move Start

$a=substr($board_status_current, -9, 1);
	$b=substr($board_status_current, -8, 1);
	$c=substr($board_status_current, -7, 1);
	$d=substr($board_status_current, -6, 1);
	$e=substr($board_status_current, -5, 1);
	$f=substr($board_status_current, -4, 1);
	$g=substr($board_status_current, -3, 1);
	$h=substr($board_status_current, -2, 1);
	$i=substr($board_status_current, -1, 1);	
        $available_moves='';
	if($a=='0'){$available_moves=$available_moves.'a';}
	if($b=='0'){$available_moves=$available_moves.'b';}
	if($c=='0'){$available_moves=$available_moves.'c';}
	if($d=='0'){$available_moves=$available_moves.'d';}
	if($e=='0'){$available_moves=$available_moves.'e';}
	if($f=='0'){$available_moves=$available_moves.'f';}
	if($g=='0'){$available_moves=$available_moves.'g';}
	if($h=='0'){$available_moves=$available_moves.'h';}
	if($i=='0'){$available_moves=$available_moves.'i';}	
    $range=strlen($available_moves);
    $nm=rand(1,$range);
	$nm=$nm-1;
	$x=substr($available_moves, $nm, 1);
    if($x=='a'){$board_status_current=substr_replace($board_status_current,'5',-9,1);}
elseif($x=='b'){$board_status_current=substr_replace($board_status_current,'5',-8,1);}
elseif($x=='c'){$board_status_current=substr_replace($board_status_current,'5',-7,1);}
elseif($x=='d'){$board_status_current=substr_replace($board_status_current,'5',-6,1);}
elseif($x=='e'){$board_status_current=substr_replace($board_status_current,'5',-5,1);}
elseif($x=='f'){$board_status_current=substr_replace($board_status_current,'5',-4,1);}
elseif($x=='g'){$board_status_current=substr_replace($board_status_current,'5',-3,1);}
elseif($x=='h'){$board_status_current=substr_replace($board_status_current,'5',-2,1);}
elseif($x=='i'){$board_status_current=substr_replace($board_status_current,'5',-1,1);}

// 3rd User/CPU1 move End
// 3rd CPU2 move Start

$game_over=game_over_check($board_status_current);
  if($game_over=='1')
  {
  
    $vtrain='-100';
  //weight_update($vtrain,$w1,$w2,$w3,$w4,$w5,$w6,$w7,$w8,$w9,$w10,$index);
  $sql="TRUNCATE TABLE gamemoves";  
  mysql_query($sql,$db) or die(mysql_error($db));   
  $userwon++;
  continue;
  }
  elseif($game_over=='2')
  {
    
    $vtrain='100';
  //weight_update($vtrain,$w1,$w2,$w3,$w4,$w5,$w6,$w7,$w8,$w9,$w10,$index);
  $sql="TRUNCATE TABLE gamemoves";  
  mysql_query($sql,$db) or die(mysql_error($db));   
  $cpuwon++;
  continue;
  }
  elseif($game_over=='3')
  {
    
    $vtrain='0';
  //weight_update($vtrain,$w1,$w2,$w3,$w4,$w5,$w6,$w7,$w8,$w9,$w10,$index);
  $sql="TRUNCATE TABLE gamemoves";  
  mysql_query($sql,$db) or die(mysql_error($db));   
  $gamedraw++;
  continue;
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
	$available_moves='';
	if($a=='0'){$available_moves='a';}
	if($b=='0'){$available_moves=$available_moves.'b';}
	if($c=='0'){$available_moves=$available_moves.'c';}
	if($d=='0'){$available_moves=$available_moves.'d';}
	if($e=='0'){$available_moves=$available_moves.'e';}
	if($f=='0'){$available_moves=$available_moves.'f';}
	if($g=='0'){$available_moves=$available_moves.'g';}
	if($h=='0'){$available_moves=$available_moves.'h';}
	if($i=='0'){$available_moves=$available_moves.'i';}
    $range=strlen($available_moves);
    $z=0;
    for($ct=0;$ct<$range;$ct++)
    {
        $x=substr($available_moves, $ct, 1);
        $x1=checkx1($board_status_current,$x);
        $x2=checkx2($board_status_current,$x);
        $x3=checkx3($board_status_current,$x);
        $x4=checkx4($board_status_current,$x);
        $x5=checkx5($board_status_current,$x);
        $x6=checkx6($board_status_current,$x);
        $x7=checkx7($board_status_current,$x);
        $x8=checkx8($board_status_current,$x);
        $x9=checkx9($board_status_current,$x);
        $x10=checkx10($board_status_current,$x);
        $v=$w0+($w1*$x1)+($w2*$x2)+($w3*$x3)+($w4*$x4)+($w5*$x5)+($w6*$x6)+($w7*$x7)+($w8*$x8)+($w9*$x9)+($w10*$x10);
        mysql_query("INSERT INTO gamemovestry (next_move,x1,x2,x3,x4,x5,x6,x7,x8,x9,x10,v) values ('$x','$x1','$x2','$x3','$x4','$x5','$x6','$x7','$x8','$x9','$x10','$v')") or die(mysql_error($db));
    }
    
    $sql="SELECT MAX(v) as maxv FROM gamemovestry";
    $sql=mysql_query($sql,$db) or die(mysql_error($db)); 
	  
      while($info=mysql_fetch_array($sql))
      {
        
        $v1=$info['maxv'];
        
      }
      
   $sql="SELECT * FROM gamemovestry where v='$v1'";
    $sql=mysql_query($sql,$db) or die(mysql_error($db)); 
	  $t=0;
      while($info=mysql_fetch_array($sql))
      {
        $nx[$t]=$info['next_move'];
        $nx1[$t]=$info['x1'];
        $nx2[$t]=$info['x2'];
        $nx3[$t]=$info['x3'];
        $nx4[$t]=$info['x4'];
        $nx5[$t]=$info['x5'];
        $nx6[$t]=$info['x6'];
        $nx7[$t]=$info['x7'];
        $nx8[$t]=$info['x8'];
        $nx9[$t]=$info['x9'];
        $nx10[$t]=$info['x10'];  
        $nv1[$t]=$info['v'];
        
        $t++;
      }
      $t=rand(0,$t-1);
   mysql_query("INSERT INTO gamemoves (next_move,x1,x2,x3,x4,x5,x6,x7,x8,x9,x10,v) values ('$nx[$t]','$nx1[$t]','$nx2[$t]','$nx3[$t]','$nx4[$t]','$nx5[$t]','$nx6[$t]','$nx7[$t]','$nx8[$t]','$nx9[$t]','$nx10[$t]','$nv1[$t]')") or die(mysql_error($db));
  $sql="TRUNCATE TABLE gamemovestry";  
  mysql_query($sql,$db) or die(mysql_error($db));   
  $x=$nx[$t];


      if($x=='a'){$board_status_current=substr_replace($board_status_current,'7',-9,1);}
      elseif($x=='b'){$board_status_current=substr_replace($board_status_current,'7',-8,1);}
      elseif($x=='c'){$board_status_current=substr_replace($board_status_current,'7',-7,1);}
      elseif($x=='d'){$board_status_current=substr_replace($board_status_current,'7',-6,1);}
      elseif($x=='e'){$board_status_current=substr_replace($board_status_current,'7',-5,1);}
      elseif($x=='f'){$board_status_current=substr_replace($board_status_current,'7',-4,1);}
      elseif($x=='g'){$board_status_current=substr_replace($board_status_current,'7',-3,1);}
      elseif($x=='h'){$board_status_current=substr_replace($board_status_current,'7',-2,1);}
      elseif($x=='i'){$board_status_current=substr_replace($board_status_current,'7',-1,1);}
  
  $game_over=game_over_check($board_status_current);
  if($game_over=='1')
  {
  
    $vtrain='-100';
  //weight_update($vtrain,$w1,$w2,$w3,$w4,$w5,$w6,$w7,$w8,$w9,$w10,$index);
  $sql="TRUNCATE TABLE gamemoves";  
  mysql_query($sql,$db) or die(mysql_error($db));   
  $userwon++;
  continue;
  }
  elseif($game_over=='2')
  {
    
    $vtrain='100';
  //weight_update($vtrain,$w1,$w2,$w3,$w4,$w5,$w6,$w7,$w8,$w9,$w10,$index);
  $sql="TRUNCATE TABLE gamemoves";  
  mysql_query($sql,$db) or die(mysql_error($db));   
  $cpuwon++;
  continue;
  }
  elseif($game_over=='3')
  {
    
    $vtrain='0';
  //weight_update($vtrain,$w1,$w2,$w3,$w4,$w5,$w6,$w7,$w8,$w9,$w10,$index);
  $sql="TRUNCATE TABLE gamemoves";  
  mysql_query($sql,$db) or die(mysql_error($db));   
  $gamedraw++;
  continue;
  }


// 3rd CPU2 move End
// 4th User/CPU1 move Start

$a=substr($board_status_current, -9, 1);
	$b=substr($board_status_current, -8, 1);
	$c=substr($board_status_current, -7, 1);
	$d=substr($board_status_current, -6, 1);
	$e=substr($board_status_current, -5, 1);
	$f=substr($board_status_current, -4, 1);
	$g=substr($board_status_current, -3, 1);
	$h=substr($board_status_current, -2, 1);
	$i=substr($board_status_current, -1, 1);	
        $available_moves='';
	if($a=='0'){$available_moves=$available_moves.'a';}
	if($b=='0'){$available_moves=$available_moves.'b';}
	if($c=='0'){$available_moves=$available_moves.'c';}
	if($d=='0'){$available_moves=$available_moves.'d';}
	if($e=='0'){$available_moves=$available_moves.'e';}
	if($f=='0'){$available_moves=$available_moves.'f';}
	if($g=='0'){$available_moves=$available_moves.'g';}
	if($h=='0'){$available_moves=$available_moves.'h';}
	if($i=='0'){$available_moves=$available_moves.'i';}	
    $range=strlen($available_moves);
    $nm=rand(1,$range);
	$nm=$nm-1;
	$x=substr($available_moves, $nm, 1);
    if($x=='a'){$board_status_current=substr_replace($board_status_current,'5',-9,1);}
elseif($x=='b'){$board_status_current=substr_replace($board_status_current,'5',-8,1);}
elseif($x=='c'){$board_status_current=substr_replace($board_status_current,'5',-7,1);}
elseif($x=='d'){$board_status_current=substr_replace($board_status_current,'5',-6,1);}
elseif($x=='e'){$board_status_current=substr_replace($board_status_current,'5',-5,1);}
elseif($x=='f'){$board_status_current=substr_replace($board_status_current,'5',-4,1);}
elseif($x=='g'){$board_status_current=substr_replace($board_status_current,'5',-3,1);}
elseif($x=='h'){$board_status_current=substr_replace($board_status_current,'5',-2,1);}
elseif($x=='i'){$board_status_current=substr_replace($board_status_current,'5',-1,1);}

// 4th User/CPU1 move End
// 4th CPU2 move Start

$game_over=game_over_check($board_status_current);
  if($game_over=='1')
  {
  
    $vtrain='-100';
  //weight_update($vtrain,$w1,$w2,$w3,$w4,$w5,$w6,$w7,$w8,$w9,$w10,$index);
  $sql="TRUNCATE TABLE gamemoves";  
  mysql_query($sql,$db) or die(mysql_error($db));   
  $userwon++;
  continue;
  }
  elseif($game_over=='2')
  {
    
    $vtrain='100';
  //weight_update($vtrain,$w1,$w2,$w3,$w4,$w5,$w6,$w7,$w8,$w9,$w10,$index);
  $sql="TRUNCATE TABLE gamemoves";  
  mysql_query($sql,$db) or die(mysql_error($db));   
  $cpuwon++;
  continue;
  }
  elseif($game_over=='3')
  {
    
    $vtrain='0';
  //weight_update($vtrain,$w1,$w2,$w3,$w4,$w5,$w6,$w7,$w8,$w9,$w10,$index);
  $sql="TRUNCATE TABLE gamemoves";  
  mysql_query($sql,$db) or die(mysql_error($db));   
  $gamedraw++;
  continue;
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
	$available_moves='';
	if($a=='0'){$available_moves='a';}
	if($b=='0'){$available_moves=$available_moves.'b';}
	if($c=='0'){$available_moves=$available_moves.'c';}
	if($d=='0'){$available_moves=$available_moves.'d';}
	if($e=='0'){$available_moves=$available_moves.'e';}
	if($f=='0'){$available_moves=$available_moves.'f';}
	if($g=='0'){$available_moves=$available_moves.'g';}
	if($h=='0'){$available_moves=$available_moves.'h';}
	if($i=='0'){$available_moves=$available_moves.'i';}
    $range=strlen($available_moves);
    $z=0;
    for($ct=0;$ct<$range;$ct++)
    {
        $x=substr($available_moves, $ct, 1);
        $x1=checkx1($board_status_current,$x);
        $x2=checkx2($board_status_current,$x);
        $x3=checkx3($board_status_current,$x);
        $x4=checkx4($board_status_current,$x);
        $x5=checkx5($board_status_current,$x);
        $x6=checkx6($board_status_current,$x);
        $x7=checkx7($board_status_current,$x);
        $x8=checkx8($board_status_current,$x);
        $x9=checkx9($board_status_current,$x);
        $x10=checkx10($board_status_current,$x);
        $v=$w0+($w1*$x1)+($w2*$x2)+($w3*$x3)+($w4*$x4)+($w5*$x5)+($w6*$x6)+($w7*$x7)+($w8*$x8)+($w9*$x9)+($w10*$x10);
        mysql_query("INSERT INTO gamemovestry (next_move,x1,x2,x3,x4,x5,x6,x7,x8,x9,x10,v) values ('$x','$x1','$x2','$x3','$x4','$x5','$x6','$x7','$x8','$x9','$x10','$v')") or die(mysql_error($db));
    }
    
    $sql="SELECT MAX(v) as maxv FROM gamemovestry";
    $sql=mysql_query($sql,$db) or die(mysql_error($db)); 
	  
      while($info=mysql_fetch_array($sql))
      {
        
        $v1=$info['maxv'];
        
      }
      
   $sql="SELECT * FROM gamemovestry where v='$v1'";
    $sql=mysql_query($sql,$db) or die(mysql_error($db)); 
	  $t=0;
      while($info=mysql_fetch_array($sql))
      {
        $nx[$t]=$info['next_move'];
        $nx1[$t]=$info['x1'];
        $nx2[$t]=$info['x2'];
        $nx3[$t]=$info['x3'];
        $nx4[$t]=$info['x4'];
        $nx5[$t]=$info['x5'];
        $nx6[$t]=$info['x6'];
        $nx7[$t]=$info['x7'];
        $nx8[$t]=$info['x8'];
        $nx9[$t]=$info['x9'];
        $nx10[$t]=$info['x10'];  
        $nv1[$t]=$info['v'];
        
        $t++;
      }
      $t=rand(0,$t-1);
   mysql_query("INSERT INTO gamemoves (next_move,x1,x2,x3,x4,x5,x6,x7,x8,x9,x10,v) values ('$nx[$t]','$nx1[$t]','$nx2[$t]','$nx3[$t]','$nx4[$t]','$nx5[$t]','$nx6[$t]','$nx7[$t]','$nx8[$t]','$nx9[$t]','$nx10[$t]','$nv1[$t]')") or die(mysql_error($db));
  $sql="TRUNCATE TABLE gamemovestry";  
  mysql_query($sql,$db) or die(mysql_error($db));   
  $x=$nx[$t];


      if($x=='a'){$board_status_current=substr_replace($board_status_current,'7',-9,1);}
      elseif($x=='b'){$board_status_current=substr_replace($board_status_current,'7',-8,1);}
      elseif($x=='c'){$board_status_current=substr_replace($board_status_current,'7',-7,1);}
      elseif($x=='d'){$board_status_current=substr_replace($board_status_current,'7',-6,1);}
      elseif($x=='e'){$board_status_current=substr_replace($board_status_current,'7',-5,1);}
      elseif($x=='f'){$board_status_current=substr_replace($board_status_current,'7',-4,1);}
      elseif($x=='g'){$board_status_current=substr_replace($board_status_current,'7',-3,1);}
      elseif($x=='h'){$board_status_current=substr_replace($board_status_current,'7',-2,1);}
      elseif($x=='i'){$board_status_current=substr_replace($board_status_current,'7',-1,1);}
  
  $game_over=game_over_check($board_status_current);
  if($game_over=='1')
  {
  
    $vtrain='-100';
  //weight_update($vtrain,$w1,$w2,$w3,$w4,$w5,$w6,$w7,$w8,$w9,$w10,$index);
  $sql="TRUNCATE TABLE gamemoves";  
  mysql_query($sql,$db) or die(mysql_error($db));   
  $userwon++;
  continue;
  }
  elseif($game_over=='2')
  {
    
    $vtrain='100';
  //weight_update($vtrain,$w1,$w2,$w3,$w4,$w5,$w6,$w7,$w8,$w9,$w10,$index);
  $sql="TRUNCATE TABLE gamemoves";  
  mysql_query($sql,$db) or die(mysql_error($db));   
  $cpuwon++;
  continue;
  }
  elseif($game_over=='3')
  {
    
    $vtrain='0';
  //weight_update($vtrain,$w1,$w2,$w3,$w4,$w5,$w6,$w7,$w8,$w9,$w10,$index);
  $sql="TRUNCATE TABLE gamemoves";  
  mysql_query($sql,$db) or die(mysql_error($db));   
  $gamedraw++;
  continue;
  }


// 4th CPU2 move End
// 5th User/CPU1 move Start

$a=substr($board_status_current, -9, 1);
	$b=substr($board_status_current, -8, 1);
	$c=substr($board_status_current, -7, 1);
	$d=substr($board_status_current, -6, 1);
	$e=substr($board_status_current, -5, 1);
	$f=substr($board_status_current, -4, 1);
	$g=substr($board_status_current, -3, 1);
	$h=substr($board_status_current, -2, 1);
	$i=substr($board_status_current, -1, 1);	
        $available_moves='';
	if($a=='0'){$available_moves=$available_moves.'a';}
	if($b=='0'){$available_moves=$available_moves.'b';}
	if($c=='0'){$available_moves=$available_moves.'c';}
	if($d=='0'){$available_moves=$available_moves.'d';}
	if($e=='0'){$available_moves=$available_moves.'e';}
	if($f=='0'){$available_moves=$available_moves.'f';}
	if($g=='0'){$available_moves=$available_moves.'g';}
	if($h=='0'){$available_moves=$available_moves.'h';}
	if($i=='0'){$available_moves=$available_moves.'i';}	
    $range=strlen($available_moves);
    $nm=rand(1,$range);
	$nm=$nm-1;
	$x=substr($available_moves, $nm, 1);
    if($x=='a'){$board_status_current=substr_replace($board_status_current,'5',-9,1);}
elseif($x=='b'){$board_status_current=substr_replace($board_status_current,'5',-8,1);}
elseif($x=='c'){$board_status_current=substr_replace($board_status_current,'5',-7,1);}
elseif($x=='d'){$board_status_current=substr_replace($board_status_current,'5',-6,1);}
elseif($x=='e'){$board_status_current=substr_replace($board_status_current,'5',-5,1);}
elseif($x=='f'){$board_status_current=substr_replace($board_status_current,'5',-4,1);}
elseif($x=='g'){$board_status_current=substr_replace($board_status_current,'5',-3,1);}
elseif($x=='h'){$board_status_current=substr_replace($board_status_current,'5',-2,1);}
elseif($x=='i'){$board_status_current=substr_replace($board_status_current,'5',-1,1);}

$game_over=game_over_check($board_status_current);
  if($game_over=='1')
  {
  
    $vtrain='-100';
  //weight_update($vtrain,$w1,$w2,$w3,$w4,$w5,$w6,$w7,$w8,$w9,$w10,$index);
  $sql="TRUNCATE TABLE gamemoves";  
  mysql_query($sql,$db) or die(mysql_error($db));   
  $userwon++;
  continue;
  }
  elseif($game_over=='2')
  {
    
    $vtrain='100';
  //weight_update($vtrain,$w1,$w2,$w3,$w4,$w5,$w6,$w7,$w8,$w9,$w10,$index);
  $sql="TRUNCATE TABLE gamemoves";  
  mysql_query($sql,$db) or die(mysql_error($db));   
  $cpuwon++;
  continue;
  }
  elseif($game_over=='3')
  {
    
    $vtrain='0';
  //weight_update($vtrain,$w1,$w2,$w3,$w4,$w5,$w6,$w7,$w8,$w9,$w10,$index);
  $sql="TRUNCATE TABLE gamemoves";  
  mysql_query($sql,$db) or die(mysql_error($db));   
  $gamedraw++;
  continue;
  }















// for loop end
}

//echo('Total Games : '.$count); ?><br /> <?php
//echo('Draw Games : '.$gamedraw);?><br /> <?php
//echo('CPU1 Won : '.$userwon);?><br /> <?php
//echo('CPU2 Won : '.$cpuwon);?><br />
<a href="index.php">New Game </a>
 
 <?php
$fn=10*$cpuwon+5*$gamedraw;
$db = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD) or
    die ('Unable to connect. Check your connection parameters.');

mysql_select_db(MYSQL_DB, $db) or die(mysql_error($db));


$sql="UPDATE weights SET fn='$fn' where id='$index'";  
  mysql_query($sql,$db) or die(mysql_error($db));
}




$sql="TRUNCATE TABLE sorted";
    $sql=mysql_query($sql,$db) or die(mysql_error($db));

 $sql="SELECT * FROM weights where id <> 'USERFIRST' order by fn ASC";
    $query=mysql_query($sql,$db) or die(mysql_error($db)); 
	  $t=0;
      while($info=mysql_fetch_array($query) )
      
      {
       
        $sid=$info['id'];
        $sfn=$info['fn'];
         $sql="INSERT INTO sorted (id,fn) VALUES ('$sid','$sfn')";  
  mysql_query($sql,$db) or die(mysql_error($db));
  
         $t++;
         if ($t>=20)
         {break;}
      }   

$sql="TRUNCATE TABLE mutate";
    $sql=mysql_query($sql,$db) or die(mysql_error($db));

$sql="SELECT * FROM sorted order by RAND() LIMIT 4 ";
    $query=mysql_query($sql,$db) or die(mysql_error($db)); 
	  $t=0;
      while($info=mysql_fetch_array($query))
      {
        $sid=$info['id'];
        $sfn=$info['fn'];
         $sql="INSERT INTO mutate (id,fn) VALUES ('$sid','$sfn')";  
  mysql_query($sql,$db) or die(mysql_error($db));
  $sql="DELETE FROM sorted where id='$sid' ";
  mysql_query($sql,$db) or die(mysql_error($db));
         $t++;
      }   


$sql="SELECT * FROM mutate order by RAND() ";
    $sql=mysql_query($sql,$db) or die(mysql_error($db)); 
	  $t=0;
      while($info=mysql_fetch_array($sql))
      {
        
        $ms[$t]=$info['id'];
        $t++;
      }   
mutate($ms[0],$ms[1]);
mutate($ms[2],$ms[3]);

$sql="SELECT * FROM sorted order by RAND() ";
    $sql=mysql_query($sql,$db) or die(mysql_error($db)); 
	  $t=0;
      while($info=mysql_fetch_array($sql))
      {
        $cos[$t]=$info['id'];
        $t++;
      }  
crossover($cos[0],$cos[1]);
crossover($cos[2],$cos[3]);
crossover($cos[4],$cos[5]);
crossover($cos[6],$cos[7]);
crossover($cos[8],$cos[9]);
crossover($cos[10],$cos[11]);
crossover($cos[12],$cos[13]);
crossover($cos[14],$cos[15]);




$sql="SELECT * FROM weights where id <> 'USERFIRST'  order by fn DESC";
    $sql=mysql_query($sql,$db) or die(mysql_error($db)); 
	  $t=0;
      while(($info=mysql_fetch_array($sql))&&($t<1))
      {
        $fw0[$t]=$info['w0'];
        $fw1[$t]=$info['w1'];
        $fw2[$t]=$info['w2'];
        $fw3[$t]=$info['w3'];
        $fw4[$t]=$info['w4'];
        $fw5[$t]=$info['w5'];
        $fw6[$t]=$info['w6'];
        $fw7[$t]=$info['w7'];
        $fw8[$t]=$info['w8'];
        $fw9[$t]=$info['w9'];
        $fw10[$t]=$info['w10'];
        $ffn[$t]=$info['fn'];
        $t++;
      }  

$sql="UPDATE weights SET w0='$fw0[0]', w1='$fw1[0]',w2='$fw2[0]',w3='$fw3[0]',w4='$fw4[0]',w5='$fw5[0]',w6='$fw6[0]',w7='$fw7[0]',w8='$fw8[0]',w9='$fw9[0]',w10='$fw10[0]',fn='$ffn[0]' where id='USERFIRST'";
    $sql=mysql_query($sql,$db) or die(mysql_error($db)); 


?>