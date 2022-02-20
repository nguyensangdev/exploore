function checkInvalidEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function validateEmail() {
    var inputElement = $('#inputEmail');
    var value = inputElement.val();
    var messageElement = $("#falseEmailMessage");

    if (value != '' && value != null) {
        if (checkInvalidEmail(value)) {
            return null;
        } else {
            inputElement.val('');
            inputElement.addClass('invalid-input');
            messageElement.text('Your email is not formatted correctly !!!');
        }
    } else {
        inputElement.removeClass('invalid-input');
        messageElement.text('');
    }
}

function validatePassword() {
    var inputElement = $('#inputPassword');
    var inputSubElement = $('#inputConfirmPassword');

    var value = inputElement.val();
    var subValue = inputSubElement.val();

    var messageTrueElement = $("#truePasswordMessage");
    var messageFalseElement = $("#falsePasswordMessage");
    var messageEmptyElement = $("#emptyPasswordMessage");

    if (subValue != '' && subValue != null) {
        if (value != '' && value != null) {
            if (value == subValue) {
                messageFalseElement.text('');
                inputElement.removeClass('invalid-input');
                inputSubElement.removeClass('invalid-input');
                inputElement.addClass('valid-input');
                inputSubElement.addClass('valid-input');
                messageTrueElement.text('Password has been confirmed !!!')
            } else {
                messageTrueElement.text('');
                inputElement.val('');
                inputSubElement.val('');
                inputElement.addClass('invalid-input');
                inputSubElement.addClass('invalid-input');
                messageFalseElement.text('Password is not true !!!')
            }
        } else {
            messageTrueElement.text('');
            inputElement.val('');
            inputSubElement.val('');
            inputElement.addClass('invalid-input');
            inputSubElement.addClass('invalid-input');
            messageFalseElement.text('Password is empty !!!')
        }
    } else {
        inputElement.removeClass('invalid-input');
        inputSubElement.removeClass('invalid-input');
        messageFalseElement.text('');
    }
}