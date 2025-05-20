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
    header('content-type: application/json');
    $dbh = new PDO('mysql:host=localhost;dbname=latihanphp', 'root', '');
    $db = $dbh->prepare('SELECT * FROM menu_pitzza');
    $db->execute();
    $menu_pitzza = $db->fetchAll(PDO::FETCH_ASSOC);

    $data = json_encode($menu_pitzza);
    echo $data;
} catch (PDOException $e) {
    echo 'Koneksi gagal: ' . $e->getMessage();
}

?>