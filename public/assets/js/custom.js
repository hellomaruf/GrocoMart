// add credintial in login input --->
function fillCredentials(role) {
    if (role === "admin") {
        document.getElementById("email").value = "admin@gmail.com";
        document.getElementById("password").value = "admin";
    } else if (role === "customer") {
        document.getElementById("email").value = "customer@gmail.com";
        document.getElementById("password").value = "customer";
    }
}
