document.getElementById("reset-form").addEventListener("submit", function(event) {
      event.preventDefault();

      var emailInput = document.getElementById("email");
      var newPasswordInput = document.getElementById("new-password");
      var confirmPasswordInput = document.getElementById("confirm-password");

      var email = emailInput.value;
      var newPassword = newPasswordInput.value;
      var confirmPassword = confirmPasswordInput.value;

      if (newPassword !== confirmPassword) {
        alert("Passwords do not match. Please try again.");
        return;
      }

      // Perform password reset logic here
      // For demonstration purposes, display the reset details in an alert
      alert("Email: " + email + "\nNew Password: " + newPassword + "\n\nPassword reset successful!");

      // Clear the form inputs
      emailInput.value = "";
      newPasswordInput.value = "";
      confirmPasswordInput.value = "";
    });