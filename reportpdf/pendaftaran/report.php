<?php
include('koneksi.php'); // memdeklasikan file koneksi
require_once("dompdf/autoload.inc.php"); // mendeklarasikan tempat library dompdf
use Dompdf\Dompdf; // menggunaka library
$dompdf = new Dompdf(); // membuat variabel baru yakni dompdf
$query = mysqli_query($kon,"SELECT * from anggota"); // membuat query koneksi dengan tb_sisawa
$html = '<center><h3>Daftar Nama Siswa</h3></center><hr/><br/>'; // membuat header
$html .= '<table border="1" width="100%"> 
 <tr>
 <th>no</th>
 <th>Username</th>
 <th>Nama</th>
 <th>Alamat</th>
 <th>Email</th>
 <th>No hp</th>
 
 </tr>'; // membuat table yang dimana terdapat table row dan table 
$no = 1; // data no di isi 1
while($row = mysqli_fetch_array($query)) 
{ // membuat data simpan row dalam query
 $html .= "<tr> 
 <td>".$no."</td>
 <td>".$row['username']."</td>
 <td>".$row['nama']."</td>
 <td>".$row['alamat']."</td>
 <td>".$row['email']."</td>
 <td>".$row['no_hp']."</td>
 
 </tr>"; // membuat table untuk menampilkan nama, kelas, alamat
 $no++;  // data no akan di deklarasi
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan_siswa.pdf');
?>