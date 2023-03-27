<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Navbar</title>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">CRM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="leadview.php">Leads</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="policyholders.php">Policy Holders</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="dealers.php">Dealers
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="tickets.php">Tickets
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="reports.php">Reports
          </a>
        </li>

        <li class="nav-item">
          <a href="logout.php" class="btn btn-danger float-end">Logout
          </a>
        </li>

      </ul>

    </div>
  </div>
</nav>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</html>