<?php
include 'ceksession.php';
include_once 'config.php'; 
$id_user = $_SESSION['id_user'];

function getPesananByStatus($conn, $status, $id_user) {
    $sql = "SELECT p.id_pemesanan, p.total_harga, p.tanggal, p.status, p.bukti_pemesanan, w.nama_wisata, dp.id_harga, dp.jumlah_orang, ht.harga 
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
    while ($row = $result->fetch_assoc()) {
        $pesanan[] = $row;
    }
    return $pesanan;
}

$pesanan_berhasil = getPesananByStatus($conn, 'berhasil', $id_user);
?>

<div class="tab-pane fade show active" id="riwayat-berhasil">
    <?php if (count($pesanan_berhasil) > 0) : ?>
        <?php foreach ($pesanan_berhasil as $pesanan) : ?>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-2">
                    <?php
                        if (!empty($pesanan['bukti_pemesanan'])) {
                            echo "<img src='data:image/jpeg;base64,".$pesanan['bukti_pemesanan']."'class='img-fluid rounded-start' alt='Bukti Pemesanan'>";
                        } else {
                            echo "Gambar tidak tersedia";
                        } ?>
                    </div>
                    <div class="col-md-10">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $pesanan['nama_wisata']; ?></h5>
                            <p class="card-text">Status: <?php echo ucfirst($pesanan['status']); ?></p>
                            <p class="card-text">Tanggal: <?php echo $pesanan['tanggal']; ?></p>
                            <p class="card-text">Jumlah Orang: <?php echo $pesanan['jumlah_orang']; ?></p>
                            <p class="card-text">Harga Tiket: Rp <?php echo number_format($pesanan['harga'], 0, ',', '.'); ?></p>
                            <p class="card-text">Total Harga: Rp <?php echo number_format($pesanan['total_harga'], 0, ',', '.'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else : ?>
        <p>Tidak ada pesanan yang berhasil.</p>
    <?php endif; ?>
</div>
