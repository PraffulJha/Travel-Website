function login(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if(username=="" || password==""){
        alert('please fill all field');
        return false;
    }else{
        return true;
    }

}