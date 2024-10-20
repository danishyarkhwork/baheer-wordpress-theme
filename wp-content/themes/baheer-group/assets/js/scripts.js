document.addEventListener("DOMContentLoaded", function () {
  const buttons = document.querySelectorAll("button");

  buttons.forEach((button) => {
    button.addEventListener("mouseover", function () {
      button.style.transform = "scale(1.05)";
    });

    button.addEventListener("mouseout", function () {
      button.style.transform = "scale(1)";
    });
  });
});
