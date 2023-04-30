// Get the modal and button elements
const modal = document.getElementById("authentication-modal");
const modalButton = document.querySelector("[data-modal-toggle='authentication-modal']");
const closeButton = document.querySelector("[data-modal-hide='authentication-modal']");

// Add event listener to show modal when button is clicked
modalButton.addEventListener("click", () => {
  modal.classList.remove("hidden");
  modal.classList.add("block");
});

// Add event listener to hide modal when close button is clicked
closeButton.addEventListener("click", () => {
  modal.classList.remove("block");
  modal.classList.add("hidden");
});

// Add event listener to hide modal when user clicks outside the modal
modal.addEventListener("click", (event) => {
  if (event.target === modal) {
    modal.classList.remove("block");
    modal.classList.add("hidden");
  }
});
