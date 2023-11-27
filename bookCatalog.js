
// Regular expression for validating email addresses
const regEmail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

// Regular expression for validating passwords
const regexPassword = /^(?=.[a-z])(?=.[A-Z]).+$/;

// variable for controlling errors
let errorHappen = false;

// Get form element by ID
const mainForm = document.getElementById("mainForm");

// Get all elements with class "invalid-feedback" and convert it to an array

const errors = Array.from(document.getElementsByClassName("error-message"));



// Get the entire form
const form = document.forms["mainForm"];

// Event listener for form submission
mainForm.addEventListener("submit", (event) => {
  event.preventDefault();

  validate();



  // Check if any error exists by checking class displayError
if (errors.some(error => error.classList.contains("displayError"))) {
  return false;
}


  // change username to lowercase
  document.getElementById("username").value = document
    .getElementById("username").value.toLowerCase();

  mainForm.submit();
  return true;
});

// event lister for each element to check error dynamically
form["email"].addEventListener("input", validate);
form["username"].addEventListener("input", validate);
form["pass"].addEventListener("input", validate);
form["pass2"].addEventListener("input", validate);
form["terms"].addEventListener("change", validate);


// Function to validate form inputs
//dar sorat khata ya hide error ya showerror
function validate() {
 
  const email = form["email"].value;
  const username = form["username"].value.toLowerCase();
  const password = form["pass"].value;
  const password2 = form["pass2"].value;
  const term = form["terms"].checked;

  // Validate email
  if (regEmail.test(email) == false) {
    showError(0);
  } else {
    hideError(0);
  }

  // Validate username length
  if (username.length === 0 || username.length > 30) {
    showError(1);
  } else {
    hideError(1);
  }

  // Validate password length and pattern
  if (password.length < 8 || regexPassword.test(password) == false) {
    showError(2);
  } else {
    hideError(2);
  }

  // Validate password match
  if (password !== password2) {
    showError(3);
  } else {
    hideError(3);
  }

  // Validate acceptance of terms
  if (!term) {
    showError(4);
  } else {
    hideError(4);
  }
}


//this block of code shows an error if only one of the checkboxes are checked
newsLetterCheckbox.addEventListener("change", () => {
  if (newsLetterCheckbox.checked) {
    window.alert("Be aware of possible Scam");
  }
});


// Function : when showError is called with a specific index, it targets the corresponding error element, and by adding the "displayError" class,
//it makes the associated error message visible or applies specific styling based on the CSS rules associated with that class.
function showError(index) {
  errors[index].classList.add("displayError");
}

// Function to hide an error by removing the "displayError" class
function hideError(index) {
  errors[index].classList.remove("displayError");
}

// Get the reset button by ID
const resetBtn = document.getElementById("reset_btn");

// Event listener for the reset button
resetBtn.addEventListener("click", () => {
  // Reset the form
  mainForm.reset();
  // Reset the error messages
  errors.forEach((error) => error.classList.remove("displayError"));
});
