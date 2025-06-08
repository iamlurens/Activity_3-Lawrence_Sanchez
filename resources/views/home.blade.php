<!DOCTYPE html>
<html>
<head>
    <title>Laravel Routing - Checkpoints</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h2>Routing Checkpoints</h2>
    <p>Click buttons to navigate:</p>

    <div class="d-grid gap-2 col-6 mx-auto">
        <!-- Checkpoint 1 -->
        <h4>Checkpoint 1: Named Routes</h4>
        <a href="{{ route('item') }}" class="btn btn-primary">Item View</a>
        <a href="{{ route('customer') }}" class="btn btn-success">Customer View</a>
        <a href="{{ route('order') }}" class="btn btn-warning">Order View</a>
        <a href="{{ route('orderDetails') }}" class="btn btn-danger">Order Details View</a>

        <!-- Checkpoint 2 -->
        <h4 class="mt-4">Checkpoint 2: Parameterized Routes</h4>
        <a href="/customer/1/Juan/Dagupan" class="btn btn-outline-success">Customer w/ Params</a>
        <a href="/item/1001/Laptop/50000" class="btn btn-outline-primary">Item w/ Params</a>
        <a href="/order/1/Juan/ORD123/2025-06-08" class="btn btn-outline-warning">Order w/ Params</a>
        <a href="/orderDetails/500/ORD123/1001/Laptop/50000/2" class="btn btn-outline-danger">Order Details w/ Params</a>
    </div>
</body>
</html>
