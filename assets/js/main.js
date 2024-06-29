$('.testimonials_main_slider').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    autoplay: true,
    slideTransition: 'linear',
    setTimeout: 6000,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 2
        }
    }
});


$('.testimonials_about_slider').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    autoplay: true,
    slideTransition: 'linear',
    setTimeout: 6000,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 2
        }
    }
});


//==Login form=================
function togglePasswordVisibility(inputId, iconId) {
    var input = document.getElementById(inputId);
    var icon = document.getElementById(iconId);
    
    if (input.type === 'password') {
        input.type = 'text';
        icon.setAttribute('data-icon', 'ph:eye-bold');
    } else {
        input.type = 'password';
        icon.setAttribute('data-icon', 'ph:eye-slash-bold');
    }
}

//==============logout form 
function togglePasswordVisibility(inputId, iconId) {
    var input = document.getElementById(inputId);
    var icon = document.getElementById(iconId);
    
    if (input.type === 'password') {
        input.type = 'text';
        icon.setAttribute('data-icon', 'ph:eye-bold');
    } else {
        input.type = 'password';
        icon.setAttribute('data-icon', 'ph:eye-slash-bold');
    }
}


// $(document).ready(function () {
//     $(".drop-icon").click(function () {
//         $(this).parent().siblings(".dropdown-content").addClass("show-menu");
//     });
// });