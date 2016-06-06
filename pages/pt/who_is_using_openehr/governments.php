﻿<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Governos';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>The following table indicates use or interest in openEHR known to the openEHR Foundation. Other governments may be using it. If any government or other jurisdictional entity wants to be added to this list please <a href="/about/contacts">contact us</a>, since it enables potential users to find out more about openEHR from a user perspective.</p>

			<table class="TableBasic">
			<tbody>
			<tr>
				<th>Country</th>
				<th>Entity</th>
				<th>Usage</th>
			</tr>
			<tr>
				<td rowspan="2"><img src="/files/who_is_using_openehr/australia.gif" alt="Flag of Australia" title="Flag of Australia" style="width:80px;"><p>Australia</p></td>
				<td>NeHTA (National e-Health Transition Authority)</td>
				<td>Clinical data modelling based on openEHR methodology. Use of transformation from openEHR models to CDA schemas.</td>
			</tr>
			<tr>
				<td>Victoria Health</td>
				<td>Various projects including the state cancer registry are using or will use openEHR.</td>
			</tr>
			<tr>
				<td rowspan="2"><img src="/files/who_is_using_openehr/brazil_S.gif" alt="Flag of Brazil" title="Flag of Brazil" style="width:80px;"><p>Brazil</p></td>
				<td>Ministry of Health / various government agencies</td>
				<td>In Brazil some Health Informatics companies are learning and developing archetype-based systems, as they reckon the value of archetypes for representing health knowledge. Also, some of the Brazilian Government Agencies intend to embody archetypes as part of their technological arsenal, as is the case of the Brazilian Suplementary Health Agency (ANS), responsible for regulating the Health Plan market. The Technical Committee on Health Informatics of the Brazilian Standards Association (ABNT) now a "P" member of ISO, has recently joined the work that can eventually lead to archetypes becoming an ISO standard.</td>
			</tr>
			<tr>
				<td>Brazilian Agency for Supplementary Health<br/>State University of Rio de Janeiro</td>
				<td>The Brazilian Agency for Supplementary Health (ANS) established a national standard to support the exchange of information among health providers and health care insurance companies. This standard, called (TISS in Portuguese), was conceived as a traditional message exchange standard. This project aims at designing archetypes that could be used to carry all information represented in TISS. It also aims at implementing a prototype software that will use openEHR reference model to exchange TISS information. This proof of concept will show an alternative way of implementing TISS that could be more effective in dealing with the standard evolution.</td>
			</tr>
			<tr>
				<td rowspan="2"><img src="/files/who_is_using_openehr/denmark.gif" alt="Flag of Denmark" title="Flag of Denmark" style="width:80px;"><p>Denmark</p></td>
				<td>Connected Digital <br/>Health in Denmark</td>
				<td>National proof-of-concept project.</td>
			</tr>
			<tr>
				<td>Various Danish<br/> regions</td>
				<td>Evaluation of archetype methodology in progress 2008/9.</td>
			</tr>
			<tr>
				<td><img src="/files/who_is_using_openehr/newzealand.gif" alt="Flag of New Zealand" title="Flag of New Zealand" style="width:80px;"><p>New Zealand</p>
				<td>Health Information Standards Organisation (HISO)</td>
				<td>New Zealand's <a href="http://www.ithealthboard.health.nz/sites/all/files/Interoperability%20Reference%20Architecture%20v%201.0.pdf" target="_blank">Interoperability Reference Architecture</a> is underpinned by openEHR. One of the building blocks of this national standard (<a href="http://www.ithealthboard.health.nz/sites/all/files/HISO%2010040.2%20HIE%20Content%20Model%20v1.pdf" target="_blank">HISO 10040.2 Exchange Content Model</a>) describes a uniform content model for the purpose of health information exchange. The Content Model follows CCR in its top level headings and comprises archetypes from various sources including Nehta and openEHR CKM as well as newly modelled ones. It is intended not to establish own CKM but share Australian CKM as the healthcare systems and cultures are very similar.</td>
			</tr>
			<tr>
				<td><img src="/files/who_is_using_openehr/slovenia.gif" alt="Flag of Slovenia" title="Flag of Slovenia" style="width:80px;"><p>Slovenia</p></td>
				<td>Ministry of Health</td>
				<td>National health information exchange network enabling sharing of clinical information among all healthcare stakeholders. Provides the interoperability backbone providing services to eHealth applications such as eReferral, ePrescription as well as national health registries. See <a href="http://www.openehr.org/who_is_using_openehr/healthcare_providers_and_authorities">here</a> for details.</td>
			</tr>
			<tr>
				<td><img src="/files/who_is_using_openehr/uk_S.gif" alt="Flag of United Kingdom" title="Flag of United Kingdom" style="width:80px;"><p>UK</p></td>
				<td>National Health <br/>Service (NHS)<br/>Connecting for <br/>Health (CFH)</td>
				<td>The NHS has developed and used openEHR archetypes and templates as a formal way of capturing clinical content requirements. In a pilot in Q1&amp;2 2007, around 220 archetypes and 40 templates were developed in the maternity and emergency department (ED) specialties. By end 2008, the number of archetypes was around 1000.</td>
			</tr>
			</tbody>
			</table>

<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>