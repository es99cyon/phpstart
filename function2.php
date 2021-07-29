<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>함수를 이용 및 변수에 문장 담기</h2>
    <?php
        $str = "bananabananabananabananabananabananabananabananabananabanana";
        echo $str;
    ?>
    <h2>그래서 몇글자?</h2>
    <?php
        echo strlen($str);
    ?>
    <h2>줄바꿈을 하려면? 공식 홈페이지에 br을 쳐본다.</h2>
    
    <?php
    // nl2br 은 br을 실행해준다.
        $br = "spacebarspacebarspacebarspacebarspacebarspacebarspacebar
        
        spacebar";
        echo nl2br($br);
    ?>

</body>
</html>