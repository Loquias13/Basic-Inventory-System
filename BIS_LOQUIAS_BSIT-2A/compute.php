<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productname = $_POST['productname'];
    $qty = (int)$_POST['qty'];
    $out = (int)$_POST['out'];

    class Compute {
        public $out;
        public $qty;
        public $productname;

        public function computation($out, $qty, $productname) {
            $this->out = $out;
            $this->qty = $qty;
            $this->productname = $productname;
        }

        public function subtract($num1, $num2) {
            return $num1 - $num2;
        }

        public function displayproduct() {
            return $this->productname;
        }
    }

    $compute = new Compute();
    $compute->computation($out, $qty, $productname); // Initialize the properties
    $balance = $compute->subtract($qty, $out);
    $display = $compute->displayproduct();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Basic Inventory Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            background-color: #496291;
        }
        
        .container {
            background-color: #adcdf7;
            margin-top: 50px;
            padding: 50px;
            border-radius: 150px;
            box-shadow: 0 50px 3px rgba(0, 0, 0, 0.1);
        }
        
        .title-name {
            font-family: "Arial Black", "Arial Black", monospace;
            color: #002447;
            padding: 50px;
            text-align: center;
            margin-top: 20px;
        }
        .result-box {
            border-color: #fff;
            text-align: center;
            font-family: "Arial Black", "Arial Black", monospace;
        }
        
        .btn-primary {
            background-color: #020203;
            border-color: #007bff;
        }
        
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <div class = "title-name">
        <h1>BASIC INVENTORY SYSTEM RESULT</h1>
        </div>


        <?php
        if (isset($balance) && isset($display)) {
            echo "<div class='result-box'>";
            echo "<h3>PRODUCT NAME: " . htmlspecialchars($display) . "</h3>";
            echo "<h3>TOTAL: " . htmlspecialchars($balance) . "</h3>";
            echo "</div>";
        } else {
            echo "<div class='result-box'>";
            echo "<h2>No computation results available.</h2>";
            echo "</div>";
        }
        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
