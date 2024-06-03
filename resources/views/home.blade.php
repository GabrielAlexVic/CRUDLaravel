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
  <div class="container-fluid">

    <div class="px-4 py-5 my-5 text-center">
      <h1 class="display-5 fw-bold text-body-emphasis">Alunos</h1>
      <div class="col-lg-6 mx-auto">
        <h5>Gabriel Alexandre Victório | RA: 233138-1</h5>
        <h5>Vitor Ferrarese Pegino | RA: 215993-1</h5>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-4">
          <a href="/supplier/list" class="btn btn-primary btn-lg px-4 gap-3">Suppliers</a>
          <a href="/product/list" class="btn btn-primary btn-lg px-4">Products</a>
        </div>
      </div>
    </div>
  </div>

</body>

</html>