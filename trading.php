<!-- Including header -->
<?php include_once("includes/header-3.php"); ?>



<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Merriweather|Montserrat:400,500,800,700,900');
@import url('https://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700');
*{
    box-sizing: border-box;
}
.segment {
    position: absolute;
    left: -6249.9375rem;
    top: 0
}

.segment .divider,
.segment .module {
    display: none
}

.segment.active-segment {
    position: static;
    left: auto
}

.segment.active-segment .divider,
.segment.active-segment .module {
    display: block
}

.image-wrapper {
    width: 50%;
	-webkit-transform: translate(-100%,0);
	transform: translate(-100%,0);
	position: absolute;
	left: 0;
	height: 100vh;
	background-size: cover;
	background-position: center;
	transition: all 1s;
	transition-delay: 0s;
	transition-delay: 1s;
	z-index: 5;
}
#site-content {
    height: auto;
    width: 100vw;
}
.segment {
    width: 100%;
    height: 100%;
    position: static;
    left: auto;
}

.module-image-text {
    min-height: 100vh;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    position: relative;
}

.text-wrapper {
    padding: 0 5% 0 50%;
    width: 100%;
    -webkit-transform: translate(-100%,0);
    transform: translate(-100%,0);
    /*position: absolute;*/
    right: 0;
    min-height: 100vh;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    background: #ffebe4;
        background-color: rgb(255, 235, 228);
    background-color: rgb(255, 235, 228);
    transition: all 1s;
        transition-delay: 0s;
    transition-delay: 0s;
    transition-delay: .5s;
    z-index: 2;
}

.module-image-text .text-wrapper h2 {
    font-size: 1.875rem;
    font-family: proxima-nova,sans-serif;
    font-weight: 300;
    letter-spacing: .25rem;
    margin: 0 0 2.5rem;
    text-transform: uppercase;
    opacity: 0;
    -webkit-transform: translate(0,6.25rem);
    transform: translate(0,6.25rem);
    transition: all 1s;
    
}
.module-image-text .text-wrapper p {
    font-size: 1.25rem;
    font-family: adobe-caslon-pro,serif;
    line-height: 2rem;
    margin: 1rem 0;
    opacity: 0;
    -webkit-transform: translate(0,6.25rem);
    transform: translate(0,6.25rem);
    transition: all 1s;
}
.active-segment .text-wrapper p:first-of-type {
    transition-delay: 1.4s;
}


.active-segment .text-wrapper p{
	opacity: 1;
    -webkit-transform: translate(0,0);
    transform: translate(0,0);
    transition-delay: 1.6s;
}

.active-segment .text-wrapper h2{
	opacity: 1;
    -webkit-transform: translate(0,0);
    transform: translate(0,0);
    transition-delay: 1.2s;
}

.active-segment .text-wrapper{
    -webkit-transform: translate(0,0);
    transform: translate(0,0);
}
.active-segment .image-wrapper {
    -webkit-transform: translate(0,0);
    transform: translate(0,0);
}



.divider{
    height: 40vh;
    /*margin-top: 5%;*/
    /*margin-bottom: 5%;*/
}

.module {
    padding: 8% 0;
}

.main-title h2 {
    font-weight: 400;
    font-family: montserrat;
    color: #333;
    margin-bottom: 15px;
    font-size: 2.2rem;
    text-transform: uppercase;
    letter-spacing: 3.5px;
}
p.main-title-desc {
    font-size: 17px;
    font-weight: 400;
    font-family: montserrat;
    color: #555;
    width: 40%;
    margin-left: 30%;
    text-transform: uppercase;
    letter-spacing: 1px;
}
ul.client-list{
    width: 100%;
}
ul.client-list li {
    width: 25%;
    position: relative;
    text-align: center;
    transition:all 0.2s;
    float: left;
    margin-bottom: 10%;
    height: 15vh;
    cursor: pointer;
}

.client-info {
    position: absolute;
    width: 100%;
     opacity: 0; 
    top: 0%;
    text-align: left;
    background: #fff;
    padding: 5% 10% 5% 5%;
    transition: all 0.2s;
}

ul.client-list li:hover{
    z-index: 10;
}
ul.client-list li:hover .client-info{
    opacity: 1;
    top: 0;
    top: 0;
}
p.client-link a {
    text-decoration: none;
    color: #F45B69;
    border-bottom: 1px solid #F45B69;
    padding-bottom: 5px;
    text-transform: uppercase;
}

ul.client-list li img {
    filter: grayscale(100%);
    opacity: 0.5;
}

.mt50{
    margin-top: 50px;
}
.mb8{
    margin-bottom: 8%;
}

