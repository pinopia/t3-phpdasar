<?php
$mahasiswa = [
          ["Noviani Saputri", "009876511", "Rekayasa Perangkat Lunak", "saputrinovi@gmail.com"],
          ["Caca", "009876212", "Farmasi", "caca@gmail.com"],
          ["bima", "009876257", "Teknik Kendaraan Ringan Otomotif", "bima@gmail.com"],
];

?>
<!DOCTYPE html>
<html>
<head>
     <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
     <ul>
          <li>Nama : <?= $mhs[0]; ?></li>
          <li>NRP : <?= $mhs[1]; ?></li>
          <li>Jurusan : <?= $mhs[2]; ?></li>
          <li>Email : <?= $mhs[3]; ?></li>
     </ul>
<?php endforeach; ?>






        
</body>
</html>