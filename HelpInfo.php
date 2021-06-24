<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $place = $_GET["place"];
        $location = $_GET["location"];
        $why = $_GET["location"];
        $img = $_GET["img"];
    ?>
    <h2>요청되었습니다</h2>
    <p>
        장소: <?php print $place;?><br>
        주소: <?php print $location;?><br>
        요청 이유: <?php print $why;?><br>
        이미지: <?php print $img;?>
    </p>
</body>
</html>