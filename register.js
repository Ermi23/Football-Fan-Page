const form = document.getElementById('form');
const fullname = document.getElementById('fullname');
const username = document.getElementById('username');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const password1 = document.getElementById('password1');
const password2 = document.getElementById('password2');
const credit = document.getElementById('credit');
const male = document.getElementById('dot-1');
const female = document.getElementById('dot-2');


    function checkInputs(){
        
        if(fullname.value.trim() === ""){
            setError(fullname, "Name can not be blank!");
            return false;
        }else{
            setSuccess(fullname);
            
        }

        if(username.value.trim() === ""){
            setError(username, "User Name can not be blank!");
            return false;
        }else{
            setSuccess(username);
        }

        if(email.value.trim() === ""){
            setError(email, "Email can not be blank!");
            return false;
        }else if(!isEmail(email)){
            setError(email, "Not a valid Email format");
            return false;
        }else{
            setSuccess(email)
        }

        if(phone.value.trim() === ""){
            setError(phone, "Phone can not be blank!");
            return false;
        }else if(!isPhone(phone)){
            setError(phone, "Invalid Phone Format !");
            return false;
        }
        else{
            setSuccess(phone);
        }

        if(password1.value.trim() === ""){
            setError(password1, "Password can not be blank!");
            return false;
        }else{
            setSuccess(password1);
        }

        if(password2.value.trim() === ""){
            setError(password2, "Confirm Password can not be blank!");
            return false;
        }else if (password1.value !== password2.value){
            setError(password2, "Password Doesn't match!");
            return false;
        }else
        {
            setSuccess(password2);
        }


        if(credit.value.trim() === ""){
            setError(credit, "Credit Card Number can not be blank!");
            return false;
        }else if(!isCredit(credit)){
            setError(credit, "Invalid Credit Card Number");
            return false;
        }
        {
            setSuccess(credit);
        }
        if(!(female.checked || male.checked)){
            setGenderError(male, "one of the buttons needs to be checked");
            return false;
        }else{
            setGenderSuccess(female);
            setGenderSuccess(male);
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

function isEmail(email){
    if(email.value.includes("@") && email.value.includes(".com")){
        return true;
    }
    return false;
}

function isPhone(phone){    
    const re = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/g;
    let res = phone.value.match(re);
    if(res){
        return true;
    }
    return false;
}

function isCredit(credit){
    if(credit.value.length > 4 && credit.value.length < 11){
        return true;
    }
    return false;
}

function ValidateEmail(inputText)
{
	var mailformat = "/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";
	if(inputText.value.match(mailformat))
	{
		alert("This is not a valid email address");
		return false;
		}
    return true;
}

function strengthCheck(password){
    
    setSuccess(password);

    const len = password.value.length;
    const ster = document.getElementById('strength');

    if(len <= 3){
        ster.innerText = 'weak';
        ster.setAttribute('style', "background-color: red;")
    }else if (len > 3 && len <= 6){
        ster.innerText = 'medium';
        ster.setAttribute('style', "background-color: yellow;")
    }else if (len > 6){
        ster.innerText = 'strong';
        ster.setAttribute('style', "background-color: #1add23;")
    } 
}

function setGenderError(male, message){
    const parent = male.parentElement;

    const error = parent.querySelector('small');
    error.innerText = message;

    parent.className = 'gender-details error';
}

function setGenderSuccess(male){
    const parent = male.parentElement;

    const error = parent.querySelector('small');
    error.innerText = '';

    parent.className = 'gender-details';
}
        