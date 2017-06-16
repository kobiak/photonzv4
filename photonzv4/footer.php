<footer id="footer" role="contentinfo" class="site-footer">
    <div class="site-footer-content">
        <div><?php dynamic_sidebar( 'bottom-1' ); ?></div>
        <div><?php dynamic_sidebar( 'bottom-2' ); ?></div>
        <div><?php dynamic_sidebar( 'bottom-3' ); ?></div>
        <div><?php dynamic_sidebar( 'bottom-4' ); ?></div>
    </div>
    <div class="copyright">Сделано <a href="https://evgenyk.nz" target="_blank" rel="noopener">EvgenyK</a></div>

</footer>

<?php wp_footer(); ?>


    <script type="text/javascript">
        WebFontConfig = {
            google: {
                families: ['PT+Sans:400,700']
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();

    </script>
   <!-- <script type='text/javascript'>
        ! function(a) {
            "use strict";
            var b = function(b, c, d) {
                function j(a) {
                    return e.body ? a() : void setTimeout(function() {
                        j(a)
                    })
                }

                function l() {
                    f.addEventListener && f.removeEventListener("load", l), f.media = d || "all"
                }
                var g, e = a.document,
                    f = e.createElement("link");
                if (c) g = c;
                else {
                    var h = (e.body || e.getElementsByTagName("head")[0]).childNodes;
                    g = h[h.length - 1]
                }
                var i = e.styleSheets;
                f.rel = "stylesheet", f.href = b, f.media = "only x", j(function() {
                    g.parentNode.insertBefore(f, c ? g : g.nextSibling)
                });
                var k = function(a) {
                    for (var b = f.href, c = i.length; c--;)
                        if (i[c].href === b) return a();
                    setTimeout(function() {
                        k(a)
                    })
                };
                return f.addEventListener && f.addEventListener("load", l), f.onloadcssdefined = k, k(l), f
            };
            "undefined" != typeof exports ? exports.loadCSS = b : a.loadCSS = b
        }("undefined" != typeof global ? global : this);

    </script>-->
   <!-- <script type='text/javascript'>
        loadCSS("<?php echo get_stylesheet_directory_uri(); ?>/style.css");
    </script>-->

    </body>

    </html>
