
    document.getElementById("showPasswordIcon").addEventListener("click", function() {
      var passwordField = document.getElementById("password");
      if (passwordField.type === "password") {
        passwordField.type = "text";
        this.textContent = "👁️";
      } else {
        passwordField.type = "password";
        this.textContent = "👁️";
      }
    });
