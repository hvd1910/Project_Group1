<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script scr="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <link rel="stylesheet" href="admin.css">

</head>
<body>
<div class="adm_container">

    <div class="col-md-2 nav_ad">
        <div class="nav_ad-info">
            <div class="ad-info-img">
                <img src="assets/img/avatar_adm.jpg" alt="">
            </div>
            <div class="ad-info-heading">
                <h4 >Admin</h4>
                <p >Chào mừng bạn trở lại</p>
            </div>
        </div>
        <div class="nav_ad_option">
            <ul class="ad_option-list">
                <li class="ad_option-item"><p><i class="ad_icon fa-regular fa-address-card"></i>Quản lý thành viên</p></li>
                <li class="ad_option-item"><p><i class="ad_icon fa-solid fa-book"></i>Quản lý khóa học</p></li>
                <li class="ad_option-item"><p><i class="ad_icon fa-sharp fa-solid fa-spell-check"></i>Quản lý điểm</p></li>
                <li class="ad_option-item"><p><i class="ad_icon fa-solid fa-user-plus"></i></i>Quản lý tuyển sinh</p></li>
                <li class="ad_option-item"><p><i class="ad_icon fa-solid fa-money-check-dollar"></i>Quản lý thanh toán</p></li>
                <li class="ad_option-item navsystem"><p><i class="ad_icon  fa-solid fa-gear"></i>Update hệ thống</p>
                    <ul class="nav_system-list">
                        <li class="info_system-item"><i class="ad_icon fa-solid fa-list-check"></i>Thông tin tuyển sinh </li>
                        <li class="info_system-item"><i class="ad_icon fa-solid fa-school"></i>Về chúng tôi</li>
                        <li class="info_system-item"><i class="ad_icon fa-solid fa-circle-question"></i>Các câu hỏi có sẵn</li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>






    <div class="col-md-8 ad_body" >
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header clear-fix">
                            <h2 class="pullleft">Course Details</h2>
                            <a href="create.php" class="btn-ad">Add New Employee</a>
                        </div>

                        <?php

                        // Include config file
                        require_once 'config.php';

                        //Attempt select query execution
                        $sql = "SELECT * FROM course";
                        if($result = mysqli_query($conn, $sql)) {
                            if(mysqli_num_rows($result) > 0) {
                                echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                echo "<tr class='ad_course'>";
                                echo "<th>Mã Khóa Học</th>";
                                echo "<th>Tên Khóa Học</th>";
                                echo "<th>Tên Giảng Viên</th>";
                                echo "<th>Mô Tả</th>";
                                echo "<th>Kiến Thức</th>";
                                echo "<th>Image</th>";
                                echo "<th>Giá Tiền</th>";
                                echo "<th>Giáo Trình</th>";
                                echo "<th>Chức năng</th>";


                                echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<tr class='ad_course-body'>";
                                    echo"<td>" . $row['maKhoaHoc'] . "</td>";
                                    echo"<td>" . $row['tenKhoaHoc'] . "</td>";
                                    echo"<td>" . $row['tenGiangVien'] . "</td>";
                                    echo"<td>" . $row['moTa'] . "</td>";
                                    echo"<td>" . $row['kienThuc'] . "</td>";
                                    echo"<td>" . $row['img'] . "</td>";
                                    echo"<td>" . $row['giaTien'] . "</td>";
                                    echo"<td>" . $row['giaoTrinh'] . "</td>";

                                    echo "<td>";
                                    echo "<a href='read.php?id=" .$row['maKhoaHoc']."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                    echo "<a href='update.php?id=" .$row['maKhoaHoc']."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='delete.php?id=" .$row['maKhoaHoc']."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";
                                echo "</table>";

                                // Free result set
                                mysqli_free_result($result);


                            }else {
                                echo "<p class='lead'><em>No records were found.</em></p>";
                            }

                        }else {
                            echo "ERROR: Could not able to execute $sql ".mysqli_error($conn);
                        }

                        // Close connection
                        mysqli_close($conn);
                        ?>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <script src="adm.js"></script>
</body>
</html>