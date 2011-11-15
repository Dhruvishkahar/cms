<?php

class CPTag extends Tag
{
	private static $defaultSections = array(
		'dashboard' => 'Dashboard',
		'content' => 'Content',
		'assets' => 'Assets',
		'settings' => 'Settings',
		'guide' => 'User Guide',
	);

	public function sections()
	{
		$sectionTags = array();

		foreach (self::$defaultSections as $handle => $name)
		{
			$sectionTags[] = new CPSectionTag($handle, $name);
		}

		return new ArrayTag($sectionTags);
	}

	public function baseUrl()
	{
		return new StringTag('/admin.php'.'/');
	}
}
