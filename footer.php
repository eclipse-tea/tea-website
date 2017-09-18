<footer class="site-footer">
  <div id="extra">
    <div class="inner">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h3 class="footer-links-header">Quick Links</h3>
            <ul class="footer-links clearfix">
              <li><a href="http://www.eclipse.org/legal/privacy.php">Privacy Policy</a></li>
              <li><a href="http://www.eclipse.org/legal/termsofuse.php">Terms of Use</a></li>
              <li><a href="http://www.eclipse.org/legal/copyright.php">Copyright Agent</a></li>
              <li><a href="http://www.eclipse.org/legal/">Legal</a></li>
            </ul>
            <ul class="footer-links clearfix">
              <li><a href="http://www.eclipse.org">Eclipse Home</a></li>
              <li><a href="http://marketplace.eclipse.org/">Market Place</a></li>
              <li><a href="http://live.eclipse.org/">Eclipse Live</a></li>
              <li><a href="http://www.planeteclipse.org/">Eclipse Planet</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script src="/tea/js/jquery-1.11.3.min.js"></script>
  <script src="/tea/js/bootstrap.min.js"></script>
  <script src="/tea/js/jquery.easing.1.3.js" type="text/javascript"></script>
  <script src="/tea/js/jquery.prettyPhoto.js" type="text/javascript"></script>
  <script src="/tea/js/twitter.js" type="text/javascript"></script>
  <script src="/tea/js/prettify.js" type="text/javascript"></script>
  <script src="/tea/js/lang-common.js" type="text/javascript"></script>
  <script src="/tea/js/custom.js" type="text/javascript"></script>
  <script src="/tea/js/coverflow.min.js" type="text/javascript"></script>
  <script>
      $(function() {
        $('#coverflow').coverflow({
          active : 1,
          visibleAside: 2,
          overlap : 0.5,
          scale : 0.9,
          angle : 20,
          trigger : {
            "itemfocus" : true,
            "swipe" : true,
            "mousewheel" : false
          }
        });
        $('#coverflow :hidden').toggle();
        $(window).resize(function() {
          $('#coverflow').coverflow();
        });
      });

  </script>
</footer>
