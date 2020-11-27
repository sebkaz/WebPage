<!-- footer
   ================================================== -->
    <footer id="footer">
        <div class="row">
            <div class="six columns contact-right">
                <h4>Contact</h4>
                <p> SGH Warsaw School of Economics
                    <br>Department of Statistical Methods and Business Analysis
                    <br> al. Niepodległości 162, 02-554 Warsaw, Poland
                </p>
                <p>
                    e-mail: sebastian.zajac [at] sgh.waw.pl
                </p>
            </div>
            <div class="six columns contact-left">
                <h4>Links</h4>
                <?php echo show_ul($links_footer,''); ?>
            </div>
        </div>
        <div class="row">

            <div class="twelve columns">
                <?php echo show_socials($social_media,"social-links")?>
                
                <ul class="copyright">
                    <li>&copy; Copyright <?php echo date("Y"); ?> Sebastian Zając</li>
                </ul>
            </div>

            <div id="go-top">
                <a class="smoothscroll" title="Back to Top" href="#home">
                    <i class="icon-up-open"></i>
                </a>
            </div>

        </div>

    </footer>
    <!-- Footer End-->