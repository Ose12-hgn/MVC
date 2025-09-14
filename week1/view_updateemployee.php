<?php
    require("controller.php");
    if(isset($_GET["updateEmpID"])){
        $employee_id = $_GET["updateEmpID"];
        $employee = getEmployeeWithID($employee_id);
    }
?>
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
                <h1 class="text-center">Update Employee</h1>
                <form method="POST" action="controller.php" class="pt-3 w-75 m-auto">

                    <div class="mb-3 col-md-12">
                        <label for="inputNama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="inputNama" value="<?=$employee->nama?>">
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="inputTahunLahir" class="form-label">Tahun Lahir</label>
                            <input type="text" class="form-control" name="inputTahunLahir" value="<?=$employee->tahun_lahir?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputJabatan" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" name="inputJabatan" value="<?=$employee->jabatan?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="hidden" name="input_id_employee" value="<?=$employee_id?>">
                        <button name="button_update_employee" type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</body>

</html>