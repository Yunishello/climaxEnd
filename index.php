<?php 
  session_start();
  $id = $_SESSION['id'];
  $title = $_SESSION['title'];
  $img = $_SESSION['image'];
  $content =$_SESSION['textContent'];
  include('api_calls/show.php');
  if (isset($_SESSION['message'])) {
    if ($_SESSION['message'] == 'save') {
      $message = '<div class="alert alert-success alert-dismissible fade show" role="alert">New record saved successfully<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }else {
      $message = '<div class="alert alert-success alert-dismissible fade show" role="alert">New record deleted successfully<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
  }else {
    $message = "";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Climax | Connecting the world through AI</title>
    <!-- CSS Files -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css" />
    <link href="dist/css/carousel.css" rel="stylesheet" />
    <link rel="stylesheet" href="dist/css/styles.css" />
    <link rel="stylesheet" href="dist/css/responsive.css" />

    <!-- JS Files -->
    <script src="dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="dist/js/script.js" defer></script>
</head>
<body>
    <main>
    <nav
        class="navbar navbar-expand-md navbar-dark bg-primary fixed-top"
        aria-label="Fourth navbar example"
      >
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Climax Global</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarsExample04"
            aria-controls="navbarsExample04"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div
            class="collapse navbar-collapse justify-content-center"
            id="navbarsExample04"
          >
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" target="_blank" href="#">View Project Page</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Yunishello</a>
              </li>
              <li class="nav-item">
                <a class="nav-link">yunishello@gmail.com</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <section>
        <div class="row container-fluid">
          <div class="pt-3">
            <?php echo $message ?>
          </div>
          <div class="col p-5 mt-4">
            <div class="card shadow shadow-red">
            <div class="card-header bg-danger"></div>
              <div class="card-body">
                <form action="api_calls/save.php" method="post">
                  <label for="">Title:</label>
                  <input type="text" class="form-control" name="title">
                  <br>
                  <label for="">Description:</label>
                  <textarea class="form-control" name="textContent" id="" cols="50" rows="10"></textarea>
                  <br>
                  <label for="">Introduction:</label>
                  <textarea class="form-control" name="intro" id="" cols="50" rows="10"></textarea>
                  <br>
                  <button class="btn btn-secondary btn-block">Upload</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col p-5 mt-4">
            <div class="card shadow">
              <div class="card-header bg-primary"></div>
              <div class="card-body table-responsive">
                <table class="table table-striped">
          <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Action</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <th scope="row">1</th>
            <td><?php echo $title ?></td>
                    <td>
                      <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit">E</button>
                      <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#view">V</button>
                      <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">D</button>
                    </td>
          </tr>
          </tbody>
        </table>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <div class="sticky-footer bg-primary p-3 text-center">
          <span class="text-muted">Design by <a href="#">devYuny</a></span>
        </div>

        <?php include('api_calls/modal.php') ?>
    
</body>
</html>