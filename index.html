<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $sql = "INSERT INTO products (name, description, price) VALUES (:name, :description, :price)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name, 'description' => $description, 'price' => $price]);

    header("Location: read.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>dashboard</title>
    <style>
        /* Background styling */
        body {
            background-image: url('https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIyLTA1L3B4MTM2OTgxMy1pbWFnZS1rd3Z4eHA5MS5qcGc.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            color: #333;
            display: flex;
        }

        /* Sidebar styling */
        .sidebar {
            width: 250px;
           background-color: rgba(0, 0, 0, 0.5); /* Slightly transparent */
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

        table {
    width: 100%;
    border-collapse: collapse;
}
th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}
th {
    background-color: #f2f2f2;
}

    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>FoodTaste</h2>
        <button onclick="showSection('create-product')">Create Product</button>
        <button onclick="showSection('view-products')">View Products</button>
        <button onclick="showSection('')">best dish</button>
    </div>

    <!-- Content Area -->
    <div class="content">
        <!-- Create Product Section -->
        <div id="create-product" class="section active">
            <div class="container">
                <h2>Create New Product</h2>
                <form method="POST">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" name="price" class="form-control" step="0.01" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>
            </div>
        </div>

        <!-- View Products Section -->
<div id="view-products" class="section">
    <div class="container">
        <h2>View Products</h2>
        <p>This section displays a list of products.</p>
        <div id="product-list" class="row">
            <!-- Product items will be inserted here by JavaScript -->
        </div>
    </div>
</div>

<!-- View Products Section -->
<div id="view-products" class="section">
    <div class="container">
         <h2>View Products</h2>
        <p>This section displays a list of products.</p>
        <div id="product-list" class="row">
            <!-- Product items will be inserted here by JavaScript -->
        </div>
    </div>
</div>

<script>
    const products = [
        { name: "lovely", description: "This is a description for product 1.", price: 29.99, imageUrl: "https://th.bing.com/th/id/OIP.zWJOH1FRuumDEaSoY1kTqwHaFX?w=254&h=184&c=7&r=0&o=5&dpr=1.3&pid=1.7" },
        { name: "Product 2", description: "This is a description for product 2.", price: 49.99, imageUrl: "https://i.pinimg.com/originals/47/a6/35/47a635c80c67a7ecfd58b6e3bf4a61f8.jpg" },
        { name: "Product 3", description: "This is a description for product 3.", price: 19.99, imageUrl: "https://dl-cf.splento.com/cdn/2020/07/03/restaurant_product_photography_san_diego_1.jpg" },
        { name: "Product 4", description: "This is a description for product 4.", price: 89.99, imageUrl: "https://th.bing.com/th/id/OIP.05cNalb5Zv36b4BQtPe2bgHaHa?pid=ImgDet&w=184&h=184&c=7&dpr=1.3" },
        { name: "Product 5", description: "This is a description for product 5.", price: 129.99, imageUrl: "https://th.bing.com/th/id/OIP.ilw4v7P_V6DLf-SQXQZWcwHaE8?pid=ImgDet&w=184&h=122&c=7&dpr=1.3" },
        { name: "Product 6", description: "This is a description for product 6.", price: 75.99, imageUrl: "https://th.bing.com/th/id/OIP.lnpoeqibQ9ziktDvZqdHUgHaGe?pid=ImgDet&w=184&h=161&c=7&dpr=1.3" },
        { name: "Product 7", description: "This is a description for product 7.", price: 39.99, imageUrl: "https://th.bing.com/th/id/OIP.OOnNidFA3K4v5M_78IUjUgAAAA?pid=ImgDet&w=184&h=137&c=7&dpr=1.3" },
        { name: "Product 8", description: "This is a description for product 8.", price: 55.99, imageUrl: "https://tse1.explicit.bing.net/th/id/OIP.-3KC5bn_g0DB9PMFb2CCKwAAAA?pid=ImgDet&w=184&h=132&c=7&dpr=1.3&isAdult=true" },
        { name: "Product 9", description: "This is a description for product 9.", price: 99.99, imageUrl: "https://th.bing.com/th/id/OIP.QsNvnFkjXLQnOeTr6rD8-gHaE8?pid=ImgDet&w=184&h=122&c=7&dpr=1.3" }
    ];

    function displayProducts() {
        const productList = document.getElementById("product-list");
        productList.innerHTML = ""; 

        products.forEach((product, index) => {
            const productCard = document.createElement("div");
            productCard.className = "col-md-4 mb-4";
            productCard.onclick = () => {
                window.location.href = `product view?index=${index}`;
            };

            productCard.innerHTML = `
                <div class="card h-100">
                    <img src="${product.imageUrl}" class="card-img-top" alt="${product.name}">
                    <div class="card-body">
                        <h5 class="card-title">${product.name}</h5>
                        <p class="card-text">${product.description}</p>
                        <p class="card-text"><strong>Price:</strong> $${product.price.toFixed(2)}</p>
                    </div>
                </div>
            `;
            productList.appendChild(productCard);
        });
    }

    displayProducts();
</script>

<script>
    // Expanded array of product data with more products
    const products = [
        {
            name: "lovely",
            description: "This is a description for product 1.",
            price: 29.99,
            imageUrl: "https://th.bing.com/th/id/OIP.zWJOH1FRuumDEaSoY1kTqwHaFX?w=254&h=184&c=7&r=0&o=5&dpr=1.3&pid=1.7"
        },
        {
            name: "Product 2",
            description: "This is a description for product 2.",
            price: 49.99,
            imageUrl: "https://i.pinimg.com/originals/47/a6/35/47a635c80c67a7ecfd58b6e3bf4a61f8.jpg"
        },
        {
            name: "Product 3",
            description: "This is a description for product 3.",
            price: 19.99,
            imageUrl: "https://dl-cf.splento.com/cdn/2020/07/03/restaurant_product_photography_san_diego_1.jpg"
        },
        {
            name: "Product 4",
            description: "This is a description for product 4.",
            price: 89.99,
            imageUrl: "https://th.bing.com/th/id/OIP.05cNalb5Zv36b4BQtPe2bgHaHa?pid=ImgDet&w=184&h=184&c=7&dpr=1.3"
        },
        {
            name: "Product 5",
            description: "This is a description for product 5.",
            price: 129.99,
            imageUrl: "https://th.bing.com/th/id/OIP.ilw4v7P_V6DLf-SQXQZWcwHaE8?pid=ImgDet&w=184&h=122&c=7&dpr=1.3"
        },
        {
            name: "Product 6",
            description: "This is a description for product 6.",
            price: 75.99,
            imageUrl: "https://th.bing.com/th/id/OIP.lnpoeqibQ9ziktDvZqdHUgHaGe?pid=ImgDet&w=184&h=161&c=7&dpr=1.3"
        },
        {
            name: "Product 7",
            description: "This is a description for product 7.",
            price: 39.99,
            imageUrl: "https://th.bing.com/th/id/OIP.OOnNidFA3K4v5M_78IUjUgAAAA?pid=ImgDet&w=184&h=137&c=7&dpr=1.3"
        },
        {
            name: "Product 8",
            description: "This is a description for product 8.",
            price: 55.99,
            imageUrl: "https://tse1.explicit.bing.net/th/id/OIP.-3KC5bn_g0DB9PMFb2CCKwAAAA?pid=ImgDet&w=184&h=132&c=7&dpr=1.3&isAdult=true"
        },
        {
            name: "Product 9",
            description: "This is a description for product 9.",
            price: 99.99,
            imageUrl: "https://th.bing.com/th/id/OIP.QsNvnFkjXLQnOeTr6rD8-gHaE8?pid=ImgDet&w=184&h=122&c=7&dpr=1.3"
        }
    ];

    // Function to display products
    function displayProducts() {
        const productList = document.getElementById("product-list");
        productList.innerHTML = ""; // Clear any existing content

        products.forEach(product => {
            const productCard = document.createElement("div");
            productCard.className = "col-md-4 mb-4";

            productCard.innerHTML = `
                <div class="card h-100">
                    <img src="${product.imageUrl}" class="card-img-top" alt="${product.name}">
                    <div class="card-body">
                        <h5 class="card-title">${product.name}</h5>
                        <p class="card-text">${product.description}</p>
                        <p class="card-text"><strong>Price:</strong> $${product.price.toFixed(2)}</p>
                    </div>
                </div>
            `;
            productList.appendChild(productCard);
        });
    }

    // Call displayProducts to load the products on page load
    displayProducts();
</script>


        <!-- product list Section -->
        
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .slider {
            width: 80%;
            max-width: 800px;
            margin: 50px auto;
            overflow: hidden;
            position: relative;
            border: 2px solid #ccc;
            border-radius: 10px;
            background-color: #fff;
        }
        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        .slide {
            flex-shrink: 0;
            width: 100%;
            height: 400px;
        }
        .slide div {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
        }
        .navigation {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }
        .navigation button {
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            color: white;
            font-size: 18px;
            padding: 10px;
            cursor: pointer;
            border-radius: 50%;
        }
        .navigation button:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

     .best-seller {
    font-family: 'Arial', sans-serif;
    font-size: 4rem; /* Bigger size */
    font-weight: 900; /* Makes the text bold */
    color: transparent; /* Start as transparent */
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); /* Adds depth */
    text-transform: uppercase;
    letter-spacing: 3px; /* Increase spacing */
    background: linear-gradient(45deg, #ff9a8b, #ff6a88, #ff99ac);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent; /* Gradient text effect */
    animation: appear 2s ease-in-out, pulse 1.5s infinite; /* Add appearance animation */
    text-align: center; /* Center align the text */
    margin: 30px auto;
}

/* Animation to make the color "appear" dynamically */
@keyframes appear {
    0% {
        -webkit-text-fill-color: transparent; /* Start invisible */
    }
    100% {
        -webkit-text-fill-color: #ff6f61; /* End with visible color */
    }
}

/* Pulse animation for continuous effect */
@keyframes pulse {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
    100% {
        transform: scale(1);
    }
}


    </style>
</head>
<body>
    <div class="slider">
        <div class="slides">
            <?php
            // Image sources
            $images = [
                "https://geoffreview.com/wp-content/uploads/2017/10/sm-city-tarlac-restaurants-mr-kimbob.jpg",
                "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/16/30/de/09/salad.jpg?w=600&h=400&s=1",
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtJi00zuneS13pyWaDE_m2DbpyfXEH3BjK0g&s",
                "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0c/97/fb/47/grilled-pork-liempo.jpg?w=600&h=-1&s=1",
                "https://images.deliveryhero.io/image/fd-ph/Products/25410169.jpg?width=%s"
            ];

            // Generate slides with divs
            foreach ($images as $image) {
                echo "<div class='slide'><div style='background-image: url($image);'></div></div>";
            }
            ?>
        </div>
     <h1 class="best-seller">BEST SELLER!!</h1>

        <div class="navigation">
            <button id="prev">&#10094;</button>
            <button id="next">&#10095;</button>
        </div>
    </div>

    <script>
        let currentIndex = 0;
        const slides = document.querySelector('.slides');
        const totalSlides = document.querySelectorAll('.slide').length;

        document.getElementById('next').addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % totalSlides;
            slides.style.transform = `translateX(-${currentIndex * 100}%)`;
        });

        document.getElementById('prev').addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            slides.style.transform = `translateX(-${currentIndex * 100}%)`;
        });
    </script>


    <script>
        // JavaScript to toggle sections
        function showSection(sectionId) {
            const sections = document.querySelectorAll('.section');
            sections.forEach(section => {
                section.classList.remove('active');
            });
            document.getElementById(sectionId).classList.add('active');
        }
    </script>
</body>
</html>
