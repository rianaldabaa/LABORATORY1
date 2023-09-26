<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information</title>
    <!-- Use Bootstrap Dark Theme CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/darkly/bootstrap.min.css">
    <style>
        /* Custom CSS styles */
        .container {
            max-width: 600px;
        }

        .product-card {
            border: 1px solid #ddd;
            margin-top: 20px;
        }

        .product-card .card-body {
            padding: 20px;
        }

        .product-card .card-title {
            font-size: 24px;
            font-weight: bold;
        }

        .product-card .card-text {
            font-size: 16px;
        }

        .action-links {
            margin-top: 10px;
        }

        .action-links a {
            margin-right: 10px;
        }

        .back-button {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Product Information</h1>
        <div class="mt-3 back-button">
            <a href="<?= site_url("test") ?>" class="btn btn-primary">Back</a>
        </div>
        <?php if ($student): ?>
        <div class="card product-card">
            <div class="card-body">
                <h2 class="card-title">Name: <?= $student['name'] ?></h2>
                <p class="card-text">Description: <?= $student['description'] ?></p>
                <p class="card-text">Category: <?= $student['category'] ?></p>
                <p class="card-text">Quantity: <?= $student['quantity'] ?></p>
                <p class="card-text">Price: <?= $student['price'] ?></p>
            </div>
            <div class="card-footer">
                <!-- Update and Delete Links -->
                <div class="action-links">
                    <a href="/update/<?= $student['id'] ?>" class="btn btn-primary">Update</a>
                    <a href="/delete/<?= $student['id'] ?>" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
        <?php else: ?>
        <p class="text-danger text-center mt-3">Product not found.</p>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JS and jQuery scripts can be added here -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
