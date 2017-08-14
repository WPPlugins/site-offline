<?php
if ( ! defined( 'ABSPATH' ) ) exit;
 ?>

<style>
#TB_ajaxContent{
		width:100% !important;
	}
	#TB_window {
		height: auto !important;
		width:98% !important;
		margin-left: 10px!important;
		left: 10px;
	}
	#TB_iframeContent{
		width:100% !important;
	}
</style>
<div>
	<div style="display:block;width:100%;padding-top: 25px;">
		<h2 style="padding-left: 32px;
		
		font-size: 45px;
		text-transform: uppercase;
		font-weight: 400;
		display: inline-block;
		letter-spacing: 0.02em;
		margin-right: 10px;">Site Offline </h2><span style="font-size:20px">Version 1.1.7</span>
	</div>
	<div class="col-md-8">
		<div class="sahu-wp-panel">
	        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                <?php _e('Dashboard','SAHU_SO_TEXT_DOMAIN'); ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                         <?php require_once('dashboard.php'); ?>  
						</div>
                    </div>
                </div>
				
				<div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwo" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                <?php _e('SEO','SAHU_SO_TEXT_DOMAIN'); ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapsetwo" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                         <?php require_once('seo.php'); ?> 
						</div>
                    </div>
                </div>
				
				<div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsethree" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                <?php _e('Design','SAHU_SO_TEXT_DOMAIN'); ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapsethree" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                         <?php require_once('design.php'); ?>
						</div>
                    </div>
                </div>
				
				<div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                <?php _e('Countdown','SAHU_SO_TEXT_DOMAIN'); ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapsefour" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                         <?php require_once('countdown-setting.php'); ?>
						</div>
                    </div>
                </div>
				
				<div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                               <?php _e('Social','SAHU_SO_TEXT_DOMAIN'); ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapsefive" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                        <?php require_once('social.php'); ?> 
						</div>
                    </div>
                </div>
				
				<div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                <?php _e('Contact Info','SAHU_SO_TEXT_DOMAIN'); ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapsesix" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                         <?php require_once('contact.php'); ?> 
						</div>
                    </div>
                </div>
				<div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                <?php _e('Pro version Screenshot','SAHU_SO_TEXT_DOMAIN'); ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse7" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                         <?php require_once('pro.php'); ?> 
						</div>
                    </div>
                </div>
				
				
				
            </div>
    
				
			<div class="sahu_cs_loding" id="sahu_loding_image"></div>
			<button data-dialog="somedialog" class="dialog-button" style="display:none;">Open Dialog</button>
			<div id="somedialog" class="dialog" style="position: fixed; z-index: 9999;">
				<div class="dialog__overlay"></div>
				<div class="dialog__content">
					<div class="morph-shape" data-morph-open="M33,0h41c0,0,0,9.871,0,29.871C74,49.871,74,60,74,60H32.666h-0.125H6c0,0,0-10,0-30S6,0,6,0H33" data-morph-close="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33">
						<svg xmlns="" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
							<path d="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33"></path>
						</svg>
					</div>
					<div class="dialog-inner">
						<h2><strong></strong><?php _e('Setting Saved Successfully','SAHU_SO_TEXT_DOMAIN'); ?></h2><div><button class="action dialog-button-close" data-dialog-close id="dialog-close-button" ><?php _e('Close','SAHU_SO_TEXT_DOMAIN');?></button></div>
					</div>
				</div>
			</div>
		  <?php require_once('fs.php'); ?>
		</div>
		
		
		
		
		<a href="http://wpshopmart.com/plugins/coming-soon-pro/" target="_blank">	
				<img src="<?php echo SAHU_SO_PLUGIN_URL.'assets/images/temp.jpg'; ?>" style="width:100%;height:auto"  />
				</a>
		
	</div>
	<div class="col-md-4 cssahu_sidebar">
		<?php require_once('sidebar.php'); ?>  
	</div>
</div>
