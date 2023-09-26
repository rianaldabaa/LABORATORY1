<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap">
    <style>
        body {
            background-color: #343a40; /* Dark background color */
            font-family: 'Roboto', sans-serif; /* Custom font */
            color: #ffffff; /* Light text color */
            margin: 0;
        }

        .container {
            background-color: #212529; /* Dark container background color */
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin-top: 20px;
        }

        h2 {
            text-align: center;
            color: #ffffff; /* Light heading color */
        }

        .btn-primary {
            background-color: #007bff; /* Primary button color */
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .form-group label {
            font-weight: bold;
            color: #ffffff; /* Light label text color */
        }

        select.form-control {
            height: 40px;
            background-color: #343a40; /* Dark form input background color */
            color: #ffffff; /* Light form input text color */
        }

        .form-control {
            background-color: #343a40; /* Dark form input background color */
            color: #ffffff; /* Light form input text color */
        }

        /* Additional formatting */
        .mt-5 {
            margin-top: 2rem !important;
        }

        .mb-3 {
            margin-bottom: 1rem !important;
        }

        .mb-4 {
            margin-bottom: 1.5rem !important;
        }

        .btn-block {
            display: block;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Create Product</h2>
        
        <div class="row">
            <div class="col-md-12">
                <a href="<?= base_url('test') ?>" class="btn btn-primary mb-3">Back</a>
            </div>
        </div>
     
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="<?= base_url('create/save') ?>" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" id="category" name="category" required>
                            <?php foreach ($categories as $category): ?>
                                <option value="<?= $category['name'] ?>"><?= $category['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" value="" required step="1">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" name="price" value="" required step="0.01">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Create Product</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
