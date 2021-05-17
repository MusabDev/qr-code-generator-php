<?php

$qr_code = "";

// Check $_POST Super Global Variable isset or not
if (isset($_POST["submit"])) {
    $data = $_POST["data"];
    $width = $_POST["width"];
    $height = $_POST["height"];

    // Hit this url for get QR Code
    $url = "https://chart.googleapis.com/chart?cht=qr&chs={$width}x{$height}&chl={$data}";

    $qr_code = '<img style="max-width:100%;max-height:100%;" width="'.$width.'" height="'.$height.'" src="'.$url.'">';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>QR Code Generator</title>
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row">
            <div class="mx-auto col-lg-5 bg-white p-3 shadow rounded">
                <h1 class="text-center mb-3 fw-bold">QR Code Generator</h1>
                <div class="my-3"><?php echo $qr_code; ?></div>
                <form method="post">
                    <div class="mb-3">
                        <label for="data" class="form-label">Data</label>
                        <input type="text" class="form-control" name="data" placeholder="e.g. Hello World" id="data" required>
                    </div>
                    <div class="row mb-3">
                        <label class="form-label">Size</label>
                        <div class="col-6">
                            <input type="number" class="form-control" name="width" placeholder="Width e.g. 250" required>
                        </div>
                        <div class="col-6">
                            <input type="number" class="form-control" name="height" placeholder="Height e.g. 250" required>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Get QR Code</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>