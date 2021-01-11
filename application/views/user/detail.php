<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <a href="<?= base_url('user/pesanan') ?>" class="btn btn-primary mb-3">Kembali</a>

    <?php if (empty($detail_pesanan)) : ?>
        <div class="alert alert-danger" role="alert">
            Data detail_pesanan tidak ditemukan
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg">

            <?= $this->session->flashdata('message'); ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Sub Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($detail_pesanan as $dt) : ?>
                        <tr>
                            <th scope="row"><?= $no; ?></th>
                            <td><?= $dt['nama_menu']; ?></td>
                            <td><?= $dt['jumlah']; ?></td>
                            <td>Rp <?= number_format($dt['jumlah'] * $dt['harga']); ?></td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <h1 class="h3 text-gray-800 mb-0">Upload Bukti Pembayaran</h1>
    <?= form_open_multipart('user/upload/' . $pemesanan['id_pemesanan']); ?>
    <input type="text" class="custom-file-input" id="bukti_bayar" name="bukti_bayar">
        <div class="form-group row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="bukti_bayar" name="bukti_bayar">
                            <label for="foto" class="custom-file-label">Pilih file</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form group row justify-content-end">
                <div class="col-sm">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
        </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->