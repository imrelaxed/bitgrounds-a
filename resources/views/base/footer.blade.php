<footer>
<div class="footer-above {{ $footerClass or '' }}">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2 class="h2">Learn More</h2>
                <a href="bitgrounds.com">
                    <p>Why Bitgrounds?</p>
                </a>
                <a href="{{ url('/about') }}">
                    <p>About Us</p>
                </a>
                <a href="/pricing">
                    <p>Pricing</p>
                </a>

            </div>
            <div class="col-md-4">
                <h2 class="h2">Quick Nav</h2>
                <a href="/home">
                    <p>Dashboard</p>
                </a>
                <a href="{{ url('login') }}">
                    <p>Sign In</p>
                </a>
                <a href="{{ url('register') }}">
                    <p>Register</p>
                </a>

            </div>
            <div class="col-md-5">
                <h2 class="h2">Stay up to date</h2>
                <p class="text">
                    Leave your email for the latest news: We won’t spam you or go off topic.
                </p>
            <div class="row mail-chimp">
                <form action="mail-chimp" method="post" id="mc-subscribe-form" name="mc-subscribe-form" class="validate form-inline" style="display: inline" target="_blank">
                    <div class="form-group">
                        <input type="email" name="EMAIL" id="mce-EMAIL" placeholder="Email" class="form-control mx-sm-3">
                        <span class="input-group-btn">
                        <button class="btn btn-success">
                            <i class="fa fa-envelope-o"></i>
                        </button>
                    </span>
                    </div>
                </form>
            </div>


                <div class="social">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-below">
    <div class="container">
        <div class="pull-left">
            <p class="text">© {{ date('Y') }} {{ config('app.name') }} Web Hosting. All rights reserved.</p>
        </div>
        <div class="pull-right">
            <p class="text"><a href="/terms-of-use">Terms</a> | <a href="/privacy-policy">Privacy</a></p>

        </div>
    </div>
</div>
</footer>