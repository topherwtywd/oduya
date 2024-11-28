<?php
require 'db.php';
$products = $pdo->query("SELECT * FROM products")->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Products</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
            background-image: url('https://godmeetsfashion.com/wp-content/uploads/2019/09/ps-paul-smith-converse-all-star-100-hi-release-20191005-01.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            color: #e8eaed;
        }

        /* Navbar */
        nav {
            background: rgba(14, 36, 59, 0.9);
            padding: 10px 20px;
            position: sticky;
            top: 0;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap; /* Adjust for smaller screens */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        nav .logo {
            font-size: 24px;
            font-weight: bold;
            color: #e8eaed;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            text-decoration: none;
            color: #e8eaed;
            font-size: 16px;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #ffd700;
        }

        /* Header */
      

        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
            justify-content: center;
        }

        /* Left Image Section */
        .left-image {
            flex: 1 1 30%;
            max-width: 30%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            background: rgba(0, 0, 0, 0.5);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .left-image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        /* Content Section */
        .content {
            flex: 1 1 65%;
            max-width: 65%;
            padding: 20px;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            background: rgba(0, 0, 0, 0.5);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            color: #e8eaed;
        }

        table th, table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }

        table th {
            background-color: rgba(255, 255, 255, 0.2);
        }

        table tr:hover {
            background-color: rgba(255, 255, 255, 0.1);
            cursor: pointer;
        }

        /* Buttons */
        button {
    background: linear-gradient(135deg, #007bff, #0056b3); /* Gradient background */
    color: #fff;
    border: none;
    padding: 12px 20px; /* Adjusted for better proportions */
    cursor: pointer;
    border-radius: 50px; /* More rounded edges */
    font-size: 1rem;
    font-weight: bold;
    transition: background 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
}

button:hover {
    background: linear-gradient(135deg, #0056b3, #003580); /* Darker gradient on hover */
    transform: translateY(-3px); /* Slight "lift" effect */
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.3); /* Enhanced shadow on hover */
}

button:active {
    transform: translateY(1px); /* Slight "press" effect */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); /* Restore shadow */
}

button:focus {
    outline: none;
    box-shadow: 0 0 0 4px rgba(0, 123, 255, 0.4); /* Highlighted outline for accessibility */
}

button span {
    margin-left: 8px; /* Space for optional icon and text alignment */
}

button i {
    font-size: 1.2rem; /* Icon size adjustment */
}


        button:hover {
            background-color: #555;
            transform: scale(1.05);
        }

        button svg {
            margin-left: 5px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                gap: 10px;
            }

            .container {
                flex-direction: column;
            }

            .left-image, .content {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="logo">Nike Products</div>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="create.php">Add Product</a></li>
            <li><a href="read.php">View Products</a></li>
        </ul>
    </nav>

    <!-- Header -->

    <!-- Main Content -->
    <div class="container">
        <div class="left-image">
            <img src="https://images6.alphacoders.com/133/thumb-350-1331511.webp" alt="Large Display Image">
        </div>
        <div class="content">
            <a href="index.html"><button>Back to Home</button></a>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td><?= $product['description'] ?></td>
                    <td>
                        <a href="update.php?id=<?= $product['id'] ?>"><button><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg></button></a>
                        <a href="delete.php?id=<?= $product['id'] ?>"><button><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></button></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>
</html>
