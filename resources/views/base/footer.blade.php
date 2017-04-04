<footer>
<div class="footer-above {{ $footerClass or '' }}">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2 class="h2">Learn more</h2>
                <a href="#">
                    <p class="text">Why use Bitgrounds?</p>
                </a>
                <a href="#">
                    <p class="text">Documentation</p>
                </a>
                <a href="/about/">
                    <p class="text">About us</p>
                </a>
                <a href="#">
                    <p class="text">News</p>
                </a>
                <a href="/contact/">
                    <p class="text">Contact</p>
                </a>
            </div>
            <div class="col-md-4">
                <h2 class="h2">All things code</h2>
                <a href="/support/">
                    <p class="text">Support</p>
                </a>
                <a href="#">
                    <p class="text">Community</p>
                </a>
                <a href="#" target="_blank">
                    <p class="text">GitHub</p>
                </a>
                <a href="#" target="_blank">
                    <p class="text">Gitter</p>
                </a>
            </div>
            <div class="col-md-5">
                <h2 class="h2">Stay up to date</h2>
                <p class="text">
                    Leave your email for the latest news: We won’t spam you and won’t go off topic.
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
                    <p class="text">Follow us on: </p>
                    <div>
                        <a href="#" target="_blank">
                            <span class="fa fa-twitter"></span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-below">
    <div class="container">
        <div class="pull-left">
            <a href="/">{{ config('app.name') }}</a>
        </div>
        <div class="pull-right">

            <p class="text">© {{ date('Y') }} {{ config('app.name') }} Web Hosting. All rights reserved.</p>
        </div>
    </div>
</div>
</footer>