const pwd = document.getElementById('pwd');
const pwdRepeat = document.getElementById('pwdRepeat');
var errorElement = document.getElementById('error');
var errorTitle = document.getElementById('error-title');
var errorContainer2 = document.getElementById('error-box-pwd');
var done = false;
var messages = [];

const form = document.querySelector('#createPwd-form');

const bye = () => {
    if(errorElement.innerHTML ==="") {
        errorContainer2.style.display = "none";
    } else {
    }
}

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
        valid = true;
    }

    return valid;
};

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

const checkExisting = () => {
    if( window.location.href === "http://localhost/n%C3%A4ck/index.php?Username&Email=Exist") {
        errorContainer.style.display = "block";
        errorElement.innerText = "-Email & username are already in use";
        document.getElementById('register-form').style.display = "flex";
        document.getElementById('login-form').style.display = "none";
        underline.style.transform = "translateX(19%) scaleX(0.47)";
    } else if( window.location.href === "http://localhost/n%C3%A4ck/index.php?Email=Exist") {
        errorContainer.style.display = "block";
        errorElement.innerText = "-Email Exist";
        document.getElementById('register-form').style.display = "flex";
        document.getElementById('login-form').style.display = "none";
        underline.style.transform = "translateX(19%) scaleX(0.47)";
    } else if( window.location.href === "http://localhost/n%C3%A4ck/index.php?Username=Exist") {
        errorContainer.style.display = "block";
        errorElement.innerText = "-Username exist";
        document.getElementById('register-form').style.display = "flex";
        document.getElementById('login-form').style.display = "none";
        underline.style.transform = "translateX(19%) scaleX(0.47)";
    } else if( window.location.href === "http://localhost/n%C3%A4ck/index.php?error=EmailDoNotExist") {
        errorContainer.style.display = "block";
        errorElement.innerText = "-Email doesnt exist in database";
    } else if( window.location.href === "http://localhost/n%C3%A4ck/index.php?error=UsernameDoNotExist") {
        errorContainer.style.display = "block";
        errorElement.innerText = "-Username doesnt exist in database";
    } else if( window.location.href === "http://localhost/n%C3%A4ck/index.php?error=wrongpasswordbitch") {
        errorContainer.style.display = "block";
        errorElement.innerText = "-Wrong password, do you have a bad memory";
    } else if( window.location.href === "http://localhost/n%C3%A4ck/index.php?reset=success") {
        errorContainer.style.display = "block";
        errorElement.innerText = "-Check your email!";
        errorTitle.innerText = "Stay pu we can do this";
        errorContainer.style.backgroundColor = "green";
    } else if( window.location.href === "http://localhost/n%C3%A4ck/reset-password.php?UserDOESNTEXIST") {
        errorContainer2.style.display = "block";
        errorElement.innerText = "-User Do Not Exist. Bitch";
    } else if( window.location.href === "http://localhost/n%C3%A4ck/reset-password.php?EMAILDOESNTEXIST") {
        errorContainer2.style.display = "block";
        errorElement.innerText = "-Email Do Not Exist. Bitch";
    }
};

form.addEventListener('submit', function (e) {
    messages = [];

    let isPasswordValid = checkPassword(),
        isConfirmPasswordValid = checkConfirmPassword();

    let isFormValid = isPasswordValid &&
        isConfirmPasswordValid;

    if (messages.length > 0) {
        errorElement.innerHTML = messages.join(' ');
        errorContainer2.style.display = "block";
    };

    if (isFormValid !== false) {
        messages = [];
    } else {
        e.preventDefault();
        bye();
    };
});

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
        case 'pwd':
            checkPassword();
            checkConfirmPassword();
            bye();
            break;
        case 'pwdRepeat':
            checkPassword();
            checkConfirmPassword();
            bye();
            break;
    }
}));