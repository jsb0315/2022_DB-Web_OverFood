<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   
        <link rel="stylesheet" href="css/select_menu.css">
    </head>

    <body>
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                <a href="main.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <span class="fs-4"> OverFood </span>
                </a>     
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="main.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="./food.php" class="nav-link active" aria-current="page">Food</a></li>
                    <li class="nav-item"><a href="map.html" class="nav-link">Map</a></li>
                    <li class="nav-item"><a href="sign.php" class="nav-link">Sign in</a></li>
                </ul>
            </header>
        </div>

        <div>
            <h5 align="center">원하는 조건을 입력해주세요!</h5>
        </div>

        <div class="container">
            <section id="section_search">
                <form method="POST" action="food.php">
                    <!-- 아직 의미 없음: 테이블 분리하면 사용할 것
                    <div class="radio type_01">
                        <input type="radio" name="input_type_01" id="input_type_01_part" checked="">
                        <input type="radio" name="input_type_01" id="input_type_01_ingredient">
                        <input type="radio" name="input_type_01" id="input_type_01_taste">
                        <label for="input_type_01_part">분류</label>
                        <label for="input_type_01_ingredient">재료</label>
                        <label for="input_type_01_taste">맛</label>
                    </div>
                    -->

                    <div class="radio type_02">
                        <input type="radio" name="input_type_02" id="input_type_02_0" checked="" value="0">
                        <input type="radio" name="input_type_02" id="input_type_02_1" value="1">
                        <input type="radio" name="input_type_02" id="input_type_02_2" value="2">
                        <input type="radio" name="input_type_02" id="input_type_02_3" value="3">
                        <input type="radio" name="input_type_02" id="input_type_02_4" value="4">
                        <input type="radio" name="input_type_02" id="input_type_02_5" value="5">
                        <label for="input_type_02_0">전체</label>
                        <label for="input_type_02_1">한식</label>
                        <label for="input_type_02_2">중식</label>
                        <label for="input_type_02_3">일식</label>
                        <label for="input_type_02_4">양식</label>
                        <label for="input_type_02_5">기타</label>
                    </div>

                    <div class="radio type_03">
                        <input type="radio" name="input_type_03" id="input_type_03_0" checked="" value="0">
                        <input type="radio" name="input_type_03" id="input_type_03_1"  value="1">
                        <input type="radio" name="input_type_03" id="input_type_03_2"  value="2">
                        <input type="radio" name="input_type_03" id="input_type_03_3"  value="3">
                        <input type="radio" name="input_type_03" id="input_type_03_4"  value="4">
                        <input type="radio" name="input_type_03" id="input_type_03_5"  value="5">
                        <input type="radio" name="input_type_03" id="input_type_03_6"  value="6">
                        <input type="radio" name="input_type_03" id="input_type_03_7"  value="7">
                        <input type="radio" name="input_type_03" id="input_type_03_8"  value="8">
                        <input type="radio" name="input_type_03" id="input_type_03_9"  value="9">
                        <label for="input_type_03_0">전체</label>
                        <label for="input_type_03_1">밥</label>
                        <label for="input_type_03_2">면</label>
                        <label for="input_type_03_3">국물</label>
                        <label for="input_type_03_4">찜</label>
                        <label for="input_type_03_5">구이</label>
                        <label for="input_type_03_6">튀김</label>
                        <label for="input_type_03_7">볶음</label>
                        <label for="input_type_03_8">제과</label>
                        <label for="input_type_03_9">기타</label>

                    </div>

                    <div class="radio type_04">
                        <input type="radio" name="input_type_04" id="input_type_04_0" checked="" value="0">
                        <input type="radio" name="input_type_04" id="input_type_04_1" value="1">
                        <input type="radio" name="input_type_04" id="input_type_04_2" value="2">
                        <input type="radio" name="input_type_04" id="input_type_04_3" value="3">
                        <input type="radio" name="input_type_04" id="input_type_04_4" value="4">
                        <input type="radio" name="input_type_04" id="input_type_04_5" value="5">
                        <label for="input_type_04_0">전체</label>
                        <label for="input_type_04_1">곡류</label>
                        <label for="input_type_04_2">육류</label>
                        <label for="input_type_04_3">채소류</label>
                        <label for="input_type_04_4">어패류</label>
                        <label for="input_type_04_5">과일류</label>
                    </div>

                    <div class="radio type_05">
                        <input type="radio" name="input_type_05" id="input_type_05_0" checked="" value="X.">
                        <input type="radio" name="input_type_05" id="input_type_05_one">
                        <label for="input_type_05_0">선택 안함</label>
                        <label for="input_type_05_one">수분</label>
                        <label for="input_type_05_one_slider" class="hov"><input class="slider" id="myRange0" type="range" name='f1' min="0.01" max="10" step='0.01' value="3">
                            <p>ddd</p></label>
                    </div>

                    <div class="radio type_06">
                        <input type="radio" name="input_type_06" id="input_type_06_0" checked="" value="X.">
                        <input type="radio" name="input_type_06" id="input_type_06_one">
                        <label for="input_type_06_0">선택 안함</label>
                        <label for="input_type_06_one">단맛</label>
                        <label for="input_type_06_one_slider"><input class="slider" id="myRange1" type="range" name='f2' min="0.01" max="10" step='0.01' value="3"></label>
                    </div>

                    <div class="radio type_07">
                        <input type="radio" name="input_type_07" id="input_type_07_0" checked="" value="X.">
                        <input type="radio" name="input_type_07" id="input_type_07_one">
                        <label for="input_type_07_0">선택 안함</label>
                        <label for="input_type_07_one">짠맛</label>
                        <label for="input_type_07_one_slider"><input class="slider" id="myRange2" type="range" name='f3' min="0.01" max="10" step='0.01' value="3"></label>
                    </div>

                    <div class="radio type_08">
                        <input type="radio" name="input_type_08" id="input_type_08_0" checked="" value="X.">
                        <input type="radio" name="input_type_08" id="input_type_08_one">
                        <label for="input_type_08_0">선택 안함</label>
                        <label for="input_type_08_one">매운맛</label>
                        <label for="input_type_08_one_slider"><input class="slider" id="myRange3" type="range" name='f4' min="0" max="10" value="3"></label>
                    </div>
                    
                    <div class="submit">
                        <input type="submit" value="메뉴추천" id="input_submit", class="submitb">
                    </div>
                    <script src="js/finder.js"></script>
                    <!-- 누르면 음식 리스트 떠야함-->
                        <?php
                            $sql='';
                            function executesql($arr, $f1, $f2) {
                                global $sql;
                                $conn=mysqli_connect('203.234.62.186', 'dizest', '1234', 'DBProject', '13306');
                                if (mysqli_connect_error()){ //인자전달 없다함
                                    echo 'Connection Error';
                                    exit();
                                }

                                //$sql='call calc('.$x1.','.$x2.','.$x3.','.$x4.');';
                                /*mysqli_query($conn, 'call viewmaker();'); //연산에 필요한 컬럼 view*/

                                $con=[['전체','한','중','일','양','기'],
                                    ['전체','밥류','면류','국물류','찜류','구이류','튀김류','볶음류','제과류','기타'],
                                    ['전체','곡류','육류','채소류','어패류','과일류']]; 

                                $sql='select f.name, i.ingredient, x1, x2, x3, x4';
                                $sql_select=', 1/(sqrt(';
                                //select f.name, 1/(sqrt(pow(@n1-x1, 2)+pow(@n2-x2, 2)+pow(@n3-x3, 2)+pow(@n4-x4, 2))) norm
                                //from foods f, ingredients i, vector v where f.name=v.name and f.ingredient=i.id order by norm desc;
                                $sql_where='';
                                for($i=0;$i<4;$i=$i+1){
                                    if ($f1[$i]!="X."){
                                        $sql_select=$sql_select.'pow('.$f2[$i].'-x'.($i+1).', 2)+';  //pow(@n1-x1, 2)+
                                    }
                                }
                                $sql_select=substr($sql_select,0,-1).')) norm from foods f, ingredients i, vector v where f.name=v.name and f.ingredient=i.id'; 
                                $sql=$sql.$sql_select;
                                for($i=0;$i<3;$i=$i+1){
                                    $tmp=['country','maincategory','중분류'];
                                    if ($con[$i][$arr[$i]]!='전체'){
                                        $sql_where=$sql_where.' and '.$tmp[$i].'="'.$con[$i][$arr[$i]].'"';
                                    }
                                }
                                $sql=$sql.$sql_where.' order by norm desc limit 10;';
                                
                                $result=mysqli_query($conn, $sql);

                                $i=0;
                                while($row=mysqli_fetch_array($result)){
                                    echo '<tr>
                                            <td>
                                                <div class="progressbg">
                                                    <p>수분 / 단맛 / 짠맛/ 매운맛<br>'.round($row['x1'],2).' / '.round($row['x2'],2).' / '
                                                                                    .round($row['x3'],2).' / '.round($row['x4'],2).'    ['.$row['ingredient'].']</p>
                                                    <div class="progress progressbg-progress">
                                                        <div class="progress-bar bg-primary-lt" style="width: '.($row['norm']*100).'%" role="progressbar" aria-valuenow="'.($row['norm']*100).'" aria-valuemin="0" aria-valuemax="100" aria-label="'.($row['norm']*100).' Complete">
                                                            <span class="visually-hidden">'.($row['norm']*100).'% Complete</span>'.$row['name'].'
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="w-1 fw-bold text-end">'.round($row['norm']*100,2).'%</td>
                                            </tr>';
                                    $i++;
                                }
                                if ($i==0)
                                    echo '<h1 style="text-align: center;">결과가 없습니다!!</h1>';
                            }
                            

                            // $sql="select * from book";
                            // $result=mysqli_query($conn, $sql);
                            
                            $arr=[0,0,0];//일반조건
                            $f1=[0,0,0,0]; //수치조건 temp
                            $f2=[1.5,2.0,2.5,3]; //수치조건
                            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                                $arr=[];
                                $f1=[];
                                for($i=0; $i<3; $i=$i+1){    //일반 조건
                                    $arr[$i]=$_POST["input_type_0".$i+2];
                                }
                                for($i=0; $i<4; $i=$i+1){    //수치 조건
                                    $f1[$i]=$_POST["input_type_0".$i+5];
                                    $f2[$i]=$_POST["f".$i+1];
                                }
                            }
                                //executesql($arr, $f2);
                                ?>

                        <script>let arr = <?php echo json_encode($arr) ?>;
                                let f1 = <?php echo json_encode($f1) ?>;
                                let f2 = <?php echo json_encode($f2) ?>;
                                let sql = <?php echo json_encode($sql) ?>;
                                printsql(sql);
                                keepbtn(arr, f1, f2);
                                requestMenu(f1,f2);
                                </script>
                </form>
                <div class="col-lg-4">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">Top Foods</h3>
                  <table class="table table-sm table-borderless">
                    <thead>
                      <tr>
                        <th>food</th>
                        <th class="text-end">Right?</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php  
                        
                        executesql($arr, $f1, $f2);
                    
                            ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            </section>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@latest/dist/js/tabler.min.js"></script>
</html>
                        
                      