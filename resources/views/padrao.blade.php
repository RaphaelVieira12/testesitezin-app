<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
    <title>Hospital Brasil</title>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Ninth navbar example">
  <div class="container-xl">
    <a class="navbar-brand" href="#">
      <img src="../images/hospitalLogo.png" width="30" height="30" class="d-inline-block align-text-top">
    </a>
    <a class="navbar-brand" href="#">Hospital Brasil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample07XL">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cadastrar">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/todosContato">Search</a>
        </li>
      </ul>
      <form role="search">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
      </form>
      <a class="navbar-brand" href="#">
        <img src="../images/lupa.png" width="30" height="30" class="d-inline-block align-text-top">
      </a>
    </div>
  </div>
</nav>

<div class="card">
  <div class="card-footer">
</div>



<!-- fim Navbar -->

@yield('content')

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../images/local.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
      Rua Votuporanga, 111, Vila Dora - Santo André - SP - CEP 09030-590 - (11) 2127-6666
      <a href='https://www.instagram.com'><img src="../images/instagram.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top"> Instagram</a>
      <a href='https://twitter.com/i/flow/login'><img src="../images/twitter.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">  Twitter</a>
      <a href='https://www.facebook.com/'><img src="../images/facebook.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top"> Facebook</a>
    </a>
    
  </div>
</nav>
</body>
</html>



