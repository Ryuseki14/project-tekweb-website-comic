<?php
require('Persistence.php');
require('Connection.php');
$comment_post_ID = 1;
$db = new Persistence();
$comments = $db->get_comments($comment_post_ID);
$has_comments = (count($comments) > 0);
?>

<html>

<head>
    <style class="anchorjs"></style>
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/docs/5.0/assets/css/docs.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="comic.css">


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
    <link rel='stylesheet' id='google-fonts-css' href='https://fonts.googleapis.com/css?family=Lato%3A400%2C500%2C600%2C700%7CPoppins%3A400%2C500%2C600%2C700&#038;ver=2.6.1' type='text/css' media='all' />
    <link rel='stylesheet' id='style-css' href='https://asura.gg/wp-content/themes/mangastream/style.css?ver=1.1.4' type='text/css' media='all' />
    <link rel='stylesheet' id='lightstyle-css' href='https://asura.gg/wp-content/themes/mangastream/assets/css/lightmode.css?ver=1.1.4' type='text/css' media='all' />
    <link rel='stylesheet' id='fontawesome-css' href='https://asura.gg/wp-content/themes/mangastream/assets/css/font-awesome.min.css?ver=5.13.0' type='text/css' media='all' />
    <link rel='stylesheet' id='owl-carousel-css' href='https://asura.gg/wp-content/themes/mangastream/assets/css/owl.carousel.css?ver=1.0.0' type='text/css' media='all' />
    <script>
        var baseurl = "https://asura.gg/";
        var ajaxurl = "https://asura.gg/wp-admin/admin-ajax.php";
        var max_bookmark = 200;
        var max_history = 10;
        var defaultTheme = "darkmode";
        var tsLogoLight = "https://www.asurascans.com/wp-content/uploads/2021/03/Group_1.png";
        var tsLogoDark = "https://www.asurascans.com/wp-content/uploads/2021/03/Group_1.png";
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
</head>

