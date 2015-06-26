<?

include($_SERVER['document_root'].'/mysql_connect.php');

echo '
<div class="table-responsive">
<table class="table table-border">
<tr class="active">
		<th>id</th>
		<th>date</th>
		<th>login</th>
		<th>email</th>
		<th>tema</th>
		<th>text</th>
		<th>subscribe</th>
		<th>ip</th>
	</tr>';
$qr = mysql_query("SELECT
  messeges.id,
  messeges.date,
  messeges.login,
  messeges.email,
  messeges.tema,
  messeges.text,
  messeges.subscribe,
  messeges.ip
FROM messeges");
while($ar = mysql_fetch_assoc($qr))

{
    echo '
	<tr>
		<td>'.$ar['id'].'</td>
		<td>'.$ar['date'].'</td>
		<td>'.$ar['login'].'</td>
		<td>'.$ar['email'].'</td>
		<td>'.$ar['tema'].'</td>
        <td>'.$ar['text'].'</td>
		<td>'.$ar['subscribe'].'</td>
		<td>'.$ar['ip'].'</td>
	</tr>';


}
echo '</table>
</div>';

?>