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



//login form

const showFormLink = document.querySelector(".show-form");
const registerForm = document.querySelector(".register-form");
const loginForm = document.getElementById('login-form-container');

showFormLink.addEventListener("click", function(event) {
  event.preventDefault(); // chặn sự kiện mặc định của thẻ <a>
  registerForm.style.display = "block"; // thay đổi thuộc tính style của div register-form
  loginFormContainer.style.display = "none"; // ẩn form đăng nhập
});
formBtn.addEventListener('click', () =>{
    loginForm.classList.add('active');
});

formClose.addEventListener('click', () =>{
    loginForm.classList.remove('active');
});

