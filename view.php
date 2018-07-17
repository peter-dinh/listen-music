<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"> 
		<title>Listen_music</title>
	</head>
	<body>
		<b style="color:red;">Note: Thời gian sử lý có thể diễn ra trong vài giây.</b>
		<br />
		<br />
		Dưới đây bản dịch được tìm thấy:
		<br />
		<br />
		<?php 
			if(isset($_GET['id']))
			{
				include 'simple_html_dom.php';
				$url = 'http://www.nhaccuatui.com/bai-hat/chung-ta-khong-thuoc-ve-nhau-son-tung-m-tp.'.$_GET['id'].'.html';
				$html = file_get_html($url);
				 $x = $html -> find('.name_title',0);
				 echo $x -> plaintext;
				 foreach ($html -> find('#divLyric') as $key => $value) {
				 	echo $value;
				 }
		?>
		
		<a href="https://www.google.com.vn/#q=<?php echo $x -> plaintext; ?>" target="_blank" >Tìm thêm bản dịch tại đây</a>
		<iframe src="https://www.nhaccuatui.com/mh/background/<?php if(isset($_GET['id'])) echo $_GET['id']; else echo "Bạn đang cố truy cập trái phép" ?>" width="1" height="1" frameborder="0" allowfullscreen allow="autoplay"></iframe>
		<?php
			}
			else 
				echo "Bạn đang truy cập trái phép". "<br />"."Vui lòng nhập từ khóa";
		?>
		<br /><br />
		Được viết bởi <a href="https://peterdinh.tk/">Peter Dinh</a>


	</body>
</html>
