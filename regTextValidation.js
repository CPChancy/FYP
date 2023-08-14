function missingTextValidate(){
    var userName=document.forms["registrationForm"]["regUserName"].value;
    var password=document.forms["registrationForm"]["regPassKey"].value;
    var passwordConfirm=document.forms["registrationForm"]["regPassConfirm"].value;
    var company=document.forms["registrationForm"]["regEmployCheck"].value;

    alert("debug", userName, " ", password, " ", passwordConfirm, " ",company);

}