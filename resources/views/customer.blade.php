<!DOCTYPE html>
<html>
<head>
    <title>Customer View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
    <h2>Customer Page</h2>

    @isset($id)
    <div class="mb-3">
        <label class="form-label">Customer ID</label>
        <input type="text" class="form-control" value="{{ $id }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" value="{{ $name }}" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Address</label>
        <input type="text" class="form-control" value="{{ $address }}" readonly>
    </div>
    @else
   
    @endisset

    <a href="/" class="btn btn-secondary mt-3">Back</a>
</body>
</html>
