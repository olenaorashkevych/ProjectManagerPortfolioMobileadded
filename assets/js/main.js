jQuery(window).on('load', function () {
    "use strict";


    // HIDE PRELOADER
    $(".preloader").addClass("hide-preloader");

    // SHOW/ANIMATE ANIMATION CONTAINER
    setTimeout(function () {

        $("#intro .animation-container").each(function () {

            var e = $(this);

            setTimeout(function () {

                e.addClass("run-animation");

            }, e.data("animation-delay"));

        });

    }, 700);


});


jQuery(document).ready(function ($) {
    "use strict";


    // SMOOTH SCROLL FOR SAME PAGE LINKS
    $(document).on('click', 'a.smooth-scroll', function (event) {

        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top - 80
        }, 500);

    });


    // SCROLL REVEAL SETUP
    window.sr = ScrollReveal();
    sr.reveal(".scroll-animated-from-right", {
        duration: 600,
        delay: 0,
        origin: "right",
        rotate: { x: 0, y: 0, z: 0 },
        opacity: 0,
        distance: "20vh",
        viewFactor: 0.4,
        scale: 1,
    });




});


// Універсальна функція для заміни шаблоних записів в email тексті
function replaceTemplate(str, obj) {
    var result = str;
    for (var key in obj) {
        result = result.replace(new RegExp("{" + key + "}", "g"), obj[key]);
    }
    return result;
}

// Формуємо email лист
async function setEmailMessage(formDataObj) {

    // видбираємо Email шаблон за допомогою fetch
    const res = await fetch("../../emailMessage.html")
    let html = await res.text();

    return replaceTemplate(html, formDataObj);
}


// відбір форми
const contactform = document.getElementById("contact-form")
const contactformsuccess = document.getElementById("contact-form-success")

// вішаємо подію відправки форми
contactform.addEventListener("submit", async function (e) {
    e.preventDefault();

    // збираємо дані з форми FormData
    const formData = new FormData(contactform);

    // Перетворти formData в об'єкт
    const formDataObj = Object.fromEntries(formData);

    // Додати відповіді до форми
    const sendData = {};
    sendData['to'] = 'rreact631@gmail.com';
    sendData['subject'] = 'Message from your site';
    sendData['message'] = await setEmailMessage(formDataObj);

    // Відправляємл листа користувачу
    fetch('/api/index.php', {
        method: 'POST',
        body: JSON.stringify(sendData),
        headers: {
            'Content-Type': 'application/json'
        }
    })

    contactform.classList.add('hide');
    contactformsuccess.classList.remove('hide');

})

// при нажатті кнопки міняємо режим світлий на темний
document.querySelector('.theme-switch').addEventListener('click',
    function (e) {
        e.preventDefault();

        // Відбираємо іконки сонця і місяця
        const sun = document.querySelector('.theme-switch .icon-light');
        const moon = document.querySelector('.theme-switch .icon-dark');

        // Перевіряємо чи є в body клас, який відповіжє за темну тему
        if (document.body.classList.contains('dark-theme')) {

            // Забираємо темну тему тим самим включаємо світлу
            document.body.classList.remove('dark-theme');

            // Змінюємо іконку
            sun.classList.add('hide');
            moon.classList.remove('hide');
        } else {

            // присвоєння класу боді при кліку на кнопку
            document.body.classList.add('dark-theme');

            // Змінюємо іконку
            sun.classList.remove('hide');
            moon.classList.add('hide');
        }

    }
);