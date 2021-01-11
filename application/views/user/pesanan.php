<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php if (!$pesanan) : ?>
        <div class="alert alert-danger" role="alert">
            Data pesanan tidak ditemukan
        </div>
    <?php endif; ?>

    <?php if ($pesanan) : ?>
        <div class="row">
            <div class="col-lg">
                <?= $this->session->flashdata('message'); ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tanggal dan Waktu Pesan</th>
                            <th scope="col">Total</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($pesanan as $psn) :
                                if ($psn['id_user'] == $this->session->userdata('id_user')) : ?>
                                <tr>
                                    <th scope="row"><?= $no; ?></th>
                                    <td><?= $psn['nama_user']; ?></td>
                                    <td><?= $psn['tanggal']; ?></td>
                                    <td>Rp <?= number_format($psn['total']); ?></td>
                                    <?php if ($psn['status_bayar'] == 0) { ?>
                                        <td>Belum Dibayar</td>
                                    <?php } else { ?>
                                        <td>Sudah Dibayar</td>
                                    <?php } ?>
                                    <td>
                                        <a href="<?= base_url('user/detail/') . $psn['id_pemesanan']; ?>" class="badge badge-primary">detail</a>
                                    </td>
                                </tr>
                                <?php $no++; ?>
                        <?php endif;
                            endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif; ?>





</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->