function validate(){
    var name = document.frmLienHe.txtname.value;
    var email = document.frmLienHe.txtemail.value;
    var phone = document.frmLienHe.txtphone.value;
    var ok = true;

    if(name.length == ""){
        document.getElementById("loiname").innerHTML = "cần điền họ tên";
        ok = false;
    }
    else document.getElementById("loiname").innerHTML = "";

    if(email.length == ""){
        document.getElementById("loiemail").innerHTML = "cần điền email";
        ok = false;
    }
    else document.getElementById("loiemail").innerHTML = "";

    if(phone.length == ""){
        document.getElementById("loiphone").innerHTML = "cần điền phone";
        ok = false;
    }
    else document.getElementById("loiphone").innerHTML = "";

    if(ok){
        alert("Bạn đã gửi thành công");
        return true;
    }
    else alert("Bạn chưa gửi được dữ liệu đi"); 
    return false;
}