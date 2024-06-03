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
      <form class="row" action="/supplier/store" method="POST">
        @csrf

        <div class="col-md-12 mt-4">
          <h1 class="text-center">Create supplier</h1>
        </div>
        <div class="col-md-12 mt-4">
          <label>Name:</label>
          <input type="text" class="form-control" placeholder="Enter a new product name here.." name="name" required>
        </div>
        <div class="col-md-12 mt-4">
          <label>Email:</label>
          <input type="text" class="form-control" placeholder="Enter your email here..." name="email" required>
        </div>
        <div class="col-md-12 mt-4">
          <label>Phone:</label>
          <input type="text" class="form-control" placeholder="Enter your phone here..." name="phone" required>
        </div>
        <div class="col-md-12 mt-4">
          <label>Address:</label>
          <input type="text" class="form-control" placeholder="Enter your address here..." name="address" required>
        </div>
        <div class="col-md-12 mt-4">
          <button class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>

</body>

</html>