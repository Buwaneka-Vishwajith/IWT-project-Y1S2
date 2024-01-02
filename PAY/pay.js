

var nameError = document.getElementById('car');
var passError = document.getElementById('pass');
var subError = document.getElementById("sub");
// const form  = document.getElementById("form")


// validate user name

// validate nic

function validatename() {
    var nationalic = document.getElementById('nic_').value;

    if (nationalic.length == 0) {
        nicError.innerHTML = "card number is required";
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

function validatecvv() {
    var contact = document.getElementById('contact').value;

    if (contact.length == 0) {
        contError.innerHTML = "cvv required";
        contError.style.color = "red";
        return false;
    }

    if (contact.length !== 3) {
        contError.innerHTML = 'cvv should be 3 digits';
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

// function validateForm() {

//     if (!validatename() || !validateNIC() || !validatecontact()) {

//         subError.style.display = 'block';
//         subError.innerHTML = "Please fix errors to submit!";
//         setTimeout(function () { subError.style.display = 'none'; }, 3000);
//         return false;
//     }

// }




// form.addEventListener("submit", (e) => {

//     let messages = []

//     if (Username.value === '' || Username.value == null) {
//         messages.push("Username is required")
//     }

//     if (Password.value.length <= 4) {
//         messages.push("Password must be longer than 4 chracters")
//     }

//     if (Password.value.length >= 10) {
//         messages.push("Password must be less than 10 chracters")
//     }

//     if (Password.value === 'password') {
//         messages.push("Password cannot be password")
//     }
    
// }
// )
function validateForm() {
    // Add your validation logic here
    
    return false; // This prevents the form from being submitted
}


document.getElementById('b1').addEventListener('click', function() {
    document.getElementById('otp-popup').style.display = 'block';
});

function closePopup() {
    document.getElementById('otp-popup').style.display = 'none';
}

function submitOTP() {
    var otp = document.getElementById('otp-input').value;
    
    // Perform validation or further processing here
    
    alert('Payment Successful!\nOTP: ' + otp);
    closePopup();
}