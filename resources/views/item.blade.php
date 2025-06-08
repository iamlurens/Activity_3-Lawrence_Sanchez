<!DOCTYPE html>
<html>
<head>
    <title>Item View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h2>Item Page</h2>

    @isset($itemNo)
    <div class="mb-3">
        <label class="form-label">Item No</label>
        <input type="text" class="form-control" value="{{ $itemNo }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Item Name</label>
        <input type="text" class="form-control" value="{{ $itemName }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="text" class="form-control" value="{{ $price }}" readonly>
    </div>
    @else
    
    @endisset

    <a href="/" class="btn btn-secondary mt-3">Back</a>
</body>
</html>
