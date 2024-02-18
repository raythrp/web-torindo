// functions to open and clode modal
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.showModal();
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.close();
}

// event listeners to open modal
document.querySelectorAll('.ethical, .employee-development, .demanding, .proactive, .respectful').forEach( (element) => {
    const modalId = element.getAttribute('data-modal-id');
    element.addEventListener('click', () => openModal(modalId))
});

// event listeners to close modal
document.querySelectorAll('.closeModal').forEach( (element) => {
    const modalId = element.closest('dialog').id;
    element.addEventListener('click', () => closeModal(modalId));
});

// event listeners to close modal for everywhere click
document.querySelectorAll('dialog').forEach( (modal) => {
    modal.addEventListener('click', (event) => {
        if (event.target == modal) {
            closeModal(modal.id);
        }
    });
});