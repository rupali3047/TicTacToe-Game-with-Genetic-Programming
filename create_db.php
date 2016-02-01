<?php
require 'db.inc.php';

$db = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD) or
    die ('Unable to connect. Check your connection parameters.');

$sql = 'DROP DATABASE IF EXISTS '.MYSQL_DB;
mysql_query($sql, $db) or die(mysql_error($db));

$sql = 'CREATE DATABASE '.MYSQL_DB;
mysql_query($sql, $db) or die(mysql_error($db));


mysql_select_db(MYSQL_DB, $db) or die(mysql_error($db));



$sql = 'CREATE TABLE IF NOT EXISTS weights (
        id  VARCHAR(10)  NOT NULL,
        w0  FLOAT  NOT NULL DEFAULT "0",
        w1  FLOAT  NOT NULL DEFAULT "0",
        w2  FLOAT  NOT NULL DEFAULT "0",
        w3  FLOAT  NOT NULL DEFAULT "0",
        w4  FLOAT  NOT NULL DEFAULT "0",
        w5  FLOAT  NOT NULL DEFAULT "0",
        w6  FLOAT  NOT NULL DEFAULT "0",
        w7  FLOAT  NOT NULL DEFAULT "0",
        w8  FLOAT  NOT NULL DEFAULT "0",
        w9  FLOAT  NOT NULL DEFAULT "0",
        w10  FLOAT  NOT NULL DEFAULT "0",
        fn  FLOAT  NOT NULL DEFAULT "0"
        
         )';
mysql_query($sql, $db) or die(mysql_error($db));

$sql ="INSERT INTO weights (id,w0,w1,w2,w3,w4,w5,w6,w7,w8,w9,w10,fn) VALUES ('USERFIRST','1','1','1','1','1','1','1','1','1','1','1','0')";
mysql_query($sql, $db) or die(mysql_error($db));
$i=1;
for( $i=1;$i<=30;$i++)
{
    $a1=rand(.1,10);
    $a2=rand(.1,10);
    $a3=rand(.1,10);
    $a4=rand(.1,10);
    $a5=rand(.1,10);
    $a6=rand(.1,10);
    $a7=rand(.1,10);
    $a8=rand(.1,10);
    $a9=rand(.1,10);
    $a10=rand(.1,10);
    $a11=rand(.1,10);
    
    $sql = "INSERT INTO weights (id,w0,w1,w2,w3,w4,w5,w6,w7,w8,w9,w10,fn) VALUES ('$i','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','0')";
    mysql_query($sql, $db) or die(mysql_error($db));
}

//$sql ="INSERT INTO weights (id,w0,w1,w2,w3,w4,w5,w6,w7,w8,w9,w10) VALUES ('CPUFIRST','1','1','1','1','1','1','1','1','1','1','1')";
//mysql_query($sql, $db) or die(mysql_error($db));

$sql = 'CREATE TABLE IF NOT EXISTS gamemoves (
        id  INTEGER UNSIGNED  UNIQUE AUTO_INCREMENT,
        
        next_move      VARCHAR(2)  NOT NULL,
        x1  INTEGER  NOT NULL DEFAULT "0",
        x2  INTEGER  NOT NULL DEFAULT "0",
        x3  INTEGER  NOT NULL DEFAULT "0",
        x4  INTEGER  NOT NULL DEFAULT "0",
        x5  INTEGER  NOT NULL DEFAULT "0",
        x6  INTEGER  NOT NULL DEFAULT "0",
        x7  INTEGER  NOT NULL DEFAULT "0",
        x8  INTEGER  NOT NULL DEFAULT "0",
        x9  INTEGER  NOT NULL DEFAULT "0",
        x10  INTEGER  NOT NULL DEFAULT "0",
        v   FLOAT  NOT NULL DEFAULT "0"
         )';
mysql_query($sql, $db) or die(mysql_error($db));

$sql = 'CREATE TABLE IF NOT EXISTS sorted (
        sid  INTEGER UNSIGNED  UNIQUE AUTO_INCREMENT,
                
        id  INTEGER  NOT NULL DEFAULT "0",
        fn  FLOAT  NOT NULL DEFAULT "0"
         )';
mysql_query($sql, $db) or die(mysql_error($db));

$sql = 'CREATE TABLE IF NOT EXISTS mutate (
        sid  INTEGER UNSIGNED  UNIQUE AUTO_INCREMENT,
                
        id  INTEGER  NOT NULL DEFAULT "0",
        fn  FLOAT  NOT NULL DEFAULT "0"
         )';
mysql_query($sql, $db) or die(mysql_error($db));

$sql = 'CREATE TABLE IF NOT EXISTS gamemovescpu1 (
        id  INTEGER UNSIGNED  UNIQUE AUTO_INCREMENT,
        
        next_move      VARCHAR(2)  NOT NULL,
        x1  INTEGER  NOT NULL DEFAULT "0",
        x2  INTEGER  NOT NULL DEFAULT "0",
        x3  INTEGER  NOT NULL DEFAULT "0",
        x4  INTEGER  NOT NULL DEFAULT "0",
        x5  INTEGER  NOT NULL DEFAULT "0",
        x6  INTEGER  NOT NULL DEFAULT "0",
        x7  INTEGER  NOT NULL DEFAULT "0",
        x8  INTEGER  NOT NULL DEFAULT "0",
        x9  INTEGER  NOT NULL DEFAULT "0",
        x10  INTEGER  NOT NULL DEFAULT "0",
        v   FLOAT  NOT NULL DEFAULT "0"
         )';
mysql_query($sql, $db) or die(mysql_error($db));



$sql = 'CREATE TABLE IF NOT EXISTS gamemovestry (
        id  INTEGER UNSIGNED  NOT NULL UNIQUE AUTO_INCREMENT,
        
        next_move      VARCHAR(2)  NOT NULL,
        x1  INTEGER  NOT NULL DEFAULT "0",
        x2  INTEGER  NOT NULL DEFAULT "0",
        x3  INTEGER  NOT NULL DEFAULT "0",
        x4  INTEGER  NOT NULL DEFAULT "0",
        x5  INTEGER  NOT NULL DEFAULT "0",
        x6  INTEGER  NOT NULL DEFAULT "0",
        x7  INTEGER  NOT NULL DEFAULT "0",
        x8  INTEGER  NOT NULL DEFAULT "0",
        x9  INTEGER  NOT NULL DEFAULT "0",
        x10  INTEGER  NOT NULL DEFAULT "0",
        v   FLOAT  NOT NULL DEFAULT "0"
         )';
mysql_query($sql, $db) or die(mysql_error($db));

echo 'Success!';
?>