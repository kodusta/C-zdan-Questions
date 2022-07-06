<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Question 2</title>
</head>
<body>
<form action="soru1.php" method="post">
    <input type="text" name="string">
    <input type="submit" value="Gönder">
</form>
<?php
if (isset($_POST["string"])) {
    function count_character($string)
    {
        $length = mb_strlen($string, 'UTF-8');
        $list = array();
        for ($i = 0; $i < $length; $i++) {
            $character = mb_substr($string, $i, 1, 'UTF-8');
            if (!array_key_exists($character, $list))
                $list[$character] = 0;
            $list[$character]++;
        }
        arsort($list);
        return $list;
    }

    echo "<pre>";
    print_r(count_character($_POST["string"]));
    echo "</pre>";
}
?>
</body>
</html>
