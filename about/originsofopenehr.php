<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<meta http-equiv="Content-Language" content="en">

	<title>openEHR - Foundation Origins</title>

	<meta name="description" content="openEHR provides open source specifications and reference implementations of future proof EHR systems">
	<meta name="keywords" content="archetypes, openEHR, EHR, electronic health record, electronic medical record, ADL, reference model, clinical models, healthcare, health informatics, medical informatics, EHR standards, ISO 18308, CEN 13606, health care software, open source software, knowledge modelling, patient-centric">
	<meta name="author" content="Sam Heard, Thomas Beale">
	<meta name="copyright" content="The openEHR Foundation">
	<meta name="design" content="Adriana Danilakova">
	<meta name="distribution" content="Global">
	
	<meta name="rating" content="General">
	<meta name="robots" content="All">
	<meta name="revisit-after" content="15 days">
	<meta name="viewport" content="1024">

	<link rel="stylesheet" href="../styles/basic.css"  type="text/css">
	<link rel="stylesheet" href="../styles/programs.css"  type="text/css">
	<link rel="stylesheet" href="../styles/menu.css" type="text/css"> 

	<link rel="home" href="http://www.openehr.org">
	<link rel="bookmark" href="http://www.openehr.org" title="openEHR - Homepage">
	<link rel="index" href="http://www.openehr.org/sitemap">

	<script type="text/javascript" src="../menu/dropdown.js"></script> 
	
</head>


