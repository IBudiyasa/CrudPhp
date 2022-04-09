<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Perpustakaan</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-danger ">
            <div class="container-fluid d-flex justify-content-center">
                <p class="fw-normal fs-4 fw-light text-white">Data Buku Perpustakaan</p>
            </div>
        </nav>
    </header>
    <div class="d-flex align-items-center light-blue-gradient" style="height: 100vh;">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-md-6">

                    <div class="card rounded-0 shadow">
                        <div class="card-header bg-primary p-n1">
                            <h3 class="d-flex justify-content-center text-white">Judul Buku</h3>
                        </div>
                        <div class="card-body">
                            <form class="d-grid gap-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pengarang Buku: </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter full name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Penerbit Buku: </label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pengarang Buku: </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Jumlah Halaman: </label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tahun Terbit :</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <div class="d-flex justify-content-between">
                                        <button type="submit" class="btn btn-success col-md-3">Submit</button>
                                        <button type="submit" class="btn btn-danger col-md-3"><a href="./buku.php" style="text-decoration: none !important; color: white;">Keluar</a></button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>