<body>
    <div id="nav-placeholder"></div>
    <div class="bixbox anime full">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <br>
                    <div class="post-title" id="1">
                        <h1>Komik Banana Chapter 01</h1>
                    </div>
                    <?php
                        $id = $_POST['post-title'];
                        $id = $_POST['post-title'];

                    ?>
                    <br>
                    <div class="chnav ctop">
                        <span selector slc 1>
                            <div class="nvx">
                                <select name="chapter" id="chapter" onchange="this.options[this.selectedIndex].value&amp;window.open(this.options[this.selectedIndex].value,'_self')">
                                    <option value="" disabled="disabled">Select Chapter</option>
                                    <option data-id="152640" value="#" selected="selected">Chapter 01 </option>
                                    <option data-id="000002" value="#">Chapter 02 </option>
                                    <option data-id="000003" value="#">Chapter 03 </option>
                                    <option data-id="000004" value="#">Chapter 04 </option>
                                </select>
                            </div>
                        </span>
                        <span class="navleft">

                            <span class="npv r">
                                <div class="nextprev">
                                    <a class="ch-prev-btn" href="https://asura.gg/taming-master-chapter-82/" rel="prev">
                                        <i class="fas fa-angle-left"></i> Prev
                                    </a>
                                    <a class="ch-next-btn disabled" href="#/next/" rel="next">
                                        Next <i class="fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </span>
                            <span class="amob nodlx"></span>
                        </span>
                    </div>
                    <div id="readerarea" class="rdminimal">
                        <p><img decoding="async" src="https://asura.gg/wp-content/uploads/2022/12/0.jpg" alt="asura scans manhwa comic" class="aligncenter size-full wp-image-152644" width="1200" height="800"></p>
                        <div class="ai-viewport-3" data-insertion-position="prepend" data-selector=".ai-insert-18-56179763" data-insertion-no-dbg="" data-code="PGRpdiBjbGFzcz0nY29kZS1ibG9jayBjb2RlLWJsb2NrLTE4JyBzdHlsZT0nbWFyZ2luOiA4cHggYXV0bzsgdGV4dC1hbGlnbjogY2VudGVyOyBkaXNwbGF5OiBibG9jazsgY2xlYXI6IGJvdGg7Jz4KPCEtLSBQaG9uZSAvLyBCZXR3ZWVuIGltYWdlcyAtLT4KCjxkaXYgZGF0YS1wdy1tb2JpPSJtZWRfcmVjdF9idGYiPgo8L2Rpdj4KPC9kaXY+Cg==" data-block="18"></div>

                        <p></p>
                        <p><img decoding="async" loading="lazy" src="https://asura.gg/wp-content/uploads/2022/12/01-90.jpg" alt="asura scans manhwa comic" class="aligncenter size-full wp-image-152645" width="800" height="14760"></p>
                        <div class="ai-viewport-3" data-insertion-position="prepend" data-selector=".ai-insert-18-30885359" data-insertion-no-dbg="" data-code="PGRpdiBjbGFzcz0nY29kZS1ibG9jayBjb2RlLWJsb2NrLTE4JyBzdHlsZT0nbWFyZ2luOiA4cHggYXV0bzsgdGV4dC1hbGlnbjogY2VudGVyOyBkaXNwbGF5OiBibG9jazsgY2xlYXI6IGJvdGg7Jz4KPCEtLSBQaG9uZSAvLyBCZXR3ZWVuIGltYWdlcyAtLT4KCjxkaXYgZGF0YS1wdy1tb2JpPSJtZWRfcmVjdF9idGYiPgo8L2Rpdj4KPC9kaXY+Cg==" data-block="18"></div>

                        <p></p>
                        <p><img decoding="async" loading="lazy" src="https://asura.gg/wp-content/uploads/2022/12/02-83.jpg" alt="asura scans manhwa comic" class="aligncenter size-full wp-image-152649" width="800" height="14940"></p>
                        <div class="ai-viewport-3" data-insertion-position="prepend" data-selector=".ai-insert-18-96219730" data-insertion-no-dbg="" data-code="PGRpdiBjbGFzcz0nY29kZS1ibG9jayBjb2RlLWJsb2NrLTE4JyBzdHlsZT0nbWFyZ2luOiA4cHggYXV0bzsgdGV4dC1hbGlnbjogY2VudGVyOyBkaXNwbGF5OiBibG9jazsgY2xlYXI6IGJvdGg7Jz4KPCEtLSBQaG9uZSAvLyBCZXR3ZWVuIGltYWdlcyAtLT4KCjxkaXYgZGF0YS1wdy1tb2JpPSJtZWRfcmVjdF9idGYiPgo8L2Rpdj4KPC9kaXY+Cg==" data-block="18"></div>

                        <p></p>
                        <p><img decoding="async" loading="lazy" src="https://asura.gg/wp-content/uploads/2022/12/03-85.jpg" alt="asura scans manhwa comic" class="aligncenter size-full wp-image-152659" width="800" height="15000"></p>
                        <div class="ai-viewport-3" data-insertion-position="prepend" data-selector=".ai-insert-18-50724996" data-insertion-no-dbg="" data-code="PGRpdiBjbGFzcz0nY29kZS1ibG9jayBjb2RlLWJsb2NrLTE4JyBzdHlsZT0nbWFyZ2luOiA4cHggYXV0bzsgdGV4dC1hbGlnbjogY2VudGVyOyBkaXNwbGF5OiBibG9jazsgY2xlYXI6IGJvdGg7Jz4KPCEtLSBQaG9uZSAvLyBCZXR3ZWVuIGltYWdlcyAtLT4KCjxkaXYgZGF0YS1wdy1tb2JpPSJtZWRfcmVjdF9idGYiPgo8L2Rpdj4KPC9kaXY+Cg==" data-block="18"></div>

                        <p></p>
                        <p><img decoding="async" loading="lazy" src="https://asura.gg/wp-content/uploads/2022/12/04-86.jpg" alt="asura scans manhwa comic" class="aligncenter size-full wp-image-152668" width="800" height="12910"></p>
                        <div class="ai-viewport-3" data-insertion-position="prepend" data-selector=".ai-insert-18-22848908" data-insertion-no-dbg="" data-code="PGRpdiBjbGFzcz0nY29kZS1ibG9jayBjb2RlLWJsb2NrLTE4JyBzdHlsZT0nbWFyZ2luOiA4cHggYXV0bzsgdGV4dC1hbGlnbjogY2VudGVyOyBkaXNwbGF5OiBibG9jazsgY2xlYXI6IGJvdGg7Jz4KPCEtLSBQaG9uZSAvLyBCZXR3ZWVuIGltYWdlcyAtLT4KCjxkaXYgZGF0YS1wdy1tb2JpPSJtZWRfcmVjdF9idGYiPgo8L2Rpdj4KPC9kaXY+Cg==" data-block="18"></div>

                        <p></p>
                        <p><img decoding="async" loading="lazy" src="https://asura.gg/wp-content/uploads/2022/12/05-87.jpg" alt="asura scans manhwa comic" class="aligncenter size-full wp-image-152678" width="800" height="14755"></p>
                        <div class="ai-viewport-3" data-insertion-position="prepend" data-selector=".ai-insert-18-19087504" data-insertion-no-dbg="" data-code="PGRpdiBjbGFzcz0nY29kZS1ibG9jayBjb2RlLWJsb2NrLTE4JyBzdHlsZT0nbWFyZ2luOiA4cHggYXV0bzsgdGV4dC1hbGlnbjogY2VudGVyOyBkaXNwbGF5OiBibG9jazsgY2xlYXI6IGJvdGg7Jz4KPCEtLSBQaG9uZSAvLyBCZXR3ZWVuIGltYWdlcyAtLT4KCjxkaXYgZGF0YS1wdy1tb2JpPSJtZWRfcmVjdF9idGYiPgo8L2Rpdj4KPC9kaXY+Cg==" data-block="18"></div>

                        <p></p>
                        <p><img decoding="async" loading="lazy" src="https://asura.gg/wp-content/uploads/2022/12/06-84.jpg" alt="asura scans manhwa comic" class="aligncenter size-full wp-image-152686" width="800" height="14685"></p>
                        <div class="ai-viewport-3" data-insertion-position="prepend" data-selector=".ai-insert-18-37401827" data-insertion-no-dbg="" data-code="PGRpdiBjbGFzcz0nY29kZS1ibG9jayBjb2RlLWJsb2NrLTE4JyBzdHlsZT0nbWFyZ2luOiA4cHggYXV0bzsgdGV4dC1hbGlnbjogY2VudGVyOyBkaXNwbGF5OiBibG9jazsgY2xlYXI6IGJvdGg7Jz4KPCEtLSBQaG9uZSAvLyBCZXR3ZWVuIGltYWdlcyAtLT4KCjxkaXYgZGF0YS1wdy1tb2JpPSJtZWRfcmVjdF9idGYiPgo8L2Rpdj4KPC9kaXY+Cg==" data-block="18"></div>

                        <p></p>
                        <p><img decoding="async" loading="lazy" src="https://asura.gg/wp-content/uploads/2022/12/07-82.jpg" alt="asura scans manhwa comic" class="aligncenter size-full wp-image-152689" width="800" height="14115"></p>
                        <div class="ai-viewport-3" data-insertion-position="prepend" data-selector=".ai-insert-18-37816740" data-insertion-no-dbg="" data-code="PGRpdiBjbGFzcz0nY29kZS1ibG9jayBjb2RlLWJsb2NrLTE4JyBzdHlsZT0nbWFyZ2luOiA4cHggYXV0bzsgdGV4dC1hbGlnbjogY2VudGVyOyBkaXNwbGF5OiBibG9jazsgY2xlYXI6IGJvdGg7Jz4KPCEtLSBQaG9uZSAvLyBCZXR3ZWVuIGltYWdlcyAtLT4KCjxkaXYgZGF0YS1wdy1tb2JpPSJtZWRfcmVjdF9idGYiPgo8L2Rpdj4KPC9kaXY+Cg==" data-block="18"></div>

                        <p></p>
                        <p><img decoding="async" loading="lazy" src="https://asura.gg/wp-content/uploads/2022/12/08-81.jpg" alt="asura scans manhwa comic" class="aligncenter size-full wp-image-152690" width="800" height="13505"></p>
                        <div class="ai-viewport-3" data-insertion-position="prepend" data-selector=".ai-insert-18-28786503" data-insertion-no-dbg="" data-code="PGRpdiBjbGFzcz0nY29kZS1ibG9jayBjb2RlLWJsb2NrLTE4JyBzdHlsZT0nbWFyZ2luOiA4cHggYXV0bzsgdGV4dC1hbGlnbjogY2VudGVyOyBkaXNwbGF5OiBibG9jazsgY2xlYXI6IGJvdGg7Jz4KPCEtLSBQaG9uZSAvLyBCZXR3ZWVuIGltYWdlcyAtLT4KCjxkaXYgZGF0YS1wdy1tb2JpPSJtZWRfcmVjdF9idGYiPgo8L2Rpdj4KPC9kaXY+Cg==" data-block="18"></div>

                        <p></p>
                        <p><img decoding="async" loading="lazy" src="https://asura.gg/wp-content/uploads/2022/12/09-69.jpg" alt="asura scans manhwa comic" class="aligncenter size-full wp-image-152691" width="800" height="11675"></p>
                        <div class="ai-viewport-3" data-insertion-position="prepend" data-selector=".ai-insert-18-98396481" data-insertion-no-dbg="" data-code="PGRpdiBjbGFzcz0nY29kZS1ibG9jayBjb2RlLWJsb2NrLTE4JyBzdHlsZT0nbWFyZ2luOiA4cHggYXV0bzsgdGV4dC1hbGlnbjogY2VudGVyOyBkaXNwbGF5OiBibG9jazsgY2xlYXI6IGJvdGg7Jz4KPCEtLSBQaG9uZSAvLyBCZXR3ZWVuIGltYWdlcyAtLT4KCjxkaXYgZGF0YS1wdy1tb2JpPSJtZWRfcmVjdF9idGYiPgo8L2Rpdj4KPC9kaXY+Cg==" data-block="18"></div>

                        <p></p>
                        <p><img decoding="async" loading="lazy" src="https://asura.gg/wp-content/uploads/2022/12/10-62.jpg" alt="asura scans manhwa comic" class="aligncenter size-full wp-image-152692" width="800" height="12345"></p>
                        <div class="ai-viewport-3" data-insertion-position="prepend" data-selector=".ai-insert-18-37667273" data-insertion-no-dbg="" data-code="PGRpdiBjbGFzcz0nY29kZS1ibG9jayBjb2RlLWJsb2NrLTE4JyBzdHlsZT0nbWFyZ2luOiA4cHggYXV0bzsgdGV4dC1hbGlnbjogY2VudGVyOyBkaXNwbGF5OiBibG9jazsgY2xlYXI6IGJvdGg7Jz4KPCEtLSBQaG9uZSAvLyBCZXR3ZWVuIGltYWdlcyAtLT4KCjxkaXYgZGF0YS1wdy1tb2JpPSJtZWRfcmVjdF9idGYiPgo8L2Rpdj4KPC9kaXY+Cg==" data-block="18"></div>

                        <p></p>
                        <p><img decoding="async" loading="lazy" src="https://asura.gg/wp-content/uploads/2022/12/11-43.jpg" alt="asura scans manhwa comic" class="aligncenter size-full wp-image-152693" width="800" height="13565"></p>
                        <div class="ai-viewport-3" data-insertion-position="prepend" data-selector=".ai-insert-18-15555138" data-insertion-no-dbg="" data-code="PGRpdiBjbGFzcz0nY29kZS1ibG9jayBjb2RlLWJsb2NrLTE4JyBzdHlsZT0nbWFyZ2luOiA4cHggYXV0bzsgdGV4dC1hbGlnbjogY2VudGVyOyBkaXNwbGF5OiBibG9jazsgY2xlYXI6IGJvdGg7Jz4KPCEtLSBQaG9uZSAvLyBCZXR3ZWVuIGltYWdlcyAtLT4KCjxkaXYgZGF0YS1wdy1tb2JpPSJtZWRfcmVjdF9idGYiPgo8L2Rpdj4KPC9kaXY+Cg==" data-block="18"></div>

                        <p></p>
                        <p><img decoding="async" loading="lazy" src="https://asura.gg/wp-content/uploads/2022/12/12-28.jpg" alt="asura scans manhwa comic" class="aligncenter size-full wp-image-152694" width="800" height="10234"></p>
                        <div class="ai-viewport-3" data-insertion-position="prepend" data-selector=".ai-insert-18-44604382" data-insertion-no-dbg="" data-code="PGRpdiBjbGFzcz0nY29kZS1ibG9jayBjb2RlLWJsb2NrLTE4JyBzdHlsZT0nbWFyZ2luOiA4cHggYXV0bzsgdGV4dC1hbGlnbjogY2VudGVyOyBkaXNwbGF5OiBibG9jazsgY2xlYXI6IGJvdGg7Jz4KPCEtLSBQaG9uZSAvLyBCZXR3ZWVuIGltYWdlcyAtLT4KCjxkaXYgZGF0YS1wdy1tb2JpPSJtZWRfcmVjdF9idGYiPgo8L2Rpdj4KPC9kaXY+Cg==" data-block="18"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="comments" class="body">
        <header>
            <h2>Comments</h2>
        </header> <br> <br> <br> <br>

        <form action="post_comment.php" method="post" id="commentform">

            <label for="comment_author" class="required">Your name</label>
            <input type="text" name="comment_author" id="comment_author" value="" tabindex="1" required="required">

            <label for="comment" class="required">Your message</label>
            <textarea name="comment" id="comment" rows="5" tabindex="4" required="required"></textarea> <br> <br>

            <input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID">
            <input name="submit" type="submit" value="Submit comment">

        </form>
        <div id="respond"></div>

        <ol id="posts-list" class="hfeed<?php echo ($has_comments ? ' has-comments' : ''); ?>">
            <li class="no-comments">Be the first to add a comment.</li>
            <?php
            foreach ($comments as &$comment) {
            ?>
                <li>
                    <article id="comment_<?php echo ($comment['id']); ?>" class="hentry">
                        <footer class="post-info">
                            <abbr class="published" title="<?php echo ($comment['date']); ?>">
                                <?php echo (date('d F Y', strtotime($comment['date']))); ?>
                            </abbr>

                            <address class="vcard author">
                                By <a class="url fn" href="#"><?php echo ($comment['comment_author']); ?></a>
                            </address>
                        </footer>

                        <div class="entry-content">
                            <p><?php echo ($comment['comment']); ?></p>
                        </div>
                    </article>
                </li>
            <?php
            }
            ?>
        </ol>


    </section>
</body>

</html>


<script>
    $(function() {
        $("#nav-placeholder").load("nav.html");
    });
</script>