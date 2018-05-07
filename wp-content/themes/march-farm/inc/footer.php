<?php

if( strlen(get_field('site_wide_alert', 'option')) > 0 ){ ?>
    <div id="site_wide_alert" class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Alert!</strong> <?php echo get_field('site_wide_alert', 'option'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php } ?>

<footer class="footer">
  <div class="container">
    <div class="row">
      <!-- Left -->
      <div class="col-md-3 col-lg-3 col-xl-3">
        <p class="text-left">Copyright &copy; March Farm 2018</p>
      </div>
      <!-- Middle -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto">
        <nav class="nav justify-content-center social-menu">
          <a class="nav-link" href="https://www.instagram.com/marchfarm/"> <i class="fa fa-fw fa-instagram"></i></a>
          <a class="nav-link" href="https://www.facebook.com/march.farm.ct/"> <i class="fa fa-fw fa-facebook"></i></a>
        </nav>
      </div>
      <!-- Right -->
      <div class="col-md-3 col-lg-3 col-xl-3">
        <p class="text-right"><a href="http://mirandacreative.com">mirandacreative.com</a></p>
      </div>
    </div> 
  </div>
</footer>
<script type="text/javascript">
    var _userway_config = {
// uncomment the following line to override default position
 position: 3,
// uncomment the following line to override default language (e.g., fr, de, es, he, nl, etc.)
// language: null,
// uncomment the following line to override color set via widget
 color: '#6b98b8',
        account: 'v4en4jJDsL'
    };
</script>
<script type="text/javascript" src="https://cdn.userway.org/widget.js"></script>