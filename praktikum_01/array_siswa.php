<?php
    $ns1 = ["id" => 1, "nim" => "0110224146", "uts" => "90", "uas" => "84", "tugas" => "78"];
    $ns2 = ["id" => 1, "nim" => "0110224146", "uts" => "70", "uas" => "85", "tugas" => "78"];
    $ns3 = ["id" => 1, "nim" => "0110224146", "uts" => "75", "uas" => "86", "tugas" => "70"];
    $ns4 = ["id" => 1, "nim" => "0110224146", "uts" => "90", "uas" => "91", "tugas" => "82"];
    
    $ar_nilai = [$ns1, $ns2, $ns3, $ns4];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paraktikum PHP</title>
</head>
<body>
<h3 style="text-align:center;">DAFTAR NILAI MAHASISWA</h3>
<center>

    <table border="5" style="text-align:center;" > 
        <thead> 
            <tr> 
                <th>No</th>
                <th>NIM</th>
                <th>UTS</th> 
                <th>UAS</th>
                <th>TUGAS</th> 
                <th>NILAI AKHIR</th> 
        </tr> 
    </thead>
    <tbody>
        <?php
            $nomor =1;
            foreach($ar_nilai as $ns) {
                echo '<tr><td>' . $nomor . '</td>';
                echo '<td>' . $ns['nim'] . '</td>';
                echo '<td>' . $ns['uts'] . '</td>';
                echo '<td>' . $ns['uas'] . '</td>';
                echo '<td>' . $ns['tugas'] . '</td>';
                $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas'])/3;
                echo '<td>' . number_format($nilai_akhir, 2, ',', '.') . '</td>';
                echo '<tr/>';
                $nomor++;
            }
            ?>
    </tbody>
</table>
</center> 
</body>
</html>