<!-- BEGIN UBC CLF GLOBAL UTILITY HEADER -->
<div id="UbcToolBarWrapper">
	<div id="UbcToolBar">
		<div id="UbcToolNavWrapper">
		  <ul id="UbcToolNav">
			<li class="UbcUtilNav"><a id="UbcCampusLinks" href="http://www.ubc.ca/campuses/">Campuses</a></li>
			<li class="UbcUtilNav"><a id="UbcDirectLinks" href="http://www.ubc.ca/directories/">UBC Directories</a></li>
			<li class="UbcUtilNav"><a id="UbcQuickLinks" href="http://www.ubc.ca/quicklinks/">UBC Quick Links</a></li>
		  </ul>
		  <?php if ( $page['search']): ?>
			<div id="UbcSearchForm">
				<?php print render($page['search']); ?>
			</div>
		  <?php endif; ?>
      	</div>
	</div>
</div><!-- End UbcToolBarWrapper -->
<div class="wrapper">
<div id="UbcMegaMenuesWrapper">&nbsp;</div>

<!-- END UBC CLF GLOBAL UTILITY HEADER -->

<!-- BEGIN UBC CLF VISUAL IDENTITY HEADER -->
<div id="UbcHeaderWrapper">
    <ul id="UbcHeader">
        <li><a id="UbcLogo" href="http://www.ubc.ca">The University of British Columbia</a></li>
        <li><a id="UbcMindLink" href="http://www.aplaceofmind.ubc.ca/">a place of mind</a></li>
        <li><a id="UbcHeaderLine" href="http://www.science.ubc.ca/">Faculty of Science</a></li>
        <li><a id="UbcSubUnitLine" href="/">Department of Microbiology and Immunology</a></li>
    </ul>
</div>
<!-- END UBC CLF VISUAL IDENTITY HEADER -->

<!-- BEGIN UBC CLF PRIMARY NAVIGATION -->
<div id="UbcNavWrapper">
    <?php if ( $page['menu']): ?>
	<?php print render($page['menu']); ?>
    <?php endif; ?>
</div>
<!-- END UBC CLF PRIMARY NAVIGATION -->


<!-- BEGIN UBC CLF CONTENT SPACE -->
<div id="UbcContentWrapper">
    <?php if ( $breadcrumb): ?>
	<div id="UbcBreadCrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?>

	<div id="UbcContentOneColumn">
		<?php print $messages; ?>
		<?php if ($tabs = render($tabs)): ?>
			  <?php print $tabs; ?>
		<?php endif; ?>
		<?php if ($action_links): ?>
			  <ul class="action-links"><?php print render($action_links); ?></ul>
		<?php endif; ?>

		<?php if ($title): ?>
			  <h1 class="article"><?php print $title; ?></h1>
		<?php endif; ?>
		<div style="float:right"><a href="<?php echo '/print/' . ($node->nid) ?>"><img title="Print" alt="Print" style="vertical-align: middle; padding-right: 4px" src="/sites/all/modules/print/icons/print_icon.gif">Print</a></div>
		<div class="back article" style="float:left;"><a href="/articles">< Back to Articles</a></div>
		<div style="clear:both;"></div>
		<?php print render($page['content']); ?>
		<?php print $feed_icons; ?>
	</div>
    

</div><!-- End UbcContentWrapper -->
<!-- END UBC CLF CONTENT SPACE -->
<div class="push clear"></div>
</div>


<div class="footer clear">

<div id="UbcLogin" class="clear">
	<?php if ( $page['footer']): ?>
		<?php print render($page['footer']); ?>
	<?php endif; ?>
</div>

<!-- BEGIN UBC CLF VISUAL IDENTITY FOOTER -->
<div id="UbcBottomInfoWrapper">
    <div id="UbcBottomInfo">
        <div id="UbcBottomInfoLeft"><a href="http://www.ubc.ca"><img src="<?php print base_path() . path_to_theme(); ?>/images/footer/logo.gif" alt="a place of mind, The University of British Columbia" /></a></div>
        <div id="UbcBottomInfoRight"><p>The Department of Microbiology & Immunology<br />
    	    The University of British Columbia<br />
    	    2350 Health Sciences Mall Vancouver, BC Canada V6T 1Z3 <br/></p>
        </div>

    </div>
</div><!-- End UbcBottomInfo -->
<!-- END UBC CLF VISUAL IDENTITY FOOTER -->

<!-- BEGIN UBC CLF GLOBAL UTILITY FOOTER -->
<div id="UbcUtilNavWrapper">
    <p><a href="http://www.emergency.ubc.ca">Emergency Procedures</a>&nbsp;|&nbsp;<a href="http://www.ubc.ca/accessibility/">Accessibility</a>&nbsp;|&nbsp;<a href="http://www.ubc.ca/about/contact/">Contact UBC</a>&nbsp;|&nbsp;<a href="http://www.ubc.ca/copyright/">&copy; Copyright  The University of British Columbia</a></p>
</div><!-- End UbcUtilNavWrapper -->
<!-- END UBC CLF GLOBAL UTILITY FOOTER -->
</div>
