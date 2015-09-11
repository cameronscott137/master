<!-- Metaboxes for Admin About Page -->
<div class="radio-buttons">
	<label>Is This a Confirmation Page?</label>
	<?php $confirm = array('Yes','No'); ?>
		<div class="radio-group">
			<?php foreach ($confirm as $i => $confirm): ?>
			<?php $mb->the_field('confirmation'); ?>
				<input type="radio" name="<?php $mb->the_name(); ?>" value="<?php echo $confirm; ?>"<?php $mb->the_radio_state($confirm); ?>/> <?php echo $confirm; ?>
			<?php endforeach; ?>
		</div>
</div>

<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#header">Page Header</a>
            </h4>
        </div><!-- /panel-heading -->
        <div id="header" class="panel-collapse collapse">
            <div class="panel-body">
            	<div class="landing">
					<p>
						<input class="field" type="text" name="<?php $metabox->the_name('heading-title'); ?>" value="<?php $metabox->the_value('heading-title'); ?>"/>
						<span>Heading</span>
					</p>


					<p>
						<?php $metabox->the_field('heading-description'); ?>
						<textarea class="field" name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
						<span>Subheading</span>
					</p>
				</div>


					<div class="confirm">
						<p>
							<input class="field" type="text" name="<?php $metabox->the_name('confirm-title'); ?>" value="<?php $metabox->the_value('confirm-title'); ?>"/>
							<span>Confirm Heading</span>
						</p>
						<p>
							<input class="field"  type="text" name="<?php $metabox->the_name('button-text1'); ?>" value="<?php $metabox->the_value('button-text1'); ?>"/>
							<span>Button #1 Text</span>
						</p>
						<p>
							<input class="field" type="text" name="<?php $metabox->the_name('button-link1'); ?>" value="<?php $metabox->the_value('button-link1'); ?>"/>
							<span>Button #1 Link</span>
						</p>
						<p>
							<input class="field" type="text" name="<?php $metabox->the_name('button-text2'); ?>" value="<?php $metabox->the_value('button-text2'); ?>"/>
							<span>Button #2 Text</span>
						</p>
						<p>
							<input class="field" type="text" name="<?php $metabox->the_name('button-link2'); ?>" value="<?php $metabox->the_value('button-link2'); ?>"/>
							<span>Button #2 Link</span>
						</p>
					</div>
          </div><!-- /panel-body -->
      </div><!-- /collapseHeader -->
  </div><!-- /panel -->

	<div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#leftcol">Left Col</a>
            </h4>
        </div><!-- /panel-heading -->
        <div id="leftcol" class="panel-collapse collapse">
            <div class="panel-body">
            	<p class="confirm">
					<?php $metabox->the_field('left-col-heading'); ?>
					<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
					<span>Left Column Heading</span>
				</p>
				<p>
					<?php $metabox->the_field('left-col-copy'); ?>
					<textarea name="<?php $metabox->the_name(); ?>" rows="8"><?php $metabox->the_value(); ?></textarea>
					<span>Left Column Copy</span>
				</p>

				<div class="confirm">
					<label>Feature List</label>
						<?php while($metabox->have_fields_and_multi('bullets')): ?>
					            <?php $metabox->the_group_open(); ?>
					              <a href="#" class="dodelete pull-right">&#10005;</a>
					              <p>
					                <input type="text" name="<?php $metabox->the_name('bullet'); ?>" value="<?php $metabox->the_value('bullet'); ?>"/>
					               	<span>Feature</span>
					              </p>
					              
					            <?php $metabox->the_group_close(); ?>
			            <?php endwhile; ?>
			           	<a style="margin-left: 10px; padding-bottom: 20px;"href="#" class="docopy-bullets add button pull-right"><span class="ab-icon"></span>Add</a>
			    </div>

				<p>
					<input type="text" name="<?php $metabox->the_name('left-col-img'); ?>" value="<?php $metabox->the_value('left-col-img'); ?>"/>
					<span>Image URL</span>
				</p>

				<p>
					<input type="text" name="<?php $metabox->the_name('left-col-caption'); ?>" value="<?php $metabox->the_value('left-col-caption'); ?>"/>
					<span>Image Caption</span>
				</p>
          </div><!-- /panel-body -->
      	</div><!-- /collapseHeader -->
	</div><!-- /panel -->

	<div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#tradigital">Right Col</a>
            </h4>
        </div><!-- /panel-heading -->
        <div id="tradigital" class="panel-collapse collapse">
            <div class="panel-body">
				<p>
					<input type="text" name="<?php $metabox->the_name('right-col-heading'); ?>" value="<?php $metabox->the_value('right-col-heading'); ?>"/>
					<span>Right Column Heading</span>
				</p>

				<!--<p>
					<input type="text" name="<?php $metabox->the_name('form'); ?>" value="<?php $metabox->the_value('form'); ?>"/>
					<span>Form Shortcode</span>
				</p>-->

          </div><!-- /panel-body -->
      	</div><!-- /collapseHeader -->
	</div><!-- /panel -->

	<div class="panel panel-default landing">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#violator2">Violator</a>
            </h4>
        </div><!-- /panel-heading -->
        <div id="violator2" class="panel-collapse collapse">
            <div class="panel-body">

				<p>
					<?php $metabox->the_field('violator-desc'); ?>
					<textarea name="<?php $metabox->the_name(); ?>" rows="3"><?php $metabox->the_value(); ?></textarea>
					<span>Violator Description</span>
				</p>

				<p>
					<input type="text" name="<?php $metabox->the_name('violator-form'); ?>" value="<?php $metabox->the_value('violator-form'); ?>"/>
					<span>Violator Form Shortcode</span>
				</p>

          </div><!-- /panel-body -->
      	</div><!-- /collapseHeader -->
	</div><!-- /panel -->
</div><!-- /panel-group -->