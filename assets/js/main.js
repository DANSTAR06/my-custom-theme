$(document).ready(function () {
    let scrollPosition = scrollY;
    $(window).on("scroll", function () {
        scrollPosition = window.scrollY
        if ( scrollPosition > 100) {
            $("nav .top-nav").hide()
            $("nav").css({ position: 'fixed', top: 0, width: '100%', zIndex: 9999})
        } else {
            $("nav .top-nav").show()
            $("nav").css({ position: 'relative'})
        }
    })

    $(".fa-bars, .fa-close").on("click", function(){
        $("div.bottom-nav > div.menu").toggle('show');
    })

    function animateValue(obj, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            obj.innerHTML = Math.floor(progress * (end - start) + start);
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }

    const counters = document.querySelectorAll("div.counter h1.count span");
    counters.forEach(counter => {
        const number = counter.getAttribute("data-count")
        animateValue(counter, 0, number, 10000);
    });
})