.col-wrapper {
    width: 70%;
    margin-left: 15%;
    text-align: left;
}

.ingress p {
    font-size: 24px;
    font-family: serif;
    text-align: left;
    font-weight: 300;
    line-height: 1.8;
    margin-bottom: 8%;
    margin-top: 8%;
    letter-spacing: 0.5px;
}

.feature-list-headline h2 {
    font-weight: 400;
    font-family: montserrat;
    font-size: 30px;
    line-height: 1.3;
    margin-bottom: 30px;
}

ul.feature-list li {
    font-size: 20px;
    font-family: montserrat;
    color: #333;
    line-height: 1.5;
    margin-bottom: 20px;
}

ul.feature-list li span {
    font-weight: 500;
    margin-right: 6px;
    text-transform: uppercase;
}
li.member-box {
    width: 30%;
    font-family: montserrat;
        float: left;
    margin-right: 3%;
    margin-bottom: 5%;
}
p.member-name {
        font-size: 22px;
    text-transform: uppercase;
    color: #F45B69;
    font-weight: 500;
    letter-spacing: 2px;
    margin-bottom: 0;
    margin-top: 20px;
}
p.member-designation {
    font-size: 12px;
    color: #F45B69;
    font-weight: 500;
    text-transform: uppercase;
}
p.member-description {
    font-size: 16px;
    font-family: serif;
    letter-spacing: 0.5px;
    line-height: 1.5;
    color: #333;
    margin-bottom: 5px;
    height: 170px;
    overflow: hidden;
    padding-right: 0%;
}
a.member-read-more {
    text-decoration: none;
    color: #F45B69;
    font-size: 12px;
    font-weight: 500;
    letter-spacing: 0.5px;
        border-bottom: 1px solid;
    

}
.member-contact p a {
    color: #F45B69;
    margin-left: 15px;
}

.member-contact {
    margin-top: 15px;
}

.member-contact p {
    margin-bottom: 5px;
    color: #000;
    text-transform: uppercase;
    font-size: 14px;
    font-weight: 500;
}
.member-image {
    height: 300px;
    width: 100%;
    background: #333;
}
.member-image img {
    width: 000%;
    height: 100%;
    object-fit: contain;
    object-position: left;
}


p.simple-text {
    font-size: 20px;
    font-family: serif;
    text-align: left;
    font-weight: 300;
    line-height: 1.5;
    margin-bottom: 8%;
    margin-top: 8%;
    letter-spacing: 0.5px;
}

.contact-headline {
    font-weight: 500;
    font-family: montserrat;
    color: #333;
    margin-bottom: 15px;
    font-size: 1.8rem;
    text-transform: uppercase;
    letter-spacing: 2.5px;
}

.contact-detail {
    font-weight: 500;
    font-family: montserrat;
    color: #F45B69;
    margin-bottom: 15px;
    font-size: 1.2rem;
    text-transform: uppercase;
    letter-spacing: 3.5px;
}

.contact-box:nth-child(1) {
    border-right: 2px solid #dfdfdf;
}

.contact-us-widget {
    padding: 3% 0;
}
.contact-us-widget .main-title h2 {
    margin-bottom: 5%;
}

.client-section.container.module {
    padding-bottom: 3%;
}
</style>
<div id="site-content" class="site-content">
	<div class="segment active-segment" id="lab">

		<div class="module-image-text">
			<div class="section-title">
				<h1 style="color:#ff5c57;">Lab</h1>
				<a class="readmore" href="#">Scroll down<span></span></a>
			</div>
			<div class="image-wrapper" style="background-image:url(http://startuplab.no/content/uploads/2016/09/lab-bilde2.jpg);">
			</div>
			<div class="text-wrapper" style="background-color: #e5ecf0">
				<div>
					<h2>ACCELERATING TOP TIER STARTUPS</h2>
					<p>Since 2012 we have supported more than 250 technology startups, and <strong>74% </strong>of them are still growing! We are currently working with 82 active members in our tech incubator.</p>
					<p>StartupLab alumni include Zwipe, Kahoot, ReMarkable, Huddly and No Isolation.</p>
					<p>The network is the core value of StartupLab. Our team, members, alumni and external network – consisting of industry experts, serial entrepreneurs, investors and scientists &#8211; actively share their network, knowledge and experiences that benefit the group as a whole. We believe this is what it takes to enable just a few people to create something great in a short time span, that would usually require the work of hundreds. Our mission is to help make our entrepreneurs successful.</p>
				</div>
			</div>
		</div>

