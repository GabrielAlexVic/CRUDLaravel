<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUDLaravel</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
  @include('shared.navbar')
  <div class="container">
    <div class="d-flex vh-100 justify-content-center align-items-center">
      <div class="row">

        @csrf
        <div class="col-md-12 mt-4">
          <h1 class="text-center">Get Supplier</h1>
        </div>
        <div class="col-md-1 mt-4">
          <label>ID:</label>
          <input type="text" class="form-control" value="{{ $supplier->id }}" disabled>
        </div>
        <div class="col-md-11 mt-4">
          <label>Name:</label>
          <input type="text" class="form-control" value="{{ $supplier->name }}" disabled>
        </div>
        <div class="col-md-6 mt-4">
          <label>Email:</label>
          <input type="text" class="form-control" value="{{ $supplier->email }}" disabled>
        </div>
        <div class="col-md-6 mt-4">
          <label>Phone:</label>
          <input type="text" class="form-control" value="{{ $supplier->phone }}" disabled>
        </div>
        <div class="col-md-12 mt-4">
          <label>Address:</label>
          <input type="text" class="form-control" value="{{ $supplier->address }}" disabled>
        </div>

        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Update</th>
                <th scope="col">Get</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              @if(isset($products) && !is_null($products))
                @foreach($products as $product)
                  <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td><a href="/product/edit/{{ $product->id }}" class="btn btn-primary">Update</a></td>
                    <td><a href="/product/get/{{ $product->id }}" class="btn btn-success">Get</a></td>
                    <td><a href="/product/delete/{{ $product->id }}" class="btn btn-danger">Delete</a></td>
                  </tr>
                @endforeach
              @else
                <tr>
                  <td colspan="5">No products found for this supplier.</td>
                </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</body>

</html>