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
                                <form action="/barang/save" method="post" enctype="multipart/form-data">
                                    <div class="field">
                                        <label class="label">Nama</label>
                                        <div class="control">
                                            <input class="input" type="text" name="nama_barang" required>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label">Jenis</label>
                                        <div class="control">

                                            <input class="input" type="text" name="jenis_barang" required>
                                        </div>
                                    </div>
                            </div>
                            <div class="field">
                                <label class="label">Harga</label>
                                <div class="control">
                                    <input class="input" type="Number" name="harga" required>
                                </div>
                            </div>


                        </div>
                        <div class="field">
                            <label class="label">Keterangan</label>
                            <div class="control">
                                <textarea class="textarea" placeholder="deskripsi produk" name="keterangan" required></textarea>
                            </div>
                        </div>
                        
                        <div class="field">
                                <label class="label">Gambar</label>
                                <div class="control">
                                    <input class="input" type="file" name="gambar" required>
                                </div>
                        </div>

                        <br>
                        <button type="submit" class="button is-primary" name="submit">Tambah</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
</body>

</html>