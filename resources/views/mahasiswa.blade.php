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
    <a class="navbar-brand" href="/">
        <img src="{{ asset ('image/logo.png') }}" alt="Logo UINSU" width="40" height="40" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/mahasiswa">Mahasiswa</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/Dropdown" id="navbarDropdown" role="button">Dropdown</a>

        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Disable">Disable</a>
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
    <h1>Halaman Mahasiswa</h1>

    <div class="row">
        <div class="col-md-6">
            <h4>Data Mahasiswa</h4>
             <table class="table table-dark table-sm table-hover table striped table-bordered text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                
            </tr>
        </thead>
            <tbody>
                @for ($i = 0; $i < $jumlah; $i++)
                    <tr>
                        <td>1</td>
                        <td>0702231023</td>
                        <td>Suci Ramadhani</td>
                        
                    </tr>
                @endfor
            </tbody>
                </table>
        </div>
        <div class="col-sm-6"></div>
        <h4>Form Tambah Mahasiswa</h4>
        <form action="" method="GET">
            <div class="col">
                <div class="col-md-6">
                     <label for="Nim" class="form-label">NIM</label>
                     <input type="number" name="nim" class="form-control" placeholder="">
                </div>
                <div class="col-md-6">
                     <label for="nama" class="form-label">Nama Mahasiswa</label>
                     <input type="text" name="nama_mahasiswa" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col">
            </div>
            <div class="row mt-2">
                <div class="col-sm-6">
                    <button class="btn btn-primary" style="width: 100%" type="submit">Simpan</button>
                </div>
            </div>
            
        </form>
    </div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>