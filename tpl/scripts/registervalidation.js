const email = document.getElementById('register-email');
const username = document.getElementById('register-username');
const pwd = document.getElementById('pwd-register');
const pwdRepeat = document.getElementById('confirm-register');
var termsBox = document.getElementById('checkbox-hide');
var robotBox = document.getElementById('robo-check');
var validate = document.getElementById('validate');
var errorElement = document.getElementById('error');
var errorTitle = document.getElementById('error-title');
var errorContainer = document.getElementById('error-box');
var errorContainer2 = document.getElementById('error-box-pwd');
var done = false;
var messages = [];

const form = document.querySelector('#register-form');
const captcha = document.querySelector(".captcha"),
    reloadBtn = document.querySelector(".reload-btn"),
    inputField = document.querySelector(".input-area input"),
    captchaContainer = document.getElementById('captcha-wrapper'),
    statusTxt = document.querySelector(".status-text");
var exit = document.getElementById('exit');

//storing all captcha characters in array
let allCharacters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
    'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd',
    'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's',
    't', 'u', 'v', 'w', 'x', 'y', 'z', 0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
function getCaptcha() {
    for (let i = 0; i < 6; i++) { //getting 6 random characters from the array
        let randomCharacter = allCharacters[Math.floor(Math.random() * allCharacters.length)];
        captcha.innerText += ` ${randomCharacter}`; //passing 6 random characters inside captcha innerText
    }
}
getCaptcha(); //calling getCaptcha when the page open
//calling getCaptcha & removeContent on the reload btn click
reloadBtn.addEventListener("click", () => {
    removeContent();
    getCaptcha();
});

var robot = document.getElementById('checkbox2');
robot.onclick = function () {
    if (captchaContainer.style.visibility === "hidden") {
        captchaContainer.style.visibility = "visible";
        exit.style.display = "block";
    } else {
        captchaContainer.style.visibility = "hidden";
        exit.style.display = "none";
    }
}

validate.addEventListener("click", e => {
    e.preventDefault(); //preventing button from it's default behaviour
    statusTxt.style.display = "block";
    //adding space after each character of user entered values because I've added spaces while generating captcha
    let inputVal = inputField.value.split('').join(' ');
    if (inputVal == captcha.innerText) { //if captcha matched
        statusTxt.style.color = "#4db2ec";
        statusTxt.innerText = "Nice! You don't appear to be a robot.";
        setTimeout(() => {
            getCaptcha();
            removeContent();
            robotBox.click();
            robotBox.checked = true;
            document.getElementById('cross2').style.display = "block";
        }, 50);
    } else {
        statusTxt.style.color = "#ff0000";
        statusTxt.innerText = "Captcha not matched. Please try again!";
    }
});

function removeContent() {
    inputField.value = "";
    captcha.innerText = "";
}

const checkEmail = () => {
    let valid = false;
    const eMail = email.value.trim();
    if (!isRequired(eMail)) {
        messages.push('-Email cannot be blank. <br>');
    } else if (!isEmailValid(eMail)) {
        messages.push('-Email is not valid. <br>');
    } else {
        bye();
        valid = true;
    }

    return valid;
};

const checkUsername = () => {

    let valid = false;

    const min = 3, max = 25;
    const userName = username.value.trim();

    if (!isRequired(userName)) {
        messages.push('-Username cannot be blank. <br>');
    } else if (!isBetween(userName.length, min, max)) {
        messages.push(`-Username must be between ${min} and ${max} characters. <br>`);
    } else if (!isUsernameCool(userName) === true) {
        messages.push(`-Username can only contain letters or characters. <br>`);
    }else {
        valid = true;
        bye();
    }

    return valid;
};

const checkPassword = () => {
    let valid = false;

    const password = pwd.value.trim();
    if (!isRequired(password)) {
        messages.push('-Password cannot be blank. <br>');
    } else if (!isPasswordSecure(password) || !isPasswordSecure2(password) || !isPasswordSecure3(password) || !isPasswordSecure4(password)) {
        messages.push('-Password must include: <ul>');
        if (!isPasswordSecure(password)) {
            messages.push('<li>At least 8 characters</li></ul><ul>');
        } if (!isPasswordSecure2(password)) {
            messages.push('<li>At least 1 uppercase and 1 lowercase letter</li></ul><ul>');
        } if (!isPasswordSecure3(password)) {
            messages.push('<li>At least 1 number</li></ul><ul>');
        } if (!isPasswordSecure4(password)) {
            messages.push('<li>At least 1 special character</li></ul>');
        }
    } else {
        bye();
        valid = true;
    }

    return valid;
};

