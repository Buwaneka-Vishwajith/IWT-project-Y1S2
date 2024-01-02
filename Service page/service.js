let body_div = document.querySelector('body');

async function bgchange(){

    for (let i = 0; i < 3;) {
        
        if(i == 0){
            body_div.style.backgroundImage = "url(./logos/photo3.jpg)";
            
        }
        
        else if(i == 1){
            body_div.style.backgroundImage = "url(./logos/photo5.jpg)";

        }
        else if(i == 2){
            body_div.style.backgroundImage = "url(./logos/photo2.jpg)";
        }
        await new Promise(r => setTimeout(() => r(), 5000));
        i++;
        
        
    }
    bgchange();
}

bgchange();

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}