<!DOCTYPE html>
<html lang="ko">
    <head>
      <meta charset="utf-8">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <link rel="stylesheet" href="css/signup.css">
    </head>
    
    <body class="text-center">

      

      <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="./main.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4"> OverFood </span>
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="./main.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="./food.php" class="nav-link">Food</a></li>
                <li class="nav-item"><a href="./map.html" class="nav-link">Map</a></li>
                <li class="nav-item"><a href="./sign.php" class="nav-link active" aria-current="page">Sign in</a></li>
            </ul>
        </header>
      </div>

        <main class="form-signin w-100 m-auto">
            <form method='post' action="main.php">
              <h3 class="h3 mb-3 fw-normal">Sign in</h3>
          
              <div class="form-floating">
                <input style="text-align: center;" type="text" class="form-control" id="floatingInput" name='id' placeholder="사용자이름" required>
                <label for="floatingInput">id</label>
              </div>
        
              <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

              <a href="./signup.php"><p>sign up</p></a>
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
                if (!is_null($row)){
                  echo '<br><h3 style="text-align: center;">'.$row['name'].'님 어서오세요!</h3>';
                }
                else{
                  echo '<br><h4 style="text-align: center;">아이디가 없거나 틀렸습니다.</h4>';
                }
              }
              ?>
            </form>
            <div class="container">
                <footer class="py-3 my-4">
                  <ul class="nav justify-content-center border-bottom pb-3 mb-3"></ul>
                  <p class="text-center text-muted">© 2022 Company, Inc</p>
                </footer>
              </div>
          </main>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>