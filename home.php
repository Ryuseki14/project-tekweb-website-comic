<?php
    require "session.php";
?>
<html>

<head>
    <style class="anchorjs"></style>
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/docs/5.0/assets/css/docs.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">

    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    </link>
    <link rel='stylesheet' id='google-fonts-css'
        href='https://fonts.googleapis.com/css?family=Lato%3A400%2C500%2C600%2C700%7CPoppins%3A400%2C500%2C600%2C700&#038;ver=2.6.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='style-css' href='https://asura.gg/wp-content/themes/mangastream/style.css?ver=1.1.4'
        type='text/css' media='all' />
    <link rel='stylesheet' id='lightstyle-css'
        href='https://asura.gg/wp-content/themes/mangastream/assets/css/lightmode.css?ver=1.1.4' type='text/css'
        media='all' />
    <link rel='stylesheet' id='fontawesome-css'
        href='https://asura.gg/wp-content/themes/mangastream/assets/css/font-awesome.min.css?ver=5.13.0' type='text/css'
        media='all' />
    <link rel='stylesheet' id='owl-carousel-css'
        href='https://asura.gg/wp-content/themes/mangastream/assets/css/owl.carousel.css?ver=1.0.0' type='text/css'
        media='all' />
    <script>
        var max_bookmark = 200;
        var max_history = 10;
        var defaultTheme = "darkmode";
    </script>
    <script type='text/javascript' src='jquery.js' id='jquery-js'></script>
    <script type='text/javascript' src='bookmark.js' id='bookmarks_script-js'></script>
    <script type='text/javascript' src='history.js' id='history_script-js'></script>
    <script type='text/javascript' src='function.js' id='tsfn_scripts-js'></script>
    <script type='text/javascript' src='carousel.js' id='owl-carousel-js'></script>
    <link rel="https://api.w.org/" href="https://asura.gg/wp-json/" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://asura.gg/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://asura.gg/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 6.1.1" />


    <style>
        #main-menu,
        .slider:before,
        .serieslist.pop ul li.topone .limit .bw .ctr,
        .releases .vl,
        .scrollToTop,
        #sidebar #bm-history li a:hover,
        .hpage a,
        #footer .footermenu,
        .footer-az .az-list li a,
        .bigcontent .infox .spe span:before,
        .bxcl ul li span.dt a,
        .bookmark,
        .commentx #submit,
        .bs .bsx .limit .type,
        .radiox input:checked~.checkmarkx,
        .advancedsearch button.searchz,
        .lightmode .nav_apb a:hover,
        .lista a,
        .lightmode .lista a:hover,
        .nextprev a,
        .disqusmen #commentform #submit,
        .blogbox .btitle .vl,
        .bigblogt span a {
            background: hsl(166, 92%, 41%)
        }

        .pagination span.page-numbers.current,
        .quickfilter .filters .filter.submit button,
        #sidebar .section .ts-wpop-series-gen .ts-wpop-nav-tabs li.active a,
        #gallery.owl-loaded .owl-dots .owl-dot.active span {
            background: hsl(166, 92%, 41%) !important
        }

        #sidebar .section #searchform #searchsubmit,
        .series-gen .nav-tabs li.active a,
        .lastend .inepcx a,
        .nav_apb a:hover,
        #top-menu li a:hover,
        .readingnav.rnavbot .readingnavbot .readingbar .readingprogress,
        .lightmode .bigcontent .infox .wd-full .mgen a:hover,
        .lightmode .bxcl ul li .chbox:hover,
        .lightmode ul.taxindex li a:hover,
        .comment-list .comment-body .reply a:hover,
        .topmobile,
        .bxcl ul::-webkit-scrollbar-thumb,
        .lightmode .slider:before,
        .quickfilter .filters .filter .genrez::-webkit-scrollbar-thumb {
            background: hsl(166, 92%, 41%)
        }

        .lightmode #sidebar .section h4,
        .lightmode .serieslist ul li .ctr,
        .listupd .utao .uta .luf ul li,
        .lightmode .bs .bsx:hover .tt,
        .soralist ul,
        a:hover,
        .lightmode .blogbox .btitle h3,
        .lightmode .blogbox .btitle h1,
        .bxcl ul li .lchx a:visited,
        .listupd .utao .uta .luf ul li a:visited,
        .lightmode .pagination a:hover,
        .lightmode a:hover,
        #sidebar .serieslist ul li .leftseries h2 a:hover,
        .bs.styletere .epxs,
        .bxcl ul li .dt a,
        .lightmode .bigcontent .infox .wd-full .mgen a,
        .lightmode #sidebar .serieslist ul li .leftseries h2 a:hover,
        .comment-list .comment-body .reply a,
        .bxcl ul li .eph-num a:visited,
        .headpost .allc a {
            color: hsl(166, 92%, 41%)
        }

        .bxcl ul li .lchx a:visited,
        .listupd .utao .uta .luf ul li a:visited {
            color: hsl(166, 92%, 41%) !important
        }

        .lightmode .serieslist ul li .ctr,
        .advancedsearch button.searchz,
        .lista a,
        .lightmode .lista a:hover,
        .blogbox .boxlist .bma .bmb .bmba,
        .page.blog .thumb,
        #sidebar .section #searchform #searchsubmit,
        .lightmode .bigcontent .infox .wd-full .mgen a,
        .lightmode .bxcl ul li .chbox:hover,
        .comment-list .comment-body .reply a {
            border-color: hsl(166, 92%, 41%)
        }

        .hpage a:hover {
            color: #FFF !important;
        }

        @media only screen and (max-width:800px) {

            .lightmode.black .th,
            .lightmode .th,
            .th,
            .surprise {
                background: hsl(166, 92%, 41%)
            }

            #main-menu {
                background: rgba(28, 28, 28, 0.95);
            }
        }
    </style>

    <style type="text/css" id="wp-custom-css">
        /* Remove z-index from sidebar */
        #sidebar {
            z-index: unset;
        }

        /* For fullscreen chap reader */
        @media only screen and (max-width: 800px) {
            #readerarea.rdminimal {
                margin: 00px 00px;
            }
        }

        .status.Completed {
            background-color: green !important;
        }

        #content {
            background: transparent !important;
        }

        /* For search bar right align */
        .th .searchx {
            transform: translatex(142.0%);
        }

        @media screen and (max-width: 1200px) {
            .th .searchx {
                transform: translatex(100%);
            }
        }

        @media screen and (max-width: 800px) {
            .th .searchx {
                transform: unset;
            }
        }

        /* For subscription css */
        .page iframe {
            min-height: unset;
        }

        .rcp-table {
            width: 100%;
            margin-bottom: 50px;
        }

        .rcp-table td {
            text-align: center;
        }

        p#rcp_submit_wrap {
            display: grid;
            justify-content: center;
        }

        input[name="rcp_submit_registration"] {
            padding: 6px 12px;
            border-radius: 10px;
            outline: none;
            border: none;
            background: #9b51e0;
            color: white;
        }

        /* Decrease width of adfree */
        @media screen and (max-width: 600px) {
            .code-block-25 {
                width: 80% !important;
            }
        }

        @media screen and (max-width: 800px) {
            .th .centernav.bound header {
                display: initial !important;
                margin: 5px 10px 5px 0 !important;
            }

            .th .centernav.bound header .logox {
                max-width: 40px !important;
            }

            .th .centernav.bound header .logox span {
                max-width: 40px !important;
            }

            .th .centernav.bound .searchx {
                transform: translatex(20%);
                width: 50% !important;
            }
        }

        @media screen and (max-width: 450px) {
            .th .centernav.bound .searchx {
                transform: unset;
            }
        }
    </style>
    <style>
        .ai-viewports {
            --ai: 1;
        }

        .ai-viewport-3 {
            display: none !important;
        }

        .ai-viewport-2 {
            display: none !important;
        }

        .ai-viewport-1 {
            display: inherit !important;
        }

        .ai-viewport-0 {
            display: none !important;
        }

        @media (min-width: 768px) and (max-width: 979px) {
            .ai-viewport-1 {
                display: none !important;
            }

            .ai-viewport-2 {
                display: inherit !important;
            }
        }

        @media (max-width: 767px) {
            .ai-viewport-1 {
                display: none !important;
            }

            .ai-viewport-3 {
                display: inherit !important;
            }
        }

        .ai-rotate {
            position: relative;
        }

        .ai-rotate-hidden {
            visibility: hidden;
        }

        .ai-rotate-hidden-2 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .ai-list-data,
        .ai-ip-data,
        .ai-filter-check,
        .ai-fallback,
        .ai-list-block,
        .ai-list-block-ip,
        .ai-list-block-filter {
            visibility: hidden;
            position: absolute;
            width: 50%;
            height: 1px;
            top: -1000px;
            z-index: -9999;
            margin: 0px !important;
        }

        .ai-list-data,
        .ai-ip-data,
        .ai-filter-check,
        .ai-fallback {
            min-width: 1px;
        }
    </style>

    <script>
        $(document).ready(function () {
            $(".shme").click(function () {
                $(".mm").toggleClass("shwx");
            });
            $(".topmobile").click(function () {
                $(".topmobcon").toggleClass("topmobshow");
            });
        });
    </script>
    <script async="" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3979769194574777"
        crossorigin="anonymous" data-checked-head="true"></script>

</head>

<body>
    <div id="nav-placeholder">
    </div>

    <div id="content">

        <div class="wrapper">
            <div class="postbody">

                <div class="loop owl-carousel full"></div>
                <div class="bixbox">
                    <div class="releases">
                        <h2>Comic List</h2>
                    </div>
                    <div class="listupd">

                        <div class="utao styletwo">
                            <div class="uta">
                                <div class="imgu">
                                    <a rel="109196" class="series" href="content_section.php" title="Komik Banana">
                                        <img src="https://wallpaperaccess.com/full/2040920.jpg"
                                            class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail"
                                            loading="lazy" />
                                        <span class="hot">H</span>
                                    </a>
                                </div>
                                <div class="luf">
                                    <a class="series" href="content_section.php" title="Komik Banana">
                                        <h4>Komik Banana</h4>
                                    </a>
                                    <ul class="Manhwa">
                                        <li><a href="#">Chapter 3</a><span>4 days ago</span></li>
                                        <li><a href="#">Chapter 2</a><span>2 weeks ago</span></li>
                                        <li><a href="Comics.php">Chapter 1</a><span>2 weeks ago</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="utao styletwo">
                            <div class="uta">
                                <div class="imgu">
                                    <a rel="109196" class="series" href="#" title="EXAMPLE">
                                        <img src="https://e0.pxfuel.com/wallpapers/485/585/desktop-wallpaper-twice-more-and-more-twice-portrait.jpg" class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail"
                                            class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail"
                                            loading="lazy" />
                                        <span class="hot">H</span>
                                    </a>
                                </div>
                                <div class="luf">
                                    <a class="series" href="#" title="EXAMPLE">
                                        <h4>EXAMPLE</h4>
                                    </a>
                                    <ul class="Manhwa">
                                        <li><a href="#">Chapter 42</a><span>4 days ago</span></li>
                                        <li><a href="#">Chapter 41</a><span>2 weeks ago</span></li>
                                        <li><a href="#">Chapter 40</a><span>2 weeks ago</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="utao styletwo">
                            <div class="uta">
                                <div class="imgu">
                                    <a rel="109196" class="series" href="#" title="EXAMPLE">
                                        <img src="https://i.pinimg.com/236x/16/ed/4b/16ed4b6b9ffc28cf0615db3fb6c125e0--twice-lockscreen-twice-wallpapers.jpg"
                                            class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail"
                                            loading="lazy" />
                                        <span class="hot">H</span>
                                    </a>
                                </div>
                                <div class="luf">
                                    <a class="series" href="#" title="EXAMPLE">
                                        <h4>EXAMPLE</h4>
                                    </a>
                                    <ul class="Manhwa">
                                        <li><a href="#">Chapter 42</a><span>4 days ago</span></li>
                                        <li><a href="#">Chapter 41</a><span>2 weeks ago</span></li>
                                        <li><a href="#">Chapter 40</a><span>2 weeks ago</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="utao styletwo">
                            <div class="uta">
                                <div class="imgu">
                                    <a rel="109196" class="series" href="#" title="EXAMPLE">
                                        <img src="https://e0.pxfuel.com/wallpapers/547/189/desktop-wallpaper-twice-fancy-twice-portrait-thumbnail.jpg"
                                            class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail"
                                            loading="lazy" />
                                        <span class="hot">H</span>
                                    </a>
                                </div>
                                <div class="luf">
                                    <a class="series" href="#" title="EXAMPLE">
                                        <h4>EXAMPLE</h4>
                                    </a>
                                    <ul class="Manhwa">
                                        <li><a href="#">Chapter 42</a><span>4 days ago</span></li>
                                        <li><a href="#">Chapter 41</a><span>2 weeks ago</span></li>
                                        <li><a href="#">Chapter 40</a><span>2 weeks ago</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="utao styletwo">
                            <div class="uta">
                                <div class="imgu">
                                    <a rel="109196" class="series" href="#" title="EXAMPLE">
                                        <img src="https://wallpaperaccess.com/full/2405692.jpg"
                                            class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail"
                                            loading="lazy" />
                                        <span class="hot">H</span>
                                    </a>
                                </div>
                                <div class="luf">
                                    <a class="series" href="#" title="EXAMPLE">
                                        <h4>EXAMPLE</h4>
                                    </a>
                                    <ul class="Manhwa">
                                        <li><a href="#">Chapter 42</a><span>4 days ago</span></li>
                                        <li><a href="#">Chapter 41</a><span>2 weeks ago</span></li>
                                        <li><a href="#">Chapter 40</a><span>2 weeks ago</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="utao styletwo">
                            <div class="uta">
                                <div class="imgu">
                                    <a rel="109196" class="series" href="#" title="EXAMPLE">
                                        <img src="https://pbs.twimg.com/media/DrUH_KWUUAIC0d6.jpg"
                                            class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail"
                                            loading="lazy" />
                                        <span class="hot">H</span>
                                    </a>
                                </div>
                                <div class="luf">
                                    <a class="series" href="#" title="EXAMPLE">
                                        <h4>EXAMPLE</h4>
                                    </a>
                                    <ul class="Manhwa">
                                        <li><a href="#">Chapter 42</a><span>4 days ago</span></li>
                                        <li><a href="#">Chapter 41</a><span>2 weeks ago</span></li>
                                        <li><a href="#">Chapter 40</a><span>2 weeks ago</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class='ai-viewports ai-viewport-1 ai-viewport-2 ai-insert-9-57523441'
                            style='margin: 8px auto; text-align: center; display: block; clear: both;'
                            data-insertion-position='prepend' data-selector='.ai-insert-9-57523441'
                            data-insertion-no-dbg
                            data-code='PGRpdiBjbGFzcz0nY29kZS1ibG9jayBjb2RlLWJsb2NrLTknIHN0eWxlPSdtYXJnaW46IDhweCBhdXRvOyB0ZXh0LWFsaWduOiBjZW50ZXI7IGRpc3BsYXk6IGJsb2NrOyBjbGVhcjogYm90aDsnPgo8IS0tIERlc2t0b3AsIFRhYmxldCAvLyBCZXR3ZWVuICdMYXRlc3QgVXBkYXRlJyAtLT4KCjxkaXYgZGF0YS1wdy1kZXNrPSJsZWFkZXJib2FyZF9idGYiPgo8L2Rpdj48L2Rpdj4K'
                            data-block='9'></div>

                        <div class='ai-viewports ai-viewport-3 ai-insert-10-97881011'
                            style='margin: 8px auto; text-align: center; display: block; clear: both;'
                            data-insertion-position='prepend' data-selector='.ai-insert-10-97881011'
                            data-insertion-no-dbg
                            data-code='PGRpdiBjbGFzcz0nY29kZS1ibG9jayBjb2RlLWJsb2NrLTEwJyBzdHlsZT0nbWFyZ2luOiA4cHggYXV0bzsgdGV4dC1hbGlnbjogY2VudGVyOyBkaXNwbGF5OiBibG9jazsgY2xlYXI6IGJvdGg7Jz4KPCEtLSBQaG9uZSAvLyBCZXR3ZWVuICdMYXRlc3QgVXBkYXRlJyAtLT4KCjxkaXYgZGF0YS1wdy1tb2JpPSJtZWRfcmVjdF9idGYiPgo8L2Rpdj48L2Rpdj4K'
                            data-block='10'></div>

                        <div class="utao styletwo">
                            <div class="uta">
                                <div class="imgu">
                                    <a rel="109196" class="series" href="#" title="EXAMPLE">
                                        <img src="https://i.pinimg.com/236x/d6/4a/9a/d64a9a09e788944ddb6b8bbe274b5915--twice-wallpapers-bigbang.jpg"
                                            class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail"
                                            loading="lazy" />
                                        <span class="hot">H</span>
                                    </a>
                                </div>
                                <div class="luf">
                                    <a class="series" href="#" title="EXAMPLE">
                                        <h4>EXAMPLE</h4>
                                    </a>
                                    <ul class="Manhwa">
                                        <li><a href="#">Chapter 42</a><span>4 days ago</span></li>
                                        <li><a href="#">Chapter 41</a><span>2 weeks ago</span></li>
                                        <li><a href="#">Chapter 40</a><span>2 weeks ago</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="utao styletwo">
                            <div class="uta">
                                <div class="imgu">
                                    <a rel="109196" class="series" href="#" title="EXAMPLE">
                                        <img src="https://i.pinimg.com/550x/1d/ee/37/1dee37ededdff2e2221a51d5a7fdc7c4.jpg"
                                            class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail"
                                            loading="lazy" />
                                        <span class="hot">H</span>
                                    </a>
                                </div>
                                <div class="luf">
                                    <a class="series" href="#" title="EXAMPLE">
                                        <h4>EXAMPLE</h4>
                                    </a>
                                    <ul class="Manhwa">
                                        <li><a href="#">Chapter 23</a><span>4 days ago</span></li>
                                        <li><a href="#">Chapter 22</a><span>2 weeks ago</span></li>
                                        <li><a href="#">Chapter 21</a><span>2 weeks ago</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class='ai-viewports ai-viewport-3 ai-insert-12-62197644'
                            style='margin: 8px auto; text-align: center; display: block; clear: both;'
                            data-insertion-position='prepend' data-selector='.ai-insert-12-62197644'
                            data-insertion-no-dbg
                            data-code='PGRpdiBjbGFzcz0nY29kZS1ibG9jayBjb2RlLWJsb2NrLTEyJyBzdHlsZT0nbWFyZ2luOiA4cHggYXV0bzsgdGV4dC1hbGlnbjogY2VudGVyOyBkaXNwbGF5OiBibG9jazsgY2xlYXI6IGJvdGg7Jz4KPCEtLSBQaG9uZSAvLyBFbmQgb2YgJ0xhdGVzdCBVcGRhdGUnIC0tPgoKPGRpdiBkYXRhLXB3LW1vYmk9Im1lZF9yZWN0X2J0ZiI+CjwvZGl2PjwvZGl2Pgo='
                            data-block='12'>
                        </div>

                        <div class="hpage">
                            <a href="#" class="r">Next <i class="fa fa-chevron-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <div id="sidebar">
            <div class="section">
                <div class='ai-viewports ai-viewport-1 ai-viewport-2 ai-insert-13-73938693'
                    style='margin: 8px auto; text-align: center; display: block; clear: both;'
                    data-insertion-position='prepend' data-selector='.ai-insert-13-73938693' data-insertion-no-dbg
                    data-code='PGRpdiBjbGFzcz0nY29kZS1ibG9jayBjb2RlLWJsb2NrLTEzJyBzdHlsZT0nbWFyZ2luOiA4cHggYXV0bzsgdGV4dC1hbGlnbjogY2VudGVyOyBkaXNwbGF5OiBibG9jazsgY2xlYXI6IGJvdGg7Jz4KPCEtLSBEZXNrdG9wLCBUYWJsZXQgLy8gUmlnaHQgc2lkZSBvZiAnSG9tZXBhZ2UnIChTdGlja3kpIC0tPgoKPGRpdiBkYXRhLXB3LWRlc2s9Im1lZF9yZWN0X2J0ZiI+CjwvZGl2PgoKPCEtLSBFTkQgSE9NRVBBR0UgLS0+PC9kaXY+Cg=='
                    data-block='13'></div>

            </div>
            <div class="section">
                <div class="releases">
                    <h3>Popular</h3>
                </div>
                <div class="ts-wpop-series-gen">
                    <ul class="ts-wpop-nav-tabs">
                        <li class="active"><a class="ts-wpop-tab" data-range="weekly">Weekly</a></li>
                        <li><a class="ts-wpop-tab" data-range="monthly">Monthly</a></li>
                        <li><a class="ts-wpop-tab" data-range="alltime">All</a></li>
                    </ul>
                </div>

                <div id="wpop-items">
                    <div class='serieslist pop wpop wpop-weekly'>
                        <ul>
                            <li>
                                <div class="ctr">1</div>
                                <div class="imgseries">
                                    <a class="series" href="content_section.php" rel="121231">
                                        <img src="https://wallpaperaccess.com/full/2040920.jpg"
                                            class="ts-post-image wp-post-image attachment-medium size-medium"
                                            loading="lazy" /> </a>
                                </div>
                                <div class="leftseries">
                                    <h2>
                                        <a class="series" href="content_section.php" rel="121231">Komik Banana</a>
                                    </h2>
                                    <span><b>Genres</b>: <a href="https://asura.gg/genres/action/" rel="tag">Action</a>,
                                        <a href="https://asura.gg/genres/adventure/" rel="tag">Adventure</a>, <a
                                            href="https://asura.gg/genres/fantasy/" rel="tag">Fantasy</a>, <a
                                            href="https://asura.gg/genres/shounen/" rel="tag">Shounen</a>
                                    </span>

                                </div>
                            </li>
                            <li>
                                <div class="ctr">2</div>
                                <div class="imgseries">
                                    <a class="series" href="#" rel="112859">
                                        <img src="https://e0.pxfuel.com/wallpapers/485/585/desktop-wallpaper-twice-more-and-more-twice-portrait.jpg" class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail"
                                            class="ts-post-image wp-post-image attachment-medium size-medium"
                                            loading="lazy" />
                                    </a>
                                </div>
                                <div class="leftseries">
                                    <h2>
                                        <a class="series" href="#" rel="112859">EXAMPLE</a>
                                    </h2>
                                    <span><b>Genres</b>:
                                        <a href="https://asura.gg/genres/action/" rel="tag">Action</a>,
                                        <a href="https://asura.gg/genres/fantasy/" rel="tag">Fantasy</a>,
                                        <a href="https://asura.gg/genres/genius-mc/" rel="tag">Genius MC</a>,
                                        <a href="https://asura.gg/genres/martial-arts/" rel="tag">Martial Arts</a>,
                                        <a href="https://asura.gg/genres/murim/" rel="tag">Murim</a>
                                    </span>

                                </div>
                            </li>
                            <li>
                                <div class="ctr">3</div>
                                <div class="imgseries">
                                    <a class="series" href="#" rel="119179">
                                        <img src="https://e0.pxfuel.com/wallpapers/485/585/desktop-wallpaper-twice-more-and-more-twice-portrait.jpg" class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail"
                                            class="ts-post-image wp-post-image attachment-medium size-medium"
                                            loading="lazy" /> </a>
                                </div>
                                <div class="leftseries">
                                    <h2>
                                        <a class="series" href="#" rel="119179">EXAMPLE</a>
                                    </h2>
                                    <span><b>Genres</b>: <a href="https://asura.gg/genres/action/" rel="tag">Action</a>,
                                        <a href="https://asura.gg/genres/adventure/" rel="tag">Adventure</a>, <a
                                            href="https://asura.gg/genres/fantasy/" rel="tag">Fantasy</a>, <a
                                            href="https://asura.gg/genres/martial-arts/" rel="tag">Martial Arts</a>, <a
                                            href="https://asura.gg/genres/reincarnation/"
                                            rel="tag">Reincarnation</a></span>

                                </div>
                            </li>
                            <li>
                                <div class="ctr">4</div>
                                <div class="imgseries">
                                    <a class="series" href="#" rel="122537">
                                        <img src="https://e0.pxfuel.com/wallpapers/485/585/desktop-wallpaper-twice-more-and-more-twice-portrait.jpg" class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail"
                                            class="ts-post-image wp-post-image attachment-medium size-medium"
                                            loading="lazy" /> </a>
                                </div>
                                <div class="leftseries">
                                    <h2>
                                        <a class="series" href="#" rel="122537">EXAMPLE</a>
                                    </h2>
                                    <span><b>Genres</b>: <a href="https://asura.gg/genres/action/" rel="tag">Action</a>,
                                        <a href="https://asura.gg/genres/adventure/" rel="tag">Adventure</a>, <a
                                            href="https://asura.gg/genres/fantasy/" rel="tag">Fantasy</a>, <a
                                            href="https://asura.gg/genres/overpowered/" rel="tag">Overpowered</a></span>

                                </div>
                            </li>
                            <li>
                                <div class="ctr">5</div>
                                <div class="imgseries">
                                    <a class="series" href="#" rel="120598">
                                        <img src="https://e0.pxfuel.com/wallpapers/485/585/desktop-wallpaper-twice-more-and-more-twice-portrait.jpg" class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail"
                                            class="ts-post-image wp-post-image attachment-medium size-medium"
                                            loading="lazy" /> </a>
                                </div>
                                <div class="leftseries">
                                    <h2>
                                        <a class="series" href="#" rel="120598">EXAMPLE</a>
                                    </h2>
                                    <span><b>Genres</b>: <a href="https://asura.gg/genres/action/" rel="tag">Action</a>,
                                        <a href="https://asura.gg/genres/adventure/" rel="tag">Adventure</a>, <a
                                            href="https://asura.gg/genres/fantasy/" rel="tag">Fantasy</a>, <a
                                            href="https://asura.gg/genres/shounen/" rel="tag">Shounen</a></span>

                                </div>
                            </li>


                        </ul>
                    </div>


                    <div class='serieslist pop wpop wpop-monthly'>
                        <ul>
                            <li>
                                <div class="ctr">1</div>
                                <div class="imgseries">
                                    <a class="series" href="content_section.php" rel="40871">
                                        <img src="https://wallpaperaccess.com/full/2040920.jpg"
                                            class="ts-post-image wp-post-image attachment-medium size-medium"
                                            loading="lazy" /> </a>
                                </div>
                                <div class="leftseries">
                                    <h2>
                                        <a class="series" href="content_section.php" rel="40871">Komik Banana</a>
                                    </h2>
                                    <span><b>Genres</b>: <a href="https://asura.gg/genres/adventure/"
                                            rel="tag">Adventure</a>, <a href="https://asura.gg/genres/comedy/"
                                            rel="tag">Comedy</a>, <a href="https://asura.gg/genres/fantasy/"
                                            rel="tag">Fantasy</a>, <a href="https://asura.gg/genres/martial-arts/"
                                            rel="tag">Martial Arts</a>, <a href="https://asura.gg/genres/rebirth/"
                                            rel="tag">Rebirth</a>, <a href="https://asura.gg/genres/shounen/"
                                            rel="tag">Shounen</a></span>

                                </div>
                            </li>
                            <li>
                                <div class="ctr">2</div>
                                <div class="imgseries">
                                    <a class="series" href="#" rel="107248">
                                        <img src="https://e0.pxfuel.com/wallpapers/485/585/desktop-wallpaper-twice-more-and-more-twice-portrait.jpg" class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail"
                                            class="ts-post-image wp-post-image attachment-medium size-medium"
                                            loading="lazy" /> </a>
                                </div>
                                <div class="leftseries">
                                    <h2>
                                        <a class="series" href="#" rel="107248">EXAMPLE</a>
                                    </h2>
                                    <span><b>Genres</b>: <a href="https://asura.gg/genres/action/" rel="tag">Action</a>,
                                        <a href="https://asura.gg/genres/adventure/" rel="tag">Adventure</a>, <a
                                            href="https://asura.gg/genres/fantasy/" rel="tag">Fantasy</a>, <a
                                            href="https://asura.gg/genres/shounen/" rel="tag">Shounen</a></span>

                                </div>
                            </li>
                            <li>
                                <div class="ctr">3</div>
                                <div class="imgseries">
                                    <a class="series" href="#" rel="49050">
                                        <img src="https://e0.pxfuel.com/wallpapers/485/585/desktop-wallpaper-twice-more-and-more-twice-portrait.jpg" class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail"
                                            class="ts-post-image wp-post-image attachment-medium size-medium"
                                            loading="lazy" /> </a>
                                </div>
                                <div class="leftseries">
                                    <h2>
                                        <a class="series" href="#" rel="49050">EXAMPLE</a>
                                    </h2>
                                    <span><b>Genres</b>: <a href="https://asura.gg/genres/fantasy/"
                                            rel="tag">Fantasy</a>,
                                        <a href="https://asura.gg/genres/overpowered/" rel="tag">Overpowered</a>, <a
                                            href="https://asura.gg/genres/rebirth/" rel="tag">Rebirth</a>, <a
                                            href="https://asura.gg/genres/shounen/" rel="tag">Shounen</a></span>

                                </div>
                            </li>
                            <li>
                                <div class="ctr">4</div>
                                <div class="imgseries">
                                    <a class="series" href="#" rel="112859">
                                        <img src="https://e0.pxfuel.com/wallpapers/485/585/desktop-wallpaper-twice-more-and-more-twice-portrait.jpg" class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail"
                                            class="ts-post-image wp-post-image attachment-medium size-medium"
                                            loading="lazy" /> </a>
                                </div>
                                <div class="leftseries">
                                    <h2>
                                        <a class="series" href="#" rel="112859">EXAMPLE</a>
                                    </h2>
                                    <span><b>Genres</b>: <a href="https://asura.gg/genres/action/" rel="tag">Action</a>,
                                        <a href="https://asura.gg/genres/fantasy/" rel="tag">Fantasy</a>, <a
                                            href="https://asura.gg/genres/genius-mc/" rel="tag">Genius MC</a>, <a
                                            href="https://asura.gg/genres/martial-arts/" rel="tag">Martial Arts</a>, <a
                                            href="https://asura.gg/genres/murim/" rel="tag">Murim</a></span>

                                </div>
                            </li>
                            <li>
                                <div class="ctr">5</div>
                                <div class="imgseries">
                                    <a class="series" href="#" rel="116341">
                                        <img src="https://e0.pxfuel.com/wallpapers/485/585/desktop-wallpaper-twice-more-and-more-twice-portrait.jpg" class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail"
                                            class="ts-post-image wp-post-image attachment-medium size-medium"
                                            loading="lazy" /> </a>
                                </div>
                                <div class="leftseries">
                                    <h2>
                                        <a class="series" href="#" rel="116341">EXAMPLE</a>
                                    </h2>
                                    <span><b>Genres</b>: <a href="https://asura.gg/genres/action/" rel="tag">Action</a>,
                                        <a href="https://asura.gg/genres/adventure/" rel="tag">Adventure</a>, <a
                                            href="https://asura.gg/genres/comedy/" rel="tag">Comedy</a>, <a
                                            href="https://asura.gg/genres/fantasy/" rel="tag">Fantasy</a></span>

                                </div>
                            </li>
                        </ul>
                    </div>


                    <div class='serieslist pop wpop wpop-alltime'>
                        <ul>
                            <li>
                                <div class="ctr">1</div>
                                <div class="imgseries">
                                    <a class="series" href="content_section.php" rel="40871">
                                        <img src="https://wallpaperaccess.com/full/2040920.jpg"
                                            class="ts-post-image wp-post-image attachment-medium size-medium"
                                            loading="lazy" /> </a>
                                </div>
                                <div class="leftseries">
                                    <h2>
                                        <a class="series" href="content_section.php" rel="40871">Komik Banana</a>
                                    </h2>
                                    <span><b>Genres</b>: <a href="https://asura.gg/genres/adventure/"
                                            rel="tag">Adventure</a>, <a href="https://asura.gg/genres/comedy/"
                                            rel="tag">Comedy</a>, <a href="https://asura.gg/genres/fantasy/"
                                            rel="tag">Fantasy</a>, <a href="https://asura.gg/genres/martial-arts/"
                                            rel="tag">Martial Arts</a>, <a href="https://asura.gg/genres/rebirth/"
                                            rel="tag">Rebirth</a>, <a href="https://asura.gg/genres/shounen/"
                                            rel="tag">Shounen</a></span>

                                </div>
                            </li>
                            <li>
                                <div class="ctr">2</div>
                                <div class="imgseries">
                                    <a class="series" href="#" rel="49050">
                                        <img src="https://e0.pxfuel.com/wallpapers/485/585/desktop-wallpaper-twice-more-and-more-twice-portrait.jpg" class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail"
                                            class="ts-post-image wp-post-image attachment-medium size-medium"
                                            loading="lazy" /> </a>
                                </div>
                                <div class="leftseries">
                                    <h2>
                                        <a class="series" href="#" rel="49050">EXAMPLE</a>
                                    </h2>
                                    <span><b>Genres</b>: <a href="https://asura.gg/genres/fantasy/"
                                            rel="tag">Fantasy</a>,
                                        <a href="https://asura.gg/genres/overpowered/" rel="tag">Overpowered</a>, <a
                                            href="https://asura.gg/genres/rebirth/" rel="tag">Rebirth</a>, <a
                                            href="https://asura.gg/genres/shounen/" rel="tag">Shounen</a></span>
                                </div>
                            </li>
                            <li>
                                <div class="ctr">3</div>
                                <div class="imgseries">
                                    <a class="series" href="#" rel="61390">
                                        <img src="https://e0.pxfuel.com/wallpapers/485/585/desktop-wallpaper-twice-more-and-more-twice-portrait.jpg" class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail"
                                            class="ts-post-image wp-post-image attachment-medium size-medium"
                                            loading="lazy" /> </a>
                                </div>
                                <div class="leftseries">
                                    <h2>
                                        <a class="series" href="#" rel="61390">EXAMPLE</a>
                                    </h2>
                                    <span><b>Genres</b>: <a href="https://asura.gg/genres/action/" rel="tag">Action</a>,
                                        <a href="https://asura.gg/genres/adventure/" rel="tag">Adventure</a>, <a
                                            href="https://asura.gg/genres/fantasy/" rel="tag">Fantasy</a>, <a
                                            href="https://asura.gg/genres/magic/" rel="tag">Magic</a>, <a
                                            href="https://asura.gg/genres/returner/" rel="tag">Returner</a>, <a
                                            href="https://asura.gg/genres/shounen/" rel="tag">Shounen</a></span>

                                </div>
                            </li>
                            <li>
                                <div class="ctr">4</div>
                                <div class="imgseries">
                                    <a class="series" href="#" rel="38049">
                                        <img src="https://e0.pxfuel.com/wallpapers/485/585/desktop-wallpaper-twice-more-and-more-twice-portrait.jpg" class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail"
                                            class="ts-post-image wp-post-image attachment-medium size-medium"
                                            loading="lazy" /> </a>
                                </div>
                                <div class="leftseries">
                                    <h2>
                                        <a class="series" href="#" rel="38049">EXAMPLE</a>
                                    </h2>
                                    <span><b>Genres</b>: <a href="https://asura.gg/genres/action/" rel="tag">Action</a>,
                                        <a href="https://asura.gg/genres/adventure/" rel="tag">Adventure</a>, <a
                                            href="https://asura.gg/genres/fantasy/" rel="tag">Fantasy</a>, <a
                                            href="https://asura.gg/genres/mystery/" rel="tag">Mystery</a></span>

                                </div>
                            </li>
                            <li>
                                <div class="ctr">5</div>
                                <div class="imgseries">
                                    <a class="series" href="#" rel="52313">
                                        <img src="https://e0.pxfuel.com/wallpapers/485/585/desktop-wallpaper-twice-more-and-more-twice-portrait.jpg" class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail"
                                            class="ts-post-image wp-post-image attachment-medium size-medium"
                                            loading="lazy" /></a>
                                </div>
                                <div class="leftseries">
                                    <h2>
                                        <a class="series" href="#" rel="52313">EXAMPLE</a>
                                    </h2>
                                    <span><b>Genres</b>: <a href="https://asura.gg/genres/action/" rel="tag">Action</a>,
                                        <a href="https://asura.gg/genres/adventure/" rel="tag">Adventure</a>, <a
                                            href="https://asura.gg/genres/comedy/" rel="tag">Comedy</a>, <a
                                            href="https://asura.gg/genres/fantasy/" rel="tag">Fantasy</a>, <a
                                            href="https://asura.gg/genres/game/" rel="tag">Game</a>, <a
                                            href="https://asura.gg/genres/tower/" rel="tag">tower</a></span>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <script>ts_popular_widget.run(1668786928);</script>
            <div class="section ai-sticky-widget">
                <div class='ai-viewports ai-viewport-1 ai-viewport-2 ai-insert-13-43999644'
                    style='margin: 8px auto; text-align: center; display: block; clear: both;'
                    data-insertion-position='prepend' data-selector='.ai-insert-13-43999644' data-insertion-no-dbg
                    data-code='PGRpdiBjbGFzcz0nY29kZS1ibG9jayBjb2RlLWJsb2NrLTEzJyBzdHlsZT0nbWFyZ2luOiA4cHggYXV0bzsgdGV4dC1hbGlnbjogY2VudGVyOyBkaXNwbGF5OiBibG9jazsgY2xlYXI6IGJvdGg7Jz4KPCEtLSBEZXNrdG9wLCBUYWJsZXQgLy8gUmlnaHQgc2lkZSBvZiAnSG9tZXBhZ2UnIChTdGlja3kpIC0tPgoKPGRpdiBkYXRhLXB3LWRlc2s9Im1lZF9yZWN0X2J0ZiI+CjwvZGl2PgoKPCEtLSBFTkQgSE9NRVBBR0UgLS0+PC9kaXY+Cg=='
                    data-block='13'></div>

            </div>
        </div>
    </div>
    </div>
    <a href="#" class="scrollToTop">
        <span class="fas fa-angle-up"></span>
    </a>


    <div id="footer">
        <footer id="colophon" class="site-footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter"
            role="contentinfo">
    </div>
    <div class="footercopyright">
        <div class="copyright marx">
            <div class="footer-logo"><img
                    src="data:image/jpeg;base64,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"
                    title="" alt=""></div>
            <div class="txt">
            </div>
        </div>
    </div>


    <script>
        var welcomebar_frontjs = {
            'ajaxurl': 'https://asura.gg/wp-admin/admin-ajax.php',
            'days': 'Days',
            'hours': 'Hours',
            'minutes': 'Minutes',
            'seconds': 'Seconds',
            'ajax_nonce': 'd4898c3240',
        };

        jQuery(document).ready(function ($) {
            var adminBarHeight = 0;
            if ($("#wpadminbar").length != 0) {
                var adminBarHeight = $('#wpadminbar').height();
            }
            var mysticky_welcomebar_height = adminBarHeight + jQuery('.mysticky-welcomebar-fixed').outerHeight();
            if (jQuery('.mysticky-welcomebar-fixed').data('position') == 'top') {
                jQuery('.mysticky-welcomebar-entry-effect-slide-in.mysticky-welcomebar-fixed').css('top', '-' + mysticky_welcomebar_height + 'px');
            } else {
                jQuery('.mysticky-welcomebar-entry-effect-slide-in.mysticky-welcomebar-fixed').css('bottom', '-' + mysticky_welcomebar_height + 'px');
            }
            var divi_topbar_height = $('.et_fixed_nav #top-header').outerHeight();
            var divi_total_height = mysticky_welcomebar_height + divi_topbar_height;
            var welcombar_aftersubmission = $('.mysticky-welcomebar-fixed').data('aftersubmission');
            if (welcombar_aftersubmission == 'dont_show_welcomebar') {
                var welcomebar_storage = localStorage.getItem("welcomebar_close");
            } else if (welcombar_aftersubmission == 'show_welcomebar_next_visit') {
                var welcomebar_storage = sessionStorage.getItem("welcomebar_close");
            } else {
                sessionStorage.removeItem('welcomebar_close');
                localStorage.removeItem('welcomebar_close');
                var welcomebar_storage = null;
            }
            if (welcomebar_storage === null) {

                var after_trigger = jQuery('.mysticky-welcomebar-fixed').data('after-triger');

                jQuery('body').addClass('mysticky-welcomebar-apper');

                if (after_trigger == 'after_a_few_seconds') {

                    if ($('.mysticky-welcomebar-fixed').hasClass('mysticky-welcomebar-display-desktop')) {
                        if ($(window).width() > 767) {
                            var trigger_sec = jQuery('.mysticky-welcomebar-fixed').data('triger-sec') * 1000;
                            var welcombar_position = $('.mysticky-welcomebar-fixed').data('position');
                            var welcombar_height = $('.mysticky-welcomebar-fixed').outerHeight();

                            setTimeout(function () {
                                jQuery('.mysticky-welcomebar-fixed').addClass('mysticky-welcomebar-animation');
                                $('.mysticky-welcomebar-fixed').addClass('entry-effect');
                                if (welcombar_position == 'top') {

                                    jQuery('.mysticky-welcomebar-fixed').addClass('mysticky-welcomebar-animation');
                                    jQuery('.mysticky-welcomebar-fixed').css('top', (adminBarHeight + 0) + 'px');
                                    jQuery('.mysticky-welcomebar-fixed').css('opacity', '1');
                                    $('html').css('margin-bottom', '');
                                    jQuery('#mysticky_divi_style').remove();
                                    jQuery('.et_fixed_nav #top-header').css('top', welcombar_height + 'px');
                                    jQuery('head').append('<style id="mysticky_divi_style" type="text/css">.et_fixed_nav #main-header {top: ' + welcombar_height + 'px !important}.et_fixed_nav #top-header + #main-header{top: ' + divi_total_height + 'px !important}</style>');
                                    $('html').attr('style', 'margin-top: ' + mysticky_welcomebar_height + 'px !important');
                                    $('#mysticky-nav').css('top', mysticky_welcomebar_height + 'px');
                                } else {
                                    jQuery('.mysticky-welcomebar-fixed').css('bottom', '0');
                                    jQuery('.mysticky-welcomebar-fixed').css('opacity', '1');
                                    $('html').css('margin-top', '');
                                    jQuery('#mysticky_divi_style').remove();
                                    jQuery('.et_fixed_nav #top-header').css('top', '');
                                    $('html').attr('style', 'margin-bottom: ' + mysticky_welcomebar_height + 'px !important');
                                }
                            }, trigger_sec);
                        }
                    }
                }
                if ($(window).width() < 767) {
                    if (after_trigger == 'after_a_few_seconds') {
                        if ($('.mysticky-welcomebar-fixed').hasClass('mysticky-welcomebar-display-mobile')) {
                            var trigger_sec = jQuery('.mysticky-welcomebar-fixed').data('triger-sec') * 1000;
                            var welcombar_position = $('.mysticky-welcomebar-fixed').data('position');
                            var welcombar_height = $('.mysticky-welcomebar-fixed').outerHeight();
                            setTimeout(function () {
                                jQuery('.mysticky-welcomebar-fixed').addClass('mysticky-welcomebar-animation');
                                $('.mysticky-welcomebar-fixed').addClass('entry-effect');
                                jQuery('#mysticky_divi_style').remove();
                                jQuery('.et_fixed_nav #top-header').css('top', '');
                                if (welcombar_position == 'top') {
                                    jQuery('.mysticky-welcomebar-fixed').css('top', (adminBarHeight + 0) + 'px');
                                    jQuery('.mysticky-welcomebar-fixed').css('opacity', '1');
                                    $('html').css('margin-bottom', '');
                                    $('html').attr('style', 'margin-top: ' + mysticky_welcomebar_height + 'px !important');
                                    $('#mysticky-nav').css('top', mysticky_welcomebar_height + 'px');
                                } else {
                                    jQuery('.mysticky-welcomebar-fixed').css('bottom', '0');
                                    jQuery('.mysticky-welcomebar-fixed').css('opacity', '1');
                                    $('html').css('margin-top', '');
                                    $('html').attr('style', 'margin-bottom: ' + mysticky_welcomebar_height + 'px !important');
                                }
                            }, trigger_sec);
                        }
                    }
                }
                mystickyelements_present();
            }
            $(window).resize(function () {
                var mysticky_welcomebar_height = jQuery('.mysticky-welcomebar-fixed').outerHeight();
                if (welcombar_aftersubmission == 'dont_show_welcomebar') {
                    var welcomebar_storage = localStorage.getItem("welcomebar_close");
                } else if (welcombar_aftersubmission == 'show_welcomebar_next_visit') {
                    var welcomebar_storage = sessionStorage.getItem("welcomebar_close");
                } else {
                    sessionStorage.removeItem('welcomebar_close');
                    localStorage.removeItem('welcomebar_close');
                    var welcomebar_storage = null;
                }
                if (welcomebar_storage === null) {
                    var after_trigger = jQuery('.mysticky-welcomebar-fixed').data('after-triger');
                    if (!$('.mysticky-welcomebar-fixed').hasClass('mysticky-welcomebar-notapper')) {
                        jQuery('body').addClass('mysticky-welcomebar-apper');
                    } else {
                        jQuery('body').removeClass('mysticky-welcomebar-apper');
                    }
                    if (after_trigger == 'after_a_few_seconds') {
                        var trigger_sec = jQuery('.mysticky-welcomebar-fixed').data('triger-sec') * 1000;
                        var welcombar_position = $('.mysticky-welcomebar-fixed').data('position');
                        var welcombar_height = $('.mysticky-welcomebar-fixed').outerHeight();
                        if ($(window).width() < 767) {
                            if ($('.mysticky-welcomebar-fixed').hasClass('mysticky-welcomebar-display-mobile')) {
                                setTimeout(function () {
                                    jQuery('.mysticky-welcomebar-fixed').addClass('mysticky-welcomebar-animation');
                                    $('.mysticky-welcomebar-fixed').addClass('entry-effect');
                                    jQuery('#mysticky_divi_style').remove();
                                    jQuery('.et_fixed_nav #top-header').css('top', '');
                                    if (welcombar_position == 'top') {
                                        jQuery('.mysticky-welcomebar-fixed').css('top', (adminBarHeight + 0) + 'px');
                                        jQuery('.mysticky-welcomebar-fixed').css('opacity', '1');
                                        $('html').css('margin-bottom', '');
                                        $('html').attr('style', 'margin-top: ' + mysticky_welcomebar_height + 'px !important');
                                        $('.mysticky-welcomebar-apper #mysticky-nav').css('top', mysticky_welcomebar_height + 'px');
                                    } else {
                                        jQuery('.mysticky-welcomebar-fixed').css('bottom', '0');
                                        jQuery('.mysticky-welcomebar-fixed').css('opacity', '1');
                                        $('html').css('margin-top', '');
                                        $('html').attr('style', 'margin-bottom: ' + mysticky_welcomebar_height + 'px !important');
                                    }
                                }, trigger_sec);
                            }
                        } else {
                            if ($('.mysticky-welcomebar-fixed').hasClass('mysticky-welcomebar-display-desktop')) {
                                setTimeout(function () {
                                    jQuery('.mysticky-welcomebar-fixed').addClass('mysticky-welcomebar-animation');
                                    $('.mysticky-welcomebar-fixed').addClass('entry-effect');
                                    if (welcombar_position == 'top') {
                                        jQuery('.mysticky-welcomebar-fixed').css('top', (adminBarHeight + 0) + 'px');
                                        jQuery('.mysticky-welcomebar-fixed').css('opacity', '1');
                                        $('html').css('margin-bottom', '');
                                        jQuery('#mysticky_divi_style').remove();
                                        jQuery('.mysticky-welcomebar-apper.et_fixed_nav #top-header').css('top', welcombar_height + 'px');
                                        jQuery('head').append('<style id="mysticky_divi_style" type="text/css">.mysticky-welcomebar-apper.et_fixed_nav #main-header {top: ' + welcombar_height + 'px !important}.mysticky-welcomebar-apper.et_fixed_nav #top-header + #main-header{top: ' + divi_total_height + 'px !important}</style>');
                                        $('html').attr('style', 'margin-top: ' + mysticky_welcomebar_height + 'px !important');
                                        $('.mysticky-welcomebar-apper #mysticky-nav').css('top', mysticky_welcomebar_height + 'px');
                                    } else {
                                        jQuery('.mysticky-welcomebar-fixed').css('bottom', '0');
                                        jQuery('.mysticky-welcomebar-fixed').css('opacity', '1');
                                        $('html').css('margin-top', '');
                                        jQuery('#mysticky_divi_style').remove();
                                        jQuery('.et_fixed_nav #top-header').css('top', '');
                                        $('html').attr('style', 'margin-bottom: ' + mysticky_welcomebar_height + 'px !important');
                                    }
                                }, trigger_sec);
                            }
                        }
                    }
                    mystickyelements_present();
                }
            });

            jQuery(window).on('scroll', function () {
                if (welcombar_aftersubmission == 'dont_show_welcomebar') {
                    var welcomebar_storage = localStorage.getItem("welcomebar_close");
                } else if (welcombar_aftersubmission == 'show_welcomebar_next_visit') {
                    var welcomebar_storage = sessionStorage.getItem("welcomebar_close");
                } else {
                    sessionStorage.removeItem('welcomebar_close');
                    localStorage.removeItem('welcomebar_close');
                    var welcomebar_storage = null;
                }
                if (welcomebar_storage === null) {
                    var welcombar_height = $('.mysticky-welcomebar-fixed').outerHeight();
                    var welcombar_position = $('.mysticky-welcomebar-fixed').data('position');
                    if (welcombar_position == 'top') {
                        $('#mysticky-nav').css('top', mysticky_welcomebar_height + 'px');
                    }
                    if (after_trigger === 'after_scroll') {
                        var scroll = 100 * $(window).scrollTop() / ($(document).height() - $(window).height());
                        var after_scroll_val = jQuery('.mysticky-welcomebar-fixed').data('triger-sec');
                        var welcombar_position = $('.mysticky-welcomebar-fixed').data('position');
                        var welcombar_height = $('.mysticky-welcomebar-fixed').outerHeight();
                        if (scroll > after_scroll_val) {
                            if ($('.mysticky-welcomebar-fixed').hasClass('mysticky-welcomebar-display-desktop')) {
                                if ($(window).width() > 767) {
                                    jQuery('.mysticky-welcomebar-fixed').addClass('mysticky-welcomebar-animation');
                                    $('.mysticky-welcomebar-fixed').addClass('entry-effect');
                                    if (welcombar_position == 'top') {
                                        jQuery('.mysticky-welcomebar-fixed').css('top', (adminBarHeight + 0) + 'px');
                                        jQuery('.mysticky-welcomebar-fixed').css('opacity', '1');
                                        $('html').css('margin-bottom', '');
                                        $('html').attr('style', 'margin-top: ' + mysticky_welcomebar_height + 'px !important');
                                        $('#mysticky-nav').css('top', mysticky_welcomebar_height + 'px');
                                    } else {
                                        jQuery('.mysticky-welcomebar-fixed').css('bottom', '0');
                                        jQuery('.mysticky-welcomebar-fixed').css('opacity', '1');
                                        $('html').css('margin-top', '');
                                        $('html').attr('style', 'margin-bottom: ' + mysticky_welcomebar_height + 'px !important');
                                    }
                                }
                            }
                            if ($('.mysticky-welcomebar-fixed').hasClass('mysticky-welcomebar-display-mobile')) {
                                if ($(window).width() < 767) {
                                    jQuery('.mysticky-welcomebar-fixed').addClass('mysticky-welcomebar-animation');
                                    $('.mysticky-welcomebar-fixed').addClass('entry-effect');
                                    if (welcombar_position == 'top') {
                                        jQuery('.mysticky-welcomebar-fixed').css('top', (adminBarHeight + 0) + 'px');
                                        jQuery('.mysticky-welcomebar-fixed').css('opacity', '1');
                                        $('html').css('margin-bottom', '');
                                        $('html').attr('style', 'margin-top: ' + mysticky_welcomebar_height + 'px !important');
                                        $('#mysticky-nav').css('top', mysticky_welcomebar_height + 'px');
                                    } else {
                                        jQuery('.mysticky-welcomebar-fixed').css('bottom', '0');
                                        jQuery('.mysticky-welcomebar-fixed').css('opacity', '1');
                                        $('html').css('margin-top', '');
                                        $('html').attr('style', 'margin-bottom: ' + mysticky_welcomebar_height + 'px !important');
                                    }
                                }
                            }
                        }
                    }
                    mystickyelements_present();
                }

            });

            jQuery('.mysticky-welcomebar-close, .mysticky-welcomebar-btn a').on('click', function () {


                /* Submit contact lead form */

                var flag = true;
                var trigger_sec = 100;
                var welcomebar_widget = 0;
                if (jQuery(".mysticky-welcomebar-lead-content").length > 0 && !$(this).hasClass("mysticky-welcomebar-close")) {

                    if (jQuery('#contact-lead-name-' + welcomebar_widget).val() != '' && (jQuery('#contact-lead-phone-' + welcomebar_widget).val() != '' || jQuery('#contact-lead-email-' + welcomebar_widget).val() != '')) {

                        if (jQuery('#contact-lead-email-' + welcomebar_widget).css("display") != 'none' && IsEmail(jQuery('#contact-lead-email-' + welcomebar_widget).val()) != true) {

                            if ($(".input-error").length) {
                                $(".input-error").remove();
                            }

                            $('<div class="input-error"><span>Please, enter valid email</span></div>').insertAfter(jQuery('#contact-lead-email-' + welcomebar_widget));
                            flag = false;
                        }


                        if (jQuery('#contact-lead-phone-' + welcomebar_widget).css("display") != 'none' && validatePhone(jQuery('#contact-lead-phone-' + welcomebar_widget).val()) != true) {
                            if ($(".input-error").length) {
                                $(".input-error").remove();
                            }
                            $('<div class="input-error"><span>Please, enter valid phone</span></div>').insertAfter(jQuery('#contact-lead-phone-' + welcomebar_widget));
                            flag = false;
                        }

                        if (flag == true) {
                            var data = [];
                            data["contact_name"] = jQuery('#contact-lead-name-' + welcomebar_widget).val();
                            data["contact_email"] = jQuery('#contact-lead-email-' + welcomebar_widget).val();
                            data["contact_phone"] = jQuery('#contact-lead-phone-' + welcomebar_widget).val();
                            data["contact_page_link"] = jQuery('#contact-lead-pagelink-' + welcomebar_widget).val();

                            $(".mysticky-welcomebar-fixed .mysticky-welcomebar-lead-content").hide();
                            $(".mysticky-welcomebar-fixed .mysticky-welcomebar-content p").hide();
                            $(".mysticky-welcomebar-fixed .mysticky-welcomebar-btn.contact-lead-button").hide();
                            $(".mysticky-welcomebar-fixed .mysticky-welcomebar-thankyou-content").show();
                            $(".mysticky-welcomebar-fixed .mysticky-welcomebar-thankyou-content p").show();
                            var trigger_sec = 2000;
                            jQuery.ajax({
                                url: welcomebar_frontjs.ajaxurl,
                                type: 'post',
                                data: 'contact_name=' + data["contact_name"] + '&contact_email=' + data["contact_email"] + '&contact_phone=' + data["contact_phone"] + '&action=stickymenu_contact_lead_form&widget_id=' + welcomebar_widget + '&page_link=' + data["contact_page_link"] + '&save_form_lead=1&wpnonce=' + welcomebar_frontjs.ajax_nonce,
                                success: function (data) {
                                    $(".mysticky-welcomebar-widget-" + welcomebar_widget + " .mysticky-welcomebar-fixed-wrap").css("margin-bottom", "0");
                                },
                            });
                        } else {
                            $(".mysticky-welcomebar-widget-" + welcomebar_widget + " .mysticky-welcomebar-fixed-wrap").css("margin-bottom", "10px");
                            return false;
                        }


                    } else {
                        localStorage.removeItem('welcomebar_close_' + welcomebar_widget);
                        sessionStorage.removeItem('welcomebar_close_' + welcomebar_widget);

                        if ($(".input-error").length) {
                            $(".input-error").remove();
                        }

                        if (jQuery('#contact-lead-name-' + welcomebar_widget).css("display") != 'none' && jQuery('#contact-lead-name-' + welcomebar_widget).val() == '' && jQuery('#contact-lead-email-' + welcomebar_widget).css("display") != 'none' && jQuery('#contact-lead-email-' + welcomebar_widget).val() == '') {

                            $('<div class="input-error"><span>Please enter your name and email</span></div>').insertAfter(jQuery('#contact-lead-name-' + welcomebar_widget));
                            flag = false;

                        } else if (jQuery('#contact-lead-name-' + welcomebar_widget).css("display") != 'none' && jQuery('#contact-lead-name-' + welcomebar_widget).val() == '' && jQuery('#contact-lead-phone-' + welcomebar_widget).css("display") != 'none' && jQuery('#contact-lead-phone-' + welcomebar_widget).val() == '') {

                            $('<div class="input-error"><span>Please enter your name and phone</span></div>').insertAfter(jQuery('#contact-lead-name-' + welcomebar_widget));
                            flag = false;

                        } else if (jQuery('#contact-lead-name-' + welcomebar_widget).css("display") != 'none' && jQuery('#contact-lead-name-' + welcomebar_widget).val() == '') {

                            $('<div class="input-error"><span>Please enter your name</span></div>').insertAfter(jQuery('#contact-lead-name-' + welcomebar_widget));
                            flag = false;

                        } else if (jQuery('#contact-lead-email-' + welcomebar_widget).css("display") != 'none' && jQuery('#contact-lead-email-' + welcomebar_widget).val() == '') {

                            $('<div class="input-error"><span>Please, enter your email</span></div>').insertAfter(jQuery('#contact-lead-email-' + welcomebar_widget));
                            flag = false;

                        } else if (jQuery('#contact-lead-phone-' + welcomebar_widget).css("display") != 'none' && jQuery('#contact-lead-phone-' + welcomebar_widget).val() == '') {

                            $('<div class="input-error"><span>Please, enter your phone</span></div>').insertAfter(jQuery('#contact-lead-phone-' + welcomebar_widget));
                            flag = false;

                        }

                        if (flag == false) {

                            $(".mysticky-welcomebar-widget-" + welcomebar_widget + " .mysticky-welcomebar-fixed-wrap").css("margin-bottom", "10px");
                        } else {
                            $(".mysticky-welcomebar-widget-" + welcomebar_widget + " .mysticky-welcomebar-fixed-wrap").css("margin-bottom", "0");
                        }
                        return false;
                    }
                } else {
                    if ($(this).hasClass("mysticky-welcomebar-close")) {
                        localStorage.setItem('is_close_trigger_' + welcomebar_widget, 'yes');
                    }
                }

                setTimeout(function () {
                    if (welcombar_aftersubmission != 'show_welcomebar_every_page') {
                        if (welcombar_aftersubmission == 'dont_show_welcomebar') {
                            sessionStorage.removeItem('welcomebar_close');
                            localStorage.setItem('welcomebar_close', 'close');
                        } else if (welcombar_aftersubmission == 'show_welcomebar_next_visit') {
                            localStorage.removeItem('welcomebar_close');
                            sessionStorage.setItem('welcomebar_close', 'close');
                        }
                    }
                    var welcombar_position = $('.mysticky-welcomebar-fixed').data('position');
                    var welcombar_height = $('.mysticky-welcomebar-fixed').outerHeight();
                    jQuery('.mysticky-welcomebar-fixed').addClass('mysticky-welcomebar-notapper');
                    jQuery('body').removeClass('mysticky-welcomebar-apper');
                    jQuery('.mysticky-welcomebar-fixed').slideUp('slow');
                    if (welcombar_position == 'top') {
                        jQuery('.mysticky-welcomebar-fixed').css('top', '-' + mysticky_welcomebar_height + 'px');
                    } else {
                        jQuery('.mysticky-welcomebar-fixed').css('bottom', '-' + mysticky_welcomebar_height + 'px');
                    }
                    jQuery('#mysticky_divi_style').remove();
                    jQuery('.et_fixed_nav #top-header').css('top', '');
                    jQuery('html').css('margin-top', '');
                    jQuery('html').css('margin-bottom', '');
                    $('#mysticky-nav').css('top', '0px');
                    /*if mystickyelements show*/
                    var mystickyelements_show = $('.mystickyelements-fixed').length;
                    if (mystickyelements_show && $(window).width() <= 1024 && $('.mystickyelements-fixed').hasClass('mystickyelements-position-mobile-top') && welcombar_position == 'top') {
                        var mystickyelements_height = $('.mystickyelements-fixed').height();
                        $('.mystickyelements-fixed').css('top', '');
                        $('html').attr('style', 'margin-top: ' + mystickyelements_height + 'px !important');
                    }
                }, trigger_sec);
            });
        });
        function mystickyelements_present() {
            var after_trigger = jQuery('.mysticky-welcomebar-fixed').data('after-triger');
            var mystickyelements_show = jQuery('.mystickyelements-fixed').length;
            var welcombar_position = jQuery('.mysticky-welcomebar-fixed').data('position');
            var adminBarHeight = 0;
            if (jQuery("#wpadminbar").length != 0) {
                var adminBarHeight = jQuery('#wpadminbar').height();
            }

            if (jQuery(window).width() <= 600 && jQuery(window).scrollTop() != 0 && welcombar_position == 'top') {
                jQuery('.mysticky-welcomebar-fixed').css('top', '0px');
                var welcombar_height = jQuery('.mysticky-welcomebar-fixed').outerHeight();

                if (jQuery('.mysticky-welcomebar-fixed').css('display') === 'none') {
                    welcombar_height = 0;
                }
                jQuery('#mysticky-nav').css('top', welcombar_height + 'px');

            } else if (welcombar_position == 'top') {
                var mysticky_welcomebar_height = adminBarHeight + jQuery('.mysticky-welcomebar-fixed').outerHeight();
                if (jQuery('.mysticky-welcomebar-fixed').css('display') === 'none') {
                    mysticky_welcomebar_height = adminBarHeight + 0;
                }
                jQuery('.mysticky-welcomebar-fixed').css('top', (adminBarHeight + 0) + 'px');
                jQuery('#mysticky-nav').css('top', mysticky_welcomebar_height + 'px');
            }
            if (mystickyelements_show) {

                var welcombar_height = jQuery('.mysticky-welcomebar-fixed').outerHeight();
                var mystickyelements_height = jQuery('.mystickyelements-fixed').height();
                var mystickyelements_total_height = welcombar_height + mystickyelements_height;
                if (jQuery(window).width() <= 1024 && jQuery('.mystickyelements-fixed').hasClass('mystickyelements-position-mobile-top')) {
                    if (after_trigger == 'after_a_few_seconds') {
                        if (jQuery('.mysticky-welcomebar-fixed').hasClass('mysticky-welcomebar-display-mobile')) {
                            var trigger_sec = jQuery('.mysticky-welcomebar-fixed').data('triger-sec') * 1000;
                            setTimeout(function () {
                                if (welcombar_position == 'top') {
                                    jQuery('.mystickyelements-fixed').css('top', welcombar_height);
                                    jQuery('html').attr('style', 'margin-top: ' + mystickyelements_total_height + 'px !important');
                                } else {
                                    jQuery('.mystickyelements-fixed').css('top', '');
                                    jQuery('html').attr('style', 'margin-bottom: ' + welcombar_height + 'px !important');
                                }
                            }, trigger_sec);
                        }
                    } else if (after_trigger === 'after_scroll') {
                        var scroll = 100 * $(window).scrollTop() / ($(document).height() - $(window).height());
                        var after_scroll_val = $('.mysticky-welcomebar-fixed').data('triger-sec');
                        if (scroll > after_scroll_val) {
                            if (jQuery('.mysticky-welcomebar-fixed').hasClass('mysticky-welcomebar-display-mobile')) {
                                if (welcombar_position == 'top') {
                                    jQuery('.mystickyelements-fixed').css('top', welcombar_height);
                                    jQuery('html').attr('style', 'margin-top: ' + mystickyelements_total_height + 'px !important');
                                } else {
                                    jQuery('.mystickyelements-fixed').css('top', '');
                                    jQuery('html').attr('style', 'margin-bottom: ' + welcombar_height + 'px !important');
                                }
                            }
                        }
                    }
                }
            }
        }
        jQuery(".mysticky-welcomebar-fixed").on(
            "animationend MSAnimationEnd webkitAnimationEnd oAnimationEnd",
            function () {
                jQuery(this).removeClass("animation-start");
            }
        );
        jQuery(document).ready(function () {
            var container = jQuery(".mysticky-welcomebar-fixed");
            var refreshId = setInterval(function () {
                container.addClass("animation-start");
            }, 3500);
        });

    </script>

    <style>
        /*-------------New-----*/



        /*--------------------------------------------------------------------------------------------*/

        .mysticky-welcomebar-fixed,
        .mysticky-welcomebar-fixed * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .mysticky-welcomebar-fixed {
            background-color: #ff0202;
            font-family: Poppins;
            position: fixed;
            left: 0;
            right: 0;
            z-index: 9999999;
            opacity: 0;
        }

        .mysticky-welcomebar-fixed-wrap {
            min-height: 60px;
            padding: 20px 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
        }

        .mysticky-welcomebar-animation {
            -webkit-transition: all 1s ease 0s;
            -moz-transition: all 1s ease 0s;
            transition: all 1s ease 0s;
        }

        .mysticky-welcomebar-position-top {
            top: 0;
        }

        .mysticky-welcomebar-position-bottom {
            bottom: 0;
        }

        .mysticky-welcomebar-position-top.mysticky-welcomebar-entry-effect-slide-in {
            top: -60px;
        }

        .mysticky-welcomebar-position-bottom.mysticky-welcomebar-entry-effect-slide-in {
            bottom: -60px;
        }

        .mysticky-welcomebar-entry-effect-fade {
            opacity: 0;
        }

        .mysticky-welcomebar-entry-effect-none {
            display: none;
        }

        .mysticky-welcomebar-fixed .mysticky-welcomebar-content p a {
            text-decoration: underline;
            text-decoration-thickness: 1px;
            text-underline-offset: 0.25ch;
        }


        .mysticky-welcomebar-fixed .mysticky-welcomebar-content p a,
        .mysticky-welcomebar-fixed .mysticky-welcomebar-content p {
            color: #ffffff;
            font-size: 16px;
            margin: 0;
            padding: 0;
            line-height: 1.2;
            font-weight: 400;
            font-family: Poppins
        }

        .mysticky-welcomebar-fixed .mysticky-welcomebar-btn {
            /*padding-left: 30px;*/
            display: none;
            line-height: 1;
            margin-left: 10px;
        }

        .mysticky-welcomebar-fixed.mysticky-welcomebar-btn-desktop .mysticky-welcomebar-btn {
            display: block;
        }

        .mysticky-welcomebar-fixed .mysticky-welcomebar-btn a {
            background-color: #ffffff;
            font-family: inherit;
            color: #0a0a0a;
            border-radius: 4px;
            text-decoration: none;
            display: inline-block;
            vertical-align: top;
            line-height: 1.2;
            font-size: 16px;
            font-weight: 400;
            padding: 5px 20px;
            white-space: nowrap;
        }

        .mysticky-welcomebar-fixed .mysticky-welcomebar-btn a:hover {
            /*opacity: 0.7;*/
            -moz-box-shadow: 1px 2px 4px rgba(0, 0, 0, 0.5);
            -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, 0.5);
            box-shadow: 1px 2px 4px rgba(0, 0, 0, 0.5);
        }


        .mysticky-welcomebar-fixed .mysticky-welcomebar-close {
            display: none;
            vertical-align: top;
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            border-radius: 5px;
            color: #000;
            position: absolute;
            top: 5px;
            right: 10px;
            outline: none;
            font-family: Lato;
            text-decoration: none;
            text-shadow: 0 0 0px #fff;
            -webkit-transition: all 0.5s ease 0s;
            -moz-transition: all 0.5s ease 0s;
            transition: all 0.5s ease 0s;
            -webkit-transform-origin: 50% 50%;
            -moz-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
        }


        .mysticky-welcomebar-fixed .mysticky-welcomebar-close:hover {
            opacity: 1;
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .mysticky-welcomebar-fixed .mysticky-welcomebar-close span.dashicons {
            font-size: 27px;
        }

        .mysticky-welcomebar-fixed.mysticky-welcomebar-showx-desktop .mysticky-welcomebar-close {
            display: inline-block;
        }

        /* Animated Buttons */
        .mysticky-welcomebar-btn a {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
        }

        @-webkit-keyframes flash {

            from,
            50%,
            to {
                opacity: 1;
            }

            25%,
            75% {
                opacity: 0;
            }
        }

        @keyframes flash {

            from,
            50%,
            to {
                opacity: 1;
            }

            25%,
            75% {
                opacity: 0;
            }
        }

        .mysticky-welcomebar-attention-flash.animation-start .mysticky-welcomebar-btn a {
            -webkit-animation-name: flash;
            animation-name: flash;
        }

        @keyframes shake {

            from,
            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            10%,
            30%,
            50%,
            70%,
            90% {
                -webkit-transform: translate3d(-10px, 0, 0);
                transform: translate3d(-10px, 0, 0);
            }

            20%,
            40%,
            60%,
            80% {
                -webkit-transform: translate3d(10px, 0, 0);
                transform: translate3d(10px, 0, 0);
            }
        }

        .mysticky-welcomebar-attention-shake.animation-start .mysticky-welcomebar-btn a {
            -webkit-animation-name: shake;
            animation-name: shake;
        }

        @-webkit-keyframes swing {
            20% {
                -webkit-transform: rotate3d(0, 0, 1, 15deg);
                transform: rotate3d(0, 0, 1, 15deg);
            }

            40% {
                -webkit-transform: rotate3d(0, 0, 1, -10deg);
                transform: rotate3d(0, 0, 1, -10deg);
            }

            60% {
                -webkit-transform: rotate3d(0, 0, 1, 5deg);
                transform: rotate3d(0, 0, 1, 5deg);
            }

            80% {
                -webkit-transform: rotate3d(0, 0, 1, -5deg);
                transform: rotate3d(0, 0, 1, -5deg);
            }

            to {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg);
            }
        }

        @keyframes swing {
            20% {
                -webkit-transform: rotate3d(0, 0, 1, 15deg);
                transform: rotate3d(0, 0, 1, 15deg);
            }

            40% {
                -webkit-transform: rotate3d(0, 0, 1, -10deg);
                transform: rotate3d(0, 0, 1, -10deg);
            }

            60% {
                -webkit-transform: rotate3d(0, 0, 1, 5deg);
                transform: rotate3d(0, 0, 1, 5deg);
            }

            80% {
                -webkit-transform: rotate3d(0, 0, 1, -5deg);
                transform: rotate3d(0, 0, 1, -5deg);
            }

            to {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg);
            }
        }

        .mysticky-welcomebar-attention-swing.animation-start .mysticky-welcomebar-btn a {
            -webkit-transform-origin: top center;
            transform-origin: top center;
            -webkit-animation-name: swing;
            animation-name: swing;
        }

        @-webkit-keyframes tada {
            from {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }

            10%,
            20% {
                -webkit-transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
                transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
            }

            30%,
            50%,
            70%,
            90% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            }

            40%,
            60%,
            80% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            }

            to {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
        }

        @keyframes tada {
            from {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }

            10%,
            20% {
                -webkit-transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
                transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
            }

            30%,
            50%,
            70%,
            90% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            }

            40%,
            60%,
            80% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            }

            to {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
        }

        .mysticky-welcomebar-attention-tada.animation-start .mysticky-welcomebar-btn a {
            -webkit-animation-name: tada;
            animation-name: tada;
        }

        @-webkit-keyframes heartBeat {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            14% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3);
            }

            28% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            42% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3);
            }

            70% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes heartBeat {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            14% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3);
            }

            28% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            42% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3);
            }

            70% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        .mysticky-welcomebar-attention-heartbeat.animation-start .mysticky-welcomebar-btn a {
            -webkit-animation-name: heartBeat;
            animation-name: heartBeat;
            -webkit-animation-duration: 1.3s;
            animation-duration: 1.3s;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
        }

        @-webkit-keyframes wobble {
            from {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            15% {
                -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
                transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
            }

            30% {
                -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
                transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
            }

            45% {
                -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
                transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
            }

            60% {
                -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
                transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
            }

            75% {
                -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
                transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes wobble {
            from {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            15% {
                -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
                transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
            }

            30% {
                -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
                transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
            }

            45% {
                -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
                transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
            }

            60% {
                -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
                transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
            }

            75% {
                -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
                transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        .mysticky-welcomebar-attention-wobble.animation-start .mysticky-welcomebar-btn a {
            -webkit-animation-name: wobble;
            animation-name: wobble;
        }

        @media only screen and (min-width: 768px) {
            .mysticky-welcomebar-display-desktop.mysticky-welcomebar-entry-effect-fade.entry-effect {
                opacity: 1;
            }

            .mysticky-welcomebar-display-desktop.mysticky-welcomebar-entry-effect-none.entry-effect {
                display: block;
            }

            .mysticky-welcomebar-display-desktop.mysticky-welcomebar-position-top.mysticky-welcomebar-fixed,
            .mysticky-welcomebar-display-desktop.mysticky-welcomebar-position-top.mysticky-welcomebar-entry-effect-slide-in.entry-effect.mysticky-welcomebar-fixed {
                top: 0;
            }

            .mysticky-welcomebar-display-desktop.mysticky-welcomebar-position-bottom.mysticky-welcomebar-fixed,
            .mysticky-welcomebar-display-desktop.mysticky-welcomebar-position-bottom.mysticky-welcomebar-entry-effect-slide-in.entry-effect.mysticky-welcomebar-fixed {
                bottom: 0;
            }
        }

        @media only screen and (max-width: 767px) {
            .mysticky-welcomebar-display-mobile.mysticky-welcomebar-entry-effect-fade.entry-effect {
                opacity: 1;
            }

            .mysticky-welcomebar-display-mobile.mysticky-welcomebar-entry-effect-none.entry-effect {
                display: block;
            }

            .mysticky-welcomebar-display-mobile.mysticky-welcomebar-position-top.mysticky-welcomebar-fixed,
            .mysticky-welcomebar-display-mobile.mysticky-welcomebar-position-top.mysticky-welcomebar-entry-effect-slide-in.entry-effect.mysticky-welcomebar-fixed {
                top: 0;
            }

            .mysticky-welcomebar-display-mobile.mysticky-welcomebar-position-bottom.mysticky-welcomebar-fixed,
            .mysticky-welcomebar-display-mobile.mysticky-welcomebar-position-bottom.mysticky-welcomebar-entry-effect-slide-in.entry-effect.mysticky-welcomebar-fixed {
                bottom: 0;
            }

            /*.mysticky-welcomebar-fixed.mysticky-welcomebar-showx-desktop .mysticky-welcomebar-close {
                    display: none;
                }
                .mysticky-welcomebar-fixed.mysticky-welcomebar-showx-mobile .mysticky-welcomebar-close {
                    display: inline-block;
                }*/
            .mysticky-welcomebar-fixed.mysticky-welcomebar-btn-desktop .mysticky-welcomebar-btn {
                display: none;
            }

            .mysticky-welcomebar-fixed.mysticky-welcomebar-btn-mobile .mysticky-welcomebar-btn {
                display: block;
                margin-top: 10px;
            }
        }

        @media only screen and (max-width: 480px) {

            .mysticky-welcomebar-fixed-wrap {
                padding: 15px 35px 10px 10px;
                flex-wrap: wrap;
            }

            /*.welcombar-contact-lead .mysticky-welcomebar-fixed-wrap {flex-wrap: wrap; justify-content: center;}*/

            .mysticky-welcomebar-fixed .mystickymenu-front.mysticky-welcomebar-lead-content {
                margin: 10px 0 10px 20px !important;
            }

            .mysticky-welcomebar-fixed .mysticky-welcomebar-btn {
                padding-left: 10px;
            }
        }


        body.mysticky-welcomebar-apper #wpadminbar {
            z-index: 99999999;
        }

        .mysticky-welcomebar-fixed .mystickymenu-front.mysticky-welcomebar-lead-content {
            display: flex;
            width: auto;
            margin: 0 0px 0 10px;
        }

        .mystickymenu-front.mysticky-welcomebar-lead-content input[type="text"] {
            font-size: 12px;
            padding: 7px 5px;
            margin-right: 10px;
            min-width: 50%;
            border: 0;
            width: auto;
        }

        .mystickymenu-front.mysticky-welcomebar-lead-content input[type="text"]:focus {
            outline: unset;
            box-shadow: unset;
        }

        .input-error {
            color: #ff0000;
            font-style: normal;
            font-family: inherit;
            font-size: 13px;
            display: block;
            position: absolute;
            bottom: 0px;
        }

        .mysticky-welcomebar-fixed.mysticky-site-front .mysticky-welcomebar-btn.contact-lead-button {
            margin-left: 0;
        }
    </style>
    <a href="#" class="scrollToTop" style="display: inline;">
        <span class="fas fa-angle-up"></span>
    </a>



</body>

</html>


<script>
    $(function () {
        $("#nav-placeholder").load("nav.html");
    });
</script>