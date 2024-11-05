const pass = document.getElementById("contra"),
      icon = document.querySelector(".bx");
      icon.addEventListener("click", e => {
        if(contra.type == "password") {
            contra.type = "text";
        } else {
            contra.type = "password";
        }
      }
      )