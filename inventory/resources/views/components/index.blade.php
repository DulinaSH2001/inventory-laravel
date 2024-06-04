<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>


  <div class="container mt-7">

    <div class="row justify-content-center">
      <div class="col text-center">
        <h1>Inventory</h1>
      </div>
    </div>
  

    <div class="row mb-3">
      <div class="col text-right">
        <a href="{{ route('addItem') }}" class="btn btn-outline-success">Add Item</a>
      </div>
    </div>
    <table class="table table-hover ">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Item Name</th>
         
          
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tasks as $item => $task)
        <tr>
          <th scope="row">{{ ++$item }}</th>
          <td>{{ $task->name }}</td>
        
          <td>
            <a href="{{ route('viewItem', $task->id) }}" class="btn btn-outline-info">View Details</a>
            <a href="{{ route('updateItem', $task->id) }}" class="btn btn-outline-warning">Update</a>
            <a href="{{ route('deleteItem', $task->id) }}" class="btn btn-outline-danger">Delete</a>
          
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGaA5jF5OD5s58T5F3e6dyD7z7" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-smHYkd98j9rZzE2K5i5t2kXki3o7r2HpGO6sp5eFxBZVxM3CqGujnMTdHdjfXgGK" crossorigin="anonymous"></script>
</body>
</html>