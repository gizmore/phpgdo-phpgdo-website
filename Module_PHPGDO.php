<?php
namespace GDO\PHPGDO;

use GDO\Core\GDO_Module;

/**
 * Website for the phpgdo project.
 * 
 * @author gizmore
 * @since 7.0.2
 */
final class Module_PHPGDO extends GDO_Module
{
	
	public function isSiteModule(): bool
	{
		return true;
	}

}
