<?php require("controller.php"); ?>
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
                        <a class="nav-link active" aria-current="true" href="view_employee.php">Employee</a>
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
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h1 class="mx-auto mb-0">Employee</h1>
                    <a href="view_addemployee.php" class="btn btn-success">Add Employee</a>
                </div>

                <table class="table mt-3">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Usia</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- READ -->
                        <?php
                        $counter = 0;
                        $allemployees = getAllEmployees();
                        foreach ($allemployees as $index => $employee) {
                        $counter++;
                        ?>
                            <tr>
                                <th scope="row"><?=$counter?></th>
                                <td><?=$employee->nama?></td>
                                <td><?=$employee->jabatan?></td>
                                <td>
                                    <?php
                                    $tahun_lahir = intval($employee->tahun_lahir);
                                    $tahun_sekarang = 2025;
                                    $usia = $tahun_sekarang - $tahun_lahir;
                                    echo $usia;
                                    ?>
                                </td>
                                <td>
                                    <a href="view_updateemployee.php?updateEmpID=<?=$index?>">
                                        <button class="btn btn-warning">Update</button>
                                    </a>
                                    <a href="controller.php?deleteEmpID=<?=$index?>">
                                        <button class="btn btn-danger">Delete</button>
                                    </a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</body>

</html>