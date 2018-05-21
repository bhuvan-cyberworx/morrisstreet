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
    letter-spacing: 2.5px;
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
    font-size: 20px;
    font-family: montserrat;
    text-align: left;
    font-weight: 300;
    line-height: 1.8;
    margin-bottom: 50px;
    margin-top: 20px;
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
        <h2>HOW WE INVEST.</h2>
        <p class="main-title-desc">
            Cras ut augue pretium, viverra nunc in, luctus odio.
        </p>
    </div>

    <div class="col-wrapper">
        <div class="ingress">
            <p>Investment Banking provides expertise across products, industries and regions. Our team approach to client service enables our bankers to play an important role in building relationships and executing transactions.</p>
        </div>

        <div class="">

            <ul class="feature-list list-unstyled">
                <div class="feature-list-headline">
                    <h2>Investment Banking’s key areas of focus include:</h2>
                </div>   
                <li>
                    <span>Industries:</span> 
                    Financial institutions, technology, media, healthcare, industrial, consumer and retail, natural resources, and public sector
                </li> 

                <li>
                    <span>Products:</span> 
                    Equity, leveraged finance, debt, financial advisory, and mergers and acquisitions
                </li> 

                <li>
                    <span>Regions:</span> 
                    Americas, Europe, Asia, and Japan
                </li> 

            </ul>

        </div>
    </div>


</div>


<div class="divider" style="background-image:url(http://startuplab.no/content/uploads/2016/09/tise-compressed.jpg); background-position: center 51.0727%;"></div>

<div class="client-section container module">
    <div class="main-title text-center">
        <h2>Our Featured Clients</h2>
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

<div class="divider" style="background-image:url(http://startuplab.no/content/uploads/2016/09/tise-compressed.jpg); background-position: center 51.0727%;"></div>

