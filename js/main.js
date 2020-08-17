var password, repassword, alert, next, registerFirstStep, registerSecondStep, accountType, personalAccount,
companyAccount;

password = document.getElementById("password");
repassword = document.getElementById("repassword");
alert = document.getElementById("passwordAlert");
next =  document.getElementById("next");
registerFirstStep = document.getElementById("registerFirstStep");
registerSecondStep = document.getElementById("registerSecondStep");
accountType = document.getElementById("accountType");
personalAccount = document.getElementById("personalAccount");
companyAccount = document.getElementById("companyAccount");


next.addEventListener("click", passwordMatch);

function show(id){
    console.log(id);
    document.getElementById(id).style.display = "block";
}

function hide(id){
    document.getElementById(id).style.display = "none";
}
function selectedAccount(type){
    if(type === "personal"){
        personalAccount.setAttribute("class", "form-group d-block");
        companyAccount.setAttribute("class", "form-group d-none");
        document.getElementById("firstName").required = true;
        document.getElementById("lastName").required= true;
        document.getElementById("personalEmail").required = true;
        document.getElementById("companyName").required = false;
        document.getElementById("companyEmail").required = false;
        document.getElementById("companyPhone").required = false;
        document.getElementById("firstAddress").required = false;
        document.getElementById("secondAddress").required = false;
        document.getElementById("postecode").required = false;
        document.getElementById("city").required = false;
        document.getElementById("country").required = false;

    }
    else{
        personalAccount.setAttribute("class", "form-group d-none");
        companyAccount.setAttribute("class", "form-group d-block");
        document.getElementById("firstName").required = false;
        document.getElementById("lastName").required = false;
        document.getElementById("personalEmail").required = false;
        document.getElementById("companyName").required = true;
        document.getElementById("companyEmail").required = true;
        document.getElementById("companyPhone").required = true;
        document.getElementById("firstAddress").required = true;
        document.getElementById("secondAddress").required = true;
        document.getElementById("postecode").required = true;
        document.getElementById("city").required = true;
        document.getElementById("country").required = true;
    }
}



function passwordMatch(){
    if(password.value.length< 8){
        alert.innerHTML = "Your password has to be more than 8 charectars!";
        alert.setAttribute("class","alert-danger d-block");
    }
    else if(password.value !== repassword.value){
        alert.innerHTML = "Passwords doesn't match";
        alert.setAttribute("class", "alert-danger visible");
        password.style.border = "1px solid red";
        repassword.style.border = "1px solid red";
    }
    else{
        registerFirstStep.setAttribute("class", "d-none");
        registerSecondStep.setAttribute("class", "form-group d-block");
    }


}

function show(id){
    var item = document.getElementById(id);
    if(item.style.display === "none"){
        item.style.display = "block";
    }
    else{
        item.style.display = "none";
    }
}

function myFunction(){
    console.log(true);
}
