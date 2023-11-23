// alert("action js");
// console.log("action js");


function validation(e) {
    // e.preventDefault();

    let returnValue = true;

    let mobileNumberEmailAddress = $('#mobileNumberEmailAddress').val();
    let fullName = $('#fullName').val();
    let userName = $('#userName').val();
    let password = $('#password').val();

    // alert(mobileNumberEmailAddress);
    // alert(fullName);
    // alert(userName);
    // alert(password);


    // console.log($.isNumeric(mobileNumberEmailAddress));
    // console.log(mobileNumberEmailAddress == "", "hello");
    if (mobileNumberEmailAddress == "") {
        // console.log("here", 123);
        $('#mobileNumberEmailAddress').addClass("is-invalid");
        returnValue = false;
    }
    else {
        if ($('#mobileNumberEmailAddress').hasClass("is-invalid")) {
            $('#mobileNumberEmailAddress').removeClass("is-invalid");
            returnValue = true;
        }
    }


    if ($.isNumeric(mobileNumberEmailAddress)) {
        if (mobileNumberEmailAddress === "") {
            $('#mobileNumberEmailAddress').addClass("is-invalid");
            returnValue = false;
        }

        else var phoneNum = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
        if (!mobileNumberEmailAddress.match(phoneNum)) {
            $('#mobileNumberEmailAddress').addClass("is-invalid");
            returnValue = false;;
        }

        else {
            if ($('#mobileNumberEmailAddress').hasClass("is-invalid")) {
                $('#mobileNumberEmailAddress').removeClass("is-invalid");
                returnValue = true;
            }
        }

        
        // else {
        //     if ($('#mobileNumberEmailAddress').hasClass("is-invalid")) {
        //         $('#mobileNumberEmailAddress').removeClass("is-invalid");
        //         returnValue = true;
        //     }
        // }
    }
    else {
        var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        if (mobileNumberEmailAddress === "") {
            $('#mobileNumberEmailAddress').addClass("is-invalid");
            returnValue = false;
        }
        else if (mobileNumberEmailAddress.match(validRegex)) {
            $('#mobileNumberEmailAddress').addClass("is-valid");
            returnValue = true;
        }
        // else {
        //     if ($('#mobileNumberEmailAddress').hasClass("is-invalid")) {
        //         $('#mobileNumberEmailAddress').removeClass("is-invalid");
        //         returnValue = true;
        //     }
        // }
        
        else {
            if ($('#mobileNumberEmailAddress').hasClass("is-invalid")) {
                $('#mobileNumberEmailAddress').removeClass("is-invalid");
                returnValue = true;
            }
        }
    }

    if (fullName === "") {
        $('#fullName').addClass("is-invalid");
        returnValue = false;
    }
    else {
        if ($('#fullName').hasClass("is-invalid")) {
            $('#fullName').removeClass("is-invalid");
            returnValue = true;
        }
    }

    if (userName === "") {
        $('#userName').addClass("is-invalid");
        returnValue = false;
    }
    else {
        if ($('#userName').hasClass("is-invalid")) {
            $('#userName').removeClass("is-invalid");
            returnValue = true;
        }
    }

    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if (!(password.match(lowerCaseLetters))) {
        $('#password').addClass("is-invalid");
        returnValue = false;
    }
    else {
        if ($('#password').hasClass("is-invalid")) {
            $('#password').removeClass("is-invalid");
            returnValue = true;
        }
    }

    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if (!(password.match(upperCaseLetters))) {
        $('#password').addClass("is-invalid");
        returnValue = false;
    }
    else {
        if ($('#password').hasClass("is-invalid")) {
            $('#password').removeClass("is-invalid");
            returnValue = true;
        }
    }

    // Validate numbers
    var numbers = /[0-9]/g;
    if (!(password.match(numbers))) {
        $('#password').addClass("is-invalid");
        returnValue = false;
    }
    else {
        if ($('#password').hasClass("is-invalid")) {
            $('#password').removeClass("is-invalid");
            returnValue = true;
        }
    }

    // Validate length
    if (!(password.length >= 8)) {
        $('#password').addClass("is-invalid");
        returnValue = false;
    }
    else {
        if ($('#password').hasClass("is-invalid")) {
            $('#password').removeClass("is-invalid");
            returnValue = true;
        }
    }

    console.log(returnValue);

    return returnValue;
}



function show() {
    // var p = document.getElementById('password');
    // p.setAttribute('type', 'text');
    $("#password").attr('type', 'text');
}

function hide() {
    // var p = document.getElementById('password');
    // p.setAttribute('type', 'password');
    $("#password").attr('type', 'password');
}

var pwShown = 0;

document.getElementById("eye").addEventListener("click", function () {
    if (pwShown == 0) {
        pwShown = 1;
        show();
    } else {
        pwShown = 0;
        hide();
    }
}, false);


// var eye = 0;
// document.getElementById("eyelogin").addEventListener("click", function () {
//     if (eye == 0) {
//         eye = 1;
//         show();
//     } else {
//         eye = 0;
//         hide();
//     }
// }, false);



