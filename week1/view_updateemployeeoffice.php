<?php
    require("controller.php");
    if(isset($_GET['updateRelID'])){
        $employee_id = $_GET['updateRelID'];
        $employee = getEmployeeWithID($employee_id);
        $alloffices = getAllOffices();
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
                <h1 class="mb-3 text-center">Update Employee Office</h1>
                <form method="POST" action="controller.php" class="row g-3 w-50 mx-auto">

                    <input type="hidden" name="updateEmpOfficeID" value="<?=$employee_id?>">
                    
                    <div class="col-md-12">
                        <label for="employeeName" class="form-label">Employee</label>
                        <input type="text" class="form-control" id="employeeName" value="<?=$employee->nama?>" readonly>
                    </div>
                    
                    <div class="col-md-12">
                        <label for="inputOffice" class="form-label">Office</label>
                        <select class="form-select" name="inputOffice" id="inputOffice" required>
                            <option value="" disabled selected>Pilih Office</option>
                            <?php foreach ($alloffices as $index => $office): ?>
                                <option value="<?=$index?>" <?=($employee->office_id == $index) ? "selected" : ""?>><?=$office->nama?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    
                    <div class="col-12">
                        <button name="button_update_employeeoffice" type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</body>

</html>