document.addEventListener("DOMContentLoaded", () => {
  const container = document.getElementById("customAuthContainer");
  const overlayButtons = container.querySelectorAll(".overlay-btn");

  overlayButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      const action = btn.dataset.action;
      if (action === "signUp") {
        container.classList.add("right-panel-active");
      } else if (action === "signIn") {
        container.classList.remove("right-panel-active");
      }
    });
  });
});
