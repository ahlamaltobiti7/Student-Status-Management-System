function validateForm() {
    let name = document.getElementById("name").value;
    let age = document.getElementById("age").value;

    if (name == "") {
        alert("Please enter your name.");
        return false;
    }

    if (age == "") {
        alert("Please enter your age.");
        return false;
    }

    if (age <= 0) {
        alert("Age must be greater than zero.");
        return false;
    }

    return true;
}