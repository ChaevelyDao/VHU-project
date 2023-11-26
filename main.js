

//eyes-follow effect
document.addEventListener('mouseover', (e) => {
    console.log(e)
    const mouseX = e.clientX
    const mouseY = e.clientY

    const anchor = document.getElementById('anchor')
    const rekt = anchor.getBoundingClientRect();
    const anchorX = rekt.left + rekt.width / 2;
    const anchorY = rekt.top + rekt.height / 2;

    const angleDeg = angle(mouseX, mouseY, anchorX, anchorY);

    console.log(angleDeg)

    const eyes = document.querySelectorAll('.eye')
    eyes.forEach(eye => {
        eye.style.transform = `rotate(${90 + angleDeg}deg)`;
    })
})

function angle(cx, cy, ex, ey) {
    const dy = ey - cy;
    const dx = ex - cx;
    const rad = Math.atan2(dy, dx);
    const deg = rad * 180 / Math.PI;
    return deg;
}

//slider effect
let timeOut = 2000;
let slideIndex = 0;
let autoOn = true;

autoSlides();

function autoSlides() {
    timeOut = timeOut - 20;

    if (autoOn == true && timeOut < 0) {
        showSlides();
    }
    setTimeout(autoSlides, 20);
}

function prevSlide() {

    timeOut = 2000;

    const slides = document.getElementsByClassName("mySlides");
    const dots = document.getElementsByClassName("dot");

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slideIndex--;

    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    if (slideIndex == 0) {
        slideIndex = 3
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

function showSlides() {

    timeOut = 2000;

    const slides = document.getElementsByClassName("mySlides");
    const dots = document.getElementsByClassName("dot");

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slideIndex++;

    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

//cuon len dau trang
function scrollToTop() {

    window.scrollTo({ top: 0, behavior: 'smooth' });

}

//img-src-switch-on-mouse-over
function imgsrcswitch() {
    const mainImg = document.getElementById("main-img");
    const smallImg = document.getElementsByClassName("small-img");

    smallImg[0].onmouseover = function () {
        mainImg.src = smallImg[0].src;
    }

    smallImg[1].onmouseover = function () {
        mainImg.src = smallImg[1].src;
    }

    smallImg[2].onmouseover = function () {
        mainImg.src = smallImg[2].src;
    }

    smallImg[3].onmouseover = function () {
        mainImg.src = smallImg[3].src;
    }
}



function validateForm() {

    // Username is 8-20 characters long, only contain a-z A-Z 0-9, no special character
    var usernameRegex = /^[a-zA-Z0-9]{8,20}$/
    // Minimum 3 and maximum 16 characters, at least one uppercase letter, one lowercase letter, one number and one special character
    var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{3,16}$/;

    // Cho form đăng ký
    if (document.getElementById("registerForm")) {
        // Các value lấy từ form
        var regUsername = document.getElementById("username").value;
        var regPassword = document.getElementById("password").value;
        var regRepassword = document.getElementById("repassword").value;
        var regEmail = document.getElementById("email").value;

        // Bắt đầu logic ở đây

        if (regUsername === "" || regPassword === "" || regRepassword === "" || regEmail === "") {
            alert("Vui lòng nhập đầy đủ thông tin để đăng ký");
            return false;
        }
        
        if (!regUsername.match(usernameRegex)) {
            alert("Vui lòng nhập tên đăng nhập hợp lệ!");
            return false;
        }

        if (!regPassword.match(passwordRegex)) {
            alert("Vui lòng nhập một mật khẩu hợp lệ!");
            return false;
        }
        if (regPassword !== regRepassword) {
            alert("Mật khẩu nhập lại không trùng khớp!");
            return false;
        }
    }

    // Cho form đăng nhập
    if (document.getElementById("loginForm")) {
        // Các value lấy từ form
        var loginUsername = document.getElementById("username").value;
        var loginPassword = document.getElementById("password").value;

        if (loginUsername === "" || loginPassword === "") {
            alert("Both username and password are required for login.");
            return false;
        }

        if (!loginUsername.match(usernameRegex)) {
            alert("Vui lòng nhập tên đăng nhập hợp lệ!");
            return false;
        }

        if (!loginPassword.match(passwordRegex)) {
            alert("Vui lòng nhập một mật khẩu hợp lệ!");
            return false;
        }
    }

    // Additional validation logic can be added here

    return true;
}

// function validateForm() {
//     var username = document.getElementById("username").value;
//     var password = document.getElementById("password").value;
//     var repassword = document.getElementById("repassword").value;
//     var email = document.getElementById("email").value;
//     var client_phone = document.getElementById("client_phone").value;
//     var client_name = document.getElementById("client_name").value;
//     var email = document.getElementById("email").value;
//     // Regular expression to check format
//     //Minimum 3 and maximum 10 characters, at least one uppercase letter, one lowercase letter, one number and one special character
//     var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{3,10}$/;

//     var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
//     // Check if the email is empty
//     if (email == "") {
//       alert("Email field must be filled out");
//       return false;
//     }
//     // Check if the email is in the correct format
//     if (!email.match(emailRegex)) {
//       alert("Please enter a valid email address");
//       return false;
//     }
//     // Check if the password is empty
//     if (password == "") {
//       alert("Password field must be filled out");
//       return false;
//     }
//     // Your additional validation logic can go here if needed
//     if (!password.match(passwordRegex)) {
//         alert("Please enter a valid password");
//         return false;
//     }
//     // Send a request to the server to check the user's credentials
//     // If the credentials are correct, return true to submit the form
//     // If the credentials are incorrect, display an error message and return false to prevent the form from being submitted
//     return true;
// }
//mobile toggle
// onclick="toggleBtn()"
// function toggleBtn() {
//     console.log('clicked');
//     var menu = document.getElementById("head-cart")
//     console.log(menu);
//     menu.classList.toggle("active");
//     console.log(menu);
//     // var onoff = document.querySelector('.off');
//     // onoff.classList.toggle('on');
// }

//toggle cart mobile
function toggleBtn(){
    //check clicked chưa chứ lỗi miết
    console.log('clicked');
    const menuu = document.querySelector(".mobile-head-cart");
    const removehover = document.querySelector(".removehover");
    //log ra coi lấy đủ phần tử chưa sao lỗi hoài T-T
    console.log(menuu);
    menuu.classList.toggle("active");
    removehover.classList.toggle("navhover");
    //close on scroll
    window.onscroll = () => {
        menuu.classList.remove("active");
        removehover.classList.remove("navhover");
    };
};



function handleScroll() {
    var lastScrollTop = 0;
    var delta = 5; // Set the scroll threshold
        var currentWidth = window.innerWidth;
        console.log(currentWidth);
        if (currentWidth > 1242){
            const headerUI = document.querySelector("#header");
            window.addEventListener("scroll", function() {

                var currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
                if (Math.abs(lastScrollTop - currentScrollTop) <= delta) {
                    return;
                }
                
                // if (window.scrollY === 0) {
                //     // Scroll position is at the top
                //     console.log("top = 0");
                //     headerUI.classList.remove('pos_fixed');                  
                // }

                if (currentScrollTop < lastScrollTop) {
                    // Scrolling up
                    console.log("Scrolling up");
                    headerUI.classList.add("pos_fixed");
                }
                if (window.scrollY < 10) {
                    // Scroll position is at the top
                    console.log("top = 0");
                    headerUI.classList.remove('pos_fixed');                  
                }

                if (currentScrollTop > lastScrollTop) {
                    // Scrolling down
                    console.log("Scrolling down");
                    headerUI.classList.remove("pos_fixed");
                }
        
                lastScrollTop = currentScrollTop;
            });
        }
        else{
            const headerUI = document.querySelector(".mobile-header");
            window.addEventListener("scroll", function() {

                var currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
                if (Math.abs(lastScrollTop - currentScrollTop) <= delta) {
                    return;
                }
        
                if (currentScrollTop < lastScrollTop) {
                    // Scrolling up
                    console.log("Scrolling up");
                    headerUI.classList.add("pos_fixed");
                }
                if (window.scrollY < 10) {
                    // Scroll position is at the top
                    console.log("top = 0");
                    headerUI.classList.remove('pos_fixed');                  
                }
                if (currentScrollTop > lastScrollTop) {
                    // Scrolling down
                    console.log("Scrolling down");
                    headerUI.classList.remove("pos_fixed");
                }
        
                lastScrollTop = currentScrollTop;
            });
        }

    // const headerUI = document.querySelector("#header");
    // const headerUI = document.querySelector(".mobile-header");
    // window.addEventListener("scroll", function() {

    //     var currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;

    //     if (Math.abs(lastScrollTop - currentScrollTop) <= delta) {
    //         return;
    //     }

    //     if (currentScrollTop < lastScrollTop) {
    //         // Scrolling up
    //         console.log("Scrolling up");
    //         headerUI.classList.add("pos_fixed");
    //     } else {
    //         // Scrolling down
    //         console.log("Scrolling down");
    //         headerUI.classList.remove("pos_fixed");
    //     }

    //     lastScrollTop = currentScrollTop;
    // });
}

// Call the function to start scroll detection
handleScroll();

// window.addEventListener('resize', function() {
//     // Update the viewport width when the window is resized
//     var currentWidth = window.innerWidth;
// });