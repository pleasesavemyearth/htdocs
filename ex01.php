<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><a href="ex01.php">web</a></h1>

    <ol>

        <!-- <li><a href="ex01.php?id=html">html</a></li>
        <li><a href="ex01.php?id=css">css</a></li>
        <li><a href="ex01.php?id=js">js</a></li>
        <li><a href="ex01.php?id=PHP">PHP</a></li> -->

            <?php // data폴더에 data파일 생성하기만 해도 바로 li로 data목록이 생성된다
                $list = scandir('data'); // scandir() 함수는 지정된 디렉토리의 파일 및 디렉토리 배열 반환
                $i = 0;

                while($i < count($list)) { // list가 0보다 크면 다음작업 수행
                    if($list[$i] != '.') { // !=는 서로 같지 않으면 true 반환, 만약 list[0] != 상위디렉토리 ????? 이면 다음
                        if($list[$i] != '..') { 
                            ?>
                            <li><a href="ex01.php?id=<?=$list[$i]?>"><?=$list[$i]?></a></li>
                            <?php
                        }
                    }
                    $i = $i + 1;
                }
            ?>

    </ol>

    <h2>
        <?php
            if(isset($_GET['id'])) {
                echo file_get_contents("data/" . $_GET['id']); //data폴더에 있는 해당하는 id의 파일을 가져옴
            } else {
                echo "welcome, php"; //id를 불러오지 않으면 이것을 출력해라
            }
        ?>
    </h2>


</body>
</html>