<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    echo '<form action="includes/insert.php" method="post">
        <input type="text" name="tenkhoahoc" placeholder="Tên khóa học"></br>
        <span><?php echo $tenkhoahoc_err?></span>
        <br>
        <input type="text" name="tengiangvien" placeholder="Tên Giảng Viên"> </br>
        <span><?php echo $tengiangvien_err?></span>
        <br>
        <input type="text" name="mota" placeholder="Mô Tả"></br>
        <span><?php echo $mota_err?></span>
        <br>
        <input type="text" name="kienthuc" placeholder="Kiến Thức"></br>
        <span><?php echo $kienthuc_err?></span>
        <br>
        <input type="file" name="file"></br>
        <br>
        <input type="number" name="giatien" placeholder="Giá tiền"></br>
        <span><?php echo $giatien_err?></span>
        <br>
        <input type="text" name="giaotrinh" placeholder="Giáo Trình"></br>
        <span><?php echo $giaotrinh_err?></span>
        <button action="submit" name="submit">Submit</button>
    </form>'
    ?>
    <!-- <a href="./insert.php">11</a> -->
</body>
</html>