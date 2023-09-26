<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add categ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #343a40; /* Dark background color */
            font-family: Arial, sans-serif;
            color: #ffffff; /* Light text color */
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

        .btn-success {
            background-color: #28a745; /* Success button color */
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #1f8d3e;
            border-color: #1f8d3e;
        }

        .form-group label {
            font-weight: bold;
            color: #ffffff; /* Light label text color */
        }

        .form-control {
            height: 40px;
            background-color: #343a40; /* Dark form input background color */
            color: #ffffff; /* Light form input text color */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Add Category</h2>

        <a href="<?= base_url('test') ?>" class="btn btn-primary mb-3">Back</a>

        <form action="<?= base_url('save-category') ?>" method="post">
            <div class="form-group">
                <label for="category_name">Category Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            
            <button type="submit" class="btn btn-success btn-block">Save Category</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