<body>
<div id="MainFrame">
	
	<div id="TopPanel">
	<?php include '../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu" style="text-align:left">
		
		<div class="nav">
   		 <?php include '../menu/topmenu.php' ?>
		</div>
	</div> 

	<div id="MainArea">
	
		<div id="SideMenu">
		<?php include 'menu/aboutmenu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1>Foundation</h1>
			
			<h2><a name="origins"></a>Origins of openEHR</h2>
			<p><i>David Ingram, October 2002</i></p>
			<p>Some ten years after the GEHR project was established in 1989, partners in that project have come together again to review experience gained over the intervening years. It is especially encouraging that a forthcoming ISO standard will elevate formally defined clinical requirements to the highest level in the standards process for electronic healthcare records. So many systems describe themselves as electronic healthcare records and yet share little common concept of what such an entity is and what it is for.</p>
			<p>The research and development in this field has followed a chaotic and tortuous evolution, influenced inevitably by commercial, political and academic considerations and rivalries and also by severe inertia because of powerful needs to continue to accommodate legacy systems. Confused and confusing arguments have raged about esoteric models of ill-defined clinical terminology, processes and communications. Continuing reinvention of wheels at these levels of abstraction (more precisely concoction of alternative definitions and plans of possibly wheel-like objects!), has inhibited progress. There is still an urgent need for empirical study of the implementation and comparative evaluation of a diverse range of approaches to the provision of high quality electronic healthcare records. This must be informed by international consensus about the requirements to be met.</p>
			
			
			<h3>Introduction - the AIM Initiative in Europe</h3>
			<p>In 1988, the European Union established the Advanced Informatics in Medicine (AIM) initiative, within the wide-ranging Framework Programme for Research and Technology Development in Europe.</p>
			<p class="par">The rationale for the Framework Programme was:</p>
			<ul>
				<li>To strengthen the economic and social cohesion of the Community</li>
				<li>To offer obvious benefits through the collaboration of several States</li>
				<li>To apply significant and complementary results across the whole Community
				</li>
				<li>To contribute to a common market and to scientific and technical unification
				</li>
			</ul><br/>
			<p>It succeeded in catalysing a wave of new partnerships across all sectors of
			the European economy.</p>
			<p class="par">In relation to health, the Framework Programme objectives set out in 1988
			were:</p>
			<ul>
			<li>To unify European activities by providing the means for efficient
			communication of medical records and knowledge so that these may be understood
			and compatible, thereby permitting the integration of health information systems
			</li>
			<li>To strengthen competitiveness by advancing the technical basis of products
			and services and commercialising European inventiveness in all scales of
			enterprise</li>
			<li>To improve the quality of life through improving diagnosis and treatment,
			increasing public awareness and knowledge of health care and widening access to
			improved services</li>
			</ul><br/>
			<p>Thus, from the earliest stages of the Programme, the harmonisation of
			electronic health care records was seen as of the highest strategic importance
			for health care development in Europe.</p>
			<p class="par">Under the outstanding leadership of Dr Niels Rossing, the AIM Programme was
			developed in key phases, as follows:</p>
			<ul>
			<li>
			<strong>1988 - 90</strong> Exploratory phase, 20 million ECU, 43 projects
			</li>
			<li>
			<strong>1990 - 94</strong> 110 million ECU, 38 projects; 12 concerted
			actions (eg. Medirec)</li>
			<li>
			<strong>1994 - 98</strong> 135 million ECU, ~60 projects</li>
			</ul><br/>
			<p>The first major Call for Proposals under the AIM Workplan was issued in 1989.
			A Key Action was to be research and development for an electronic health care
			record architecture. There was intense competition among rival consortia seeking
			funding to work on this challenge. Other Key Actions addressed clinical
			terminology and clinical care protocols and important work in these areas
			evolved in the early AIM Programme Projects (e.g. Galen, Games, Dilemma), and
			colleagues from these days work alongside us to this day.</p>
			
			
			<h3>The Good European Health Record (GEHR) Project Proposal</h3>
			<p>A Consortium was drawn together by Dr Alain Maskens and Dr Sam Heard to bid
			to work within AIM on electronic health record architecture. Alain, a Belgian
			oncologist, was running HDMP, a small software company specialising in
			electronic healthcare records for GPs. Sam, an Australian General Practitioner,
			was lecturer at the Medical College of St Bartholomew&rsquo;s Hospital in London and
			ran a practice in East London and had developed a general practice system
			supported by a cooperative of general practices. The two had met through
			Professor Mal Salkind, head of General Practice at St Bartholomew&rsquo;s, during the
			AIM exploratory phase and had begun to collaborate on the development of a
			generic EHR system.</p>
			<p>The Consortium comprised seven professional, industrial and academic
			partners: St Bartholomew&rsquo;s Medical College (co-ordinating partner); HDMP; The
			French Red Cross Hospitals; The Association of Doctors and Dentists of
			Luxembourg; The General Practice Institute of Oporto, Portugal; France Telecom;
			Smithkline Beecham.</p>
			<p>Professor David Ingram, Professor of Medical Informatics at St Bartholomew&rsquo;s
			Medical College, was invited to lead the Consortium, to prepare the proposal
			and, subsequently, as Project Director, to run the project. In this, he worked
			closely with Lesley Southgate, who had succeeded Mal Salkind as Head of Primary
			Care at St. Bartholomew&rsquo;s.</p>
			<p>The project proposal was put together in three months in early 1991 and was
			given the title <em>The Good European Health Record</em> (GEHR); the name was
			proposed by Alain Maskens. After a final 72 hour, round the clock, weekend
			flurry of preparation, it was submitted just in time. It emerged as an
			unexpected but warmly endorsed winning proposal, in the adjudication that
			followed. Some rival consortia had worked for several years to position
			themselves for the work, so the result was controversial. Negotiations, led for
			GEHR by David Ingram, were completed with the Commission who were represented by
			the Project Officer, Jacques Lacombe, and Michael Wilson. The project commenced
			in January 1992.</p>
			

			<h3>Participants in the GEHR Project</h3>
			<p>In addition, to David and Sam, of those still closely involved in the
			continuing story of GEHR, Dr Dipak Kalra, who led the GEHR Clinical Task Group,
			and David Lloyd, a key contributor to the technical Task Group, joined the St.
			Bartholomew's team at the outset. Dr Jo Milan, Director of Information at the
			Royal Marsden Hospital, London, and Dr Stanley Sheppard, Chief Executive of
			Update, a UK general practice software company, joined as sub-contractors to St.
			Bartholomew's. Update had to withdraw from the Consortium in the early days of
			the project, but Stan maintained contact on a personal basis. Tom Beale was
			employed as a consultant to the Royal Marsden in 1993 and subsequently joined
			the St Bartholomew's GEHR team, as a consultant, to assist in the key modelling
			phase, leading to the first GEHR object model for the health care record. David
			Ingram was appointed Professor of Health informatics at UCL in London in 1995
			and the team, moved there to establish the Centre for Health Informatics
			(CHIME). Marcia Jacks was the GEHR Project Administrator and is now co-ordinator
			of CHIME at UCL, where the St. Bartholomew's team moved.</p>
			<p>Notable contributions in GEHR were also made by:</p>
			<p>Jeff Geboers, HDMP; Christian Aligne, French Red Cross; Olivier Baille,
			France Telecom; Daniel Mart, Association of Doctors and Dentists of Luxembourg;
			Jose Calado and Helder Machado, Institute of General Practice, Oporto; Mario
			Cortelezzi, Luxembourg; Penny Grub, Richard Dixon, University of Hull; Lesley
			Southgate, Jeanette Murphy and Sian Griffiths, St Bartholomew's Medical College;
			Ian Grey and John Shorter, SmithKline Beecham; Benoit Hap, C2V Paris; Gerhard
			Brenner, Carlos Salvador.</p>
			<p>Lesley Southgate, is now President of the Royal College of General
			Practitioners of the UK and Daniel Mart is General Secretary of the Association
			of Doctors and Dentists of Luxembourg.</p>

			
			<h3>The Accomplishments of the GEHR Project</h3>
			<p>The work of the GEHR project is well documented in its many widely
			communicated project reports, publications and software, and described on the
			CHIME.ucl.ac.uk web site. The final AIM Conference Paper concluded the first
			stage of the story of GEHR. All public deliverables of the Project may be
			downloaded from the UCL, CHIME web site.</p>
			<p>Working on the GEHR Project was an absorbing and unforgettable experience. It
			tackled an intrinsically difficult and contentious domain. Its results, which
			have continued to evolve in many projects and standards developments, have
			proved to be enduring accomplishments, from clinical, technical and
			organisational perspectives.</p>
			<p class="par">Key attributes of the project approach and accomplishment were:</p>
			<ul>
			<li>Experienced, competent, committed and passionate multi-professional
			teamwork. The team worked very hard, disagreed and fought at times, but also
			evolved a culture of friendship, mutual support and loyalty, through some
			difficult challenges.</li>
			<li>Development of an original, formal approach to electronic health record
			architecture, based on object modelling methods and founded on a comprehensive
			and systematic review of patient and clinical professional roles and
			requirements, across Europe, in relation to records.</li>
			<li>An empirical and iterative prototyping approach to the evolution of the
			architecture, emphasising implementation and testing of concepts, practically,
			at each stage.</li>
			<li>The decision of the partners, in the interests of effective dissemination of
			the work, to publish the project results openly, within the public domain. The
			EU Contract in principle vested IPR for the work with the Consortium.</li>
			</ul>
			<p>Warmly supported as it was by Niels Rossing and the Commission and by its
			Project Officer, Jacques Lacombe, the Project proved from its very earliest
			stages and over time not to be short of powerful opponents, as well. Its results
			were provided, step by step as they were available and often before official
			publication, into all the stages of the formulation of EU pre-standards of CEN
			and further afield.</p>

			<h3>The Interface between the GEHR Project and Technical Committee
			TC/251-Medical Informatics of CEN</h3>
			<p>At about the same time that the AIM Programme was initiated, CEN established
			a standards initiative for medical informatics through its Technical Committee
			TC/251, led by Prof. Georges de Moor. The strategic co-ordination achieved
			between the AIM and CEN activities was sometimes disappointing and their goals
			and methods were very different. AIM was tackling the domain through extensive
			and well funded applied research and development in wide-ranging consortia such
			as GEHR. CEN, with much less resource, was tackling its role as a consensus
			building process, using task forces of experts to propose standards which were
			then voted on by national delegates. Of course, both empirical research and
			standards setting activities are needed to advance the field.</p>
			<p>During the course of the GEHR Project, a Project Team was established under
			TC/251 of CEN, to propose a pre-standard health record architecture. Some early
			deliverables of GEHR, in formulating clinical requirements and proposing early
			formal models for the EHCR, were requested by and provided to the CEN project
			team, led by Petter Hurlen. This team, in which some members of GEHR
			participated, published the first CEN pre standard, ENV 12265. The extensive use
			and influence of GEHR project results and concepts available at that time are
			clear in the CEN publication. The GEHR project continued to develop and refine
			its approach after the pre-standard was published.</p>
			<p>GEHR sought to work in a spirit of co-operation. Recognising its deficiencies
			and successively refining its results, in the public domain, was a key feature
			of its working method. Opposition and contrary perspectives provide an important
			and useful crucible for innovation. GEHR was quite radical in its approach and
			no doubt uncomfortable to have as a partner, as a result.</p>

			<h3>From GEHR to Synapses in Europe</h3>
			<p>The GEHR Project came to an end at the end of 1994 and two proposals to
			extend its work plan were not immediately successful. One of these was for a
			Support Action to maintain co-ordination in health record architecture work and
			the other for more extensive field trials of the architecture. GEHR had
			delivered a significant, but by no means completed, advance in the application
			of object modelling approaches to the electronic health care record (EHCR) and
			its evaluation against comprehensive clinical and ethical requirements as well
			as implementation experience. It was clear to the team that this first stage
			GEHR architecture, the first GEHR Object Model, would require continuing
			refinement in the light of implementation experience.</p>
			<p>The project had, throughout, grappled with the issues of relational versus
			object database representations of clinical data. At the stage of evolution of
			database technology then pertaining, these concepts were in a state of
			considerable flux. Aspects of functionality were highly desirable, but they were
			hard to combine. Both camps argued their case, responding to the emerging needs
			of complex applications domains, of which the medical record was an obviously
			challenging example.</p>
			<p>At the close of the project, the GEHR partners could see the potential
			requirement for a public domain foundation to take forward their work. It was
			resolved to leave this issue open until some future stage, when the rationale
			for how this might operate had become more apparent.</p>
			<p>In summer 1995, the St Bartholomew's team moved with David Ingram, across
			London to UCL, when he was recruited to establish the new UCL Centre for Health
			Informatics and Multi-Professional Education (CHIME). Sam Heard and Tom Beale,
			now both based in Australia, have remained in close touch with the UCL team have
			continued regular visits to and fro. David Ingram has made academic visits to
			Australian Universities and as participant and keynote lecturer at two national
			Health Informatics Conferences, in Melbourne and Hobart.</p>
			<p>The GEHR approach remained alive in CHIME and its collaborating centres.
			Successive research results and implementations of record servers based on this
			are now making key contributions within the newly launched UK <em>Information
			for Health</em> Strategy. The GEHR approach was taken forward on a broader
			front, beyond the UK and Europe, especially by Sam Heard, Tom Beale and Peter
			Schloeffel and their colleagues in Australia.</p>
			<p>Reactions against GEHR: When the GEHR project came to an end, a reaction set
			in against it. The first GEHR Object Model became a focus of concerted
			opposition within some groups working in the domain in the UK and within CEN
			standards bodies. The questioning of the assumptions and approaches of existing
			products and approaches had been inevitable, but did not make GEHR popular,
			although its approach always sought to be constructive. It was unfortunate that
			the work of GEHR came, apparently, to be perceived as a threat to other
			interests and ambitions, evidenced by the manner in which it was opposed, early,
			tentative and incomplete as its results were.</p>
			<p>One important area of controversy arose in the confrontation between the
			record architecture paradigm and the paradigm of healthcare messages between
			systems, as typified by the EDIFACT initiatives and the HL7 consortium of
			suppliers, for interoperability between their products. The advocacy by GEHR and
			its successors of a record architecture to anchor information standards and
			services and their contexts within records was controversial and was, and still
			is, opposed. It did not help that most available clinical systems claiming to be
			clinical records systems did not meet the commonly agreed clinical understanding
			of what a clinical record is and the requirements it must meet.</p>
			<p>It is interesting that, in facing the technical and clinical challenges of
			implementing real clinical record systems within real health care contexts,
			health care and international standards bodies have only recently begun to
			explore rigorously what the requirements for such systems are and how their
			performance may be assessed against these. This is inexorably drawing the issues
			raised by the GEHR project, over ten years ago, back into play. The need to
			focus efforts in this way, as we enter the post Human Genome Project era, is, if
			anything, more crucial today.</p>
			<p>The objective of reverse engineering a health record information model from
			the legacy of an evolving messaging semantics, as typified by successive HL7
			versions, is difficult! In GEHR, such messages were seen as being derivable
			straightforwardly from the GEHR object model underlying the record formalism, in
			a clinically comprehensive and ethically acceptable manner. However, without an
			accessible public domain implementation of such a record architecture, it is
			quite understandable that existing suppliers of systems, struggling to evolve
			their products to meet the requirements of patient centred and clinically more
			accountable care, view such an initiative with some concern.</p>
			<p>Synapses: In 1995, David Ingram and the UCL team joined forces with Professor
			Jane Grimson of Trinity College Dublin in a new consortium aiming to propose a
			project to explore the legacy systems integration issues in progressing towards
			a federated electronic healthcare record. From the other GEHR participants,
			Daniel Mart of The Association of Doctors and Dentists of Luxembourg and Jo
			Milan of the Royal Marsden also joined this larger consortium of EU teams and
			industries, which included Siemens and Hiscom as major suppliers.</p>
			<p>Reflecting on the results of the GEHR Project, and looking at the new
			challenges of implementation of a federated approach, Jo Milan and David Ingram
			developed and wrote the methodological section of the Synapses Project Proposal
			that proposed a new paradigm for implementation of the record, which divided the
			formal description of the architecture into a high level structural model
			(Synom) and a model of clinical content (Synod), implemented through a clinical
			object dictionary.</p>
			<p>The Synapses project from 1995-98 succeeded in implementing several pilot
			record servers, built according to the Synom/Synod principle, across Europe (see
			CHIME and TCD web sites). The user requirements and information modelling
			workpackage was led by Dipak Kalra, and the implementation workpackage by David
			Ingram.</p>
			<p>Controversy still dogged the formal methods to be adopted and the principles
			and detail of the Synom and Synod were difficult and contentious matters within
			the Synapses consortium. Legacy environments in the demonstrator sites inhibited
			freedom to design <em>de novo</em> and reconciling those who wished to restrict
			implementation to the concepts of the earlier CEN pre-standard model and those
			who favoured further evolution, utilising the later results of GEHR and moving
			forward from there was also difficult. Synapses proved another burning crucible
			of endeavour, where staying power was challenged to the full!</p>
			<p>Synapses reached a compromise to extend the fundamental concepts of Env
			12265, with new aggregation structures to accommodate the requirements analysed
			and provided for within the GEHR Object Model (GOM) in the later stages of the
			GEHR project. The low-level Synom/Synod approach, as further developed by the
			UCL team, proved a robust foundation of implementation, avoiding some of the
			implementation difficulties associated with the fine granularity of the single
			level architecture of the original GOM. Progress at UCL with the concept of the
			object dictionary and tools to support it was encouraging.</p>
	

			<h3>Australia awakens the world electronic health care records
			community to the approach of GEHR</h3>
			<p>Aware of the anti-GEHR sentiments in the UK and in CEN in Europe, Sam Heard
			and Tom Beale joined forces again in Australia, in 1996, to work together to
			refine the GEHR Object Model through implementation. This also led to a two
			level modelling approach - the health record architecture itself and the
			clinical models or standards required for automatic processing of information.
			The latter has become known as the GEHR archetype system.</p>
			<p>The SynOD and Archetype approaches were subsequently discovered to be largely
			the same and have been progressively harmonized within a common
			openEHR architecture. Peter Schloeffel had met David Ingram with
			Michael Britton, at UCL, in 1996 Michael and David Newble obtained British
			Council support to invite him to contribute key lectures at a symposium in
			Adelaide in August 1998, with Sam Heard, and there he met Peter again, as a
			local systems supplier.</p>
			<p>Following this event, Peter subsequently met Stan Sheppard and started to
			develop a business partnership. In these partnerships began the renewed
			Australian focus on developing the results of the original GEHR project which
			has had a considerable influence, internationally in the ISO, HL7, CEN and, more
			importantly in many Net discussion groups and in meetings about the EHCR in the
			USA. In Australia, the team achieved considerable success in moving to the
			centre of the national development programme for the EHCR. They worked with
			systems R&amp;D teams at DSTC on implementation of a GEHR server or kernel,
			based on the archetype model for content within a higher level information model
			close to the higher levels of the original GEHR object model.</p>

			
			<h3>Implementation, Implementation, implementation!</h3>
			<p><i>from GEHR and Synapses to Synex, Medicate and 6-winit in CHIME and UCL </i></p>
			<p>The behaviour of standards communities in these times, spending much time,
			money and energy disputing and seemingly seeking above all else to dominate one
			another&rsquo;s agendas, was scientifically extremely questionable, yet seemed to
			brook no questioning. It is not sufficient justification that standards for
			health information management are deemed crucially needed, that a crude
			consensus and legislative process be adopted for their definition, when the
			underpinning empirical foundations for organising and modelling information in
			the domain are still in process of evolution through empirical research.
			Monolithic modelling of healthcare information domains is clearly a fascinating
			exercise but, if devoid of empirical and practical context, clear domain
			definitions and verifiable objectives, has little if any meaning. Such models
			are in any case inevitably non-identifiable or non-unique formulations,
			incapable of purposive application within implementable and clinically viable
			systems.</p>
			<p>This may all sound rather obvious but a review of much work from many bodies,
			especially governmental and inter-governmental bodies over recent decades, will
			show that information standardisation has frequently proceeded devoid of
			empirical testing and validation and that many costly failures have resulted
			therefrom. This matters to patients and has been disastrous in the quest to use
			information technology to support cost-effective health care services!</p>
			<p>Given this flow of events, the UCL team concluded that three immediate things
			now mattered more than any other. These were implementation, implementation and
			implementation!</p>
			<p>The team thus put its head down to get on with developing its new research,
			alongside new graduate and educational programmes. In developing its ideas, post
			GEHR, it started a prolonged period of intensive software implementation and
			evaluation of the record architecture and object dictionary, led by Dipak Kalra
			with Tony Austin, David Lloyd and Alexis O&rsquo;Connor, and Vivienne Griffith. This
			work was conducted throughout the EU Synapses project, then in the EU Synex,
			Medicate and now the 6-WINIT and CLEF projects, and with David Patterson as an
			invaluable clinical sponsor as head of the Whittington Hospital Cardiology
			services. In these projects, the underlying concepts evolved beyond GEHR were
			widely tested for implementation in cardiology, cancer and respiratory medicine
			domains, in hospital, telecare and now in mobile systems contexts. In the Synex
			Project a wider grouping of record architecture, terminology (GALEN) and
			protocols (Proforma) formalisms were drawn into the Consortium. This six-year
			trial by implementation rather than trial by standardisation committee has borne
			much fruit in implemented practical clinical exemplars of the record
			architecture and object dictionary at work.</p>
			<p>David Lloyd, co-ordinating the EHCR-SupA project, put a great deal of effort
			into continuing inputs to the next CEN team established to take record
			architecture forward and also into a concerted action within the Framework
			Programme, to look at synthesis among the different modelling approaches to the
			EHCR.</p>

			
			<h3>openEHR</h3>
			<p>In 1998, at the conclusion of the Synapses Project, David Ingram circulated a
			paper about the need for a clinically focused Foundation to own the content
			domain around standards for clinical information management. It attracted
			interested comment and it was left with UCL to take it forward. In late 1999, a
			joint meeting of the Australian and UCL teams, in London, considered the forward
			pathway for the work of their two teams, in this context. They feared that some
			divergencies in their respective implementation pathway, architecture and
			content models were emerging and wished to work towards convergence again, if
			possible. The meeting decided to work to establish an open source foundation to
			take forward harmonisation in the field, from patient and clinical perspectives.
			The name openEHR, proposed by David Ingram, was adopted. Membership, it
			was felt, should be open to all signing up to a set of principles guiding the
			Foundation&rsquo;s activities, which emphasised constructive, inclusive and
			empirically based evolution of rigorously defined software and systems,
			organised around the two level strategy of the UCL object dictionary and the
			Australian archetype methodology. It was agreed to allow implementation to
			proceed in parallel over a further period of about a year before meeting to seek
			to reconcile a common achievable way forward.</p>
			<p>David Lloyd undertook the task of drawing together the threads from the
			meeting and developing an openEHR web site. David Ingram was given a
			brief as chairman of the initiative to seek early funding of an umbrella to hold
			together the concept of a three-time zone foundation with component groups in
			Europe, Australia and the USA. Peter Schloeffel was asked to pursue a role as
			ambassador for openEHR, to press ahead with Sam and Tom to establish
			the Australian chapter as the first step and to seek to find a USA partner.</p>
			
			
			<h3>First Ideas for the openEHR Foundation</h3>
			<p>A draft "manifesto" was prepared for discussion with interested parties, as
			follows.</p>
			<p>The openEHR Foundation is an international, on-line community whose
			aim is to promote and facilitate progress towards electronic healthcare records
			of high quality, to support the needs of patients and clinicians everywhere. It
			will publish the theoretical foundations and evaluations of its work in the
			public domain and make available relevant EHCR source programs and datasets
			under an OpenSource license. This continues the tradition of the GEHR project,
			from which openEHR has emerged, of placing results in the public
			domain. We recognise that there is a certain initiative fatigue in the field and
			we would not propose a new initiative were we not sure that something radically
			different is now essential. So many systems describe themselves as electronic
			healthcare records and yet share little common concept of what such an entity is
			and what it is for.</p>
			<p>The research and development in this field has followed a chaotic and
			tortuous evolution, influenced inevitably by commercial, political and academic
			pressures and rivalries and also by severe inertia because of the need to
			continue to accommodate legacy systems. Confused and confusing arguments have
			persisted about esoteric models of ill-defined clinical terminology, processes
			and communications. Continuing reinvention of wheels at these levels of
			abstraction has inhibited progress. There is an urgent need for more empirical
			study of the implementation and comparative evaluation of a diverse range of
			approaches to the provision of high quality electronic healthcare records,
			informed by and informing international consensus about the requirements to be
			met. It is especially encouraging that the ISO has now adopted work which will
			elevate formally defined clinical requirements to the highest level in the
			standards process for electronic healthcare records.</p>
			<p class="par">openEHR directs its efforts towards:</p>
			<ul>
			<li>well-formulated clinical requirements, offered as a contribution towards international consensus</li>
			<li>rigorous development, implemention and evaluation methodology for systems</li>
			<li>common information model for the record, where clinical requirements dictate
			that this is necessary and where the relationship between model and requirements
			is made explicit</li>
			<li>diversity of information models and implementations, where these will enrich
			experience of a variety of approaches and systems and thereby promote the
			evolution towards high quality and cost-effective EHR solutions offered</li>
			<li>empirical evaluation of systems performance against clinical requirements</li>
			</ul><br/>
			<p>openEHR recognises that achieving its aims is extremely complex on
			many levels and certainly beyond the co-ordination powers of any one group. It
			believes that progress can be enhanced by interested groups coming together to
			promote and facilitate implementation and evaluation of systems using a
			co-ordinated methodology, and working openly within the public domain. It has
			not proved possible for the power of commercial and political organisations to
			devise and mandate solutions which demonstrate that they provide good quality
			EHCRs. An open developmental process is proposed in an effort to break this
			damaging impasse. openEHR has started a process of bringing together
			like-minded conceptual thinkers and systems implementers, prepared to offer
			their work to the EHR community in this way.</p>
			<p class="par">In pursuing its aims, openEHR will:</p>
			<ul>
			<li>be open to all who sign up to its objectives and methods of work</li>
			<li>have free individual membership</li>
			<li>charge membership fees for official bodies, on a not-for-profit basis</li>
			<li>help to define and support a common process of specification of clinical
			requirements, specification and implementation of systems and evaluation of the
			electronic healthcare records provided (Note: this will be termed the GEHR (Good
			Electronic Healthcare Record) methodology, since it will rest initially very
			heavily on the methods set out and followed for the first time in the GEHR
			project from 1989. This 7-country R&amp;D project developed concepts, object
			model and early prototypes and tools for a common European Health Record
			Architecture and has been drawn on in subsequent partnerships and projects
			across the world. The work was placed by the partners in the public domain and
			fed into and adopted by standards bodies)</li>
			<li>publish the work of projects and systems conducted within the
			openEHR community and adopting the GEHR methodology.</li>
			<li>offer the sources of such GEHR-based systems, in which IPR will be assigned
			to openEHR, under an open-source license within the community.
			Individuals or companies assigning IPR to the Foundation may where necessary and
			appropriate be remunerated under contract or through license fees.</li>
			<li>offer all its work openly in a spirit of a public enterprise, believing that
			this is the best and perhaps only way that appropriate high quality and
			interoperable systems are likely to emerge, worldwide.</li>
			<li>seek constructive relationships with groups and communities focusing on
			other aspects of clinical information management such as messages, terminology,
			knowledge-management and decision-support.</li>
			</ul><br/>
			<p>
			openEHR will not campaign against or obstruct others working on electronic healthcare
			records. On the contrary, it will welcome and endorse their success in meeting
			the aims and objectives of openEHR.</p>

			<h3>Whehr now?</h3>
			<p>Until implementations have been conclusively demonstrated and a pathway of
			development of the Foundation is clear, no-one will listen very much or take
			risks in what openEHR is advocating - that is to start basing national
			strategies on the approach we are advocating. Governments in every country are
			receiving such contradictory advice from people who say either that HL7 already
			solves everything or that EHCRs are easy/too difficult and don&rsquo;t need/cannot
			have a common approach to the record architecture!</p>
			<p>A presentation was made to The Provost of UCL and he enthusiastically gave
			his support to UCL providing co-ordination of openEHR, through its team
			in CHIME.</p>
			<p>This presentation was also introduced to The Wellcome Trust, NHS Executive
			and to the UK NHS Information Authority and Policy Unit.</p>
			<p>Following the UK CSR2000 public spending review, in which David Ingram
			participated on the national research councils&rsquo; informatics committee,
			substantial investment is planned in the UK and Europe into GRID demonstrator
			projects. An opportunity arises to link bio-informatics and health informatics
			research and development here. The UCL team linked with Alan Rector in
			Manchester, with Don Detmar in Cambridge, and with other colleagues in Sheffield
			and Brighton to bid successfully for the CLEF project.</p>
			<p>Through the NHS National Plan, the opportunity arises to take forward
			demonstrators for the EHR in e-health incubator projects. Dipak Kalra has
			established excellent links with Oracle and the NHS project delivering an EHR
			for the national Cardiovascular disease service framework, building on the now
			very strong collaborative work at the Whittington Hospital.</p>
			<p>A week long meeting of the embryonic openEHR international
			co-ordination group was held in London in February 2001, to review progress. It
			was attended by Sam, Tom, Peter, Mary, Dipak, David L and chaired by David I.
			</p>
			<p>The clinical and technical motivations for the Australian work on GEHR since
			1997 and its focus on splitting the original GEHR approach into a two level
			architecture, centred on user defined clinical archetypes, was closely studied,
			alongside the implementations of the UCL openEHR server incorporating
			the two level object model and object dictionary concept, evolved by UCL through
			its post GEHR projects. These systems are now seen, in the light of
			implementation experience of both teams over the year, to have been largely
			identical. UCL, now freed from the constraints of working within the compromises
			of Synapses and Synex in Europe, has reverted to its earlier GEHR approaches, to
			deliver clinical prototypes of its own EHCR record server, which is now termed
			an openEHR server. This has been adopted, with Oracle Corporation as
			the basis of middleware for the South West Region of the NHS ERDIP project on
			electronic records for cardiovascular disease.</p>
			<p>Now that the outcomes of the two streams of work are drawing together again
			in renewed collaboration, the differences appear small and the benefits of
			aligning them completely are compelling. At the meeting, the Australian and UCL
			teams worked intensively to define a convergence pathway for their work, within
			the emerging openEHR Foundation.</p>
			<p>In the mean time, the Australian team has succeeded wonderfully well in
			creating the Australia and Far East openEHR Foundation as a pilot
			initiative towards the vision of three such Foundations in Australia, Europe and
			the USA.</p>
			<p>We need to focus on these opportunities for cross-governmental funding for
			openEHR, perhaps splitting the main open source and content
			standardisation roles of the foundation from a trading arm, owned by the
			Foundation, to develop revenue streams to support the goals of the Foundation.
			</p>
			<p>At the same time, we have to remain firmly focused on our continuing pathway
			of keeping our teams together, expanding our partnerships and delivering the
			results needed to win the day!</p>
			
		</div>
			

	</div>

	<div id="BottomMenu">
	<?php include '../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
	<?php include '../panel/bottompanel.php' ?>
	</div>

</div>
	
<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>