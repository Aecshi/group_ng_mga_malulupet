<?php
// Coffee data
$coffees = [
    ["name" => "Espresso", "price" => 2.50],
    ["name" => "Cappuccino", "price" => 3.00],
    ["name" => "Latte", "price" => 3.50],
    ["name" => "Americano", "price" => 2.80],
    ["name" => "Mocha", "price" => 4.00],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coffee Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8f4f0;
            margin: 0;
            padding: 0;
        }

        .dashboard {
            width: 60%;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 30px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #6f4e37;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #6f4e37;
            color: white;
        }

        tr:hover {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h1>☕ Coffee Dashboard</h1>
        <table>
            <thead>
                <tr>
                    <th>Coffee Name</th>
                    <th>Price ($)</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($coffees as $coffee): ?>
                    <tr>
                        <td><?= htmlspecialchars($coffee["name"]) ?></td>
                        <td><?= number_format($coffee["price"], 2) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
