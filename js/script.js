$(document).ready(function(){
    $('.click-button').click(function() {
        $(this).children().parent().siblings().toggleClass('in');
        $('.click-button').not(this).siblings().removeClass('in');
    });
    $('ul.tabs li').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).addClass('current');
        $("#"+tab_id).addClass('current');
    });
    $('.single-item').slick({
        dots: true,
        dotsClass: "my-dots",
        arrows: true,
        nextArrow: '<i class="fas fa-chevron-circle-right slick-next"></i>',
        prevArrow: '<i class="fas fa-chevron-circle-left slick-prev"></i>',
        autoplay: true,
        autoplaySpeed: 2000,
    });
    $('.owl-one').owlCarousel({
        autoplay: true,
        loop: true,
        dots: false,
        margin: 10,
        nav: true,
        smartSpeed: 900,
        navigation: true,
        navText: ["<i class=\"fas fa-chevron-circle-left\"></i>","<i class=\"fas fa-chevron-circle-right\"></i>"],
        responsive : {
            1024 : {
                items: 3,
            },
            767 : {
                items: 2,
            },
            480 : {
                items: 3,
            },
            320 : {
                items: 1,
            }
        }
    });
    $('.multi-select-list').fSelect();
    var moment = rome.moment;
    rome(dt,  {
        appendTo: document.body,
        "time": false,
    }).show();

    $('.nav-link').click(function() {
        $(this).toggleClass('active');
        $(this).children().toggleClass('off').parent().siblings().toggleClass('in');
    });
    $('.dropdown').click(function() {
        $('div.show').removeClass('show');
        $(this).children('div').toggleClass('show');
    });
    new Chart(document.getElementById("pie-chart"), {
        type: 'pie',
        data: {
            labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
            datasets: [{
                label: "Population (millions)",
                backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                data: [2478,5267,734,784,433]
            }]
        },
        options: {
            title: {
                display: true,
                text: 'This title)'
            }
        }
    });
});
var menuDesktopHidden, menuMobileShown;
function loaded() {
    menuDesktopHidden = false;
    menuMobileShown = false;
};
function switchMenu() {
    if (window.outerWidth <= 991) {
        menuMobileShown = !menuMobileShown;
    } else {
        menuDesktopHidden = !menuDesktopHidden;
    }
    var element = document.getElementsByClassName("wrapper")[0];
    if (menuMobileShown) {
        element.classList.add("menu-mobile-shown");
    } else {
        element.classList.remove("menu-mobile-shown");
    }
    if (menuDesktopHidden) {
        element.classList.add("menu-desktop-hidden");
    } else {
        element.classList.remove("menu-desktop-hidden");
    }
};

window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}