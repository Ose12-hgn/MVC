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
                        <a class="nav-link" href="view_office.php">Office</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="true" href="view_employeeoffice.php">Employee-Office</a>
                    </li>
                </ul>
            </div>

            <div class="card-body w-75 mx-auto">
            <h1 class="text-center mb-4">Employee - Office</h1>
            <table class="table mt-3">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Nama Employee</th>
                        <th scope="col">Nama Office</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Inisialisasi Variabel
                    $allemployees = getAllEmployees();
                    $alloffices = getAllOffices();

                    foreach($allemployees as $index => $employee):?>
                        <tr>
                            <?php
                                if (isset($employee->office_id) && $employee->office_id !== "" && isset($alloffices[$employee->office_id])) {
                                    ?>
                                    <td><?= $employee->nama ?></td>
                                    <td><?= $alloffices[$employee->office_id]->nama ?></td>
                                    <td>
                                        <a href="view_updateemployeeoffice.php?updateRelID=<?=$index?>">
                                            <button class="btn btn-warning">Update</button>
                                        </a>
                                        <a href="controller.php?deleteRelID=<?=$index?>">
                                            <button class="btn btn-danger">Delete</button>
                                        </a>
                                    </td>
                                    <?php
                                }
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <hr>

            <h2 class="mb-3">Assign Employee to Office</h2>
            <form method="POST" class="row g-3">

                <div class="col-md-6">
                    <label for="inputEmployee" class="form-label">Employee</label>
                    <select class="form-select" name="inputEmployee" id="inputEmployee" required>
                        <option value="" disabled selected>Pilih Employee</option>
                        <?php
                        // Inisialisasi Variabel
                        $allemployees = getAllEmployees();
                    
                        foreach ($allemployees as $index => $employee): ?>
                            <?php if ($employee->office_id === "" || $employee->office_id === null): ?>
                                <option value="<?= $index ?>"> <?=$employee->nama?> </option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="inputOffice" class="form-label">Office</label>
                    <select class="form-select" name="inputOffice" id="inputOffice" required>
                        <option value="" disabled selected>Pilih Office</option>
                        <?php
                        // Inisialisasi Variabel
                        $alloffices = getAllOffices();
                        
                        foreach ($alloffices as $index => $office): ?>
                            <option value="<?=$index?>"> <?=$office->nama?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="col-12">
                    <button name="button_assign_office" type="submit" class="btn btn-primary">Assign</button>
                </div>
            </form>
        </div>

        </div>

    </div>
</body>

</html>