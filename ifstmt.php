<?php
$LOGIN = true;
$userName = "홍길동";
 if($LOGIN) {
?> <!-- html 시작되면 그 전에 php 태그는 끝내는 것? --> 
 <h1><?=$userName?>님이 로그인하였습니다.</h1>
<?php
 } else {
?>
 <h1>login이 필요합니다.</h1>
<?php
 }
?>