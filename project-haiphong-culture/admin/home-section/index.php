<?php
    echo __FILE__ .'</br>';
    $level = './';
    require_once './data/home.php';
    $html = '';
    $connect = new mysqli('localhost', 'root', '');
    $connect -> select_db('hai_phong_culture_database');
    $initQuery = 'SELECT * FROM home_section';
    $allSelect = $connect -> query($initQuery);
    $storeArr = [];
    while ($row = $allSelect -> fetch_assoc()) {
        $storeArr[] = $row;
    }
    echo '<pre style="color: red;font-weight:bold">';
    print_r($storeArr);
    echo '</pre>';
    foreach ($storeArr as $key => $value) {
        $html .= '<div class="point">
                        <div>
                            <div class="infoWrapper">
                                <a class="infoMain" href="' . $value['url'] . '">' . $value['name'] . '</a>
                            </div>
                            <div class="imageWrapper">
                                <img src="' . $value['image'] . '" class="imageMain">
                            </div>
                        </div>
                    </div>';
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once '.../elements/head.php'; ?>
    <title>Hai Phong City - Home</title>
</head>

<body>
    <?php require_once '.../elements/header.php'; ?>
    <div class="container">
        <div class="timeline">
            <!-- 7 elements -->
            <?php
            echo $html;
            ?>
        </div>
    </div>
</body>

</html>