const checkConfirmPassword = () => {
    let valid = false;

    const confirmPassword = pwdRepeat.value.trim();
    const password = pwd.value.trim();

    if (!isRequired(confirmPassword)) {
        messages.push('-Please enter the password again. <br>');
    } else if (password !== confirmPassword) {
        messages.push('-The password does not match. <br>');
    } else {
        bye();
        valid = true;
    }

    return valid;
};

const checkTerms = () => {
    const checkboxTerms = termsBox.checked;
    valid = false;

    if (!checkboxTerms === true) {
        messages.push('-Accept the terms bitch. <br>');
    } else {
        bye();
        valid = true;
    }
    
    return valid;
};

const checkRobot = () => {
    const checkboxRobot = robotBox.checked;
    valid = false;

    if (!checkboxRobot === true) {
        messages.push('-Are you a robot man? <br>');
    } else {
        bye();
        valid = true;
    }

    return valid;
};

const isEmailValid = (email) => {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
};

const isUsernameCool = (username) => {
    const re = /^[a-zA-Z0-9]+$/;
    return re.test(username);
}

const isPasswordSecure = (pwd) => {
    const re = new RegExp("^(?=.{8,})");
    return re.test(pwd);
};

const isPasswordSecure2 = (pwd) => {
    const le = new RegExp("^(?=.*[a-z])(?=.*[A-Z])");
    return le.test(pwd);
};

const isPasswordSecure3 = (pwd) => {
    const me = new RegExp("^(?=.*[0-9])");
    return me.test(pwd);
};

const isPasswordSecure4 = (pwd) => {
    const de = new RegExp("^(?=.*[.!@#$%^&*()_+-=])");
    return de.test(pwd);
};

const isRequired = value => value === '' ? false : true;
const isBetween = (length, min, max) => length < min || length > max ? false : true;


form.addEventListener('submit', function (e) {
    messages = [];

    let isEmailValid = checkEmail(),
        isUsernameValid = checkUsername(),
        isPasswordValid = checkPassword(),
        isConfirmPasswordValid = checkConfirmPassword(),
        ischeckTerms = checkTerms(),
        ischeckRobot = checkRobot();

    let isFormValid = isUsernameValid &&
        isEmailValid &&
        isPasswordValid &&
        isConfirmPasswordValid &&
        ischeckTerms &&
        ischeckRobot;

    if (messages.length > 0) {
        errorElement.innerHTML = messages.join(' ');
        errorContainer.style.display = "block";
    };

    if (isFormValid !== false) {
        messages = [];
    } else {
        e.preventDefault();
        bye();
    };
});

function cancel() {
    exit.style.display = "none";
    captchaContainer.style.visibility = "hidden";
    bye();
};

const debounce = (fn, delay = 50) => {
    let timeoutId;
    return (...args) => {
        // cancel the previous timer
        if (timeoutId) {
            clearTimeout(timeoutId);
            messages = [];
        }
        // setup a new timer
        timeoutId = setTimeout(() => {
            fn.apply(null, args)
            errorElement.innerHTML = messages.join(' ');
        }, delay);
    };
};

form.addEventListener('input', debounce(function (e) {
    messages = [];

    

    switch (e.target.id) {
        case 'register-email':
            checkEmail();
            checkUsername();
            checkPassword();
            checkConfirmPassword();
            checkTerms();
            checkRobot();
            bye();
            break;
        case 'register-username':
            checkEmail();
            checkUsername();
            checkPassword();
            checkConfirmPassword();
            checkTerms();
            checkRobot();
            bye();
            break;
        case 'pwd-register':
            checkEmail();
            checkUsername();
            checkPassword();
            checkConfirmPassword();
            checkTerms();
            checkRobot();
            bye();
            break;
        case 'confirm-register':
            checkEmail();
            checkUsername();
            checkPassword();
            checkConfirmPassword();
            checkTerms();
            checkRobot();
            bye();
            break;
        case 'checkbox-hide':
            checkEmail();
            checkUsername();
            checkPassword();
            checkConfirmPassword();
            checkTerms();
            checkRobot();
            bye();
            break;
        case 'you':
            checkEmail();
            checkUsername();
            checkPassword();
            checkConfirmPassword();
            checkTerms();
            checkRobot();
            bye();
            break;
        case 'robo-check':
            checkEmail();
            checkUsername();
            checkPassword();
            checkConfirmPassword();
            checkTerms();
            checkRobot();
            bye();
            break;
    }
}));

