<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main>
    <div class="title">
        <h1>Edit Data Mahasiswa</h1>
    </div>
    <div class="from">
        <from method="POST">
            <div class="input">
                <label for="nim">NIM</label>
                <input type="text" name="nim" id="nim" value="<?= $data['nim'] ?>" />
            </div>
            <div class="input">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" value="<?= $data['nama'] ?>" />
            </div>
            <div class="input">
                <label for="prodi">Prodi</label>
                <input type="text" name="prodi" id="prodi" value="<?= $data['prodi'] ?>" />
            </div>
            <div class="input">
                <label for="univ">Universitas</label>
                <input type="text" name="univ" id="univ" value="<?= $data['univ'] ?>" />
            </div>
            <div class="input">
                <label for="no_hp">Nomor handphone</label>
                <input type="text" name="no_hp" id="no_hp" value="<?= $data['no_hp'] ?>" />
            </div>
            <div class="button">
                <button type="submit" value="submit">Submit</button>
            </div>
        </from>

    </div>
</main>
<?= $this->endSection();?>

