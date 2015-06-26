<?

include($_SERVER['document_root'].'/mysql_connect.php');

$_POST['subscribe'] = ($_POST['subscribe'] == 'on' ? 1 : 0 );


    $date=date('Y-m-d H:i:s');
    $login=mysql_real_escape_string($_POST['login']);
    $email=mysql_real_escape_string($_POST['email']);
    $tema=mysql_real_escape_string($_POST['tema']);
    $text=mysql_real_escape_string($_POST['text']);
    $subscribe=$_POST['subscribe'];
    $ip=$_SERVER['REMOTE_ADDR'];


    $qr_str = "INSERT INTO messeges
    (date, login, email, tema, text, subscribe, ip)
    VALUES ('$date', '$login', '$email', '$tema', '$text', '$subscribe', '$ip')
";
    mysql_query($qr_str);
echo mysql_error();


    ?>