<div class="panel-group" id="accordion">


	<div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#heading">Page Heading</a>
            </h4>
        </div><!-- /panel-heading -->
        <div id="heading" class="panel-collapse collapse">
            <div class="panel-body">
					<p>
						<input type="text" name="<?php $metabox->the_name('landing-title'); ?>" value="<?php $metabox->the_value('landing-title'); ?>"/>
						<span>Landing Page Heading</span>
					</p>

					<p>
						<input type="text" name="<?php $metabox->the_name('landing-description'); ?>" value="<?php $metabox->the_value('landing-description'); ?>"/>
						<span>Landing Page Header Description</span>
					</p>

					<p>
						<input type="text" name="<?php $metabox->the_name('landing-image'); ?>" value="<?php $metabox->the_value('landing-image'); ?>"/>
						<span>Feature image (ex: <code>http://atmosferiq.thinktiv.webfactional.com/wp-content/uploads/2013/11/atmosferiq_filler.png</code>)</span>
					</p>	
          </div><!-- /panel-body -->
      	</div><!-- /collapseHeader -->
	</div><!-- /panel -->


	<div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#intro">Intro Copy</a>
            </h4>
        </div><!-- /panel-heading -->
        <div id="intro" class="panel-collapse collapse">
            <div class="panel-body">
					<p>
						<?php $metabox->the_field('landing-copy-head'); ?>
						<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
						<span>Landing Page Copy</span>
					</p>

					<p>
						<?php $metabox->the_field('landing-copy-desc'); ?>
						<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
						<span>Landing Page Copy</span>
					</p>					
          </div><!-- /panel-body -->
      	</div><!-- /collapseHeader -->
	</div><!-- /panel -->


	<div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#violator">Violator #1</a>
            </h4>
        </div><!-- /panel-heading -->
        <div id="violator" class="panel-collapse collapse">
            <div class="panel-body">
				<p>
					<input type="text" name="<?php $metabox->the_name('violator-sub'); ?>" value="<?php $metabox->the_value('violator-sub'); ?>"/>
					<span>Subheading</span>
				</p>

				<p>
					<input type="text" name="<?php $metabox->the_name('violator-title'); ?>" value="<?php $metabox->the_value('violator-title'); ?>"/>
					<span>Heading</span>
				</p>

				<p>
					<?php $metabox->the_field('violator-description'); ?>
					<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
					<span>Copy</span>
				</p>

				<p>
					<input type="text" name="<?php $metabox->the_name('violator-btn-link'); ?>" value="<?php $metabox->the_value('violator-btn-link'); ?>"/>
					<span>Button Link (Start with http://)</span>
				</p>

				<p>
					<input type="text" name="<?php $metabox->the_name('violator-btn'); ?>" value="<?php $metabox->the_value('violator-btn'); ?>"/>
					<span>Button Text</span>
				</p>

				<p>
					<input type="text" name="<?php $metabox->the_name('violator-img'); ?>" value="<?php $metabox->the_value('violator-img'); ?>"/>
					<span>Image URL</span>
				</p>				
          </div><!-- /panel-body -->
      	</div><!-- /collapseHeader -->
	</div><!-- /panel -->

	<div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#form">Form</a>
            </h4>
        </div><!-- /panel-heading -->
        <div id="form" class="panel-collapse collapse">
            <div class="panel-body">
				<label>Form</label>
				 
						<p>
							<input type="text" name="<?php $metabox->the_name('landing-form-header'); ?>" value="<?php $metabox->the_value('landing-form-header'); ?>"/>
							<span>Form Header</span>
						</p>

						<p>
							<input type="text" name="<?php $metabox->the_name('landing-form-shortcode'); ?>" value="<?php $metabox->the_value('landing-form-shortcode'); ?>"/>
							<span>Form Shortcode</span>
						</p>

						<p>
							<input type="text" name="<?php $metabox->the_name('landing-form-button'); ?>" value="<?php $metabox->the_value('landing-form-button'); ?>"/>
							<span>Form Button</span>
						</p>			
          </div><!-- /panel-body -->
      	</div><!-- /collapseHeader -->
	</div><!-- /panel -->
</div>


