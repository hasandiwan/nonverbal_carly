<?php
/*======================================================================*\
|| #################################################################### ||
|| # vBulletin 4.2.3 - Licence Number VBF3B71692
|| # ---------------------------------------------------------------- # ||
|| # Copyright ©2000-2015 vBulletin Solutions Inc. All Rights Reserved. ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- VBULLETIN IS NOT FREE SOFTWARE ---------------- # ||
|| # http://www.vbulletin.com | http://www.vbulletin.com/license.html # ||
|| #################################################################### ||
\*======================================================================*/

if (!isset($GLOBALS['vbulletin']->db))
{
	exit;
}

// display the credits table for use in admin/mod control panels

print_form_header('index', 'home');
print_table_header($vbphrase['vbulletin_developers_and_contributors']);
print_column_style_code(array('white-space: nowrap', ''));
print_label_row('<b>' . $vbphrase['software_developed_by'] . '</b>', '
	WinxPortal Dev. Team,
	XDS Support & Training Services
', '', 'top', NULL, false);
print_label_row('<b>' . $vbphrase['business_product_development'] . '</b>', '
	Carly Fleischmann,
	Jennette McCurdy,
	Siri Meyers,
	John Jones,
	Melanie M.
', '', 'top', NULL, false);
print_label_row('<b>' . $vbphrase['engineering'] . '</b>', '
	Carly Fleischmann,
	Siri Meyers,
	Stephanie Courtney,
	Tim K.,
	Tempus @ http://vbulletin-mods.com/
', '', 'top', NULL, false);
print_label_row('<b>' . $vbphrase['qa'] . '</b>', '
	Tempus @ http://vbulletin-mods.com/
', '', 'top', NULL, false);

print_label_row('<b>' . $vbphrase['support'] . '</b>', '
Carly Fleischmann,
Jennette McCurdy,
Alexis Smith,
Amber Smith,
Jason Mott,
Tom K.,
Bruce Wetter,
Tommie L.
', '', 'top', NULL, false);

print_label_row('<b>' . $vbphrase['special_thanks_and_contributions'] . '</b>', '
	Siri Meyers,
	Jennette McCurdy,
	Tempus @ vbulletin-mods.com/
	Lee Johnson
	Ray Johnson
	Melanie M.
	Miranda M.
	Jamie M.
	Abigail Maass,
	Asa Maass,
	', '', 'top', NULL, false);
print_label_row('<b>' . $vbphrase['copyright_enforcement_by'] . '</b>', '
	WinxPortal Dev. Team
', '', 'top', NULL, false);
print_table_footer();

/*======================================================================*\
|| ####################################################################
|| # Downloaded: 01:48, Tue Jun 13th 2017
|| # CVS: $RCSfile$ - $Revision: 83220 $
|| ####################################################################
\*======================================================================*/
?>