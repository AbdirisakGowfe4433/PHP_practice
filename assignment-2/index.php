
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration System</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f4f7;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 650px;
            margin: auto;
            background-color: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 8px #cccccc;
        }

        h2 {
            text-align: center;
            color: #243b53;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 6px;
        }

        input[type="text"],
        input[type="number"],
        select,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #cccccc;
            border-radius: 4px;
        }

        .choice {
            margin-top: 8px;
        }

        .choice label {
            display: inline;
            margin-right: 15px;
        }

        input[type="submit"],
        input[type="reset"] {
            padding: 10px 20px;
            margin-top: 20px;
            margin-right: 8px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"] {
            background-color: #243b53;
            color: white;
        }

        input[type="reset"] {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <div class="container">

        <h2>Employee Registration Form</h2>

        <form action="process.php" method="post"
              enctype="multipart/form-data">

            <!-- Employee details -->
            <label for="employee_name">Employee Full Name:</label>
            <input type="text" id="employee_name"
                   name="employee_name" required>

            <label for="employee_id">Employee ID:</label>
            <input type="text" id="employee_id"
                   name="employee_id" required>

            <!-- Gender -->
            <label>Gender:</label>
            <div class="choice">
                <input type="radio" id="male"
                       name="gender" value="Male" required>
                <label for="male">Male</label>

                <input type="radio" id="female"
                       name="gender" value="Female">
                <label for="female">Female</label>
            </div>

            <!-- Department -->
            <label for="department">Department:</label>
            <select id="department" name="department" required>
                <option value="">-- Select Department --</option>
                <option value="Human Resources">Human Resources</option>
                <option value="Finance">Finance</option>
                <option value="Information Technology">
                    Information Technology
                </option>
                <option value="Administration">Administration</option>
            </select>

            <!-- Employment type -->
            <label>Employment Type:</label>
            <div class="choice">
                <input type="radio" id="full_time"
                       name="employment_type" value="Full-Time" required>
                <label for="full_time">Full-Time</label>

                <input type="radio" id="part_time"
                       name="employment_type" value="Part-Time">
                <label for="part_time">Part-Time</label>
            </div>

            <!-- Salary details -->
            <label for="basic_salary">Basic Salary ($):</label>
            <input type="number" id="basic_salary"
                   name="basic_salary" min="0.01"
                   step="0.01" required>

            <label for="allowance">Allowance ($):</label>
            <input type="number" id="allowance"
                   name="allowance" min="0"
                   step="0.01" required>

            <label for="deduction">Deduction ($):</label>
            <input type="number" id="deduction"
                   name="deduction" min="0"
                   step="0.01" required>

            <label for="years_of_service">Years of Service:</label>
            <input type="number" id="years_of_service"
                   name="years_of_service" min="0"
                   step="1" required>

            <!-- Employee document -->
            <label for="employee_document">Employee Document:</label>
            <input type="file" id="employee_document"
                   name="employee_document" required>

            <!-- Form buttons -->
            <input type="submit" value="Register Employee">
            <input type="reset" value="Clear Form">

        </form>

    </div>

</body>
</html>
