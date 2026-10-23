<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
<?php


function calculateGrossSalary($basicSalary, $allowance)
{
    $grossSalary = $basicSalary + $allowance;
    return $grossSalary;
}


function calculateBonus($basicSalary)
{
    if ($basicSalary >= 1000) {
        return $basicSalary * 0.10;
    } elseif ($basicSalary >= 500) {
        return $basicSalary * 0.05;
    } else {
        return 0;
    }
}


function calculateServiceBenefit($basicSalary, $yearsOfService)
{
    if ($yearsOfService >= 5) {
        return $basicSalary * 0.08;
    } elseif ($yearsOfService >= 3) {
        return $basicSalary * 0.05;
    } else {
        return 0;
    }
}


function calculateEmploymentAllowance($basicSalary, $employmentType)
{
    if ($employmentType == "Full-Time") {
        return $basicSalary * 0.06;
    } elseif ($employmentType == "Part-Time") {
        return $basicSalary * 0.03;
    } else {
        return 0;
    }
}


function calculateTotalBenefits($bonus, $serviceBenefit, $employmentAllowance)
{
    $totalBenefits = $bonus + $serviceBenefit + $employmentAllowance;
    return $totalBenefits;
}


function calculateNetSalary($grossSalary, $totalBenefits, $deduction)
{
    $netSalary = $grossSalary + $totalBenefits - $deduction;
    return $netSalary;
}


function checkSalaryStatus($netSalary)
{
    if ($netSalary >= 1500) {
        return "High Salary";
    } elseif ($netSalary >= 800) {
        return "Medium Salary";
    } else {
        return "Low Salary";
    }
}


function calculateAnnualSalary($netSalary, $months = 12)
{
    $annualSalary = $netSalary * $months;
    return $annualSalary;
}

?>
, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>