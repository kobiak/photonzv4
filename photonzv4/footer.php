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
            families: ['PT+Sans:400,700','display=swap']
        }
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();

</script>

</body>

</html>
