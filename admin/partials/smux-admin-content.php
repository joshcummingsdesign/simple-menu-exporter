<?php

/*****************************************
* Admin content
/****************************************/

?>

<div class="wrap">
  <div id="icon-options-general" class="icon32"></div>
  <h1><?php esc_attr_e( 'Simple Menu Exporter', 'wp_admin_style' ); ?></h1>
  <div id="poststuff">
    <div id="post-body" class="metabox-holder columns-2">
      <div id="post-body-content">
        <div class="meta-box-sortables ui-sortable">
          <div class="postbox">
            <h2><span><?php esc_attr_e( 'Get Started', 'wp_admin_style' ); ?></span></h2>
            <div class="inside">
              <p><?php esc_attr_e('Click the button below to export all of your menus.'); ?></p>
              <input id="smux-export" class="button-primary" type="submit" value="<?php esc_attr_e( 'Export Menus' ); ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
