<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <style>
          #wellcome {
              text-align: center;
              position: absolute;
              margin-top: 0.5%;
          } </style>
      </head>

    <body>
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                <a href="./main.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <span class="fs-4"> OverFood </span>
                </a>     
                <?php 
                    if ($_SERVER["REQUEST_METHOD"] == "POST"){
                      $conn=mysqli_connect('203.234.62.186', 'dizest', '1234', 'DBProject', '13306');
                      if (mysqli_connect_error()){
                          echo 'Connection Error';
                          exit();
                      }
                      $sql='select * from customer where custid="'.$_POST['id'].'";';
                      
                      $result=mysqli_query($conn, $sql);
                      $row=mysqli_fetch_array($result);
                      echo '<br><h5 class="fs-4" id="wellcome" style="text-align: center;">'.$row['name'].'님 어서오세요!</h5>';
                    }
                    ?>
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="./main.php" class="nav-link active" aria-current="page">Home</a></li>
                    <li class="nav-item"><a href="./food.php" class="nav-link">Food</a></li>
                    <li class="nav-item"><a href="./map.html" class="nav-link">Map</a></li>
                    <li class="nav-item"><a href="./sign.php" class="nav-link">Sign in</a></li>
                </ul>
            </header>
        </div>

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
              <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Overload + food</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                <p>
                  <a href="./food.php" class="btn btn-primary my-2">recommend food</a>
                </p>
              </div>
            </div>
        </section>

        <ul class="nav justify-content-center border-bottom pb-3 mb-3"></ul>

        <div class="album py-5 bg-light">
            <div class="container">
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                  <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                      <image href="./Thumbnail/food1.jpg" height="100%" width="100%"/>
                    </svg>
                    <div class="card-body">
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">9 mins</small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="co2">
                  <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                      <image href="./Thumbnail/food2.jpg" height="100%" width="100%"/>
                    </svg>
                    <div class="card-body">
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">9 mins</small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="co3">
                  <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                      <image href="./Thumbnail/food3.jpg" height="100%" width="100%"/>
                    </svg>
                    <div class="card-body">
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">9 mins</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


        <div class="container">
            <footer class="py-3 my-4">
              <ul class="nav justify-content-center border-bottom pb-3 mb-3"></ul>
              <p class="text-center text-muted">© 2022 Company, Inc</p>
            </footer>
          </div>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</html>