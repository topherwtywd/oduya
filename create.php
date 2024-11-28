<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $stmt = $pdo->prepare("INSERT INTO products (name, price, description) VALUES (?, ?, ?)");
    $stmt->execute([$name, $price, $description]);

    header("Location: read.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Create Product</title>
    <style>
        /* General Styles */
       /* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f9fa;
    background-image: url('https://godmeetsfashion.com/wp-content/uploads/2019/09/ps-paul-smith-converse-all-star-100-hi-release-20191005-01.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    box-sizing: border-box;
}

/* Navbar Styles */
nav {
    background: rgba(14, 36, 59, 0.9); /* Dark semi-transparent background */
    color: white;
    padding: 15px;
    width: 100%;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    position: sticky;
    top: 0;
    z-index: 1000;
}

nav .logo {
    font-size: 1.5rem;
    font-weight: bold;
    text-decoration: none;
    color: white;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
}

nav ul li {
    margin: 0 15px;
}

nav ul li a {
    text-decoration: none;
    color: white;
    font-size: 1rem;
    padding: 8px 12px;
    border-radius: 4px;
    transition: background 0.3s ease;
}

nav ul li a:hover {
    background: #0056b3;
}

/* Layout Container */
.content {
    display: flex;
    flex-wrap: wrap;
    max-width: 1200px;
    margin: 40px auto;
    background: rgba(255, 255, 255, 0.6); /* Transparent white */
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

/* Image Section */
.image-container {
    flex: 1;
    min-width: 300px;
    background: url('https://images6.alphacoders.com/133/thumb-350-1331511.webp');
    background-size: cover;
    background-position: center;
}

/* Form Section */
.form-container {
    flex: 1;
    min-width: 300px;
    padding: 50px;
    background: rgba(0, 0, 0, 0.6); /* Transparent black */
    border-radius: 0 10px 10px 0; /* Rounded corner for the right side */
    color: #fff; /* Ensure text is readable on a dark background */
}


.form-container form input,
.form-container form textarea,
.form-container form button {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
    border: 1px solid #ddd;
    box-sizing: border-box;
}

.form-container form input[type="text"],
.form-container form input[type="number"],
.form-container form textarea {
    font-size: 1rem;
    background: #f8f9fa;
    color: #333;
}

.form-container form button {
    background-color: #007bff;
    color: white;
    font-size: 1rem;
    cursor: pointer;
    border: none;
    transition: background-color 0.3s ease;
}

.form-container form button:hover {
    background-color: #0056b3;
}

/* Responsive Design */
@media (max-width: 768px) {
    .content {
        flex-direction: column;
    }

    .image-container {
        min-height: 200px;
    }

    .form-container {
        border-radius: 0; /* Remove specific rounding for smaller screens */
    }
}

@media (max-width: 480px) {
    nav ul {
        flex-direction: column;
        text-align: center;
    }

    nav ul li {
        margin: 10px 0;
    }

    .form-container form input,
    .form-container form textarea,
    .form-container form button {
        font-size: 0.9rem;
    }
}

    </style>
</head>
<body>
    <!-- Navbar -->
        <nav>
            <a href="#" class="logo">Nike</a>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="create.php">Create Product</a></li>
                <li><a href="read.php">View Products</a></li>
            </ul>
        </nav>

        <!-- Header -->
    

        <!-- Main Content -->
        <div class="content">
            <!-- Left Image Section -->
            <div class="image-container"></div>
            <!-- Right Form Section -->
            <div class="form-container">
                <form action="" method="POST">
                    <input type="text" name="name" placeholder="Product Name" required>
                    <input type="number" step="0.01" name="price" placeholder="Price" required>
                    <textarea name="description" placeholder="Description"></textarea>
                    <button type="submit">Create</button>
                </form>
            </div>
        </div>
</body>
</html>
