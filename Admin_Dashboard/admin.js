
document.addEventListener('DOMContentLoaded', function () {
    const updateButtons = document.querySelectorAll('.update-button');
    const modal = document.getElementById('updateModal');

    updateButtons.forEach(button => {
        button.addEventListener('click', function () {
            const clientId = this.dataset.clientId;
            const firstName = this.parentElement.parentElement.children[1].innerText;
            const lastName = this.parentElement.parentElement.children[2].innerText;
            const contactNumber = this.parentElement.parentElement.children[3].innerText;
            const nic = this.parentElement.parentElement.children[4].innerText;

            document.getElementById('update_client_id').value = clientId;
            document.getElementById('update_first_name').value = firstName;
            document.getElementById('update_last_name').value = lastName;
            document.getElementById('update_contact_number').value = contactNumber;
            document.getElementById('update_nic').value = nic;

            modal.style.display = "block";
        });
    });

    const closeModal = document.querySelector('.close');

    closeModal.addEventListener('click', function () {
        modal.style.display = "none";
    });

    window.addEventListener('click', function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});

