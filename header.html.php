   <!-- Header
   ================================================== -->
    <header id="home">

        <nav id="nav-wrap">
            <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
            <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
            <?php echo show_nav($nav); ?>
        </nav>
        <!-- end #nav-wrap -->

        <div class="row banner">
            <div class="banner-text">
                <br>
                <br>
                <h1 class="responsive-headline">Sebastian Zając</h1>
                <br>
                <h3>
                    <span>P</span>hysicist
                    <br>
                    <span>D</span>ata Analyst
                    <br>
                    <span>P</span>rogrammer</h3>
                <hr />
                <br>
                <br>
                <?php echo show_socials($social_media, "social"); ?>
            </div>
        </div>

        <p class="scrolldown">
            <a class="smoothscroll" href="#about">
                <i class="icon-down-circle"></i>
            </a>
        </p>

    </header>
    <!-- Header End -->
