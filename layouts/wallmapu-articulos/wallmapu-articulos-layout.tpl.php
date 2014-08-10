<div<?php print $attributes; ?>>
  <header  role="banner">
    <div class="l-wm-art-header">
    <div class="l-wm-art-branding" role="logo-marca">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-logo" role="logo-sitio"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
      <?php endif; ?>
      <?php if ($site_name || $site_slogan): ?>
        <?php if ($site_name): ?>
          <h1 class="site-name" role="marca">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <h2 class="site-slogan"><?php print $site_slogan; ?></h2>
        <?php endif; ?>
      <?php endif; ?>
      <?php print render($page['branding']); ?></div>
        <div class="l-wm-art-principal" role="principal">
        <?php print render($page['principal']); ?>
        </div>
      </div>        
  </header> 
  <body>
    <div class="l-wm-art-slider" role="banner">
     <?php print render($page['banner']); ?>
    </div>	  
	
    <div class="l-wm-art-nav" role="navegacion">
		<?php print render($page['navigation']); ?>
	  </div>		
	
    <div class="l-wm-art-region--destacado" role="destacado">
      <?php print render($page['highlighted']); ?>
    </div>
    
    <div class="l-wm-art-region--breadcrumb" role="breadcrumb">
      <?php print $breadcrumb; ?>  
    </div>
<div class="l-wm-art--region-content" role"Region de Contenidos">

  <div class="l-wm-art-content" role="main">        
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?></div>
    
  <div class="l-wm-art-sidebar-right" role="Lateral Derecha">
    <?php print render($page['sidebar_right']); ?></div>
   
    </div>


  <div  class="l-wm-art--region-footer" role="Info Footer">
    <div class="l-wm-art-region-prefooter">
    <div class="l-wm-art-prefooter1" role="Pre Footer-1">
    <?php print render($page['pre_footer_1']); ?></div>
      <div class="l-wm-art-prefooter2" role="Pre Footer-2">
    <?php print render($page['pre_footer_2']); ?></div>
      <div class="l-wm-art-prefooter3" role="Pre Footer-3">
    <?php print render($page['pre_footer_3']); ?></div>
    </div>
    <div class="l-wm-art-footer">
    <?php print render($page['footer']); ?></div>
  </div>

  </body>
