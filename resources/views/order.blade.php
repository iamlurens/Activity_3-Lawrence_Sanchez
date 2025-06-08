<!DOCTYPE html>
<html>
<head>
    <title>Order View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h2>Order Page</h2>

    @isset($custId)
    <div class="mb-3">
        <label class="form-label">Customer ID</label>
        <input type="text" class="form-control" value="{{ $custId }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Customer Name</label>
        <input type="text" class="form-control" value="{{ $custName }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Order No</label>
        <input type="text" class="form-control" value="{{ $orderNo }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Date</label>
        <input type="text" class="form-control" value="{{ $date }}" readonly>
    </div>
    @else

    @endisset

    <a href="/" class="btn btn-secondary mt-3">Back</a>
</body>
</html>
