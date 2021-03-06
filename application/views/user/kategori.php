<div class="container-fluid">
    <?= $this->session->flashdata('message'); ?>
    <!-- Page Heading -->
    <h1 class="h3 mb-4 mt-4 text-gray-900 text-center"><?= $title ?></h1>

    <div class="row text-center mt-4">
        <?php foreach ($menu as $mn) : if ($mn['id_kategori'] == $id) : ?>
                <div class="col-md-3">
                    <div class="card mb-3">
                        <img src="http://localhost:8080/foodie/assets/menu/<?= $mn["foto"]; ?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title mb-1"><?= $mn["nama_menu"]; ?></h5>
                            <span class="badge badge-dark mb-3">Rp <?= number_format($mn["harga"]); ?></span><br>
                            <a href="<?= base_url('user/addToCart/') . $mn['id_menu']; ?>" class="btn btn-sm btn-primary">Add to Cart</a>
                            <a href="" class="btn btn-sm btn-success" data-toggle="modal" data-target="#detailDataModal<?= $mn['id_menu']; ?>">Detail</a>
                        </div>
                    </div>
                </div>
        <?php endif;
                                                                                                                endforeach; ?>
    </div>
</div>


<!-- Modal -->
<?php foreach ($menu as $mn) : ?>
    <div class=" modal fade" id="detailDataModal<?= $mn['id_menu']; ?>" tabindex="-1" role="dialog" aria-labelledby="detailDataModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailDataModalLabel">Detail Makanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?= base_url('assets/img/menu/') . $mn['foto']; ?>" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <ul class="list-group">
                                <li class="list-group-item"><strong><?= $mn['nama_menu']  ?></strong></li>
                                <li class="list-group-item">Dari: <?= $mn['nama_resto']  ?></li>
                                <li class="list-group-item"><?= $mn['deskripsi']  ?></li>
                                <li class="list-group-item">Kategori: <?= $mn['nama_kategori']  ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=" modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>