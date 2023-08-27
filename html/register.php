<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký</title>
    <meta charset="utf-8" />
    <link href="../css/style2.css" rel="stylesheet" /> 
  
</head>
<body>
<form method="post" action="xuly.php">
    <h3>ĐĂNG KÝ THÀNH VIÊN</h3>
    <form name="myForm" onsubmit="return valmasvateForm()" method="post">
        <label>Mã sinh viên: <span style='color:red'>*</span></label>
        <br />
        <input name="masv" type="text" size="40">
        <br>
        <label>Họ và tên: <span style='color:red'>*</span></label> <br />
        <input name="hoten" type="text" size="40">
        <br />
        <label>Email: <span style='color:red'>*</span></label>
        <br />
        <input name="email" type="text" size="40"> <br>
        <label>Giới tính: <span style='color:red'>*</span></label><br>
        <input name="gioitinh" type="radio">Nam
        <input name="gioitinh" type="radio">Nữ<br><br>
        <label>Sở thích: <span style='color:red'>*</span></label> <br>
        <input name="sothich" type="checkbox">Đọc sách
        <input name="sothich" type="checkbox">Du lịch
        <input name="sothich" type="checkbox"> Âm nhạc
        <input name="sothich" type="checkbox">Ẩm thực
        <input name="sothich" type="checkbox">Khác<br><br>
        
        <label>Quốc tịch <span style='color:red'>*</span></label>
        <br>
        <select name="quoctich">
            <option>Chọn quốc tịch</option>
            <option>Brunei</option>
            <option>Campuchia</option>
            <option>Đông Timor</option>
            <option>Indonesia</option>
            <option>Lào</option>
            <option>Malaysia</option>
            <option>Myanmar</option>
            <option>Philipines</option>
            <option>Singapore</option>
            <option>Thái Lan</option>
            <option>Việt Nam</option>
        </select>
        <br><br> 
        <label>Ghi Chú (ít hơn 200 ký tự)</label>
        <br>
        <textarea name="ghichu" rows="5" cols="40"></textarea><br><br>

      
      <button type="submit" name="do-register">Đăng ký</button>

      
      (<span style='color:red'>*</span>) Bắt buộc phải điền.
    </form>

    
    <script src='../javascript/dangky.js'></script>
</form>
</body>
</html>

