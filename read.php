<?php
include 'db.php';

$sql = "SELECT * FROM products";
$stmt = $pdo->query($sql);
$products = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Product List</title>
    <style>
        /* Background styling */
        body {
            background-image: url('https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIyLTA1L3B4MTM2OTgxMy1pbWFnZS1rd3Z4eHA5MS5qcGc.jpg'); /* Replace with your image URL */
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            color: #333;
        }

        /* Container styles */
        .container {
            max-width: 900px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5); /* Larger blur */
            margin-top: 40px;
        }

        /* Page heading */
        h1 {
            text-align: center;
            color: #0056b3;
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* Table styling */
        .table {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .table th {
            background-color: #007bff;
            color: white;
            text-align: center;
            font-weight: 600;
        }

        .table td {
            text-align: center;
            vertical-align: middle;
        }

        /* Button styling */
        .btn-success {
            background-color: #28a745;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .btn-warning, .btn-danger {
            font-size: 13px;
            border: none;
            border-radius: 5px;
            padding: 6px 12px;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        /* Sidebar styling */
        .sidebar {
            width: 250px;
            background-color: rgba(0, 0, 0, 0.8);
            padding: 20px;
            color: #fff;
            position: fixed;
            height: 100vh;
            box-shadow: 4px 0 20px rgba(0, 0, 0, 0.5);
        }

        .sidebar h2 {
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
            color: #f8f9fa;
        }

        .sidebar button {
            background-color: #007bff;
            border: none;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            font-size: 16px;
            border-radius: 5px;
            color: #fff;
            transition: background-color 0.3s, transform 0.2s;
        }

        .sidebar button:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        /* Container styles */
        .content {
            margin-left: 260px;
            padding: 30px;
            width: calc(100% - 260px);
        }

        .section {
            display: none;
        }

        .active {
            display: block;
        }

        .container {
            max-width: 600px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
            margin-top: 50px;
        }

        /* Form heading */
        h2 {
            text-align: center;
            color: #0056b3;
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* Form and button styling */
        .form-control {
            margin-bottom: 15px;
            border-radius: 5px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 123, 255, 0.3);
            transition: background-color 0.3s, transform 0.2s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
     

    <div class="container">
        <h1>Product List</h1>
        <a href="create.php" class="btn btn-success mb-3">Add New Product</a>
        <table class="table table-bordered table-responsive-md">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php echo $product['description']; ?></td>
                        <td>$<?php echo $product['price']; ?></td>
                        <td>
                            <a href="update.php?id=<?php echo $product['id']; ?>" class="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg></a>
                            <a href="delete.php?id=<?php echo $product['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
