<?php

	/**
	 * Elgg default user view
	 * 
	 * @package Elgg
	 * @subpackage Core
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008-2009
	 * @link http://elgg.org/
	 */

?>

	<item>
	  <guid isPermaLink='true'><?php echo $vars['entity']->getURL(); ?></guid>
	  <pubDate><?php echo date("r",$vars['entity']->time_created) ?></pubDate>
	  <link><?php echo $vars['entity']->getURL(); ?></link>
	  <title><![CDATA[<?php echo (($vars['entity']->name)); ?>]]></title>
	  <description><![CDATA[<?php echo (autop($vars['entity']->description)); ?>]]></description>
	  <?php
			if (
				($vars['entity'] instanceof Locatable) &&
				($vars['entity']->getLongitude()) &&
				($vars['entity']->getLatitude())
			) {
				?>
				<georss:point><?php echo $vars['entity']->getLatitude(); ?> <?php echo $vars['entity']->getLongitude(); ?></georss:point>
				<?php
			}
	  ?>
	  <?php echo elgg_view('extensions/item'); ?>
	</item>
