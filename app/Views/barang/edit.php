<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="/css/bulma.css">
</head>

<body>
    <a href="/barang">Lihat Semua Data</a>
    <br />
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-6">
                    <div class="card">
                        <div class="card-content">
                            <div class="content">
                                <form action="/barang/update/<?= $barang['id_barang']; ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" id="id_barang" name="id_barang" value="<?= $barang['id_barang']; ?>">
                                    <input type="hidden" id="gambarLama" name="gambarLama" value="<?= $barang['gambar']; ?>">
                                    <div class="field">
                                        <label class="label">Nama</label>
                                        <div class="control">
                                            <input class="input" type="text" name="nama_barang" required value="<?= $barang['nama_barang']; ?>">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label">Jenis</label>
                                        <div class="control">

                                            <input class="input" type="text" name="jenis_barang" required value="<?= $barang['jenis_barang']; ?>">
                                        </div>
                                    </div>
                            </div>
                            <div class="field">
                                <label class="label">Harga</label>
                                <div class="control">
                                    <input class="input" type="Number" name="harga" required value="<?= $barang['harga']; ?>">
                                </div>
                            </div>

                        </div>
                        <div class="field">
                            <label class="label">Keterangan</label>
                            <div class="control">
                                <textarea class="textarea" placeholder="deskripsi produk" name="keterangan" required value=""><?= $barang['keterangan']; ?></textarea>
                            </div>
                        </div>

                        <div class="field">
                                <label class="label">Gambar</label>
                                <div class="control">
                                    <input class="input" type="file" name="gambar" required value="<?= $barang['gambar']; ?>">
                                </div>
                        </div>  

                        <br>
                        <button type="submit" class="button is-primary" name="submit">Edit Data</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
</body>

</html>