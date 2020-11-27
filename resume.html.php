<?php require_once 'include/db.inc.php'; ?>
    <!-- Resume Section
   ================================================== -->
    <section id="resume">

        <div class="row education">

            <div class="three columns header-col">
                <h1>
                    <span>Education</span>
                </h1>
            </div>
            <div class="nine columns main-col">
                <div class="row item">
                    <div class="twelve columns">
                        <?php include 'include/education.inc.php'; ?>
                    </div>
                </div>
                <!-- item end -->
            </div>
            <!-- main-col end -->
        </div>
        <!-- End Education -->



        <div class="row work">

            <div class="three columns header-col">
                <h1>
                    <span>Publications</span>
                </h1>
            </div>

            <div class="nine columns main-col">
                <?php include 'include/publications.inc.php'; ?>
            </div>
            <!-- main-col end -->
        </div>
        <!-- End Publications -->

        <div class="row work">

            <div class="three columns header-col">
                <h1>
                    <span>Monographies</span>
                </h1>
            </div>

            <div class="nine columns main-col">
                <?php include 'include/monography.inc.php'; ?>
            </div>
            <!-- main-col end -->
        </div>
        <!-- End Publications -->


        <!-- Work -->
        <div class="row work">

            <div class="three columns header-col">
                <h1>
                    <span>Work experience</span>
                </h1>
            </div>

            <div class="nine columns main-col">
                <?php include 'include/work.inc.php';?>
            </div>
            <!-- main-col end -->
        </div>
        <!-- End Work -->

        <!--  Certificates -->
        <div class="row skill">
            <div class="three columns header-col">
                <h1>
                    <span>Certificates</span>
                </h1>
            </div>
            <div class="nine columns main-col">
                        <?php include 'include/certificates.inc.php'; ?>
                </div>
                <!-- main-col end -->
            </div>
            <!-- End skills -->
        </section>
        <!-- Resume Section End-->
