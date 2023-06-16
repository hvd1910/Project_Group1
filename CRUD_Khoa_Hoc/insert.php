<?php
include_once 'connect.php';

$tenkhoahoc = $tengiangvien = $mota = $kienthuc = $images = $giatien = $giaotrinh = " ";
$tenkhoahoc_err = $tengiangvien_err = $mota_err = $kienthuc_err = $giatien_err = $giaotrinh_err = "";


if(isset($_POST['submit'])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //validate tenkhoahoc
        $input_tenkhoahoc = trim($_POST["tenkhoahoc"]);
        if(empty($input_tenkhoahoc)){
            $tenkhoahoc_err = "Vui lòng nhập tên khóa học.";
        }else{
            $tenkhoahoc = $input_tenkhoahoc;
        }

        //validate tengiangvien
        $input_tengiangvien = trim($_POST["tengiangvien"]);
        if(empty($input_tengiangvien)){
            $tengiangvien_err = "Vui lòng nhập tên giảng viên.";
        }else{
            $tengiangvien = $input_tengiangvien;
        }

        //validate mota
        $input_mota = trim($_POST["mota"]);
        if(empty($input_mota)){
            $mota_err = "Vui lòng nhập mô tả.";
        }else{
            $mota = $input_mota;
        }

        //validate kienthuc
        $input_kienthuc = trim($_POST["kienthuc"]);
        if(empty($input_kienthuc)){
            $kienthuc_err = "Vui lòng nhập kiến thức.";
        }else{
            $kienthuc = $input_kienthuc;
        }
        
        //validate anh
        $images = $_POST["file"];
        $fileDestination = "./images/" . $images;

        //validate giatien
        $input_giatien = trim($_POST["giatien"]);
        if(empty($input_giatien)){
            $giatien_err = "Vui lòng nhập giá tiền";
        }else{
            $giatien = $input_giatien;
        }
        
        //validate giaotrinh
        $input_giaotrinh = trim($_POST["giaotrinh"]);
        if(empty($input_giaotrinh)){
            $giaotrinh_err = "Vui lòng nhập giáo trình.";
        }else{
            $giaotrinh = $input_giaotrinh;
        }
        
        $sql = "insert into course(tenKhoaHoc, tenGiangVien, moTa, kienThuc, img, giaTien, giaoTrinh) values (?, ?, ?, ?, ?, ?, ?)";
        if($stmt = mysqli_prepare($conn, $sql)){
            mysqli_stmt_bind_param($stmt, "sssssss", $param_tenKhoaHoc, $param_tenGiangVien, $param_moTa, $param_kienThuc, $param_images, $param_giaTien, $param_giaoTrinh);

            $param_tenKhoaHoc = $tenkhoahoc;
            $param_tenGiangVien = $tengiangvien;
            $param_moTa = $mota;
            $param_kienThuc = $kienthuc;
            $param_images = $images;
            $param_giaTien = $giatien;
            $param_giaoTrinh = $giaotrinh;

            if(mysqli_stmt_execute($stmt)){
                // header("Location : ../index.php?upload=success");
                // echo '<button onclick="add()">Xong</button>';
            }
        }
    }
}

?>
<script>
    function add(){
        window.location.href = "http://localhost/INSERT/index.php";
    }
    add();
</script>
