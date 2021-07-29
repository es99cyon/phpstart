<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    안녕하세요. 
    <?php 
//  주소창에 ?name = "이름" 을 설정하면 해당하는 이름 값으로 변해 php 한 파일로 여러명에게 인사가 가능하다.
echo $_GET['name']; ?>님 <?php 
// 두 개를 쓰려면 & 입력값과 입력값을 구분한다.  
echo $_GET['age']; ?>살 입니다.
    

</body>
</html>