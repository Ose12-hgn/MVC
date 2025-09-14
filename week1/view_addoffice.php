<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container p-5">

        <div class="card text-bg-light mb-3 pb-3">

            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="view_employee.php">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_office.php">Office</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_employeeoffice.php">Employee-Office</a>
                    </li>
                </ul>
            </div>

            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3 w-75 m-auto">
                    <a href="view_office.php" class="btn btn-secondary px-3">Back</a>
                    <h1 class="mx-auto mb-0">Add Office</h1>        
                </div>

                <form method="POST" action="controller.php" class="pt-3 w-75 m-auto">

                    <div class="mb-3 col-md-12">
                        <label for="inputNama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="inputNama" placeholder="Masukkan Nama">
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="inputAlamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="inputAlamat" placeholder="Masukkan Alamat">
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="inputKota" class="form-label">Kota</label>
                            <input type="text" class="form-control" name="inputKota" placeholder="Masukkan Kota">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputTelepon" class="form-label">Telepon</label>
                            <input type="text" class="form-control" name="inputTelepon" placeholder="Masukkan Nomor Telepon">
                        </div>
                    </div>
                    <div class="col-12">
                        <button name="button_add_office" type="submit" class="btn btn-primary">Add Office</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</body>

</html>