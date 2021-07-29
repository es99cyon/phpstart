<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    <h2>헬로우 월드 사이 싱글 쿼터 쓰기</h2>
    <?php 
    // 더블 쿼터에 더블 쿼터시 에러 발생
    echo "hello 'w'orld 음 굳" 
    ?>

    <h2>헬로우 월드 사이 역슬래시를 사용해 "를 문자로 만들자</h2>
    <?php 
    // 슬래시 이용하기
    echo "hello \"w\"orld 음 굳";
    ?>

<h2>문자열 결합연산자 concatenation operator 해보자</h2>
<?php 
    // 문자 사이 . 을 쓰면 문자열이 결합되며 추후 많이쓰는 이유 알아보자
    echo "hello "."world"
    ?>
    
</body>
</html>