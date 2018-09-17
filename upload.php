<?php 
$nama = $_FILES['gambar']['name'];
echo "Berliana Putri M<br>";
echo "6701174026<br>";
if (isset($_POST['upload'])) {
	move_uploaded_file($_FILES['gambar']['tmp_name'], "upload/".$_FILES['gambar']['name']);
	echo"Gambar Berhasil diupload<br>"; 
	echo "<img src='upload/$nama'>";
}
?>
