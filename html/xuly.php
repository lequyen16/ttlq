<?php
// Thiết lập charset utf8
header('Content-Type: text/html; charset=utf-8');

// Vì tên button submit là do-register nên ta sẽ kiểm tra nếu
// tồn tại key này trong biến toàn cục $_POST thì nghĩa là người 
// dùng đã click register(submit)
if (isset($_POST['do-register']))
{
    // Kết nối CSDL
    $conn = mysqli_connect('localhost', 'user2', '123456', 'dangnhap');
    if (!$conn) {
        die("Lỗi kết nối: " . mysqli_connect_error());
    }
    mysqli_set_charset($conn, "utf8");
    // Lấy thông tin
    // Để an toàn thì ta dùng hàm mysqli_real_escape_string để
    // chống hack sql injection
    $masv   = isset($_POST['masv']) ? md5(mysqli_real_escape_string($conn, $_POST['masv'])) : '';
    $hoten   = isset($_POST['hoten']) ? mysqli_real_escape_string($conn, $_POST['hoten']) :'';
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
    $gioitinh     = isset($_POST['gioitinh']) ? mysqli_real_escape_string($conn, $_POST['gioitinh']) : '';
    $sothich      = isset($_POST['sothich']) ? mysqli_real_escape_string($conn, $_POST['sothich']) : '';
    $quoctich   = isset($_POST['quoctich']) ? mysqli_real_escape_string($conn, $_POST['quoctich']) : '';
    $ghichu     = isset($_POST['ghichu']) ? mysqli_real_escape_string($conn, $_POST['ghichu']) : '';
    
    // Validate Thông Tin masv và Email có bị trùng hay không
      
      
    
    // Kiểm tra masv hoặc email có bị trùng hay không
    $sql = "SELECT * FROM dangnhap WHERE masv = '$masv' OR email = '$email'";
      
    // Thực thi câu truy vấn
    $result = mysqli_query($conn, $sql);
      
    // Nếu kết quả trả về lớn hơn 1 thì nghĩa là masv hoặc email đã tồn tại trong CSDL
    if (mysqli_num_rows($result) > 0)
    {
        // Sử dụng javascript để thông báo
        echo '<script language="javascript">alert("Thông tin đăng nhập bị sai"); window.location="register.php";</script>';
          
        // Dừng chương trình
        die();
    }
    else {
        // Ngược lại thì thêm bình thường
        $sql = "INSERT INTO dangnhap (masv, hoten, email, gioitinh, sothich, quoctich, ghichu) VALUES ('$masv','$hoten','$email','$gioitinh', '$sothich', '$quoctich', '$ghichu')";
          
        if (mysqli_query($conn, $sql)){
            echo '<script language="javascript">alert("Đăng ký thành công"); window.location="register.php";</script>';
        }
        else {
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="register.php";</script>';
        }
    }
    
    // Đóng kết nối CSDL
    mysqli_close($conn);
}
?>
