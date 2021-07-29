<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>졸립다 각 목록을 클릭했을 때 제목이 동적을 바뀌는 애플리케이션 만들어보기</h2>
    <ol>
        <li><a href="urlparameter.php?id=kimdongmin">김동민</a></li>
        <li><a href="urlparameter.php?id=kimseonghyun">김성현</a></li>
        <li><a href="urlparameter.php?id=kwonjinoh">권진오</a></li>
        <li><a href="urlparameter.php?id=홍현기">홍현기</a></li>
        <li><a href="urlparameter.php?id=이대현">이대현</a></li>
        <li><a href="urlparameter.php?id=김경준">김경준</a></li>
    </ol>
    <h3>
        <?php
        // $_GET['id'] 값을 넣으면 해당 이름으로 바뀐다.
            echo $_GET['id'];
        ?>
    </h3>
    <?php
        echo file_get_contents("data/" .$_GET['id']);
    ?>
</body>
</html>