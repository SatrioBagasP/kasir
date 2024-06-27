<div class="struk">
    <div class="header">
        Struk Belanjaan
    </div>
    <div class="kode_struk">
        Kode Struk :  <?= $data['nota']['id_nota'] ?>
    </div>
    <div class="pegawai">
        Nama Pegawai : <?= $data['pegawai']['nama_pegawai'] ?>
    </div>
    <table>
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['item'] as $list) : ?>
                <tr>
                <td><?= $list['nama_barang'] ?></td>
                <td> <?= $list['jumlah_barang'] ?></td>
                <td> <?= $list['harga_barang'] ?></td>
                <td> <?= $list['total_harga'] ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
        <tfoot>
            <tr>
                <td></td>
                <td></td>
                <td>TOTAL</td>
                <td> <?= $data['nota']['total_harga'] ?></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Uang</td>
                <td> <?= $data['nota']['uang'] ?></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Kembalian</td>
                <td> <?= $data['nota']['kembalian'] ?></td>
            </tr>

        </tfoot>
    </table>
    <div class="footer">
        Terimah kasih telah belanja di toko kami
    </div>

</div>
<a href="<?= BASEURL; ?>/home">kembali</a>

<script>
        // Fungsi untuk mencetak halaman saat halaman dimuat
        window.onload = function() {
            window.print();
        };
    </script>