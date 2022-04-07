<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/buku.css">
    <script src="https://use.fontawesome.com/7d6592d6d3.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-danger ">
            <div class="container-fluid d-flex justify-content-center">
                <p class="fw-normal fs-4 fw-light text-white">Data Buku Perpustakaan</p>
            </div>
        </nav>
    </header>

    <div class="container flex-column justify-content-center mt-5 gap-3">
        <button type="button" class="btn btn-danger mb-3">
             <i class="fa fa-plus" aria-hidden="true"><span class="ps-2 pe-2">Tambah Data Buku</span></i>
        </button>
        <div class="tbl-container " style="overflow-x:auto;">
        <table class="table table-striped rounded tbl-tag">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Judul Buku</th>
                    <th>Pegarang</th>
                    <th>Penerbit</th>
                    <th>Jumlah Halaman</th>
                    <th>Tahun Terbit</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otasdsadasdasdto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>
                        <div class="d-flex gap-3">
                        <button type="button" class="btn btn-danger">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-warning">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>
                        <div class="d-flex gap-3">
                        <button type="button" class="btn btn-danger">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-warning">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>
                        <div class="d-flex gap-3">
                        <button type="button" class="btn btn-danger">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-warning">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>