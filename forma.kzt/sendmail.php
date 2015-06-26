<?

include($_SERVER['document_root'].'/mysql_connect.php');


echo '<pre>', var_dump($_POST), '</pre>';


$_POST['subscribe'] = ($_POST['subscribe'] == 'on' ? 1 : 0 );

$qr_str = "INSERT INTO 'messeges'
    ('date', 'login', 'email', 'tema', 'text', 'subscribe', 'ip')
    VALUES ('".date('Y-m-d H:i:s')."', '".mysql_real_escape_string($_POST['login'])."', '".mysql_real_escape_string($_POST['email'])."'
    '".mysql_real_escape_string($_POST['tema'])."', '".mysql_real_escape_string($_POST['text'])."', subscribe = '".$_POST['subscribe']."',
    ip = '".$_SERVER['REMOTE_ADDR']."')
";
echo 'новое изменение';










//$qr_str = "INSERT INTO 'messeges'
//    date = '".date('Y-m-d H:i:s')."',
 //   login = '".mysql_real_escape_string($_POST['login'])."',
 //   email = '".mysql_real_escape_string($_POST['email'])."',
  //  tema = '".mysql_real_escape_string($_POST['tema'])."',
 //   text = '".mysql_real_escape_string($_POST['text'])."',
  //  subscribe = '".$_POST['subscribe']."',
  //  ip = '".$_SERVER['REMOTE_ADDR']."'
  //  VALUES ()
//";

echo '<pre>', var_dump($qr_str), '</pre>';

mysql_query($qr_str);


echo mysql_error();













/*$kuda='katrin_7nes7@mail.ru';//куда отправлять почту?
$zagolovok='сообщение с сайта';
$headers='Content-type: text; charset="utf-8"';

if (isset($_POST['ok'])){
	//если существует переменная, значит начнем получать информацию из формы
	$login=$_POST['login'];
    $email=$_POST['email'];
    $tema=$_POST['tema'];
    $text=$_POST['text'];

	$messages="\n".$login."\n".$email."\n".$tema."\n".$text;

	if (mail($kuda,$zagolovok,$messages,$headers)){echo "Ваше сообщение доставлено.";}
	
	}*/
//INSERT INTO `test_kate`.`messeges` (`id`, `date`, `login`, `email`, `tema`, `text`, `subscribe`, `ip`) VALUES (NULL, '2015-06-22 15:12:00', 'Nikitenkova', 'katrin_7nes7@maiol.ru', 'tema1', 'Привет', '1', '89.218.27.252');

?>