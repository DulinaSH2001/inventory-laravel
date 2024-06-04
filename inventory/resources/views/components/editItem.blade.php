<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">

        <h2 class="mb-4">Update Item</h2>
        <div class="row mb-3">
            <div class="col text-right">
                <a href="{{ route('index') }}" class="btn btn-outline-info mt-3">Back to List</a>
            </div>
          </div> 
        <form action="{{route('editItem', $task->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Item Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$task->name}}" placeholder="Enter Item Name">
            </div>
            <div class="form-group">
                <label for="description">Item Details:</label>
                <textarea class="form-control" id="description" name="description" placeholder="Enter Item Details">{{$task->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="color">Item Color:</label>
                <input type="text" class="form-control" id="color" name="color" value="{{$task->color}}" placeholder="Enter Item Color">
            </div>
            <button type="submit" class="btn btn-outline-warning">Update Item</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9P3T3ymb3M8P+jvL+PBQxljRTQNKn2AiT1U1M" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
