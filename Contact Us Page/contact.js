/*document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission behavior

        // Get form input values
        const name = form.querySelector('input[placeholder="Your Name"]').value;
        const company = form.querySelector('input[placeholder="Company Name"]').value;
        const telephone = form.querySelector('input[placeholder="Telephone"]').value;
        const message = form.querySelector('textarea[placeholder="Your Message"]').value;

        // Basic form validation (you can add more specific validation as needed)
        if (!name || !company || !telephone || !message) {
            alert('Please fill in all required fields.');
            return;
        }

        // You can perform additional actions here, such as sending the data to a server or displaying a success message.
        // For now, let's display a simple success message.
        alert('Form submitted successfully!');
        form.reset(); // Clear the form fields
    });
});*/


/*let body_div = document.querySelector('body');

async function bgchange(){

    for (let i = 0; i < 3;) {
        
        if(i == 0){
            body_div.style.backgroundImage = "url(./logos/js1.jpg)";
            
        }
        
        else if(i == 1){
            body_div.style.backgroundImage = "url(./logos/js2.jpg)";

        }
        else if(i == 2){
            body_div.style.backgroundImage = "url(./logos/js3.jpg)";
        }
        await new Promise(r => setTimeout(() => r(), 5000));
        i++;
        
        
    }
    bgchange();
}

bgchange();*/





