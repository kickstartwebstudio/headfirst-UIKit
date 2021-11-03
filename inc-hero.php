<!-- TOP -->
<div class="rz-top-wrap uk-position-relative uk-light uk-background-secondary">

    <!-- NAV -->
    <div class="rz-nav" data-uk-sticky="cls-active: uk-background-secondary uk-box-shadow-medium; top: 100vh; animation: uk-animation-slide-top">
        <div class="uk-container">
            <nav class="" uk-navbar>
                <div class="uk-navbar-left">
                    <div class="uk-text-bold uk-logo">.headfirst</div>
                </div>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav uk-visible@s">
                        <?php include 'inc-navbar-menu.php';?>
                    </ul>
                  <a class="uk-navbar-toggle uk-navbar-item uk-hidden@s" data-uk-toggle data-uk-navbar-toggle-icon href="#offcanvas-nav"></a>
                </div>
            </nav>           
        </div>
    </div>
    <!-- /NAV -->

    <div class="uk-cover-container uk-light uk-flex uk-flex-middle" uk-height-viewport>

        <!-- TOP CONTAINER -->
        <div class="uk-container uk-flex-auto rz-top-container uk-position-relative uk-margin-medium-top" data-uk-parallax="y: 0,50; easing:0; opacity:0.2">
            <div class="uk-width-1-2@s" data-uk-scrollspy="cls: uk-animation-slide-right-medium; target: > *; delay: 150">
                <div class="uk-text-uppercase">HTML Boilerplate</div>
                <h1 class="uk-margin-remove-top">Start Building Quickly</h1>
                <p class="subtitle-text uk-visible@s">It means you start putting theory into practice almost immediately. More generally it means doing something without hesitation, and it can also literally mean "the head reaching some point first".</p>
                <a href="#" title="Learn More" class="uk-button uk-button-primary uk-border-pill" data-uk-scrollspy-class="uk-animation-fade">LEARN MORE</a>
            </div>
        </div>
        <!-- /TOP CONTAINER -->
        <!-- TOP IMAGE -->
        <img src="https://source.unsplash.com/nGsVMkRatgM/1920x1080" alt="" data-uk-cover data-uk-img data-uk-parallax="opacity: 1,0.1; easing:0">
        <!-- /TOP IMAGE -->
    </div>
    <div class="uk-position-bottom-center uk-position-medium uk-position-z-index uk-text-center">
        <a href="#content" data-uk-scroll="duration: 500" data-uk-icon="icon: arrow-down; ratio: 2"></a>
    </div>
</div>
<!-- /TOP -->