<div class="module container team-section">
    <div class="main-title text-center">
        <h2>Our Team</h2>
        <p class="main-title-desc mb8">
            Cras ut augue pretium, viverra nunc in, luctus odio.
        </p>
    </div>
    <div class="row">
        <ul class="member-list list-unstyled">
            <!-- Team Member Starts Here -->
            <li class="member-box">
                <div class="member-image">
                    <img src="http://startuplab.no/content/uploads/2016/09/RolvAssev-300x300.jpg" alt="">
                </div>
                <div class="member-info">
                    <p class="member-name">Robert Knox</p>
                    <p class="member-designation">Senior Advisor and Mentor</p>
                    <p class="member-description">Mr. Robert Knox is the Senior Managing Director and Co-Founder of Cornerstone Equity Investors, L.L.C., a New York-based private equity firm.  The investment principals of Cornerstone have funded more than 100 companies through middle market buyouts and expansion financing since 1984. Mr. Knox has served on the boards of more than 25 public and private companies and not-for profit institutions.</p>
                    <a href="" class="member-read-more">Read More</a>
                    <div class="member-contact">
                        <p>Email<a href="" class="member-email">robert@morris-street.com</a>
                        <p>Phone<a href="" class="member-phone">9856965854</a></p>
                    </div> 
                </div>  
            </li>
            <!-- Team Member Ends Here -->

            <!-- Team Member Starts Here -->
            <li class="member-box">
                <div class="member-image">
                    <img src="http://startuplab.no/content/uploads/2016/09/RolvAssev-300x300.jpg" alt="">
                </div>
                <div class="member-info">
                    <p class="member-name">Rohit Tiwari</p>
                    <p class="member-designation">Chief Executive Officer & Managing Director</p>
                    <p class="member-description">More than 19 Years of experience in Investing and managing Global Trading & Capital Market Businesses. Prior to MSA Rohit was the Managing Director and CEO of AUM Capital, a Investment Bank with 200 employees and a pan India presence. 
                    Prior to AUM Capital, Rohit served as the Managing Director and Global Head of Linear Equity Derivatives at ING Financial Services based in ....</p>
                    <a href="" class="member-read-more">Read More</a>
                    <div class="member-contact">
                        <p>Email<a href="" class="member-email">Rohit@morris-street.com</a>
                        <p>Phone<a href="" class="member-phone">9856965854</a></p>
                    </div> 
                </div>  
            </li>
            <!-- Team Member Ends Here -->

            <!-- Team Member Starts Here -->
            <li class="member-box">
                <div class="member-image">
                    <img src="http://startuplab.no/content/uploads/2016/09/RolvAssev-300x300.jpg" alt="">
                </div>
                <div class="member-info">
                    <p class="member-name">P Krishnamurthy</p>
                    <p class="member-designation">Advisor </p>
                    <p class="member-description">Mr. P. Krishnamurthy has worked as Vice-Chairman, JM Morgan Stanley. A Chartered Accountant from Kolkata, Mr. Krishnamurthy has an experience of nearly 33 years in Corporate Management and Strategy, Restructuring, Mergers & Acquisitions, International Business and Joint Ventures, Financial Management & Banking. His expertise includes managing ....</p>
                    <a href="" class="member-read-more">Read More</a>
                    <div class="member-contact">
                        <p>Email<a href="" class="member-email">Krishnamurthy@morris-street.com</a>
                        <p>Phone<a href="" class="member-phone">268989596</a></p>
                    </div> 
                </div>  
            </li>
            <!-- Team Member Ends Here -->

            <!-- Team Member Starts Here -->
            <li class="member-box">
                <div class="member-image">
                    <img src="http://startuplab.no/content/uploads/2016/09/RolvAssev-300x300.jpg" alt="">
                </div>
                <div class="member-info">
                    <p class="member-name">Nitin Bhatia</p>
                    <p class="member-designation">Board Member and Head of Investment Banking & Capital Markets </p>
                    <p class="member-description">Nitin currently is guiding MSA’s Investment Banking and Corporate finance ventures. Prior to MSA, Nitin was with Tata Capital's Investment Banking team where he was responsible for various sectors such as Infrastructure, Industrials, Hospitality and Metals and Mining. 

                    Prior to Tata Capital Nitin was at Babcock and Brown’s Infrastructure Fund and....</p>
                    <a href="" class="member-read-more">Read More</a>
                    <div class="member-contact">
                        <p>Email<a href="" class="member-email">Nitinbhatia@morris-street.com</a>
                        <p>Phone<a href="" class="member-phone">123457990</a></p>
                    </div> 
                </div>  
            </li>
            <!-- Team Member Ends Here -->

            <!-- Team Member Starts Here -->
            <li class="member-box">
                <div class="member-image">
                    <img src="http://startuplab.no/content/uploads/2016/09/RolvAssev-300x300.jpg" alt="">
                </div>
                <div class="member-info">
                    <p class="member-name">Nitin Chaturvedi</p>
                    <p class="member-designation">CFO & Head of Media & Entertainment Group</p>
                    <p class="member-description">Over 14 Years of work experience in diversified industries.  

                    Apart from his role as the Chief Financial Officer, Nitin also manages our critical and growing Media & Entertainment Group. In the company's brief history Nitin has successfully led the development of licensing, distribution and marketing of new productions with broadcasters and companies in India.....</p>
                    <a href="" class="member-read-more">Read More</a>
                    <div class="member-contact">
                        <p>Email<a href="" class="member-email">Nitin@morris-street.com</a>
                        <p>Phone<a href="" class="member-phone">2963562626</a></p>
                    </div> 
                </div>  
            </li>
            <!-- Team Member Ends Here -->

             <!-- Team Member Starts Here -->
            <li class="member-box">
                <div class="member-image">
                    <img src="http://startuplab.no/content/uploads/2016/09/RolvAssev-300x300.jpg" alt="">
                </div>
                <div class="member-info">
                    <p class="member-name">Anil George</p>
                    <p class="member-designation">Investment Banking & Capital Markets Advisory</p>
                    <p class="member-description">With a background which includes strategic roles within MNC’s, Management Consultancy’s and Startups, Anil brings almost 20 years of global experience in business transformation, operations and technology management across diverse industries.

                    He began his career with Kraft Foods in the US in 1993, and held various.....</p>
                    <a href="" class="member-read-more">Read More</a>
                    <div class="member-contact">
                        <p>Email<a href="" class="member-email">Anil@morris-street.com</a>
                        <p>Phone<a href="" class="member-phone">2963562626</a></p>
                    </div> 
                </div>  
            </li>
            <!-- Team Member Ends Here -->



        </ul>

    </div>
</div>