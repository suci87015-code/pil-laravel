<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/mahasiswa">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/profile">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
    <h1>Ini adalah halaman mahasiswa</h1>

    <div class="row">
        <div class="col-sm-6">
            <h4>Tabel Mahasiswa</h4>
             <table class="table table-danger table-sm table-hover table striped table-bordered text-center">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Prodi</th>
            </tr>
        </thead>
            <tbody>
                @for ($i = 0; $i < $jumlah; $i++)
                    <tr>
                        <td>Nim</td>
                        <td>Nama</td>
                        <td>Tanggal Lahir</td>
                        <td>Tanjung Morawa</td>
                        <td>Prodi</td>
                    </tr>
                @endfor
            </tbody>
                </table>
        </div>
        <div class="col-sm-6"></div>
        <h4>Form Mahasiswa</h4>
        <form action="" method="GET">
            <div class="row">
                <div class="col-sm-6">
                     <label for="">NIM</label>
                     <input type="number" name="nim" class="form-control" placeholder="Input NIM">
                </div>
                <div class="col-sm-6">
                     <label for="">Nama Mahasiswa</label>
                     <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Input Nama Mahasiswa">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control">
                </div>
                <div class="col-sm-6">
                    <label for="">Prodi</label>
                    <select name="prodi" class="form-control">
                        <option value="">Sistem Informasi</option>
                        <option value="">Tekhnik Informasi</option>
                        <option value="">Sistem Informatika</option>
                    </select>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-12">
                    <button class="btn btn-primary" style="width: 100%" type="submit">Simpan</button>
                </div>
            </div>
            
        </form>
    </div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>