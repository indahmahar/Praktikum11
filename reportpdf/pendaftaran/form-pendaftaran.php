<!DOCTYPE html>
<html>
<head>
<title>Form Pendaftaran Anggota</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2>Form Pendaftaran Anggota</h2>
    <form action="simpan-pendaftaran.php" method="post"> <!--menyimpan ke file simpan menggunakan method post-->
        <div class="form-group">
            <label>Username:</label> <!-- membuat label-->
            <input type="text" name="username" class="form-control" placeholder="Masukan Username" /> <!-- membuat input-->
        </div>
		<div class="form-group">
            <label>Nama:</label> <!-- membuat label-->
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" /> <!--membuat input-->
        </div>
		<div class="form-group">
			<label>Alamat:</label> <!-- membuat label-->
			<textarea name="alamat" class="form-control" rows="5"placeholder="Masukan Alamat" ></textarea> <!--membuat input-->
		</div> 
		<div class="form-group">
            <label>Email:</label> <!--membuat label-->
            <input type="email" name="email" class="form-control" placeholder="Masukan Email" /> <!--membuat input-->
        </div>
		<div class="form-group">
            <label>No HP:</label> <!--membuat label-->
            <input type="text" name="no_hp" class="form-control" placeholder="Masukan No HP" /> <!--membuat input-->
        </div>
		<div class="form-group">
            <label>Password:</label> <!--membuat label-->
            <input type="password" name="password" class="form-control" placeholder="Masukan Password" /> <!--membuat input-->
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button> <!-- membuat input button--> 

    </form>
    <br>
    <button onclick="window.location.href='report.php'" class="btn btn-primary" >Export PDF</button> <!--membuat pdf export pdf-->
</div>
</body>
</html>