const bye = () => {
    if(errorElement.innerHTML ==="") {
        errorContainer.style.display = "none";
    }
}

var terms = document.getElementById('checkbox-hide');
    terms.onclick = function() {
        if(this.checked) {
            document.getElementById('cross1').style.display = "block";
            document.getElementById('checkbox-hide').style.display = "none";
        } else {
            document.getElementById('cross1').style.display = "none";
            document.getElementById('checkbox-hide').style.display = "block";
        }
    }
    

var login = document.getElementById('login-tab');
var loginForm = document.getElementById('login-form');
var register = document.getElementById('register-tab');
var registerForm = document.getElementById('register-form');
var underline = document.getElementById('underline');

    login.onclick = function() {
        registerForm.style.display = "none";
        loginForm.style.display = "flex";
        underline.style.transform = "translateX(-28%) scaleX(0.32)";
    }



    register.onclick = function() {
        loginForm.style.display = "none";
        registerForm.style.display = "flex";
        underline.style.transform = "translateX(19%) scaleX(0.47)";
    }

    const checkExisting = () => {
    if( window.location.href === "http://localhost/n%C3%A4ck/index.php?Username&Email=Exist" || window.location.href === "http://localhost/n%c3%a4ck/index.php?Username&Email=Exist") {
        errorContainer.style.display = "block";
        errorElement.innerText = "-Email & username are already in use";
        document.getElementById('register-form').style.display = "flex";
        document.getElementById('login-form').style.display = "none";
        underline.style.transform = "translateX(19%) scaleX(0.47)";
    } else if( window.location.href === "http://localhost/n%C3%A4ck/index.php?Email=Exist" || window.location.href === "http://localhost/n%c3%a4ck/index.php?Email=Exist") {
        errorContainer.style.display = "block";
        errorElement.innerText = "-Email Exist";
        document.getElementById('register-form').style.display = "flex";
        document.getElementById('login-form').style.display = "none";
        underline.style.transform = "translateX(19%) scaleX(0.47)";
    } else if( window.location.href === "http://localhost/n%C3%A4ck/index.php?Username=Exist" || window.location.href === "http://localhost/n%c3%a4ck/index.php?Username=Exist") {
        errorContainer.style.display = "block";
        errorElement.innerText = "-Username exist";
        document.getElementById('register-form').style.display = "flex";
        document.getElementById('login-form').style.display = "none";
    } else if( window.location.href === "http://localhost/n%C3%A4ck/index.php?error=EmailDoNotExist" || window.location.href === "http://localhost/n%c3%a4ck/index.php?error=EmailDoNotExist") {
        errorContainer.style.display = "block";
        errorElement.innerText = "-Email doesnt exist in database";
    } else if( window.location.href === "http://localhost/n%C3%A4ck/index.php?error=UsernameDoNotExist" || window.location.href === "http://localhost/n%c3%a4ck/index.php?error=UsernameDoNotExist") {
        errorContainer.style.display = "block";
        errorElement.innerText = "-Username doesnt exist in database";
    } else if( window.location.href === "http://localhost/n%C3%A4ck/index.php?error=wrongpasswordbitch" || window.location.href === "http://localhost/n%c3%a4ck/index.php?error=wrongpasswordbitch") {
        errorContainer.style.display = "block";
        errorElement.innerText = "-Wrong password, do you have a bad memory";
    } else if( window.location.href === "http://localhost/n%C3%A4ck/index.php?reset=success" || window.location.href === "http://localhost/n%c3%a4ck/index.php?reset=success") {
        errorContainer.style.display = "block";
        errorElement.innerText = "-Check your email!";
        errorTitle.innerText = "Stay pu we can do this";
        errorContainer.style.backgroundColor = "green";
    } else if( window.location.href === "http://localhost/n%C3%A4ck/reset-password.php?UserDOESNTEXIST" || window.location.href === "http://localhost/n%c3%a4ck/reset-password.php?UserDOESNTEXIST") {
        errorContainer2.style.display = "block";
        errorElement.innerText = "-User Do Not Exist. Bitch";
    } else if( window.location.href === "http://localhost/n%C3%A4ck/reset-password.php?EMAILDOESNTEXIST" || window.location.href === "http://localhost/n%c3%a4ck/reset-password.php?EMAILDOESNTEXIST") {
        errorContainer2.style.display = "block";
        errorElement.innerText = "-Email Do Not Exist. Bitch";
    }
}

    window.onload = checkExisting();