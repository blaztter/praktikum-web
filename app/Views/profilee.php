<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="box-name">
        <img src="assets/nadin.jpeg" alt="" width='120' height='120'>
        <div class="nama">Soraya Nakhbaty</div>
        <div class="skills">Menari</div>
    </div>
    <div class="box-detail">
        <h2>Tentang Saya</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime eveniet ut corporis adipisci iusto labore, quam, et neque quod, dignissimos temporibus voluptatum. Nam totam eligendi assumenda cum architecto tenetur et</p>
        <div class="detail-profile">
            <h2>Detail Profile</h2>
            <div class="form-detail">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>soraya nakhbaty</td>
                        </tr>
                        <tr>
                            <td>Umur</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>Mahasiswa</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="medsos">
            <h2>Hubungi Saya</h2>
            <i class="fab fa-linkedin fa-lg"></i>
            <i class="fab fa-instagram fa-lg"></i>
            <i class="fab fa-facebook fa-lg"></i>
            <i class="fab fa-whatsapp-square fa-lg"></i>
        </div>
    </div>
</div>

</html>

<?= $this->endSection() ?>