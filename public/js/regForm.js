function validation() {
    var name = document.getElementById("name").value;
    var nic = document.getElementById("nic").value;
    var email = document.getElementById("email").value;
    var address = document.getElementById("address").value;
    var contact = document.getElementById("contact").value;
    var dob = document.getElementById("dob").value;

    var gender = document.getElementById("gender").value;
    var at = email.indexOf("@");
    var dot = email.lastIndexOf(".");

    if ((contact.length != 10) || (isNaN(contact))) {
        swal({
            title: "Registration Faied!",
            text: "Please enter a valid Phone Number!",

            icon: "error",

        });

    } else {
        if (at < 1 || dot < at + 2 || dot + 2 > email.length) {
            swal({
                title: "Registration Failed",
                text: "Please enter a valid Email!",

                icon: "error",

            });
        } else {

            swal({
                title: "Registration Successful!",
                text: "Please wait for the confirmation email, Thank you!",
                icon: "success",

            });

        }
    }

}