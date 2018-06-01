function validateMyForm() {
    if(!document.getElementById("honeypot").value) {
        return true;
    }
    else {
        return false;
    }
}