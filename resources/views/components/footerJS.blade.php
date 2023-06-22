<!-- JAVASCRIPT FILES -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>
<script src="{{ asset('js/click-scroll.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $('.owl-carousel').owlCarousel({
        loop: false,
        responsiveClass: true,
        URLhashListener: true,
        autoplayHoverPause: true,
        startPosition: 'URLHash',
        stagePadding: 20,
        animateOut: 'slideOutDown',
        animateIn: 'flipInX',
        smartSpeed: 450,
        lazyLoad: true,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 1,
            },
            991: {
                items: 1,
            },
            1200: {
                items: 2,
            },
        }
    });

    var faq = document.getElementsByClassName("faq-page");
    var i;
    for (i = 0; i < faq.length; i++) {
        faq[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var body = this.nextElementSibling;
            if (body.style.display === "block") {
                body.style.display = "none";
            } else {
                body.style.display = "block";
            }
        });
    }
</script>
