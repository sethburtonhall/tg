<div id="more-info" class="widget-wrapper clearfix">

    <div id="more" class="more clearfix">
      <div class="donate">
        <a href="/donate" title="Donate Now"><h1>DONATE NOW <span class="arrow">»</span></h1></a>
      </div>

      <div class="ticker-wrapper">
        <h2>LATEST NEWS:</h2>
        <?php put_ticker( true ); ?>
      </div>

      <div class="newsletter clearfix">
        <div class="newsletter-cta">
          <h2>KEEP UP WITH US:</h2>
          <p>[select one or both]</p>
        </div>
        <div class="checkboxes clearfix">
          <label class="label_check" for="newsletter">
              <input type="checkbox" id="newsletter" name="group-1" value="Newletter Updates"  />
              Newsletter Updates
          </label>
          <br>
          <label class="label_check" for="prayer">
              <input type="checkbox" id="prayer" name="group-2" value=" Prayer Requests"  />
              Prayer Requests
          </label>
        </div>
        <div class="email-submit">
          <input type="text" placeholder="email address">
          <input type="submit" value="ENTER">
        </div>
      </div>

    </div> <!-- end #more -->




    <!-- get home widgets -->
    
    <div id="widgets" class="widgets clearfix">

        <!-- Welcome Video Widget -->
        <?php if ( is_active_sidebar( 'welcome-video' )) { ?>
        <?php dynamic_sidebar( 'welcome-video' );} ?>

        <!-- Instagram Widget -->
        <?php if ( is_active_sidebar( 'instagram-feed' )) { ?>
        <?php dynamic_sidebar( 'instagram-feed' );} ?>

        <!-- Twitter Widget -->
        <?php if ( is_active_sidebar( 'twitter-feed' )) { ?>
        <?php dynamic_sidebar( 'twitter-feed' );} ?>
      
        <!-- Recent Blog Posts Widget -->
        <?php if ( is_active_sidebar( 'recent-posts' )) { ?>
        <?php dynamic_sidebar( 'recent-posts' );} ?>

    </div> <!-- end widgets -->
