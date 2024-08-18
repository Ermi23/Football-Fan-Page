const form = document.getElementById('form');
const username = document.getElementById('username');
const password1 = document.getElementById('password1');


function checkInputs(){

    if(username.value.trim() === ""){
        setError(username, "Please Enter Your User Name");
        return false;
    }else{
        setSuccess(username);
    }

    if(password1.value.trim() === ""){
        setError(password1, "Please Enter Your Password");
        return false;
    }else{
        setSuccess(password1);
    }

    return true;
}

    function setError(type, message){
        const parent = type.parentElement;
    
        const error = parent.querySelector('small');
        error.innerText = message;
    
        parent.className = 'input-box error';
    }
    
    function setSuccess(type){
        const parent = type.parentElement;
        parent.className = 'input-box success';
    }