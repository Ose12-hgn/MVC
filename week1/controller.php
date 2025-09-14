<?php
include("model.php");
session_start();

// create session - employeelist if not exist
if(!isset($_SESSION['employeelist'])){
    $_SESSION['employeelist'] = array();
}

// create session - officelist if not exist
if(!isset($_SESSION['officelist'])){
    $_SESSION['officelist'] = array();
}

//CREATE - EMPLOYEE
function createEmployee(){
    $employee = new model_employee();
    $employee->nama = $_POST['inputNama'];
    $employee->jabatan = $_POST['inputJabatan'];
    $employee->tahun_lahir = $_POST['inputTahunLahir'];

    array_push($_SESSION['employeelist'], $employee);
}

//CREATE - OFFICE
function createOffice(){
    $office = new model_office();
    $office->nama = $_POST['inputNama'];
    $office->alamat = $_POST['inputAlamat'];
    $office->kota = $_POST['inputKota'];
    $office->telepon = $_POST['inputTelepon'];

    array_push($_SESSION['officelist'], $office);
}

//UPDATE - EMPLOYEE
function updateEmployee($employee_id){
    $employee = $_SESSION['employeelist'][$employee_id]; // ambil data dengan index yang dimaksud
    $employee->nama = $_POST['inputNama'];
    $employee->jabatan = $_POST['inputJabatan'];
    $employee->tahun_lahir = $_POST['inputTahunLahir'];
}

function getEmployeeWithID($employeeID){
    return $_SESSION['employeelist'][$employeeID];
}

//UPDATE - EMPLOYEE
function updateOffice($office_id){
    $office = $_SESSION['officelist'][$office_id]; // ambil data dengan index yang dimaksud
    $office->nama = $_POST['inputNama'];
    $office->alamat = $_POST['inputAlamat'];
    $office->kota = $_POST['inputKota'];
    $office->telepon = $_POST['inputTelepon'];
}

function getOfficeWithID($officeID){
    return $_SESSION['officelist'][$officeID];
}

//DELETE - EMPLOYEE
function deleteEmployee($employee_index){
    unset($_SESSION['employeelist'][$employee_index]); // array index 0 1 2
}

function getAllEmployees(){
    return $_SESSION['employeelist'];
}

//DELETE - OFFICE
function deleteOffice($office_index){
    unset($_SESSION['officelist'][$office_index]); // array index 0 1 2
}

function getAllOffices(){
    return $_SESSION['officelist'];
}

// RELATIONSHIP
function assignEmployeeToOffice($employee_id, $office_id){
    $employee_id = $_POST['inputEmployee'];
    $office_id = $_POST['inputOffice'];

    $_SESSION['employeelist'][$employee_id]->office_id = $office_id;
}

//UPDATE - RELATIONSHIP
function updateEmployeeOffice(){
    $empID = $_POST['updateEmpOfficeID'];
    $officeID = $_POST['inputOffice'];
    
    $_SESSION['employeelist'][$empID]->office_id = $officeID;
}

//DELETE - RELATIONSHIP
function deleteRelation($employee_index){
    $_SESSION['employeelist'][$employee_index]->office_id = "";
}

// ====== CHECKER IF ISSET ======

// when button_add_employee is clicked
if(isset($_POST['button_add_employee'])){
    createEmployee();
    header("Location: view_employee.php"); // redirect to view_employee.php
}

// when button_update_employee is clicked
if(isset($_POST['button_update_employee'])){
    updateEmployee($_POST['input_id_employee']);
    header("Location: view_employee.php"); // redirect to view_employee.php
}

// when button delete employee is clicked
if(isset($_GET['deleteEmpID'])){
    deleteEmployee($_GET['deleteEmpID']);
    header("Location: view_employee.php"); // redirect to view_employee.php
}

// when button_add_office is clicked
if(isset($_POST['button_add_office'])){
    createOffice();
    header("Location: view_office.php"); // redirect to view_office.php
}

// when button_update_office is clicked
if(isset($_POST['button_update_office'])){
    updateOffice($_POST['input_id_office']);
    header("Location: view_office.php"); // redirect to view_office.php
}

// when button delete office is clicked
if(isset($_GET['deleteOffID'])){
    deleteOffice($_GET['deleteOffID']);
    header("Location: view_office.php"); // redirect to view_office.php
}

// RELATIONSHIP - when button_assign_office is clicked
if(isset($_POST['button_assign_office'])){
    assignEmployeeToOffice($_POST['inputEmployee'], $_POST['inputOffice']);
    header("Location: view_employeeoffice.php");
}

// when button update relation is clicked
if(isset($_POST['button_update_employeeoffice'])){
    updateEmployeeOffice();
    header("Location: view_employeeoffice.php");
}

// when button delete relation is clicked
if(isset($_GET['deleteRelID'])){
    deleteRelation($_GET['deleteRelID']);
    header("Location: view_employeeoffice.php"); // redirect to view_employee.php
}

?>