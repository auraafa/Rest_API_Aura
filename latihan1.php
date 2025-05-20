<?php 

// $mahasiswa = [
//     [
//     "nama" => "Aura Fadhlin",
//     "nip"  => "2217020063",
//     "email" => "aurafadhlin@gmail.com"
//     ],
//     [
//     "nama" => "Nelsi",
//     "nip"  => "2217020003",
//     "email" => "nelsi@gmail.com"
//     ]
// ];

try {
    $dbh = new PDO('mysql:host=localhost;dbname=latihanphp', 'root', '');
    $db = $dbh->prepare('SELECT * FROM mahasiswa');
    $db->execute();
    $mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

    $data = json_encode($mahasiswa);
    echo $data;
} catch (PDOException $e) {
    echo 'Koneksi gagal: ' . $e->getMessage();
}

?>