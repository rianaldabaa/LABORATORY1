<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cudis</title>

    <!-- Include Bootstrap CSS (Use a Bootstrap theme that supports dark mode) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Add custom dark theme styles -->
    <style>
        /* Body background and text color */
        body {
            background-color: #343a40; /* Dark background color */
            color: #ffffff; /* Light text color */
        }

        /* Navbar styles */
        .navbar {
            background-color: #212529; /* Dark navbar background color */
        }

        /* Dark button styles */
        .btn-primary, .btn-success, .btn-info {
            background-color: #007bff; /* Primary button color */
        }

        /* Table styles */
        .table {
            background-color: #343a40; /* Dark table background color */
            color: #ffffff; /* Light table text color */
        }

        /* Modal styles */
        .modal-content {
            background-color: #343a40; /* Dark modal background color */
            color: #ffffff; /* Light modal text color */
        }

        /* Form input styles */
        .form-control {
            background-color: #343a40; /* Dark form input background color */
            color: #ffffff; /* Light form input text color */
        }

        /* Form select styles */
        .form-select {
            background-color: #343a40; /* Dark form select background color */
            color: #ffffff; /* Light form select text color */
        }

        /* Add more custom styles as needed */
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4 text-center">Products</h2>

    <div class="btn-group">
        <a href="<?= base_url('create') ?>" class="btn btn-primary">Add Product</a>
        <a href="<?= base_url('add-category') ?>" class="btn btn-success">Add Category</a>
    </div>

    <div class="mb-3 d-flex justify-content-between align-items-center">
        <form method="get" class="d-inline-block">
            <label for="categoryFilter" class="form-label"></label>
            <select class="form-select" id="categoryFilter" name="categoryFilter">
                <option value="">All Categories</option>
                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category['category_id'] ?>" <?= (isset($categoryFilter) && $category['category_id'] == $categoryFilter) ? 'selected' : '' ?>><?= $category['name'] ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit" class="btn btn-info" id="applyFilter">Apply </button>
        </form>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="bg-primary text-white">
        <tr>
            <th>Product Information</th>
            <th>Category</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($sk as $rider): ?>
            <tr>
                <td>
                <a href="<?= base_url('student/' . $rider['id']) ?>"><?= $rider['name'] ?></a>
                </td>
                <td><?= $rider['category'] ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>


<div class="container mt-3">
    <div class="row justify-content-end">
        <div class="col-auto">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#categoryModal">Show Categories</button>
        </div>
    </div>
</div>

<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="categoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="categoryModalLabel">Categories</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul>
                    <?php foreach ($categories as $category): ?>
                        <li><?= $category['name'] ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    document.getElementById('applyFilter').addEventListener('click', function() {
        const categoryFilter = document.getElementById('categoryFilter').value;
        const tableRows = document.querySelectorAll('tbody tr');

        tableRows.forEach(function(row) {
            const categoryValue = row.querySelector('td:nth-child(3)').textContent;

            if (categoryFilter === '' || categoryFilter === categoryValue) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script>
</body>
</html>
