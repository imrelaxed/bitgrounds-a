@extends('app')

@section('page-content')
<div class ="landing-page">
    <!--Header-->
    <header>
        <div class="container-fluid" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">

                        <h1 class="name">
                            Time for a better web hosting provider?
                        </h1>
                    <div class="container second">
                    <h4>
                        If you're unhappy with your previous web hosting provider you've come to the right place.
                        At Bitgrounds we pull out all stops to provide top of the line web hosting service.
                        We pledge to be fast, secure and to offer you a tech-savvy helping hand whenever you need it.
                        Try us risk free with our 30 day money back guarantee.
                        Our free migration service is included with all web hosting plans and makes it easy for anyone to transfer their Website to Bitgrounds.
                        Our team will transfer your existing website from your previous web host and optimize it for performance as our thank you for joining the Bitgrounds family!
                    </h4>
                    </div>

                    <div class="row">
                        <div class="hero-buttons">
                            <a href="{{ route('register') }}" class="btn btn-success">
                                GET A FREE MIGRATION RIGHT NOW
                            </a>

                            <p class="lead">or</p>

                            <a href="{{ url('about') }}" class="btn btn-primary">
                                Learn More
                            </a>
                        </div>
                    </div>




            <div class="row bottom-hero">

            </div>
        </div>
        </div>
        </div>
        </header>


        <!--Introduction Row-->

            <div class="container">
                <div class="intro-row">
                <div class="row">
                    <div class="col-md-4">
                        <img src="img/fast.png" alt="Ultra Fast Web Hosting" class="img-responsive">
                        <h2 class="h2">Ultra Fast</h2>
                        <p class="text">
                            Bitgrounds was engineered to be better than other web hosts and we put a lot of time and effort in to making sure that sites hosted with us load ultra fast.
                            We accomplish this by using the latest web server technologies such as the new http/2 protocol. We also allocate significantly larger server resource chunks per each user
                            when compared to other hosting companies.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="img/search-friendly1.png" alt="Search Engine Optimized Web Hosting" class="img-responsive">
                        <h2 class="h2">Search Engine Friendly</h2>
                        <p class="text">
                            Over the last several years Google has been giving higher ranking to sites which load faster and are more secure. Bitgrounds hosting
                            picked up on this trend and has been fully accommodating it with blazing fast servers for lightning quick page loads and FREE SSL Certificates for exceptional security.
                            We constantly improve our technology to stay up to date with Google's best practices.
                        </p>
                    </div>
                    <div class="col-md-4">
                       <img src="img/easy.png" alt="Easy Web Hosting" class="img-responsive">
                        <h2 class="h2">Easy To Use</h2>
                        <p class="text">
                            Hosting your web site with Bitgrounds easy very easy. We offer a huge knowledgebase of easy to follow information and video tutorials. And if you ever
                            run in to trouble you can rest easy knowing that live, friendly and knowledgeable human being is just a click away. A Bitgrounds
                            subscription includes access to one click installs of popular web software such as WordPress, Joomla, Drupal, etc.
                        </p>
                    </div>

                </div>
                <div class="row">
                    <div class="lander-buttons">
                        <a href="{{ url('about') }}" class="btn btn-outline-primary">
                            Learn More
                           <span class="fa fa-arrow-right"></span>
                        </a>
                    </div>
                </div>
            </div>
            </div>

                <div class="into-row cta">
                    <div class="container">
                        <div class="pull-left">
                            <h2><strong>100% Risk Free Trial</strong> 30 Day Money Back Guarantee</h2>
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('register') }}" class="btn btn-success">Get Started<span class="fa fa-arrow-right"></span></a>
                        </div>

                    </div>
                </div>


        <!--Features Row-->

            <div class="features">
                <div class="container">
                <div class="row">
                    <div class="text-center">
                        <h3 class="h3">Features</h3>
                        <h1 class="h1">What we offer</h1>
                    </div>
                </div>
                <div class="row">
<hr class="invisible">
                    <div class="col-md-4">
                            <span class="fa fa-wordpress fa-x"></span>
                            <p class="text">
                                Built for Amazing WordPress Performance
                            </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa fa-users fa-x"></span>
                            <p class="text">
                                Support that's knowledgeable, friendly and fluent
                            </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa fa-lock fa-x"></span>
                            <p class="text">
                                Free SSL Certificates (GoDaddy Charges 60$)
                            </p>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4">
                        <span class="fa fa-server fa-x"></span>
                            <p class="text">
                                Virtual Private Server level performance on Shared Hosting
                            </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa fa-spinner fa-x"></span>
                            <p class="text">
                                Free Web Site Builder and One Click Installs of popular apps like Wordpress
                            </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa fa-shield fa-x"></span>
                            <p class="text">
                                Super secure with daily backups and an advanced hacker detection system
                            </p>
                    </div>
                </div>
                <div class="row">
                    <div class="center-block lander-buttons">
                        <a href="{{ url('about') }}" class="btn btn-outline-primary">
                           Learn More
                            <span class="fa fa-arrow-right"></span>
                        </a>
                    </div>
                </div>
            </div>
            </div>

        <!--Namedrop Row-->
            <div class="container namedrop">
                <div class="row">
                    <div class="text-center">
                        <h3 class="h3">We Use Cutting Edge Tech To Be Better</h3>
                        <h1 class="h1">Bitgrounds Is Powered By</h1>
                    </div>
                </div>
<hr class="invisible">


                <div class="row logos-row">
                    <div class="col-md-2">
                        <img src="/img/powered/http2.jpg" alt="http2">

                    </div>
                    <div class="col-md-2">
                        <img src="/img/powered/https.jpg" alt="https">

                    </div>
                    <div class="col-md-2">
                      <img src="/img/powered/cloudlinux.jpg" alt="CloudLinux">
                    </div>
                    <div class="col-md-2">
                        <img src="/img/powered/softaculous.jpg" alt="Softaculous Auto Installer">
                    </div>

                    <div class="col-md-2">
                       <img src="/img/powered/letsencrypt.jpg" alt="Lets Encrypt">

                    </div>
                    <div class="col-md-2">
                       <img src="/img/powered/directadmin.jpg" alt="DirectAdmin">
                    </div>
                </div>
            </div>
</div>
@endsection