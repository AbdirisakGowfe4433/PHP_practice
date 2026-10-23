<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<?php
require_once("functions.php");

$employeeName = isset($_POST["employee_name"]) ? trim($_POST["employee_name"]) : "";
$employeeID = isset($_POST["employee_id"]) ? trim($_POST["employee_id"]) : "";
$gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
$department = isset($_POST["department"]) ? $_POST["department"] : "";
$employmentType = isset($_POST["employment_type"]) ? $_POST["employment_type"] : "";
$basicSalary = isset($_POST["basic_salary"]) ? $_POST["basic_salary"] : "";
$allowance = isset($_POST["allowance"]) ? $_POST["allowance"] : "";
$deduction = isset($_POST["deduction"]) ? $_POST["deduction"] : "";
$yearsOfService = isset($_POST["years_of_service"]) ? $_POST["years_of_service"] : "";

// Store validation errors
$errors = [];

// Validate employee information
if (empty($employeeName)) {
    $errors[] = "Employee name is required.";
}

if (empty($employeeID)) {
    $errors[] = "Employee ID is required.";
}

if (empty($gender)) {
    $errors[] = "Please select gender.";
}

if (empty($department)) {
    $errors[] = "Please select a department.";
}

if (empty($employmentType)) {
    $errors[] = "Please select employment type.";
}

// Validate salary inputs
$salaryInputsValid = true;

if (!is_numeric($basicSalary) || $basicSalary < 0) {
    $errors[] = "Basic salary must be a valid non-negative number.";
    $salaryInputsValid = false;
}

if (!is_numeric($allowance) || $allowance < 0) {
    $errors[] = "Allowance must be a valid non-negative number.";
    $salaryInputsValid = false;
}

if (!is_numeric($deduction) || $deduction < 0) {
    $errors[] = "Deduction must be a valid non-negative number.";
    $salaryInputsValid = false;
}

if (!is_numeric($yearsOfService) || $yearsOfService < 0) {
    $errors[] = "Years of service must be a valid non-negative number.";
    $salaryInputsValid = false;
}

// Validate uploaded document
if (!isset($_FILES["employee_document"]) || $_FILES["employee_document"]["error"] != 0) {
    $errors[] = "Please upload an employee document.";
}

// Calculate salary if inputs are valid
if ($salaryInputsValid) {
    $basicSalary = (float)$basicSalary;
    $allowance = (float)$allowance;
    $deduction = (float)$deduction;
    $yearsOfService = (int)$yearsOfService;

    $grossSalary = calculateGrossSalary($basicSalary, $allowance);
    $bonus = calculateBonus($basicSalary);
    $serviceBenefit = calculateServiceBenefit($basicSalary, $yearsOfService);
    $employmentAllowance = calculateEmploymentAllowance($basicSalary, $employmentType);
    $totalBenefits = calculateTotalBenefits($bonus, $serviceBenefit, $employmentAllowance);
    $netSalary = calculateNetSalary($grossSalary, $totalBenefits, $deduction);
    $salaryStatus = checkSalaryStatus($netSalary);
    $annualSalary = calculateAnnualSalary($netSalary);

    if ($deduction > $grossSalary + $totalBenefits) {
        $errors[] = "Deduction cannot exceed the total salary and benefits.";
    }
}

// Display errors if any exist
if (!empty($errors)) {
    echo "<h2>Registration Errors</h2>";

    foreach ($errors as $error) {
        echo "<p>" . htmlspecialchars($error) . "</p>";
    }

    echo '<a href="index.php">Go Back</a>';
    exit;
}

// Get uploaded document details
$fileName = $_FILES["employee_document"]["name"];
$fileSize = $_FILES["employee_document"]["size"];
$fileType = $_FILES["employee_document"]["type"];
$fileTmpName = $_FILES["employee_document"]["tmp_name"];

// Check file size (maximum 2MB)
if ($fileSize > 2 * 1024 * 1024) {
    echo "The uploaded file must not exceed 2MB.";
    exit;
}

// Set upload destination
$destination = "uploads/" . $fileName;

// Check whether the file already exists
if (file_exists($destination)) {
    echo "A file with this name already exists. Please rename your document and try again.";
    exit;
}

// Move uploaded document
if (move_uploaded_file($fileTmpName, $destination)) {

    echo "<h2>Employee Registered Successfully</h2>";

    echo "<table border='1' cellpadding='8'>";

    echo "<tr><th>Employee Name</th><td>" . htmlspecialchars($employeeName) . "</td></tr>";
    echo "<tr><th>Employee ID</th><td>" . htmlspecialchars($employeeID) . "</td></tr>";
    echo "<tr><th>Gender</th><td>" . htmlspecialchars($gender) . "</td></tr>";
    echo "<tr><th>Department</th><td>" . htmlspecialchars($department) . "</td></tr>";
    echo "<tr><th>Employment Type</th><td>" . htmlspecialchars($employmentType) . "</td></tr>";
    echo "<tr><th>Basic Salary</th><td>" . $basicSalary . "</td></tr>";
    echo "<tr><th>Allowance</th><td>" . $allowance . "</td></tr>";
    echo "<tr><th>Deduction</th><td>" . $deduction . "</td></tr>";
    echo "<tr><th>Years of Service</th><td>" . $yearsOfService . "</td></tr>";
    echo "<tr><th>Gross Salary</th><td>" . $grossSalary . "</td></tr>";
    echo "<tr><th>Bonus</th><td>" . $bonus . "</td></tr>";
    echo "<tr><th>Service Benefit</th><td>" . $serviceBenefit . "</td></tr>";
    echo "<tr><th>Employment Allowance</th><td>" . $employmentAllowance . "</td></tr>";
    echo "<tr><th>Total Benefits</th><td>" . $totalBenefits . "</td></tr>";
    echo "<tr><th>Net Salary</th><td>" . $netSalary . "</td></tr>";
    echo "<tr><th>Salary Status</th><td>" . htmlspecialchars($salaryStatus) . "</td></tr>";
    echo "<tr><th>Annual Salary</th><td>" . $annualSalary . "</td></tr>";
    echo "<tr><th>Document Name</th><td>" . htmlspecialchars($fileName) . "</td></tr>";
    echo "<tr><th>Document Size</th><td>" . $fileSize . " bytes</td></tr>";
    echo "<tr><th>Document Type</th><td>" . htmlspecialchars($fileType) . "</td></tr>";

    echo "</table>";

    echo '<p><a href="index.php">Register Another Employee</a></p>';

} else {
    echo "Sorry, there was an error uploadin8ug the document.";
}
?>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>