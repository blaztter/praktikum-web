<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<main>
    <div class="title">
        <h1>Tambah Data Mahasiswa</h1>
    </div>
    <div class="from">
        <form method="POST" action="/crud/tambah">
            <div class="input">
                <label for="nim">NIM</label>
                <input type="text" name="nim" id="nim" />
            </div>
            <div class="input">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" />
            </div>
            <div class="input">
                <label for="prodi">Prodi</label>
                <input type="text" name="prodi" id="prodi">
            </div>
            <div class="input">
                <label for="universitas">Universitas</label>
                <input type="text" name="universitas" id="universitas" />
            </div>
            <div class="input">
                <label for="no_hp">Nomor nomor handphone</label>
                <input type="text" name="no_hp" id="no_hp">
            </div>
            <div class="button">
                <button type="submit">Submit</button>
                <!-- <button type="submit" value="Submit">Submit</button> -->
            </div>
        </form>

    </div>
</main>
<?= $this->endSection();?>