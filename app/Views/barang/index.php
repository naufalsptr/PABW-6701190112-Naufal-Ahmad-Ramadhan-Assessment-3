<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" color="green">
    <title>Index</title>
    <link rel="stylesheet" href="/css/bulma.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <section class="hero is-fullheight">
        <!-- Untuk bar atas -->
        <div class="hero-head" style="background-color:#283643;">
            <header class="navbar">
                <div class="container">
                    <div id="navbarMenuHeroC" class="navbar-menu">
                    <a href="/barang/index" ><i class="fa fa-comments"></i> <h2>APANJAR</h2></a>
                        <div class="navbar-end">
                            <a style='text-decoration:none; height:100%;' class="btn btn-success" href="/barang/create">
                                Tambah Barang Jualan
                            </a>
                            <a>--</a>
                            <a style='text-decoration:none; height:100%;' class="btn btn-danger" href="">
                                Logout
                            </a>
                            <span class="navbar-item">

                            </span>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <!-- Tengah -->
        <div class="hero-body">
            <div class="container has-text-centered">

                <h1 class="title">
                    Welcome, User#001
                </h1>
                <h2 class="subtitle">
                    Mendata Berbagai Macam Barang Dagangan
                </h2>
                <div class="columns is-centered">
                    <?php
                    foreach ($barang as $b) {
                    ?>
                        <div class="column is-3">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-4by3">
                                        <img src="/images/<?= $b['gambar']; ?>" alt="..." alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="content">
                                        <p class="title is-6"><?= $b["nama_barang"] ?></p>
                                        <p><?= $b["jenis_barang"] ?></p>
                                        <p><?= $b["keterangan"] ?></p>
                                        <p>Rp. <?= $b["harga"] ?></p>
                                        
                                    </div>
                                </div>
                                <footer class="card-footer">
                               
                                    <a button type="button" href="/barang/edit/<?= $b["id_barang"] ?>" class="btn btn-success">Edit</a>
                                    <a>  &nbsp;   </a>
                                    <form action="/barang/<?= $b['id_barang']; ?>" method="POST" style="display: inline;">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                                    </form>

                                </footer>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div>

        </div>
    </section>
</body>

</html>