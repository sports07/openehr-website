﻿<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Membership';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
			
			<h1><?php echo "$PageName";?></h1>
			
			<p>Direct participation in the Foundation is by Individual Members and Partners (Organisational Members), with indirect participation possible via National Affiliates, as illustrated below.</p>
			<p style="text-align:center;"><img src="/files/about/MembershipStructure.png" alt="openEHR Foundation membership categories" title="openEHR Foundation membership categories" style="border: solid 1px #CCCCCC;"></p>	
		
			
			
			<h2>Individual membership</h2>
			<p>Individual Membership in openEHR is free. There are various categories of membership, based on experience and responsibility. Transitioning from one level of involvement to the next is done on the basis of merit, in a similar fashion to the Apache Software Foundation 'meritocracy' concept.</p>
			<table class="TableBasic">
			<tbody>
			<tr>
				<th> Category </th>
				<th> How Obtained</th>
				<th> Rights & Responsibilities</th>
			</tr>
			<tr>
				<td> <b>Member</b></td>
				<td> Subscription to openEHR discussion list(s).</td>
				<td> 
					<ul>
						<li>Can participate in  all meetings, online work groups.</li>
					</ul>
				</td>
			</tr>
			<tr>
				<td> <b>Contributing<br/>Member</b>	</td>
				<td> Fulfill qualifying criteria; elected by Program Committee.</td>
				<td> 
					<ul>
						<li>Can be a member of Program project groups and Committees.</li>
						<li>Can vote in meetings.</li>
					</ul>
				</td>
			</tr>
			<tr>
				<td> <b>Qualified<br/>Member</b></td>
				<td> Elected by relevant Program Committee.</td>
				<td> 
					<ul>
						<li>openEHR.org email address.</li>
						<li>Can take formal roles in Program and Project groups.</li>
						<li>Right to make changes to deliverables.</li>
						<li>Elect all higher posts.</li>
					</ul>
				</td>
			</tr>
			<tr>
				<td> <b>Program<br/>Committee<br/>co-chair</b></td>
				<td> Elected by relevant Program Qualified Membership.</td>
				<td> 
					<ul>
						<li>Chair Program Committees.</li>
						<li>Represent Program on Program Coordination Board.</li>
					</ul>
				</td>
			</tr>
			<tr>
				<td> <b>Foundation<br/>Board<br/>member<br/></b>(2 positions)</td>
				<td> Nominated and elected by Contributing Membership.</td>
				<td> 
					<ul>
						<li>Strategic decision-making for the openEHR Foundation.</li>
					</ul>
				</td>
			</tr>
			</tbody>
			</table>
			
			
			<h2>Organisational Membership - Partners</h2>
			<p>The openEHR Foundation will establish an Organisational membership category known as Partners, which includes four types. Becoming a Foundation Partner involves the organisation making a financial contribution, determined in a way that depends on the type of organisation. The Partner member types are as follows:</p>
			<table class="TableBasic">
			<tbody>
			<tr>
				<th>Category</th>
				<th> Description</th>
				<th> Benefits</th>
				<th> Financial<br/>Basis</th>
			</tr>
			<tr>
				<td> <b>Industry Partner</b></td>
				<td> Software suppliers using openEHR</td>
				<td> 
					<ul>
						<li>Ability to collectively elect 2 board members</li>
						<li>Participation in planning of conferences and educational events</li>
						<li>Clinical Knowledge Manager (CKM) sub-domain within a national or international CKM domain</li>
						<li>Right of review and veto (> 2/3 majority with quorum) openEHR specification changes.</li>
					</ul>
				</td>
				<td> Annual gross revenue</td>
			</tr>
			<tr>
				<td> <b>National Partner</b><br/>(one per country)</td>
				<td> Ministries of Health or other permanent bodies, typically sponsoring / funding national e-health Programs</td>
				<td> 
					<ul>
						<li>Ability to collectively elect 5 board members, 1 per region</li>
						<li>Participation in planning of conferences and educational events</li>
						<li>Clinical Knowledge Manager (CKM) national domain</li>
					</ul>
				</td>
				<td> Based on World Bank country multipliers</td>
			</tr>
			<tr>
				<td> <b>Academic Partner</b></td>
				<td> Universities and other educational organisations</td>
				<td> 
					<ul>
						<li>Ability to collectively elect 1 board member</li>
						<li>Participation in planning of conferences and educational events</li>
						<li>Clinical Knowledge Manager (CKM) sub-domain within a national or international CKM domain</li>
					</ul>
				</td>
				<td> TBD</td>
			</tr>
			<tr>
				<td> <b>Sponsoring Partner</b></td>
				<td> Large companies or organisations who want to provide resources to raise the profile of openEHR and their own organisation for mutual benefit</td>
				<td> 
					<ul>
						<li>Visibility on opneEHR website and conferences</li>
					</ul>
				</td>
				<td> Negotiated</td>
			</tr>
			</tbody>
			</table>
			
				
				
			<h2>National Affiliates</h2>
			<p>The openEHR Foundation will work with other not-for-profit organisations, including Standards Development Organisations (SDOs) under the <a href="/programs/localisation">Localisation Program</a>. Any organisation taking on the lead in development and uptake of openEHR in a country can be recognised as an Affiliate. Affiliate status is decided by the Foundation Board and recognised with a formal bilateral MOU.</p>
			<p>openEHR Affiliates must satisfy the following criteria:</p>
			<ul>
				<li>non-for-profit or public organisation;</li>
				<li>demonstrable open membership;</li>
				<li>agree to engage with openEHR Foundation on a regular basis in order to facilitate planning;</li>
				<li>agree to requirements on use of openEHR trademarks, domain names, and other elements of branding.</li>
			</ul>
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>