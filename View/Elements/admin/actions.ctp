<div class="action-buttons">
	<?php
	$links = array(
		'index' => array(
			'title' => __d('admin', 'Plugins'),
			'icon' => 'icon-paste'
		),
		'models' => array(
			'title' => __d('admin', 'Models'),
			'icon' => 'icon-file'
		),
		'config' => array(
			'title' => __d('admin', 'Configuration'),
			'icon' => 'icon-cog'
		),
		'cache' => array(
			'title' => __d('admin', 'Cache'),
			'icon' => 'icon-hdd'
		),
		'routes' => array(
			'title' => __d('admin', 'Routes'),
			'icon' => 'icon-road'
		),
		/*'locales' => array(
			'title' => __d('admin', 'Locales'),
			'icon' => 'icon-globe'
		)*/
	);

	foreach ($links as $action => $link) {
		$class = 'btn btn-large';

		if ($this->action === $action) {
			$class .= ' active';
		}

		echo $this->Html->link('<span class="' . $link['icon'] . '"></span> ' . $link['title'],
			array('controller' => 'admin', 'action' => $action),
			array('class' => $class, 'escape' => false));
	} ?>

	<span class="clear"></span>
</div>