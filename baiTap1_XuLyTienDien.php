<html>

<body>
    <?php
    $soDien = 0;
    $soTien = 0;
    if (isset($_POST['tinhTien'])) {
        $soDien = $_POST['soDienMoi'] - $_POST['soDienCu'];

        if ($soDien >= 0 && $soDien <= 100) {
            $soTien = $soDien * 2000;
        } else if ($soDien > 100 && $soDien <= 150) {
            $soTien = 100 * 2000 +  ($soDien - 100) * 2500;
        } else if ($soDien > 150 && $soDien <= 200) {
            $soTien = 100 * 2000 + 50 * 2500 + ($soDien - 150) * 2800;
        } else if ($soDien > 200) {
            $soTien = 100 * 2000 + 50 * 2500 + 50 * 2800  + ($soDien - 200) * 3500;
        } else {
            echo "Loi du lieu!";
        }
        echo "So tien dien la: " . $soTien . " dong.";
    }
    ?>
</body>

</html>