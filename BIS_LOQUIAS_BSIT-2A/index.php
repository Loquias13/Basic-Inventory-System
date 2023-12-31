<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Basic Inventory System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            background-color: #496291;
        }
        
        .container {
            margin-top: 50px;
            background-color: #adcdf7;
            padding: 80px;
            border-radius: 150px;
            box-shadow: 0 50px 3px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            font-family: "Arial Black", "Arial Black", monospace;
            background-color: #548cc4;
            border-color: #000000;
        }
        
        .btn-primary:hover {
            background-color: #79ade0;
            border-color: #000000;
        }

        .form-label {
            font-family: "Arial Black", "Arial Black", monospace;

        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1>BASIC INVENTORY SYSTEM</h1>
    <style>
        .text-center {
            font-family: "Arial Black", "Arial Black", monospace;
            color: #002447; 
            font-size: 50px;
            margin-bottom: 20px;
        }
    </style>
        </div>
        
        <form action="compute.php" method="post">
            <div class="mb-3">
                <label for="productname" class="form-label">PRODUCT NAME</label>
                <input type="text" name="productname" id="productname" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="qty" class="form-label">AMOUNT</label>
                <input type="number" name="qty" id="qty" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="out" class="form-label">DEDUCTION</label>
                <input type="number" name="out" id="out" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">CONFIRM</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
