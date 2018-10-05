<form>
	komentar : <input type="text" name="komentar">
	<input type="submit" name="submit" value="Kirim">
</form>

<?php 
if (isset($_POST['submit'])) {
	$komentar=$$_POST['komentar'];

	if(str_word_count($komentar)>=5){
		echo $komentar;
	}elseif (str_word_count($komentar)<5) {
		echo"error, Kurang kata 1-5"
	}
}
 ?>
