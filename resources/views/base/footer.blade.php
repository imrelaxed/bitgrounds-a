<div class="lander-row lander-row--blue footer {{ $footerClass or '' }}">
    <div class="container">
        <div class="row">
            <div class="col col-3">
                <h2 class="h2">Learn more</h2>
                <a href="/why-use-vamp/why-use-vamp">
                    <p class="text">Why use Vamp?</p>
                </a>
                <a href="/documentation/how-vamp-works/architecture-and-components">
                    <p class="text">Documentation</p>
                </a>
                <a href="/about/">
                    <p class="text">About us</p>
                </a>
                <a href="/resources/news/">
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
                <a href="/resources/community/">
                    <p class="text">Community</p>
                </a>
                <a href="https://github.com/magneticio/vamp" target="_blank">
                    <p class="text">GitHub</p>
                </a>
                <a href="https://gitter.im/magneticio/vamp" target="_blank">
                    <p class="text">Gitter</p>
                </a>
            </div>
            <div class="col col-6">
                <h2 class="h2">Stay up to date</h2>
                <p class="text">
                    Leave your email for the latest news: We won’t spam you and won’t go off topic.
                </p>

                <form action="//magnetic.us9.list-manage.com/subscribe/post?u=c709b3ab8cce9e00d617e01b6&amp;id=c1465e21d0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form-inline" style="display: inline" target="_blank" novalidate="">
                    <div class="input-group">
                        <input type="email" name="EMAIL" id="mce-EMAIL" placeholder="Email">
                        <a onclick="$(this).closest('form').submit()" class="button button--red not-active">
                            <div class="button__icon button__icon--mail">
                            </div>
                        </a>
                    </div>
                </form>

                <!--<p class="text">-->
                <!--Or subscrice to our <a class="rss-feed-link" href="http://vamp.io/index.xml" target="_blank">RSS feed</a>-->
                <!--</p>-->


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
            <img class="vamp-bat" src="/img/003-Small-icons/Medium-blue/VAMP-Medium.svg" alt="">
            <p class="text">© {{ date('Y') }} {{ $app_settings->name or '' }}. All rights reserved.</p>
        </div>
    </div>
</div>
