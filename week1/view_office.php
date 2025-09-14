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
                        <a class="nav-link" href="view_employee.php">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="true" href="view_office.php">Office</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_employeeoffice.php">Employee-Office</a>
                    </li>
                </ul>
            </div>

            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h1 class="mx-auto mb-0">Office</h1>
                    <a href="view_addoffice.php" class="btn btn-success">Add Office</a>
                </div>

                <table class="table mt-3">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- READ -->
                        <?php
                        $counter = 0;
                        $alloffices = getAllOffices();
                        foreach ($alloffices as $index => $office) {
                        $counter++;
                        ?>
                            <tr>
                                <th scope="row"><?=$counter?></th>
                                <td><?=$office->nama?></td>
                                <td><?=$office->alamat?></td>
                                <td><?=$office->kota?></td>
                                <td><?=$office->telepon?></td>
                                <td>
                                    <a href="view_updateoffice.php?updateOffID=<?=$index?>">
                                        <button class="btn btn-warning">Update</button>
                                    </a>
                                    <a href="controller.php?deleteOffID=<?=$index?>">
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