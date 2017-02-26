<?php
  include_once('../../connectors/php/config.php');
  if ($Config['Enabled'] == false) { die(); }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!--
 * FCKeditor - The text editor for Internet - http://www.fckeditor.net
 * Copyright (C) 2003-2010 Frederico Caldeira Knabben
 *
 * == BEGIN LICENSE ==
 *
 * Licensed under the terms of any of the following licenses at your
 * choice:
 *
 *  - GNU General Public License Version 2 or later (the "GPL")
 *    http://www.gnu.org/licenses/gpl.html
 *
 *  - GNU Lesser General Public License Version 2.1 or later (the "LGPL")
 *    http://www.gnu.org/licenses/lgpl.html
 *
 *  - Mozilla Public License Version 1.1 or later (the "MPL")
 *    http://www.mozilla.org/MPL/MPL-1.1.html
 *
 * == END LICENSE ==
 *
 * This page shows the actual folder path.
-->
<html>
	<head>
		<title>Folder path</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="browser.css" type="text/css" rel="stylesheet">
		<script type="text/javascript">
// Automatically detect the correct document.domain (#1919).
(function()
{
	var d = document.domain ;

	while ( true )
	{
		// Test if we can access a parent property.
		try
		{
			var test = window.top.opener.document.domain ;
			break ;
		}
		catch( e )
		{}

		// Remove a domain part: www.mytest.example.com => mytest.example.com => example.com ...
		d = d.replace( /.*?(?:\.|$)/, '' ) ;

		if ( d.length == 0 )
			break ;		// It was not able to detect the domain.

		try
		{
			document.domain = d ;
		}
		catch (e)
		{
			break ;
		}
	}
})() ;

function SetCurrentFolder( resourceType, folderPath )
{
	document.getElementById('tdName').innerHTML = folderPath ;
}

window.onload = function()
{
	window.top.IsLoadedActualFolder = true ;
}

		</script>
	</head>
	<body>
		<table class="fullHeight" cellSpacing="0" cellPadding="0" width="100%" border="0">
			<tr>
				<td>
					<button style="WIDTH: 100%" type="button">
						<table cellSpacing="0" cellPadding="0" width="100%" border="0">
							<tr>
								<td><img height="32" alt="" src="images/FolderOpened32.gif" width="32"></td>
								<td>&nbsp;</td>
								<td id="tdName" width="100%" nowrap class="ActualFolder">/</td>
								<td>&nbsp;</td>
								<td><img height="8" src="images/ButtonArrow.gif" width="12" alt=""></td>
								<td>&nbsp;</td>
							</tr>
						</table>
					</button>
				</td>
			</tr>
		</table>
	</body>
</html>
