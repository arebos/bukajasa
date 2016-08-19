<!-- Half Page Image Background Carousel Header -->
<section id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('/assets/img/slide-spg.jpg');"></div>
            <!--div class="carousel-caption">
                <h2>Caption 1</h2>
            </div-->
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('/assets/img/slide-fit-fashion.jpg');"></div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('/assets/img/slide-marketing-week.jpg');"></div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</section>

<section class="main">
    <div class="container">
		<div class="row service">
			<div class="col-sm-12">
				<h2 class="heading">Our Service</h2>
			</div>
            <div class="col-md-4 col-sm-6 service"><div class="service-inner">
                <a href="/spg-usher-talent">
                    <img class="img-responsive" src="/assets/img/service-spg.jpg" alt="SPG Usher &amp; Talent" />
                <h3>SPG Usher &amp; Talent</h3></a>
            </div></div>
            <div class="col-md-4 col-sm-6 service"><div class="service-inner">
                <a href="#">
                    <img class="img-responsive" src="/assets/img/service-pr-consultant.jpg" alt="PR Consultant" />
                 <h3>PR Consultant</h3></a>
            </div></div>
            <div class="col-md-4 col-sm-6 service"><div class="service-inner">
                <a href="#">
                    <img class="img-responsive" src="/assets/img/service-event-organizer.jpg" alt="Event Organizer" />
                <h3>Event Organizer</h3></a>
            </div></div>
            <div class="col-md-4 col-sm-6 service"><div class="service-inner">
                <a href="#">
                    <img class="img-responsive" src="/assets/img/service-video-production.jpg" alt="TV &amp; Video Production" />
                <h3>TV &amp; Video Production</h3></a>
            </div></div>
            <div class="col-md-4 col-sm-6 service"><div class="service-inner">
                <a href="#">
                    <img class="img-responsive" src="/assets/img/service-multimedia-it.jpg" alt="Multimedia &amp; IT">
                <h3>Multimedia &amp; IT</h3></a>
            </div></div>
            <div class="col-md-4 col-sm-6 service"><div class="service-inner">
                <a href="#">
                    <img class="img-responsive" src="/assets/img/service-training.jpg" alt="Training &amp; Travel">
                <h3>Training &amp; Travel</h3></a>
            </div></div>
        </div>
    </div>
</section>







<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>