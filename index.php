<html>
<head>
	<title>WEBSITE PEMOGRAMAN WEB 1</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
	<div id="boxmodel">
		<div id="image">
		
		</div>
		<div id="header1">
				<font face="algerian"size="7"color="gray">
					<marquee behavior="alternate">
		WELCOME TO PEMOGRAMAN WEB 1!......</marquee></font>
	</div>
		<div id="header">
			<div class="menu-list">
				<ul>
					<li><a href=index.php?page=profil>PROFIL</a></li>
					<li><a href="visi-misi.php">VISI & MISI</a>
						<ul>
							<li><a href=index.php?page=visi>VISI SAYA</a></li>
							<li><a href=index.php?page=misi>MISI SAYA</a></li>
						</ul>
					<li><a href="materi.php">MATERI WEB 1</a>
						<ul>
							<li><a href=index.php?page=materi1>Materi 1</a></li>
							<li><a href=index.php?page=materi2>Materi 2</a></li>
							<li><a href=index.php?page=materi3>Materi 3</a></li>
							<li><a href=index.php?page=materi4>Materi 4</a></li>
							<li><a href=index.php?page=materi5>Materi 5</a></li>
							<li><a href=index.php?page=materi9>Materi 9</a></li>
							<li><a href=index.php?page=materi11>Materi 11</a></li>
							<li><a href=index.php?page=materi12>Materi 12</a></li>
							<li><a href=index.php?page=materi13>Materi 13</a></li>
						</ul>
					<li><a href="latihan.php">LATIHAN WEB 1</a>
						<ul>
					
					
						<li><a href=index.php?page=tugas1>tugas1</a></li>
							<li><a href=index.php?page=tugas2>tugas2</a></li>
							<li><a href=index.php?page=tugas3>tugas3</a></li>
							<li><a href=index.php?page=tugas4>tugas4</a></li>
							<li><a href=index.php?page=7_quiz1>Quiz1</a></li>
							<li><a href=index.php?page=7_quiz2>Quiz2</a></li>
							<li><a href=index.php?page=8_uts>UTS</a></li>
							<li><a href=index.php?page=uas>Uas/Ujian Akhir</a></li>
						</ul>
					</ul>
				</div>
			</div>
	<div id="nav">
<ul>
<li><p><a href=index.php?page=home>HOME</a></p>
</ul>
<ul>
<li><p><a href=index.php?page=kotaks>KOTAK SARAN</a></p>
</ul>
</div>
	<div id="content">
  <p>INFORMASI YANG AKAN DISAJIKAN</p> 
  <?php
  $page=(isset($_GET['page']))?$_GET['page']:'HOME';
  switch($page){
  	case 'profil':include'profil.php';break;
  	case 'visi': include'visi.php';break;
  	case 'misi': include'misi.php';break;
  	case 'materi1':include'materi1.php';break;
  	case 'materi2':include'materi2.php';break;
  	case 'materi3':include'materi3.php';break;
  	case 'materi4':include'materi4.php';break;
  	case 'materi5':include'materi5.php';break;
  	case 'tugas1':include'tugas1.php';break;
  	case 'tugas2':include'tugas2.php';break;
	case 'tugas3':include'tugas3.php';break;
	case 'tugas4':include'formmatakuliah.php';break;
	case '7_quiz1':include'7_quiz1.php';break;
	case '7_quiz2':include'7_quiz2.php';break;
	case '8_uts':include'8_uts.php';break;
	case 'materi9':include'switch_jlh_hari.php';break;
	case 'materi11':include'materi11.php';break;
	case 'materi12':include'materi12.php';break;
	case 'materi13':include'materi13.php';break;
  	case 'uas':include'formdatatransaksi.php';break;
  	case 'home':include'home.php';break;
  	case 'kotaks':include'kotaks.php';break;
  	case 'operator':include'operator.php';break;
  	case 'aritmatika':include'aritmatika.php';break;
	case 'array':include'array.php';break;
	case 'pengurutan_array':include'pengurutan_array.php';break;
	case 'trim':include'trim.php';break;
	case 'ubah_huruf':include'ubah_huruf.php';break;
	case 'koneksi':include'koneksi.php';break;
	

  }
  ?>
</div>
<div id="sidebar">
</div>
<div id="footer">
www.mimaa_3simib1.com
</div>
</div>
</body>
</html> 

