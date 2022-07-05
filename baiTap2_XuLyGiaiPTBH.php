<html>

<body>
    <?php
    if (isset($_POST['submitGiai'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $denta = $b * $b - 4 * $a * $c;
        $nghiem = 0;
        if ($denta < 0) {
            echo "Phuong trinh vo nghiem!";
        } else if ($denta == 0) {
            $nghiem = -$b / (2 * $a);
            echo "Phuong trinh co nghiem kep: x1 = x2 = " . $nghiem;
        } else {
            echo "Phuong trinh co 2 nghiem phan biet: <br/>";
            $nghiem = (-$b + sqrt($denta)) / (2 * $a);
            echo "x1 = " . $nghiem . " <br/>";
            $nghiem = (-$b - sqrt($denta)) / (2 * $a);
            echo "x2 = " . $nghiem;
        }
    }
    ?>
</body>

</html>