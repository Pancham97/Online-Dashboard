function validate(userForm) {
    
    div = document.getElementById("namespan");
    div.style.color = "red";
    if(div.hasChildNodes()) {
        div.removeChild(div.firstChild);
    }
    
    if(userForm.name.value.length == 0) {
        div.appendChild(document.createTextNode("Name cannot be blank!"));
        userForm.name.focus();
        return false;
    }
    
    // Validate email
    div = document.getElementById("emailspan");
    div.style.color = "red";
    if(div.hasChildNodes()) {
        div.removeChild(div.firstChild);
    }
    
    regex = /(^\w+\@\w+\.\w+)/;
    match = regex.exec(userForm.email.value);

    if(!match) {
        div.appendChild(document.createTextNode("Please input a valid email!"));
        userForm.email.focus();
        return false;
    }

    // Check if the password is at least 6 characters long or not.
    div = document.getElementById("passwordspan");
    div.style.color = "red";
    if(div.hasChildNodes()) {
        div.removeChild(div.firstChild);
    }

    if(userForm.password.value.length <= 5) {
        div.appendChild(document.createTextNode("The password must be atleast 6 characters long!"));
        userForm.password.focus();
        return false;
    }

    // Check if the passwords match or not.
    div = document.getElementById("repasswordspan");
    div.style.color ="red";
    if(div.hasChildNodes()) {
        div.removeChild(div.firstChild);
    }

    if(userForm.password.value != userForm.repassword.value) {
        div.appendChild(document.createTextNode("Passwords do not match!"));
        userForm.repassword.focus();
        return false;
    }
}
