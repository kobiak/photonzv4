<footer id="footer" class="site-footer">
    <!--<div class="site-footer-content">
        <div><?php// dynamic_sidebar( 'bottom-1' ); ?></div>
        <div><?php// dynamic_sidebar( 'bottom-2' ); ?></div>
        <div><?php// dynamic_sidebar( 'bottom-3' ); ?></div>
        <div><?php// dynamic_sidebar( 'bottom-4' ); ?></div>
    </div>-->
    <div class="copyright">Сделано <a href="https://evgenyk.nz" target="_blank" rel="noopener">EvgenyK</a></div>

</footer>

<aside class="search-popup" style="display:none;" id="search-popup">
   <div class="wrap-inner"><?php get_search_form(); ?></div>    
</aside>

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

<script type="text/javascript">
    (function(w, doc) {
        if (!w.__utlWdgt) {
            w.__utlWdgt = true;
            var d = doc,
                s = d.createElement('script'),
                g = 'getElementsByTagName';
            s.type = 'text/javascript';
            s.charset = 'UTF-8';
            s.async = true;
            s.src = ('https:' == w.location.protocol ? 'https' : 'http') + '://w.uptolike.com/widgets/v1/uptolike.js';
            var h = d[g]('body')[0];
            h.appendChild(s);
        }
    })(window, document);

</script>


</body>

</html>
