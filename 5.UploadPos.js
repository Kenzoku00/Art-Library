document.addEventListener("DOMContentLoaded", function () {
    const checkboxes = document.querySelectorAll(".checkboxes input[type='checkbox']");
  
    checkboxes.forEach((checkbox) => {
      checkbox.addEventListener("change", function () {
        const label = this.nextElementSibling;
  
        if (this.checked) {
          label.style.backgroundColor = "#47B0F8";
          label.style.border = "none";
          label.style.color = "white";
        } else {
          label.style.backgroundColor = "#fff";
          label.style.border = "2px solid #ddd";
          label.style.color = "black";
        }
      });
    });
  });
  