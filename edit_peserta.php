
<?php
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
?>
	<div class="container">
		<div class="content">
			<h2>Data Peserta &raquo; Edit Data</h2>
			<hr />

			<?php
			$nik = $_GET['nik']; // assigment nik dengan nilai nik yang akan diedit
			$sql = mysqli_query($koneksi, "SELECT * FROM peserta WHERE nik='$nik'"); // query untuk memilih entri data dengan nilai nik terpilih
			if(mysqli_num_rows($sql) == 0){
				header("Location:home.php?file=edit_peserta");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){ // jika tombol 'Save' dengan properti name="save" pada baris 135 ditekan
				$nokk =$_POST['no_kk'];
				$nik =$_POST['nik'];
				$nama =$_POST['nm_peserta'];
				$ibu =$_POST['nm_ibu'];
				$alamat=$_POST['alamat'];
				$faskes=$_POST['faskes'];
				$kelas=$_POST['kelas'];
				$nohp=$_POST['no_hp'];


				$update = mysqli_query($koneksi, "UPDATE peserta SET no_kk='$nokk',nm_peserta='$nama', nm_ibu='$ibu', alamat='$alamat',faskes='$faskes',kelas='$kelas', no_hp='$nohp' WHERE nik='$nik'") or die(mysqli_error()); // query untuk mengupdate nilai entri dalam database
				if($update){ // jika query update berhasil dieksekusi
					header("Location:home.php?file=tampil_peserta&nik=".$nik."&pesan=sukses"); // tambahkan pesan=sukses pada url
				}else{ // jika query update gagal dieksekusi
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>'; // maka tampilkan 'Data gagal disimpan, silahkan coba lagi.'
				}
			}

			if(isset($_GET['pesan']) == 'sukses'){ // jika terdapat pesan=sukses sebagai bagian dari berhasilnya query update dieksekusi
				echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan.</div>'; // maka tampilkan 'Data berhasil disimpan.'
			}
			?>
			<!-- bagian ini merupakan bagian form untuk mengupdate data yang akan dimasukkan ke database -->
			<form class="form-horizontal" action="" method="post">
			<div class="form-group">
					<label class="col-sm-3 control-label">No. KK</label>
					<div class="col-sm-2">
						<input type="text" name="no_kk" value="<?php echo $row ['no_kk']; ?>" class="form-control" placeholder="No.KK" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">NIK</label>
					<div class="col-sm-2">
						<input type="text" name="nik" value="<?php echo $row ['nik']; ?>" class="form-control" placeholder="NIK" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">Nama</label>
					<div class="col-sm-4">
						<input type="text" name="nm_peserta" value="<?php echo $row ['nm_peserta']; ?>" class="form-control" placeholder="Nama" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">Nama Ibu Kandung</label>
					<div class="col-sm-4">
						<input type="text" name="nm_ibu" value="<?php echo $row ['nm_ibu']; ?>" class="form-control" placeholder="Nama Ibu Kandung" required>
					</div>
				</div>

				<div class="form-group">
				 <label class="col-sm-3 control-label">Kelas Perawatan</label>
					<div class="col-sm-2">
						<select name="kelas" class="form-control" required>
							<option value=""> - Kelas Perawatan - </option>
							<option value="(Rp.80.000)">(Rp.80.000)</option>
							<option value="(Rp.51.000)">(Rp.51.000)</option>
							<option value="(Rp.25.500)">(Rp.25.500)</option>
						</select>
					</div>
				</div>

				<div class="form-group">
				 <label class="col-sm-3 control-label">Alamat</label>
					<div class="col-sm-3">
						<textarea name="alamat" class="form-control" placeholder="Alamat"><?php echo $row ['alamat']; ?></textarea>
					</div>
				</div>

				<div class="form-group">
				 <label class="col-sm-3 control-label">No. Hp</label>
					<div class="col-sm-3">
						<input type="text" name="no_hp" value="<?php echo $row ['no_hp']; ?>" class="form-control" placeholder="No.Hp" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">Fasilitas Kesehatan</label>
					<div class="col-sm-2">
					<select name="faskes" class="form-control">
							<option value="KRISYUDI, H" >KRISYUDI, H</option>
							<option value="SUSINTO, DR" >SUSINTO, DR</option>
				      <option value="SUSI LUSIYANTI, DR">SUSI LUSIYANTI, DR</option>
							<option value="LIDYA HERMAWAN, Hj, DR">LIDYA HERMAWAN, Hj, DR</option>
							<option value="ASEP SETIANA HERMANA, H, DR">ASEP SETIANA HERMANA, H, DR</option>
							<option value="ASIKIN, DR">ASIKIN, DR</option>
							<option value="	TITA RITAWATI, DR">TITA RITAWATI, DR</option>
							<option value="ASEP YEDI MUSBAR, DR">ASEP YEDI MUSBAR, DR</option>
							<option value="SARMAN AGUSTANI DR">SARMAN AGUSTANI DR</option>
							<option value="R. A. YULI NOVITA DR">R. A. YULI NOVITA DR</option>
							<option value="FERRY HARDIYANTO DR">FERRY HARDIYANTO DR</option>
							<option value="H. SARDJONO, dr, M.Kes">H. SARDJONO, dr, M.Kes</option>
							<option value="HERMAN JOYO, dr">HERMAN JOYO, dr</option>
							<option value="DEDY KURNIA PS DR, MM ,MARS">DEDY KURNIA PS DR, MM ,MARS</option>
							<option value="ELYS NURHAYATI B, DR">	ELYS NURHAYATI B, DR</option>
							<option value="ASEP DEDENG WAHYUDIN, DR">ASEP DEDENG WAHYUDIN, DR</option>
							<option value="HANDRIS SUPRIADI, dr.">HANDRIS SUPRIADI, dr.</option>
							<option value="DENNY MUSTAFA, DR">DENNY MUSTAFA, DR</option>
							<option value="SUPARDI, dr">SUPARDI, dr</option>
							<option value="DIANA KHODIJAH, dr">DIANA KHODIJAH, dr</option>
							<option value="ARIEF HIKMAWAN, MHKES, dr">ARIEF HIKMAWAN, MHKES, dr</option>
							<option value="EVA MAYA, DR">EVA MAYA, DR</option>
							<option value="EDI MARTONO, DR">EDI MARTONO, DR</option>
							<option value="ODE AMAN SUHATI, DR">ODE AMAN SUHATI, DR</option>
							<option value="SAHALUDIN FAUZIAH, DR">SAHALUDIN FAUZIAH, DR</option>
							<option value="WAHYU FITRINA HANDAYANI, DR">WAHYU FITRINA HANDAYANI, DR</option>
							<option value="ADHIANI KOESMAN, DR">ADHIANI KOESMAN, DR</option>
							<option value="TANTI DARMAWANTI, DR">TANTI DARMAWANTI, DR</option>
							<option value="ASEP NANDANG HENDARSYAH, DR">ASEP NANDANG HENDARSYAH, DR</option>
							<option value="dr. Yanti">dr. Yanti</option>
							<option value="dr. Zaenal Arifin">dr. Zaenal Arifin</option>
							<option value="dr. Merryana Margi Sasaputri">dr. Merryana Margi Sasaputri</option>
							<option value="dr. Eko Rachmat Rijadi">dr. Eko Rachmat Rijadi</option>
							<option value="dr. Yanti Sumanti">dr. Yanti Sumanti</option>
							<option value="dr. Yati Rochdiyawati Hidayat">dr. Yati Rochdiyawati Hidayat</option>
							<option value="dr. Nur Haeni">dr. Nur Haeni</option>
							<option value="dr. Yuyu Sri Rahayu">dr. Yuyu Sri Rahayu</option>
							<option value="dr. Insan Noprizal">dr. Insan Noprizal</option>
							<option value="dr. Bambang Arisyahyanto">dr. Bambang Arisyahyanto</option>
							<option value="dr. Yanuar Firdaus Sukardi">dr. Yanuar Firdaus Sukardi</option>
							<option value="dr. Abik Basyiar">dr. Abik Basyiar</option>
							<option value="dr. Eddy Syarief">dr. Eddy Syarief</option>
							<option value="dr. Nanang Wasim">dr. Nanang Wasim</option>
							<option value="DR AJI ADHI NUGRAHA">DR AJI ADHI NUGRAHA</option>
							<option value="DR DESY HERLINDASARI">DR DESY HERLINDASARI</option>
							<option value="DR ROBBY RIZKY RHOMADHONA">DR ROBBY RIZKY RHOMADHONA</option>
							<option value="DR. RURRY NURHAYATI ARIFIN">DR. RURRY NURHAYATI ARIFIN</option>
							<option value="DR. GILANG RASPATI">DR. GILANG RASPATI</option>
							<option value="DR. MEDIANA ROSELA WIJAYA">DR. MEDIANA ROSELA WIJAYA</option>
							<option value="ZULHAFIS MASBAR, DR.">ZULHAFIS MASBAR, DR.</option>
						</select>
					</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-sm btn-primary" value="Simpan" data-toggle="tooltip" title="Simpan Data Peserta">
						<a href="home.php?file=tampil_peserta" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Batal">Batal</a>
					</div>
				</div>
				
			</form>
		</div> <!-- /.content -->
	</div> <!-- /.container -->
