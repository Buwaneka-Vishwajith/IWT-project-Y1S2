
// form validation

var nameError = document.getElementById('user');
var passError = document.getElementById('pass');
var contError = document.getElementById('cont');
var nicError = document.getElementById("nic");
var subError = document.getElementById("sub");
// const form  = document.getElementById("form")


// validate user name

function validatename() {
    var name = document.getElementById('username').value;

    if (name.length == 0) {
        nameError.innerHTML = "Name is required";
        nameError.style.color = "red";
        return false;
    }

    if (name.length >= 10) {
        nameError.innerHTML = 'Too long!';
        nameError.style.color = "red";
        return false;
    }

    nameError.innerHTML = 'valid';
    nameError.style.color = "green";
    return true;
}

// validate nic

function validateNIC() {
    var nationalic = document.getElementById('nic_').value;

    if (nationalic.length == 0) {
        nicError.innerHTML = "NIC is required";
        nicError.style.color = "red";
        return false;
    }

    if (nationalic.length !== 12) {
        nicError.innerHTML = 'NIC should be 12 digits';
        nicError.style.color = "red";
        return false;
    }

    if (nationalic.match(/^[0-9]{10}$/)) {
        nicError.innerHTML = "Only digits please.";
        nicError.style.color = "red";
        return true;
    }

    nicError.innerHTML = 'Just perfect!';
    nicError.style.color = "green";
    return true;
}

//validate contact number

function validatecontact() {
    var contact = document.getElementById('contact').value;

    if (contact.length == 0) {
        contError.innerHTML = "Contact number is required";
        contError.style.color = "red";
        return false;
    }

    if (contact.length !== 10) {
        contError.innerHTML = 'Contact number should be 10 digits';
        contError.style.color = "red";
        return false;
    }

    if (!contact.match(/^[0-9]{10}$/)) {
        contError.innerHTML = "Only digits please.";
        contError.style.color = "red";
        return false;
    }

    contError.innerHTML = 'Just perfect!';
    contError.style.color = "green";
    return true;

}

function validateForm() {

    if (!validatename() || !validateNIC() || !validatecontact()) {

        subError.style.display = 'block';
        subError.innerHTML = "Please fix errors to submit!";
        setTimeout(function () { subError.style.display = 'none'; }, 3000);
        return false;
    }

}




form.addEventListener("submit", (e) => {

    let messages = []

    if (Username.value === '' || Username.value == null) {
        messages.push("Username is required")
    }

    if (Password.value.length <= 4) {
        messages.push("Password must be longer than 4 chracters")
    }

    if (Password.value.length >= 10) {
        messages.push("Password must be less than 10 chracters")
    }

    if (Password.value === 'password') {
        messages.push("Password cannot be password")
    }
    // e.preventDefault()
}
)


