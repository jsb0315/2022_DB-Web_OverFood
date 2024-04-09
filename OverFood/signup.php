<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="./main.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>     
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="./main.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="./food.php" class="nav-link">Food</a></li>
                <li class="nav-item"><a href="./map.html" class="nav-link">Map</a></li>
                <li class="nav-item"><a href="./sign.php" class="nav-link active" aria-current="page">Sign in</a></li>
            </ul>
        </header>
      </div>

    <div class="container">
      <div class="input-form-backgroud row">
         <div class="input-form col-md-12 mx-auto">
         <h4 class="text-center">회원가입</h4>
         <ul class="nav justify-content-center border-bottom pb-3 mb-3"></ul>
         <form class="validation-form" novalidate method="post" action="signup.php">
            
            <div class="row">
            <div class="col-md-6 mb-3">
                <label for="name">아이디</label>
                <input type="text" class="form-control" id="name" name="id" placeholder="" value="" required>
                <div class="invalid-feedback">
                  이름을 입력해주세요.
                </div>
              </div> 
            </div>
         
            <div class="row">
            <div class="col-md-6 mb-3">
              <label for="name">이름</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="홍길동" value="" required>
              <div class="invalid-feedback">
                이름을 입력해주세요.
              </div>
            </div>
          </div>
            
          <div class="row">
            <div class="col-md-6 mb-3">
                <label for="age">나이</label>
                <input type="string" class="form-control" id="age" name="age" placeholder="예) 20" required>
                <div class="invalid-feedback">
                  나이를 입력해주세요.
                </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="name">성별</label>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="male" id="flexRadioDefault1" checked>
                  <label class="form-check-label" for="flexRadioDefault1">
                    남성
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="female" id="flexRadioDefault2" >
                  <label class="form-check-label" for="flexRadioDefault2">
                    여성
                  </label>
                </div>         
          </div>

          </div>
            
          <hr class="mb-4">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="aggrement" required>
            <label class="custom-control-label" for="aggrement">개인정보 수집 및 이용에 동의합니다.</label>
          </div>
          <div class="mb-4"></div>
          <button class="btn btn-primary btn-lg btn-block" type="submit">가입 완료</button>
          <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST"){
              $conn=mysqli_connect('203.234.62.186', 'dizest', '1234', 'DBProject', '13306');
              if (mysqli_connect_error()){
                  echo 'Connection Error';
                  exit();
              }
              $sql='select * from customer where custid="'.$_POST['id'].'";';
              
              $result=mysqli_query($conn, $sql);
              if (!is_null(mysqli_fetch_array($result))){
                echo '<br><h3 style="text-align: center;">아이디가 존재합니다.</h3>';
              }
              else{
                if (is_null($_POST['male']))
                  $gender='여성';
                else
                  $gender='남성';
                $sql='insert into customer values("'.$_POST['id'].'","'.$_POST['name'].'",'.$_POST['age'].',"'.$gender.'");';
                mysqli_query($conn, $sql);
                echo '<br><h3 style="text-align: center;">가입을 축하합니다! 로그인을 해주세요.</h3>' ;                
              }
            }
              ?>
        </form>
      </div>
    </div>
    <div class="container">
        <footer class="py-3 my-4" padding="0">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3"></ul>
            <p class="text-center text-muted">© 2022 Company, Inc</p>
        </footer>
    </div>
  </div>
  <script>
    window.addEventListener('load', () => {
      const forms = document.getElementsByClassName('validation-form');

      Array.prototype.filter.call(forms, (form) => {
        form.addEventListener('submit', function (event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }

          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  </script>
</body>

</html>