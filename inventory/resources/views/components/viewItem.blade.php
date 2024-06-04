<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Item Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Item Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Name: {{ $task->name }}</h5>
                <p class="card-text">Description: {{ $task->description }}</p>
                <p class="card-text">Color: {{ $task->color }}</p>
                <a href="{{ route('index') }}" class="btn btn-warning">Back to List</a>
            </div>
        </div>
    </div>
</body>
</html>
