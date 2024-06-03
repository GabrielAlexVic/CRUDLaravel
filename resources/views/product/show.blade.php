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
          <h1 class="text-center">Get Product</h1>
        </div>
        <div class="col-md-1 mt-4">
          <label>ID:</label>
          <input type="text" class="form-control" value="{{ $product->id }}" disabled>
        </div>
        <div class="col-md-5 mt-4">
          <label>Supplier:</label>
          <input type="text" class="form-control" value="{{ $product->supplier->name }}" disabled>
        </div>
        <div class="col-md-6 mt-4">
          <label>Name:</label>
          <input type="text" class="form-control" value="{{ $product->name }}" disabled>
        </div>
        <div class="col-md-6 mt-4">
          <label>Price:</label>
          <input type="text" class="form-control" value="{{ $product->price }}" disabled>
        </div>
        <div class="col-md-6 mt-4">
          <label>Quantity:</label>
          <input type="text" class="form-control" value="{{ $product->quantity }}" disabled>
        </div>
      </div>
    </div>
  </div>

</body>

</html>