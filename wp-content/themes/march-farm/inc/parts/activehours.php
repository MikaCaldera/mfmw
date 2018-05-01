<div id="hours_language_mobile" class="hourblock">
	<h2>Hours</h2>
	<div class="row hour-inner">
		<div class="col dow">
			<ul id="mobile-hours">
				<li class="hours-widget-item" data-day="monday">Mon</li>
				<li class="hours-widget-item" data-day="tuesday">Tue</li>
				<li class="hours-widget-item" data-day="wednesday">Wed</li>
				<li class="hours-widget-item" data-day="thursday">Thu</li>
				<li class="hours-widget-item" data-day="friday">Fri</li>
				<li class="hours-widget-item" data-day="saturday">Sat</li>
				<li class="hours-widget-item" data-day="sunday">Sun</li>
			</ul>
		</div>
		<div class="col-8 hours">
			<ul id="mobile-hours-days">
				<li class="hours-widget-item off-canvas-menu-hours" data-day="monday" name="Mon">
					<?php the_field( 'monday_hours', 'option' ); ?>
				</li>
				<li class="hours-widget-item off-canvas-menu-hours" data-day="tuesday" name="Tue">
					<?php the_field( 'tuesday_hours', 'option' ); ?>
				</li>
				<li class="hours-widget-item off-canvas-menu-hours" data-day="wednesday">
					<?php the_field( 'wednesday_hours', 'option' ); ?>
				</li>
				<li class="hours-widget-item off-canvas-menu-hours" data-day="thursday" name="Thu">
					<?php the_field( 'thursday_hours', 'option' ); ?>
				</li>
				<li class="hours-widget-item off-canvas-menu-hours" data-day="friday" name="Fri">
					<?php the_field( 'friday_hours', 'option' ); ?>
				</li>
				<li class="hours-widget-item off-canvas-menu-hours" data-day="saturday" name="Sat">
					<?php the_field( 'saturday_hours', 'option' ); ?>
				</li>
				<li class="hours-widget-item off-canvas-menu-hours" data-day="sunday" name="Sun">
					<?php the_field( 'sunday_hours', 'option' ); ?>
				</li>
			</ul>
		</div>
		<div class="col-2">
			<p>
				<i id="library-hours-dropdown-button" class="library-hours-arrows arrow library-hours-down"></i>
			</p>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12" id="google_translate_mobile" style="display: block; margin: 0 auto;">
	</div>
</div>