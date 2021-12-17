<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Array</h1>
    <?php
        $coworkers = array(
            '반장' => '정승목바보',
            '부반장' => '김희교',
            '총무' => '고은희',);

        echo $coworkers[0]. "<br>"; // 이건 잘못된 방법이다 키와 값을 사용해 배열을 선언했으므로 여기서 쓰면 안됨, 인덱스로 선언했을 때 사용가능
        echo $coworkers['반장']. "<br>";
        var_dump($coworkers);
        echo count($coworkers). "<br>";
        var_dump(count($coworkers));

        // 배열의 새로운 요소 추가
        // array_push($coworkers, '유하르방'=>'고유비');
        $coworkers += ['유하르방' => '고유비'];
        var_dump($coworkers);
    ?>
</body>
</html>