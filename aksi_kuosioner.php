<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
<?php
error_reporting(0);
include "includes/config.php";
$suggestion		= $_POST['suggestion'];
$suggestion1	= $_POST['suggestion1'];
$suggestion2	= $_POST['suggestion2'];
$nama			= $_POST['nama'];
$jabatan		= $_POST['jabatan'];
$instansi		= $_POST['instansi'];
$b_kerjasama	= $_POST['b_kerjasama'];
$pendidikan		= $_POST['pendidikan'];
$penelitian		= $_POST['penelitian'];
$pkm			= $_POST['pkm'];
$seminar		= $_POST['seminar'];
$umum			= $_POST['umum'];
$workshop		= $_POST['workshop'];
$lainya			= $_POST['lainya'];
$date			= date('Y-m-d');
$companyId 		= date('Ymd his');

$no_hitung = 1;
$sql_hitung = mysqli_query($kon,"SELECT * FROM tgroup");
while($data_hitung = mysqli_fetch_array($sql_hitung)){
	$id_hitung = $data_hitung['groupId'];		
	$hasil_hitung = mysqli_query($kon, "SELECT * FROM tdescription, tgroup WHERE tdescription.groupId = '$id_hitung' AND tdescription.groupId = tgroup.groupId ORDER BY tgroup.groupId");
	$i_hitung = 1;
	while ($r_hitung = mysqli_fetch_array($hasil_hitung)){
		$id_hitung = $data_hitung['groupId'];
		$asfa_hitung = $_POST['asfa'.$i_hitung.$id_hitung];
		if (empty($asfa_hitung)){
			echo "<script lang=javascript>
		 		window.alert('Anda belum mengisi kuisioner atau ada kuisioner yang belum terisi..!');
		 		history.back();
		 		</script>";
  			exit;
		}
		
		$i_hitung++;
	}
	echo "<br>";
	$no_hitung++;
}


	$no = 1;
	$sql = mysqli_query($kon,"SELECT * FROM tgroup");
	mysqli_query($kon,"INSERT INTO tcompany(companyId,
											companyName,
											companyAddress,
											companyPhoneHP,
											dateSurvey,
											suggestion,
											nama,
											jabatan,
											instansi,
											b_kerjasama,
											suggestion1,
											suggestion2,
											product,
											pendidikan,
											penelitian,
											pkm,
											seminar,
											umum,
											workshop,
											lainya)
	VALUES('$companyId',
			'$companyName',
			'$companyAddress',
			'$companyPF',
			'$date',
			'$suggestion',
			'$nama',
			'$jabatan',
			'$instansi',
			'$b_kerjasama',
			'$suggestion1',
			'$suggestion2',
			'$companyProduct',
			'$pendidikan',
			'$penelitian',
			'$pkm',
			'$seminar',
			'$umum',
			'$workshop',
			'$lainya'
		)");
		// var_dump($data);
		// die();
	while($data = mysqli_fetch_array($sql)){
		$id = $data['groupId'];		
		$hasil = mysqli_query($kon,"SELECT * FROM tdescription, tgroup WHERE tdescription.groupId = '$id' AND tdescription.groupId = tgroup.groupId ORDER BY tgroup.groupId");
		$i = 1;
		while ($r = mysqli_fetch_array($hasil)){
			$id = $data['groupId'];
			$asfa = $_POST['asfa'.$i.$id];
			// echo "$i $asfa<br>";
			if ($asfa == 'A'){
				mysqli_query($kon,"INSERT INTO tanswer (descriptionId,groupId,companyId,jawaban,jawabanA,jawabanB,jawabanC,jawabanD,jawabanE) 
				VALUES('$r[descriptionId]','$r[groupId]','$companyId','$asfa','1','0','0','0','0')");
			}	
			elseif($asfa == 'B'){
				mysqli_query($kon,"INSERT INTO tanswer (descriptionId,groupId,companyId,jawaban,jawabanA,jawabanB,jawabanC,jawabanD,jawabanE) 
				VALUES('$r[descriptionId]','$r[groupId]','$companyId','$asfa','0','1','0','0','0')");
			}
			elseif($asfa == 'C'){
				mysqli_query($kon,"INSERT INTO tanswer (descriptionId,groupId,companyId,jawaban,jawabanA,jawabanB,jawabanC,jawabanD,jawabanE) 
				VALUES('$r[descriptionId]','$r[groupId]','$companyId','$asfa','0','0','1','0','0')");
			}
			elseif($asfa == 'D'){
				mysqli_query($kon,"INSERT INTO tanswer (descriptionId,groupId,companyId,jawaban,jawabanA,jawabanB,jawabanC,jawabanD,jawabanE) 
				VALUES('$r[descriptionId]','$r[groupId]','$companyId','$asfa','0','0','0','1','0')");
			}
			else{
				mysqli_query($kon,"INSERT INTO tanswer (descriptionId,groupId,companyId,jawaban,jawabanA,jawabanB,jawabanC,jawabanD,jawabanE) 
				VALUES('$r[descriptionId]','$r[groupId]','$companyId','$asfa','0','0','0','0','0')");
			}
			$i++;
		}
		echo "<br>";
		$no++;
	}
	
	echo "<center><font face='Tahoma' size='2'>
			Pelanggan yang terhormat,<br><br>
			Terima kasih atas waktu yang telah diluangkan untuk melengkapi survey yang kami sediakan. <br>
			Pendapat Anda sangat berarti bagi kami untuk meningkatkan pelayanan. <br><br>
			Hormat kami, <br><br>
			Management<br>
			</font><br>
			<a href='index.php'>
			<button  class='btn btn-lg btn-info'><span class='glyphicon glyphicon-arrow-left'></span> Kembali</button>
			</a>
			</center>";
?>
