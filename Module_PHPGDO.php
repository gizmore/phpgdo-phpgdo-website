<?php
namespace GDO\PHPGDO;

use GDO\Core\GDO_Module;

/**
 * Website for the phpgdo project.
 *
 * @since 7.0.2
 * @author gizmore
 */
final class Module_PHPGDO extends GDO_Module
{

	public function isSiteModule(): bool
	{
		return true;
	}

}
