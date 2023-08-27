function valmasvateForm() {
    var masv = document.forms["myForm"]["masv"].value;
    var hoten = document.forms["myForm"]["hoten"].value;
    var email = document.forms["myForm"]["email"].value;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
    if (masv == "") {
      document.forms["myForm"]["masv"].style.backgroundColor = "yellow";
      alert("Mã sinh viên không được để trống");
      return false;
    } else {
      document.forms["myForm"]["masv"].style.backgroundColor = "white";
    }
    
    if (hoten == "") {
      document.forms["myForm"]["hoten"].style.backgroundColor = "yellow";
      alert("Họ tên không được để trống");
      return false;
    } else {
      document.forms["myForm"]["hoten"].style.backgroundColor = "white";
    }
  
    if (email == "") {
      document.forms["myForm"]["email"].style.backgroundColor = "yellow";
      alert("Email không được để trống");
      return false;
    } else if (!emailRegex.test(email)) {
      document.forms["myForm"]["email"].style.backgroundColor = "yellow";
      alert("Email không đúng định dạng");
      return false;
    } else {
      document.forms["myForm"]["email"].style.backgroundColor = "white";
    }
  
    var genderChecked = false;
    var hobbiesChecked = false;
    var nationalitySelected = false;
  
    for (var i = 0; i < document.forms["myForm"]["gioitinh"].length; i++) {
      if (document.forms["myForm"]["gioitinh"][i].type == "radio" && document.forms["myForm"]["gioitinh"][i].checked) {
        genderChecked = true;
        break;
      }
    }
  
    for (var i = 0; i < document.forms["myForm"]["sothich"].length; i++) {
      if (document.forms["myForm"]["sothich"][i].type == "checkbox" && document.forms["myForm"]["sothich"][i].checked) {
        hobbiesChecked = true;
        break;
      }
    }
  
    if (document.forms["myForm"]["quoctich"].selectedIndex != 0) {
      nationalitySelected = true;
    }
  
    if (!genderChecked) {
      alert("Vui lòng chọn giới tính");
      return false;
    }
  
    if (!hobbiesChecked) {
      alert("Vui lòng chọn sở thích");
      return false;
    }
  
    if (!nationalitySelected) {
      alert("Vui lòng chọn quốc tịch");
      return false;
    }
  
    var ghichuLength = document.forms["myForm"]["ghichu"].value.length;
  
    if (ghichuLength > 200) {
      document.forms["myForm"]["ghichu"].style.backgroundColor = "yellow";
      alert("Ghi chú phải ít hơn hoặc bằng 200 ký tự");
      return false;
    } else {
      document.forms["myForm"]["ghichu"].style.backgroundColor = "white";
    }
  }
  