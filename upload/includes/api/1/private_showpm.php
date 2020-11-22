<?php
/*======================================================================*\
|| #################################################################### ||
|| # vBulletin 4.2.3 - Licence Number #ECHO-LICENSE#
|| # ---------------------------------------------------------------- # ||
|| # Copyright �2000-2015 vBulletin Solutions Inc. All Rights Reserved. ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- VBULLETIN IS NOT FREE SOFTWARE ---------------- # ||
|| # http://www.vbulletin.com | http://www.vbulletin.com/license.html # ||
|| #################################################################### ||
\*======================================================================*/
if (!VB_API) die;

loadCommonWhiteList();

$VB_API_WHITELIST = array(
	'response' => array(
		'HTML' => array(
			'allowed_bbcode', 'bccrecipients', 'ccrecipients',
			'pm' => array(
				'pmid', 'title', 'recipients', 'savecopy', 'folderid',
				'fromusername'
			),
			'postbit' => $VB_API_WHITELIST_COMMON['postbits'],
			'threadpms'
		)
	),
	'show' => array(
		'receiptprompt', 'recipients'
	)
);

/*======================================================================*\
|| ####################################################################
|| # Downloaded: #ECHO-DLDATE#
|| # CVS: $RCSfile$ - $Revision: 35584 $
|| ####################################################################
\*======================================================================*/