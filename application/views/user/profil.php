<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- Cards -->
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <!-- <div class="col-md-4">
                <img src="http://localhost:8080/foodie/assets/foto-profil/<?= $this->session->userdata('foto'); ?>" alt="" class="card-img">
            </div> -->
            <div class="col-lg-8">
                <div class="card-body">
                    <h5 class="card-title">
                        <?= $this->session->userdata('nama_user') ?>
                    </h5>
                    <p class="card-text">
                        <?= $this->session->userdata('telepon') ?>
                    </p>
                    <p class="card-text">
                        <?= $this->session->userdata('alamat') ?>
                    </p>
                    <p class="card-text">
                        <?= $this->session->userdata('email') ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->