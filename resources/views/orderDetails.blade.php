<!DOCTYPE html>
<html>
<head>
    <title>Order Details View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h2>Order Details Page</h2>

    @isset($transNo)
    <div class="mb-3">
        <label class="form-label">Transaction No</label>
        <input type="text" class="form-control" value="{{ $transNo }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Order No</label>
        <input type="text" class="form-control" value="{{ $orderNo }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Item ID</label>
        <input type="text" class="form-control" value="{{ $itemId }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Item Name</label>
        <input type="text" class="form-control" value="{{ $itemName }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="text" class="form-control" value="{{ $price }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Quantity</label>
        <input type="text" class="form-control" value="{{ $qty }}" readonly>
    </div>
    @else
    @endisset

    <a href="/" class="btn btn-secondary mt-3">Back</a>
</body>
</html>
