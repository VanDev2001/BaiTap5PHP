<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vi du nhap POST</title>
</head>
<body>
    <form action="./viDuXuLyPOST.php" method="post">
        <table>
            <tr>
                <td>Name: </td>
                <td><input type="text" name="fname" id=""></td>
            </tr>
            <tr>
                <td>Age: </td>
                <td><input type="text" name="age" id=""> </td>
            </tr>
            <tr colspan="2">
                <td><input type="submit" value="Nhap" name="submitUser"></td>
            </tr>
        </table>
    </form>
</body>
</html>