<div class="module text-center container fade-in ">
    
     <div class="main-title text-center ">
        <h2>Commodity Trading  heading.</h2>
        <p class="main-title-desc">
           MSA trades in Commodities with major Institutional Players and Governments:


        </p>
    </div>

    <div class="col-wrapper">
        <div class="ingress">
            <p>Our businesses maintain a meaningful position in four major international commodity markets: 

Fertilizers, Coking Coal, Thermal Coal, and Diamonds with some exposure to Base Metals.

</p>
        </div>

        <div class="">

            <ul class="feature-list list-unstyled">
                
                <p class="simple-text">In our client business, institutions, corporations and governments turn to us for market information, trading expertise, guidance and perspective. 

                We also transact principally on behalf of the firm, devising and executing investment strategies and identifying market opportunities.  </p>

                

            </ul>

        </div>
    </div>


</div>


<div class="divider" style="background-image:url(http://startuplab.no/content/uploads/2016/09/tise-compressed.jpg); background-position: center 51.0727%;"></div>

<div class="client-section container module">
    <div class="main-title text-center">
        <h2>Our Commodity Partners</h2>
        <p class="main-title-desc mb8">
            Cras ut augue pretium, viverra nunc in, luctus odio.
        </p>
    </div>
    <div class="row">
        <ul class="client-list list-unstyled">
            <li>
                <img class="client-logo" src="assets/images/clients/comedycentral.jpg" alt="">
                <div class="client-info">
                    <p class="client-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada orci ex, quis ullamcorper est gravida quis.
                    </p>
                    <p class="client-link">
                        <a href="">comedycentral.com</a>
                    </p>
                </div>
            </li>

            <li>
                <img class="client-logo" src="assets/images/clients/breakmedia.jpg" alt="">
                <div class="client-info">
                    <p class="client-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada orci ex, quis ullamcorper est gravida quis.
                    </p>
                    <p class="client-link">
                        <a href="">breakmedia.com</a>
                    </p>
                </div>
            </li>

            <li>
                <img class="client-logo" src="assets/images/clients/cookie.png" alt="">
                <div class="client-info">
                    <p class="client-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada orci ex, quis ullamcorper est gravida quis.
                    </p>
                    <p class="client-link">
                        <a href="">cookie.com</a>
                    </p>
                </div>
            </li>

            <li>
                <img class="client-logo" src="assets/images/clients/endemol.jpg" alt="">
                <div class="client-info">
                    <p class="client-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada orci ex, quis ullamcorper est gravida quis.
                    </p>
                    <p class="client-link">
                        <a href="">endemol.com</a>
                    </p>
                </div>
            </li>

            <li>
                <img class="client-logo" src="assets/images/clients/cookie.png" alt="">
                <div class="client-info">
                    <p class="client-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada orci ex, quis ullamcorper est gravida quis.
                    </p>
                    <p class="client-link">
                        <a href="">cookie.com</a>
                    </p>
                </div>
            </li>

            <li>
                <img class="client-logo" src="assets/images/clients/endemol.jpg" alt="">
                <div class="client-info">
                    <p class="client-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada orci ex, quis ullamcorper est gravida quis.
                    </p>
                    <p class="client-link">
                        <a href="">endemol.com</a>
                    </p>
                </div>
            </li>

            <li>
                <img class="client-logo" src="assets/images/clients/comedycentral.jpg" alt="">
                <div class="client-info">
                    <p class="client-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada orci ex, quis ullamcorper est gravida quis.
                    </p>
                    <p class="client-link">
                        <a href="">comedycentral.com</a>
                    </p>
                </div>
            </li>

            <li>
                <img class="client-logo" src="assets/images/clients/breakmedia.jpg" alt="">
                <div class="client-info">
                    <p class="client-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada orci ex, quis ullamcorper est gravida quis.
                    </p>
                    <p class="client-link">
                        <a href="">breakmedia.com</a>
                    </p>
                </div>
            </li>

        </ul>
    </div>
</div>

<!-- <div class="divider" style="background-image:url(http://startuplab.no/content/uploads/2016/09/tise-compressed.jpg); background-position: center 51.0727%;"></div> -->



<div class="contact-us-widget " style="background: #eee; ">
    <div class="main-title text-center">
            <h2>Get in touch</h2>
            
        </div>
    <div class="row p0 text-center" >
        <div class="contact-box text-center col-6">
            <div class="contact-detail">info@morrist-street.com</div>
            <div class="contact-headline">Email Us At </div>
        </div>
        <div class="contact-box text-center col-6">
            <div class="contact-detail">+91 9569569569</div>
            <div class="contact-headline">Call Us At</div>
        </div>        
    </div>
</div>

