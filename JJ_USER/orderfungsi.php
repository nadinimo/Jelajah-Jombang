<?php

function getPesananByStatus($conn, $status, $id_user) {
    $sql = "SELECT p.id_pemesanan, p.total_harga, p.tanggal, p.status, p.bukti_pemesanan, w.nama_wisata, dp.id_harga, dp.jumlah_orang 
            FROM pemesanan p
            JOIN detail_pemesanan dp ON p.id_pemesanan = dp.id_pemesanan
            JOIN harga_tiket ht ON dp.id_harga = ht.id_harga
            JOIN wisata w ON ht.id_wisata = w.id_wisata
            WHERE p.status = ? AND p.id_user = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('si', $status, $id_user);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $pesanan = [];
    while($row = $result->fetch_assoc()) {
        $pesanan[] = $row;
    }
    return $pesanan;
}

?>
