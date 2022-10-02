<?php
require 'classPegawai_Agis.php';
//ciptakan objek
$peg1 = new Pegawai('10119272', 'Agis Suryana', 'manager', 'islam', 'tidak menikah');
$peg2 = new Pegawai('16119851', 'Zhafran', 'asmen', 'islam', 'menikah');
$peg3 = new Pegawai('17263742', 'Fakih Rizky', 'kabag', 'islam', 'tidak menikah');
$peg4 = new Pegawai('18246572', 'Lesty Kejora', 'staff', 'islam', 'menikah');
$peg5 = new Pegawai('11298572', 'Rina Aoi', 'staff', 'kristen', 'menikah');

//panggil fungsi cetak
$peg1->cetak();
$peg2->cetak();
$peg3->cetak();
$peg4->cetak();
$peg5->cetak();
?>
