	<?php
require '../../koneksi.php';


$id_prod = $_GET['id'];
$ket_log = $_GET['ket_log'];
$id_log = $_GET['id_log'];

$hapus = "DELETE FROM produk_master WHERE id_prod = '$id_prod' ";

$resultb	= mysqli_query($con, $hapus);
		
	
		
//USER LOG
$user_aksi = $_GET['username'];
$tgl_aksi  = date("Y-m-d");
ini_set('date.timezone', 'Asia/Jakarta');
$jam_aksi  =  date('H:i:s');



$get_log = "INSERT INTO userlog VALUES('','$id_log','$user_aksi','Hapus','Ijin Edar Produk','$tgl_aksi','$jam_aksi','$ket_log')";	
$user_log	= mysqli_query($con, $get_log);	


	

	echo" 
		<script>
			alert('Data berhasil dihapus!');
			document.location.href = '../index.php?hlm=ijinprd';
		</script>
	";
	

	?>

	
	