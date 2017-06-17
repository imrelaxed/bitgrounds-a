@extends('static')

@section('content')
    <h1>Learn More About Bitgrounds Web Hosting</h1>
    <p>Bitgrounds Web Hosting is a fairly new web hosting company founded just over one year ago in 2015, however just because the company is new it doesn't mean the experience necessary for an
    amazing offer isn't there. The team responsible for the launch of Bitgrounds consists of grizzled veterans from the IT, Web Hosting, Web Development and Internet Marketing industries bringing
    to the table over 20 years of experience managing and using web hosting services. We're hungry for success and trying hard to make positive splash in the web hosting industry.</p>

    <div class="col-md-12 text-center padding-fifty">
    <img src="img/datacenter-locations.png" alt="datacenter locations">
    </div>


        <div class="row padding-medium">
            <div class="col-md-3">
            <img class="img-thumbnail margin-small" src="img/support.jpg" alt="excellent web hosting support">
            </div>

                <div class="col-md-9">
                <h4 class="card-title">North American Support Team</h4>
                <p class="card-text">We have some of the most knowledgeable people in the business available to help you with your hosting issues.
                    Currently every person on our team is located in US or Canada and every customer support representative is fluent in English.
                    The hosting datacenter maintains a human presence 24 hours a day and 365 days a year, to guarantee that it's constantly maintained.
                    In the event of a technical incident, they will react immediately to ensure that your server is repaired as quickly as possible.
                </p>
            </div>

        </div>
        <div class="row padding-medium">
            <div class="col-md-3">
            <img class="img-thumbnail margin-small" src="img/fiber.jpg" alt="north american web hosting with low latency">
            </div>
            <div class="col-md-9">
                <h4 class="card-title">Nation Wide Fiber Network</h4>
                <p class="card-text">The network infrastructure behind our hosting servers guarantees high quality data transfers.
                    Connected directly to a proprietary nation-wide fiber network we are able to offer our customers ample bandwidth and low latency times.</p>
            </div>

        </div>
        <div class="row padding-medium">
            <div class="col-md-3">
            <img class="img-thumbnail margin-small" src="img/servers.jpg" alt="high performance web hosting">
            </div>
            <div class="col-md-9">
                <h4 class="card-title">Designed for Superior Hosting Performance</h4>
                <p class="card-text">
                    We have spent years designing our network and server functionality to ensure that we can offer much more than most hosts with the same resources.
                    Our hosting is powered by high powered Intel Xeon servers that use up to 12 cores of 3.6 Ghz processing power and 36 gigabytes of ECC (Error-correcting code) RAM memory.
                    This is a powerful machine but the way we use it for hosting is even more impressive than the specs.
                    We incorporated multiple bleeding edge technologies which our competitors haven't for one reason or an other (often satisfaction with the status quo).
                    Technologies like HTTP/2 which is the new internet standard being phased in to completly replace HTTP, it's up to 70% faster at serving sites and yet GoDaddy and other major providers are slow to upgrade their huge services.
                    Technologies such as LVE server resource allocation, which allows us to grant each user an exclusive chunk of the servers processing power that's always there for them to use regardless of other users activities.
                    We use Optimum Cache which is a hard drive technology used by less than half of web hosting companies, it allows us to cache parts of WordPress that never change and make WordPress run up to 43% faster on our servers.
                    We also use the exclusive LSAPI version PHP which runs circles around any other Apache PHP version, this means much faster php sites and much faster WordPress!
                    These technologies, and many others not listed for the sake of brevity, allow us to be more stable and to serve web site content at much higher speeds than our competitors.


                </p>
            </div>

        </div>
        <div class="row padding-medium">
            <div class="col-md-3">
            <img class="img-thumbnail margin-small" src="img/security.jpg" alt="web hosting server security">
            </div>
            <div class="col-md-9">
                <h4 class="card-title">Thousands of Hours Spent on Security, Redundancy and Stability</h4>
                <p class="card-text"> Our hosting servers are protected by dedicated 160gbs Anti-DDoS pipes. The hosting servers automatically back up all data off site every night and
                    any clients data can be restored with in a matter of hours. All content entering the hosting servers is subject to automatic malware and virus scans.
                    They are also equiped with an advanced hacker detection and mitigation system.
                   On the hardware side, throughout the routing infrastructure, all links are at least doubled at every routing point.
                    No less than two Cisco routers, each with two routing cards physically connect.
                    Diversity (double redundancy) is the minimum for fiber optic links and triversity (triple redundancy) is not uncommon.
                    Physical security is taken very seriously as well. The hosting datacenter is fitted with a fire detection and extinction system, as well as fire doors.
                    Power generators with an initial autonomy of 48hrs are in place to counteract any electrical supply failure.
                    To prevent any intrusions every boundary is secured using barbed-wire fencing. Video surveillance and movement detection systems are in continuous operation.
                    Only authorized personnel can gain entry using an RFID badging system.

                </p>
            </div>

        </div>

    <div class="into-row cta-b">
        <div class="intro-row">
            <div class="text-center">
                <h2><strong>100% Risk Free Trial</strong> 30 Day Money Back Guarantee</h2>
            </div>
            <div class="text-center margin-small">
                <a href="{{ url('register') }}" class="btn-alt btn-success">Get Started<span class="fa fa-arrow-right"></span></a>
            </div>

        </div>
    </div>


@endsection