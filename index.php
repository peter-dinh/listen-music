<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tìm kiếm video</title>
</head>

<body>
<form method="post">
	<table width="856" border="0">
	  <tbody>
		<tr>
		  <td colspan="3"><img src="715x320_150720.png" width="850" height="300" alt=""/></td>
		</tr>
		<tr>
		  <td width="143"><strong>Từ khóa</strong></td>
		  <td width="503"><input type="text" name="keyword" style="width: 500px"  value="<?php if(isset($_POST['search'])) echo $_POST['keyword']; ?>" required></td>
		  <td width="196"><input type="submit" name="search" value="Tìm kiếm" ></td>
		</tr
		<tr>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		  <td>&nbsp;</td>
		</tr>
	  </tbody>
	</table>
</form>

<?php 

		include('simple_html_dom.php');
	if(isset($_POST['search']))
	{
		$search = str_replace(' ', '+', $_POST['keyword'], $count);
		$url = 'http://www.nhaccuatui.com/tim-kiem?q='.$search;
		$html = file_get_html($url);
?>
Danh sách bài hát bạn tìm:<br /><br />
<?php
		foreach ($html -> find('.item_content') as $key => $value) {
			$link = $value -> find('a',0);
			$id = $link -> key;
?>

<?php echo $key+1; ?>: <a href="view.php?id=<?php echo $id; ?>"><?php echo $value -> plaintext; ?></a>
<br />

<?php
	}
}
?>
	
<br />
Được viết bởi <a href="http://www.writecodetolife.tk/">Peter Dinh</a>
</body>
</html>