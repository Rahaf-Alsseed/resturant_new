

<section class="sign-up">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>Signup for our newsletters</h2>
                </div>
            </div>
        </div>
        <form id="contact" action="" method="get">
            <div class="row">
                <div class="col-md-4 col-md-offset-3">
                    <fieldset>
                        <input name="email" type="text" class="form-control" id="email" placeholder="Enter your email here..." required="">
                    </fieldset>
                </div>
                <div class="col-md-2">
                    <fieldset>
                        <button type="submit" id="form-submit" class="btn">Send Message</button>
                    </fieldset>
                </div>
            </div>
        </form>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p>Copyright &copy; 2020 Victory Template</p>
            </div>
            <div class="col-md-4">
                <ul class="social-icons">
                    <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <p>Design: TemplateMo</p>
            </div>
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        // navigation click actions
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
</script>
</body>
</html>
