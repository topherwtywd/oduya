<?php
require 'db.php';

$id = $_GET['id'];
$product = $pdo->prepare("SELECT * FROM products WHERE id = ?");
$product->execute([$id]);
$product = $product->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $stmt = $pdo->prepare("UPDATE products SET name = ?, price = ?, description = ? WHERE id = ?");
    $stmt->execute([$name, $price, $description, $id]);

    header("Location: read.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Update Product</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-image: url('https://godmeetsfashion.com/wp-content/uploads/2019/09/ps-paul-smith-converse-all-star-100-hi-release-20191005-01.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #333;
            min-height: 100vh;
        }

        /* Navbar Styles */
        nav {
            background: rgba(0, 0, 0, 0.8); /* Transparent black */
            padding: 15px 20px;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: white;
            font-size: 1.8rem;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        .nav-links li a {
            text-decoration: none;
            color: white;
            font-size: 1rem;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .nav-links li a:hover {
            background: #555;
        }

        /* Header Styles */
        header {
            text-align: center;
            padding: 20px;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            margin-bottom: 30px;
        }

        header h1 {
            font-size: 2.5rem;
        }

        /* Container Styles */
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            padding: 20px;
            justify-content: center;
            align-items: center;
        }

        /* Left Image Section */
        .left-image {
            flex: 1 1 40%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(255, 255, 255, 0.9); /* White with transparency */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .left-image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        /* Form Section */
        .form-container {
            flex: 1 1 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            max-width: 100%;
            background: rgba(0, 0, 0, 0.7); /* Black with transparency */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            color: white;
        }

        form {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        form input, form textarea, form button {
            width: 100%;
            padding: 15px;
            border-radius: 5px;
            font-size: 1rem;
            border: none;
            outline: none;
        }

        form input, form textarea {
            background: #f8f8f8;
            color: #333;
            border: 1px solid #ddd;
        }

        form input:focus, form textarea:focus {
            border-color: #555;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        form button {
            background-color: #007bff;
            color: white;
            cursor: pointer;
            border: none;
            font-size: 1.2rem;
            transition: background-color 0.3s, transform 0.2s;
        }

        form button:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .left-image, .form-container {
                flex: 1 1 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="nav-container">
            <a href="#" class="logo">Nike</a>
            <ul class="nav-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="create.php">Create Product</a></li>
                <li><a href="read.php">View Products</a></li>
            </ul>
        </div>
    </nav>

    <!-- Header -->
    
    
    <div class="container">
        <!-- Left Image Section -->
        <div class="left-image">
            <img src="https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/99486859-0ff3-46b4-949b-2d16af2ad421/custom-nike-dunk-high-by-you-shoes.png" alt="Product Image">
        </div>
        <!-- Form Section -->
        <div class="form-container">
            <form action="" method="POST">
                <input type="text" name="name" value="<?= $product['name'] ?>" required placeholder="Product Name">
                <input type="number" step="0.01" name="price" value="<?= $product['price'] ?>" required placeholder="Price">
                <textarea name="description" placeholder="Description"><?= $product['description'] ?></textarea>
                <button type="submit">Update</button>
            </form>
        </div>
    </div>
</body>
</html>
