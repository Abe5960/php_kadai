<!DOCTYPE>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_011</title>
</head>

<body>
    <p>
        <?php
        $commodity = ['名前' => '玉ねぎ', '値段' => '200', '産地' =>'北海道'];
        foreach ($commodity as $key => $value) {
        echo "{$key}:{$value}";
        echo '<br>';
        }
        ?> 
    </p>
</body>
</html>