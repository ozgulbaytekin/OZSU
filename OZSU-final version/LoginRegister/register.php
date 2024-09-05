<head>
    <link href="/ozsu/LoginRegister/styles.css" rel="stylesheet" />
    <style>
        .btn {
            /* Existing styles... */
            background-color: #007bff; /* Change the background color to blue */
            color: #ffffff;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<?php
ob_start();
?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title text-center mb-4">Register</h1>
                    <form action="/ozsu/LoginRegister/register_process.php" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <label>
                                <input type="text" name="name" class="form-control" required>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <label>
                                <input type="text" name="email" class="form-control" required>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <label>
                                <input type="password" name="password" class="form-control" required>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label for="company_position" class="form-label">Company Position</label>
                            <label>
                                <select name="company_position" class="form-select" required>

                                    <option value="Infirmary">Infirmary</option>
                                    <option value="Stocks">Stocks</option>
                                    <option value="Sales">Sales</option>
                                    <option value="Productions">Productions</option>
                                </select>
                            </label>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-dark mb-2">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
