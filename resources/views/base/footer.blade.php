<div class="lander-row lander-row--blue footer {{ $footerClass or '' }}">
    <div class="container">
        <div class="row-alt">
            <div class="col col-3">
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
            <div class="col col-6">
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
            <div class="col col-6">
                <h2 class="h2">Stay up to date</h2>
                <p class="text">
                    Leave your email for the latest news: We won’t spam you and won’t go off topic.
                </p>

                <form action="mail-chimp" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form-inline" style="display: inline" target="_blank" novalidate="">
                    <div class="input-groupy">
                        <input type="email" name="EMAIL" id="mce-EMAIL" placeholder="Email">
                        <a onclick="$(this).closest('form').submit()" class="button button--red not-active">
                            <div class="button__icon button__icon--mail">
                            </div>
                        </a>
                    </div>
                </form>



                <div class="social-buttons">
                    <p class="text">Follow us on: </p>
                    <div class="social-icons">
                        <a href="#" target="_blank">
                            <i class="fa fa-2x fa-twitter"></i><!--<img src="/img/003-Small-icons/Dark-blue/Twitter.svg" alt="">-->
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-bottom lander-row--blue">
    <div class="container">
        <div class="part">
            <a href="/">Bitgrounds</a>
        </div>
        <div class="part">

            <p class="text">© {{ date('Y') }} {{ $app_settings->name or '' }}. All rights reserved.</p>
        </div>
    </div>
</div>
