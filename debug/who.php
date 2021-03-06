<?php 
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());    

	#*****************************************************************************
	#
	# Copyright (c) 2007, 2012 IBM Corporation and others.
 	# All rights reserved. This program and the accompanying materials
 	# are made available under the terms of the Eclipse Public License v1.0
 	# which accompanies this distribution, and is available at
 	# http://www.eclipse.org/legal/epl-v10.html
 	# Contributors:
	#     IBM Corporation - initial implementation
	#
	# Author: 		Debug Team
	# Date:			August 25, 2006
	#
	# Description: this page lists all of the debug committers, active and otherwise
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Who We Are";
	$pageKeywords	= "debug, platform, debugging, debugger, breakpoints, launching, committers, who, we, are";
	$pageAuthor		= "Debug Team";
	
	include("_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>Over the years there have been a few committers come and go, this page has the most recent list of committers, 
		active and otherwise. Their respective status is displayed with their
		information. It should be noted that those with an inactive status might not reply to questions about the project.</p>
		
		<div class="homeitem3col">
			<h2><b>Darin Wright</b></h2>
			<table width="100%" border="0" summary="About Darin Wright">
				<tbody>
				<tr> 
					<td width="30%" valign="top"><img src="images/people/darinw.png" /></td>
					<td width="70%">Darin is currently the CTO of Codenza and an Eclipse committer. 
					For the better part of the last ten years, Darin has been working on IDE's such as Eclipse, 
					VA/Micro Edition, and ENVY/Smalltalk. In a previous software development life, Darin was a project / team lead at IBM Canada 
					and an audio software developer supporting virtual reality productions at the Banff Centre for the arts.</td>
				</tr>
				<tr> 
					<td width="30%" valign="top"><b>Status</b></td>
					<td width="70%">Inactive</td>
				</tr>
				<tr> 
					<td width="30%" valign="top"><b>Email</b></td>
					<td width="70%">darin.eclipse@gmail.com</td>
				</tr>
				</tbody>
			</table>
		</div>
		<div class="homeitem3col">
			<h2><b>Michael Rennie</b></h2>
			<table width="100%" border="0" summary="About Michael Rennie">
				<tbody>
				<tr> 
					<td width="30%" valign="top">No Picture</td>
					<td width="70%">Michael Rennie is a Platform/JDT Debug, PDE, Ant and Doc committer working with the IBM Rational team in
					Winnipeg, Canada. Before that he was a graduate student at the University of Manitoba, researching SOA and 
					architecture description languages. Graduated with an MSc. Computer Science in 2004.</td>
				</tr>
				<tr> 
					<td width="30%" valign="top"><b>Status</b></td>
					<td width="70%">Active</td>
				</tr>
				<tr> 
					<td width="30%" valign="top"><b>Email</b></td>
					<td width="70%">Michael_Rennie@ca.ibm.com</td>
				</tr>
				</tbody>
			</table>
		</div>
		<div class="homeitem3col">
			<h2><b>Curtis Windatt</b></h2>
			<table width="100%" border="0" summary="About Curtis Windatt">
				<tbody>
				<tr> 
					<td width="30%" valign="top"><img src="images/people/curtis_windatt.png" /></td>
					<td width="70%">Curtis Windatt is a Platform/JDT Debug committer working for IBM Rational in
					Winnipeg, Canada.  He is also a committer for PDE UI and contributes to other components. 
					Curtis shares his birthday with Eclipse and prior to joining IBM was a student at the University 
					of Manitoba.</td>
				</tr>
				<tr> 
					<td width="30%" valign="top"><b>Status</b></td>
					<td width="70%">Active</td>
				</tr>
				<tr> 
					<td width="30%" valign="top"><b>Email</b></td>
					<td width="70%">cwindatt@ca.ibm.com</td>
				</tr>
				</tbody>
			</table>
		</div>
		<div class="homeitem3col">
			<h2><b>Samantha Chan</b></h2>
			<table width="100%" border="0" summary="About Samantha">
				<tbody>
				<tr> 
					<td width="30%" valign="top">No Picture</td>
					<td width="70%">Samantha Chan is a developer from IBM Debug Team. 
					She has been working with debug technologies for 4 years.</td>
				</tr>
				<tr> 
					<td width="30%" valign="top"><b>Status</b></td>
					<td width="70%">Inactive</td>
				</tr>
				<tr> 
					<td width="30%" valign="top"><b>Email</b></td>
					<td width="70%">chanskw@ca.ibm.com</td>
				</tr>
				</tbody>
			</table>
		</div>
		<div class="homeitem3col">
			<h2><b>Pawel Piech</b></h2>
			<table width="100%" border="0" summary="About Pawel Piech">
				<tbody>
				<tr> 
					<td width="30%" valign="top"><img src="images/people/Pawel_Piech.jpg"/></td>
					<td width="70%">Pawel Piech is a member of the debugger team at Wind River Systems, 
					project lead for the Device Debugging project and the newest Debug 
					platform committer.  For the last five years Pawel has been working on 
					the debugger front end of the Wind River Workbench IDE.  Graduated from 
					Boston University with BSCE in '97.</td>
				</tr>
				<tr> 
					<td width="30%" valign="top"><b>Status</b></td>
					<td width="70%">Active</td>
				</tr>
				<tr> 
					<td width="30%" valign="top"><b>Email</b></td>
					<td width="70%">pawel.piech@windriver.com</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div id="rightcolumn">
		$commonside
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
