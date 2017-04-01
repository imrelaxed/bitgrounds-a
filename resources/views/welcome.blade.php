@extends('app')

@section('page-content')

    <!--HEROSPACE ROW-->
    <div class="page">
        <div class="lander-row lander-row--blue hero-space">
            <div class="container">

                <div class="row-alt">
                    <div class="col">
                        <h1 class="header center">
                            Time for a better web hosting provider?
                        </h1>

                    </div>
                </div>

                <div class="row-alt">
                    <div class="col center">
                        <div class="hero-space-buttons">
                            <a href="/documentation/installation/hello-world" class="button button--red">
                                MIGRATE NOW
                            </a>

                            <p class="text dark-it-up">or</p>

                            <a href="/why-use-vamp/why-use-vamp" class="button button--grey">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row-alt">
                    <div class="col center">
                        <br>
                        <br>
                        <br>
                        <br>
                        <a href="#"><img class="laptop" src="" alt=""></a>
                    </div>
                </div>

            </div>

            <div class="bottom-background">
                <div class="left-pixels">
                    <img src="img/herospace/pixels-header-left.gif" alt="">
                </div>
                <div class="right-pixels">
                    <img src="img/herospace/pixels-header-right.gif" alt="">
                </div>
            </div>
        </div>

        <!--ABOUT ROW-->
        <div id="about-row" class="lander-row lander-row--white">
            <div class="container">
                <div class="row-alt">
                    <div class="col center">
                        <a href="documentation/tutorials/run-a-canary-release/" class="image--smaller"><img src="img/001-Big-icons/illustration-01.svg" alt="Easy canary releasing"></a>
                        <h2 class="h2">Fast</h2>
                        <p class="text">
                            Percentage and condition based routing for A/B testing and canary releasing. Prevent performance issues and service disruption with gradual rollouts and upgrades.
                        </p>
                    </div>
                    <div class="col center">
                        <a href="documentation/using-vamp/sla/" class="image--smaller second-icon"><img src="img/001-Big-icons/illustration-02.svg" alt="Powerful autoscaling"></a>
                        <h2 class="h2">Secure</h2>
                        <p class="text">
                            Integrated events, SLA and workflows engine. Enable metric-driven canary releasing, autoscaling and other optimisation patterns. Easy to extend with custom workflow scripts.
                        </p>
                    </div>
                    <div class="col center">
                        <a href="documentation/installation/overview" class="image--smaller third-icon"><img src="img/001-Big-icons/illustration-03.svg" alt="Container agnostic deploys"></a>
                        <h2 class="h2">Friendly</h2>
                        <p class="text">
                            Integrates with all major container systems to avoid vendor lock-in. YAML based configurations, RESTful API and graphical UI to manage deployments and operations.
                        </p>
                    </div>
                </div>
                <div class="row-alt">
                    <div class="col center">
                        <a href="/why-use-vamp/why-use-vamp" class="button button--red--ghost">
                            <p>Learn More</p>
                            <div class="button__icon button__icon--arrow">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <!--FEATURES LIST ROW 01-->
        <div class="lander-row lander-row--grey features-top">
            <div class="container">
                <div class="row-alt">
                    <div class="col center">
                        <h3 class="h3">Features</h3>
                        <h1 class="h1">What more do we offer</h1>
                    </div>
                </div>

                <div class="row-alt row-alt--wrap">

                    <div class="col col-5">
                        <div class="lower-offer-item">
                            <img src="/img/003-Small-icons/block-03.svg" alt="">
                            <p class="text">
                                Apache 2.0 opensource license
                            </p>
                        </div>
                    </div>
                    <div class="col col-5">
                        <div class="lower-offer-item">
                            <img src="/img/003-Small-icons/block-03.svg" alt="">
                            <p class="text">
                                Manages dependencies, environment variables and resources
                            </p>
                        </div>
                    </div>
                    <div class="col col-5">
                        <div class="lower-offer-item">
                            <img src="/img/003-Small-icons/block-03.svg" alt="">
                            <p class="text">
                                Scalable, high available and modular architecture
                            </p>
                        </div>
                    </div>
                    <div class="col col-5">
                        <div class="lower-offer-item">
                            <img src="/img/003-Small-icons/block-03.svg" alt="">
                            <p class="text">
                                Support for port based, virtual hosts and external service discovery
                            </p>
                        </div>
                    </div>
                    <div class="col col-5">
                        <div class="lower-offer-item">
                            <img src="/img/003-Small-icons/block-03.svg" alt="">
                            <p class="text">
                                Vamp Runner for integration testing and educational purposes
                            </p>
                        </div>
                    </div>
                    <div class="col col-5">
                        <div class="lower-offer-item">
                            <img src="/img/003-Small-icons/block-03.svg" alt="">
                            <p class="text">
                                Canary releasing also works without containers and microservices
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row-alt">
                    <div class="col center">
                        <a href="/why-use-vamp/why-use-vamp" class="button button--red">
                            <p>Learn More</p>
                            <div class="button__icon button__icon--arrow-white">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!--NAMEDROP ROW-->
        <div id="partners-row" class="lander-row lander-row--white">
            <div class="container">
                <div class="row-alt">
                    <div class="col center">
                        <h3 class="h3">Technology Partners</h3>
                        <h1 class="h1">Vamp works with</h1>
                    </div>
                </div>

                <div class="row-alt logos-row">
                    <div class="col center">
                        <a href="documentation/installation/kubernetes/"><img src="/img/004-Logos/001-dark-blue/Google-vertical.svg" alt="Google"></a>
                    </div>
                    <div class="col center">
                        <a href="documentation/how-vamp-works/architecture-and-components/"><img src="/img/004-Logos/001-dark-blue/Amazon-vertical.svg" alt="Amazon AWS"></a>
                    </div>
                    <div class="col center">
                        <a href="documentation/installation/azure-container-service/"><img src="/img/004-Logos/001-dark-blue/Microsoft-vertical.svg" alt="Microsoft Azure"></a>
                    </div>
                    <div class="col center">
                        <a href="documentation/installation/kubernetes/"><img src="/img/004-Logos/001-dark-blue/Kubernetes-vertical.svg" alt="Kubernetes"></a>
                    </div>

                    <div class="col center">
                        <a href="documentation/installation/dcos/"><img src="/img/004-Logos/001-dark-blue/DCOS-vertical.svg" alt="DC/OS"></a>
                    </div>
                    <div class="col center">
                        <a href="documentation/installation/rancher/"><img src="/img/004-Logos/001-dark-blue/Rancher-vertical.svg" alt="Rancher"></a>
                    </div>
                    <div class="col center">
                        <a href="documentation/how-vamp-works/architecture-and-components"><img src="/img/004-Logos/001-dark-blue/Docker-vertical-member.svg" alt="Docker"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection