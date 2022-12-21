<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>
<html>

<head>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    </link>

    <link rel='stylesheet' id='style-css' href='https://asura.gg/wp-content/themes/mangastream/style.css?ver=1.1.4'
        type='text/css' media='all' />
    <link rel='stylesheet' id='lightstyle-css'
        href='https://asura.gg/wp-content/themes/mangastream/assets/css/lightmode.css?ver=1.1.4' type='text/css'
        media='all' />

    <link rel='stylesheet' id='owl-carousel-css'
        href='https://asura.gg/wp-content/themes/mangastream/assets/css/owl.carousel.css?ver=1.0.0' type='text/css'
        media='all' />
    <script>

        var max_bookmark = 200;
        var max_history = 10;
        var defaultTheme = "darkmode";
        var tsLogoLight = "https://i.pinimg.com/originals/f5/05/24/f50524ee5f161f437400aaf215c9e12f.jpg";
        var tsLogoDark = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScanpz1x7hKWvtxDfb_RjPMTcl-Emmqnd5Yg&usqp=CAU";
    </script>
    <script type='text/javascript' src='jquery.js' id='jquery-js'></script>
    <script type='text/javascript' src='bookmark.js' id='bookmarks_script-js'></script>
    <script type='text/javascript' src='history.js' id='history_script-js'></script>
    <script type='text/javascript' src='function.js' id='tsfn_scripts-js'></script>
    <script type='text/javascript' src='carousel.js' id='owl-carousel-js'></script>


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
                        <ul id="myUL">
                            <li style="list-style: none; padding-left:0; padding-right:0; padding-bottom:0; padding-top:0;">
                                <a aria-hidden="true" style="opacity: 0;">Komik Banana</a>
                                <div class="utao styletwo">
                                    <div class="uta">
                                        <div class="imgu">
                                            <a rel="109196" class="series" href="content_section.php" title="Komik Banana">
                                                <img src="https://wallpaperaccess.com/full/2040920.jpg" class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail" loading="lazy" />
                                                <span class="hot">H</span>
                                            </a>
                                        </div>
                                        <div class="luf">
                                            <a class="series" href="content_section.php" title="Komik Banana">
                                                <h4>Komik Banana</h4>
                                            </a>
                                            <ul class="Manhwa" id="chap">
                                                <li><a href="#">Chapter 3</a><span>4 days ago</span></li>
                                                <li><a href="#">Chapter 2</a><span>2 weeks ago</span></li>
                                                <li><a href="Comics.php">Chapter 1</a><span>2 weeks ago</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li style="list-style: none;  padding-left:0; padding-right:0; padding-bottom:0; padding-top:0;">
                                <a aria-hidden="true" style="opacity: 0;">EXAMPLE</a>
                                <div class="utao styletwo">
                                    <div class="uta">
                                        <div class="imgu">
                                            <a rel="109196" class="series" href="#" title="EXAMPLE">
                                                <img src="https://e0.pxfuel.com/wallpapers/485/585/desktop-wallpaper-twice-more-and-more-twice-portrait.jpg" class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail" class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail" loading="lazy" />
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
                            </li>
                            <li style="list-style: none;  padding-left:0; padding-right:0; padding-bottom:0; padding-top:0;">
                                <a aria-hidden="true" style="opacity: 0;">EXAMPLE</a>

                                <div class="utao styletwo">
                                    <div class="uta">
                                        <div class="imgu">
                                            <a rel="109196" class="series" href="#" title="EXAMPLE">
                                                <img src="https://i.pinimg.com/236x/16/ed/4b/16ed4b6b9ffc28cf0615db3fb6c125e0--twice-lockscreen-twice-wallpapers.jpg" class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail" loading="lazy" />
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
                            </li>
                            <li style="list-style: none;  padding-left:0; padding-right:0; padding-bottom:0; padding-top:0;">
                                <a aria-hidden="true" style="opacity: 0;">EXAMPLE</a>

                                <div class="utao styletwo">
                                    <div class="uta">
                                        <div class="imgu">
                                            <a rel="109196" class="series" href="#" title="EXAMPLE">
                                                <img src="https://e0.pxfuel.com/wallpapers/547/189/desktop-wallpaper-twice-fancy-twice-portrait-thumbnail.jpg" class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail" loading="lazy" />
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
                            </li>
                            <li style="list-style: none;">
                                <a aria-hidden="true" style="opacity: 0;">EXAMPLE</a>

                                <div class="utao styletwo">
                                    <div class="uta">
                                        <div class="imgu">
                                            <a rel="109196" class="series" href="#" title="EXAMPLE">
                                                <img src="https://wallpaperaccess.com/full/2405692.jpg" class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail" loading="lazy" />
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
                            </li>
                            <li style="list-style: none;">
                                <a aria-hidden="true" style="opacity: 0;">EXAMPLE</a>

                                <div class="utao styletwo">
                                    <div class="uta">
                                        <div class="imgu">
                                            <a rel="109196" class="series" href="#" title="EXAMPLE">
                                                <img src="https://pbs.twimg.com/media/DrUH_KWUUAIC0d6.jpg" class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail" loading="lazy" />
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
                            </li>
                            <li style="list-style: none;">
                                <a aria-hidden="true" style="opacity: 0;">EXAMPLE</a>

                                <div class="utao styletwo">
                                    <div class="uta">
                                        <div class="imgu">
                                            <a rel="109196" class="series" href="#" title="EXAMPLE">
                                                <img src="https://i.pinimg.com/236x/d6/4a/9a/d64a9a09e788944ddb6b8bbe274b5915--twice-wallpapers-bigbang.jpg" class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail" loading="lazy" />
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
                            </li>
                            <li style="list-style: none;">
                                <a aria-hidden="true" style="opacity: 0;">EXAMPLE</a>

                                <div class="utao styletwo">
                                    <div class="uta">
                                        <div class="imgu">
                                            <a rel="109196" class="series" href="#" title="EXAMPLE">
                                                <img src="https://i.pinimg.com/550x/1d/ee/37/1dee37ededdff2e2221a51d5a7fdc7c4.jpg" class="ts-post-image wp-post-image attachment-post-thumbnail size-post-thumbnail" loading="lazy" />
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
                            </li>
                        </ul>

                        <div class="hpage">
                            <a href="#" class="r">Next <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
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
                                    <span><b>Genres</b>: 
                                    <a href="#" rel="tag">Romance</a>,
                                                    <a href="#" rel="tag">Drama</a>
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
                                    <span><b>Genres</b>: <a href="#" rel="tag">Romance</a>,
                                                    <a href="#" rel="tag">Drama</a>
                                                </span>

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
                                    <span><b>Genres</b>: <a href="#" rel="tag">Romance</a>,
                                                    <a href="#" rel="tag">Drama</a></span>

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
    
    <div id="footer-placeholder"></div>


    
    <a href="#" class="scrollToTop" style="display: inline;">
        <span class="fas fa-angle-up"></span>
    </a>



</body>

</html>


<script>
    $(function () {
        $("#nav-placeholder").load("nav.php");
        $("#footer-placeholder").load("footer.html");

    });
</script>
