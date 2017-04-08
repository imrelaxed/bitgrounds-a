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


                    <div class="row">
                        <div class="hero-buttons">
                            <a href="{{ route('register') }}" class="btn btn-success">
                                GET A FREE MIGRATION RIGHT NOW
                            </a>

                            <p class="lead">or</p>

                            <a href="{{ url('/about') }}" class="btn btn-primary">
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
                        <a href="#" class="img-responsive"><img src="img/001-Big-icons/illustration-01.svg" alt="Easy canary releasing"></a>
                        <h2 class="h2">Fast</h2>
                        <p class="text">
                            Percentage and condition based routing for A/B testing and canary releasing. Prevent performance issues and service disruption with gradual rollouts and upgrades.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <a href="documentation/using-vamp/sla/" class="img-responsive"><img src="img/001-Big-icons/illustration-02.svg" alt="Powerful autoscaling"></a>
                        <h2 class="h2">Secure</h2>
                        <p class="text">
                            Integrated events, SLA and workflows engine. Enable metric-driven canary releasing, autoscaling and other optimisation patterns. Easy to extend with custom workflow scripts.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <a href="documentation/installation/overview" class="img-responsive"><img src="img/001-Big-icons/illustration-03.svg" alt="Container agnostic deploys"></a>
                        <h2 class="h2">Friendly</h2>
                        <p class="text">
                            Integrates with all major container systems to avoid vendor lock-in. YAML based configurations, RESTful API and graphical UI to manage deployments and operations.
                        </p>
                    </div>

                </div>
                <div class="row">
                    <div class="lander-buttons">
                        <a href="/why-use-vamp/why-use-vamp" class="btn btn-success">
                            Learn More
                           <span class="fa fa-arrow-circle-o-right"></span>
                        </a>
                    </div>
                </div>
            </div>
            </div>

        <!--Features Row-->
            <div class="features">
                <div class="row">
                    <div class="text-center">
                        <h3 class="h3">Features</h3>
                        <h1 class="h1">What do we offer</h1>
                    </div>
                </div>
<div class="container">
                <div class="row">
<hr class="invisible">
                    <div class="col-md-4">
                            <img src="/img/003-Small-icons/block-03.svg" alt="">
                            <p class="text">
                                Apache 2.0 opensource license
                            </p>
                    </div>
                    <div class="col-md-4">
                            <img src="/img/003-Small-icons/block-03.svg" alt="">
                            <p class="text">
                                Manages dependencies, environment variables and resources
                            </p>
                    </div>
                    <div class="col-md-4">
                            <img src="/img/003-Small-icons/block-03.svg" alt="">
                            <p class="text">
                                Scalable, high available and modular architecture
                            </p>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4">
                            <img src="/img/003-Small-icons/block-03.svg" alt="">
                            <p class="text">
                                Support for port based, virtual hosts and external service discovery
                            </p>
                    </div>
                    <div class="col-md-4">
                            <img src="/img/003-Small-icons/block-03.svg" alt="">
                            <p class="text">
                                Vamp Runner for integration testing and educational purposes
                            </p>
                    </div>
                    <div class="col-md-4">
                            <img src="/img/003-Small-icons/block-03.svg" alt="">
                            <p class="text">
                                Canary releasing also works without containers and microservices
                            </p>
                    </div>
                </div>
                <div class="row">
                    <div class="center-block lander-buttons">
                        <a href="#" class="btn btn-success">
                           Learn More
                            <span class="fa fa-arrow-right"></span>
                        </a>
                    </div>
                </div>
            </div>
            </div>

        <!--Namedrop Row-->
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <h3 class="h3">Technology Partners</h3>
                        <h1 class="h1">Vamp works with</h1>
                    </div>
                </div>

                <div class="row logos-row">
                    <div class="col-md-2">
                        <a href="documentation/installation/kubernetes/"><img src="/img/004-Logos/001-dark-blue/Google-vertical.svg" alt="Google"></a>
                    </div>
                    <div class="col-md-2">
                        <a href="documentation/how-vamp-works/architecture-and-components/"><img src="/img/004-Logos/001-dark-blue/Amazon-vertical.svg" alt="Amazon AWS"></a>
                    </div>
                    <div class="col-md-2">
                        <a href="documentation/installation/azure-container-service/"><img src="/img/004-Logos/001-dark-blue/Microsoft-vertical.svg" alt="Microsoft Azure"></a>
                    </div>
                    <div class="col-md-2">
                        <a href="documentation/installation/kubernetes/"><img src="/img/004-Logos/001-dark-blue/Kubernetes-vertical.svg" alt="Kubernetes"></a>
                    </div>

                    <div class="col-md-2">
                        <a href="documentation/installation/dcos/"><img src="/img/004-Logos/001-dark-blue/DCOS-vertical.svg" alt="DC/OS"></a>
                    </div>
                    <div class="col-md-2">
                        <a href="documentation/installation/rancher/"><img src="/img/004-Logos/001-dark-blue/Rancher-vertical.svg" alt="Rancher"></a>
                    </div>
                </div>
            </div>
</div>
@endsection