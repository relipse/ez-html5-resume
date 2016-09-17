<?php

$cfg['name'] = 'Jim A Kinsman';
$cfg['email'] = 'jim@example.com';

$cfg['job-title'] = 'Web Developer';
$cfg['location'] = 'Madison, WI or Remote';

$cfg['main-site-title'] = $cfg['name'] . ', '. $cfg['job-title'] .' in '.$cfg['location'];

$cfg['google-plus-url'] = 'https://plus.google.com/+JimKinsman';


$cfg['meta-description'] = "Jim Kinsman is a Web Developer in Madison, Wisconsin , His highlights are 9 years as a PHP Programmer, JavaScript and jQuery front end. Also doing responsive HTML5 and CSS3 prefers to use git for version control.";

$cfg['meta-keywords'] = "Resume, CSS, HTML, PHP, git, JavaScript, jQuery, jQuery plugins, REST APIs, responsive";

$cfg['education'] = [ 
	['school'=>'University of Maryland Baltimore County (UMBC)', 'gpa'=>'3.19', 'degree'=>'Bachelors', 'study'=>'Computer Science'],
];

$cfg['skills'] = [
	'PHP (MVC TinyMVC, CodeIgniter Zend MVC)',
	'JavaScript, jQuery (jQuery plugins)',
	'HTML5, CSS3 (Responsive)',
	'REST APIs',
];

$cfg['highlights'] = [
	'Starting programming in PHP in 2002',
	'Working for Hand of Help for 6 years, made their desktop website responsive to work on mobile and tablet <a href="http://handofhelp.com">handofhelp.com</a>',
	'Created SharpmailerPhysicial Mailing List for some organizations as seen here <a target="_blank" href="http://sharpmailer.us/admin/sharpmailer">sharpmailer.us</a>',
];

$cfg['employment'] = [
  ['client'=>'Hand of Help', 'paren'=>'Contractor', 'from'=>'2010','to'=>'Current', 
  	'points'=>[
  		'Created an e-commerce shopping section with cart, checkout, accepting payments with Credit Card and PayPal using CodeIgniter',
  		'Converted desktop site to responsive design for mobile and tablet (see handofhelp.com)',
   		'Updated <a target="_blank" href="http://www.handofhelp.com">handofhelp.com</a> website using PHP/MySQL and HTML/CSS/JavaScript.',
  		'Installed security logging of credit card transactions to deal with massive attacks from Brazil',
  		'Coded central code-base to for our credit card system to be handled by forte for regular donations and recurring transactions.',
  		'Created membership section of website where users can log in and check their transactions',
  		'Transferred legacy system to proper git repositories',
  		'Used TinyMVC to build two back-end projects, one for keeping track of the physical mailing list, and the other to keep track of in-kind donations such as boxes and clothing items.',
 	 ]
	],
	['client'=>'InterVarsity', 'from'=>'Nov 2015', 'to'=>'Feb 2016',
		'points'=>[
			'Worked on a Drupal 7 install profile modifying and tweaking so it would all be set up	and ready to go',
			'Worked primarily with Drupal 7 getting acquainted on how add in CSS and JavaScript',
			'Used git flow workflow to make changes, features, etc and merge back into develop',
			'Helped develop responsive design using CSS and media queries',
			'Worked with SASS and bundler to compile into CSS',
		]
	],
	
  ['client'=>'Acumium', 'from'=>'Aug 2014', 'to'=>'Mar 2015',
		'points'=>[
			'Worked in PHP with Zend MVC to code on multiple websites using front-end CSS/Bootstrap',
			'Partook of SCRUM Agile methods with Time Estimations.',
			'Set up a script to deploy WordPress websites',
		]
	],

  ['client'=>'Information Pages', 'from'=>'Apr 2014', 'to'=>'July 2015',
		'points'=>[
			'Developed WordPress Plugins to integrate search listings and maps.',
			'Created JavaScript controls utilizing jQuery',
			'Utilized taking screenshots of websites using PhantomJS and IECapt with PHP both on a script and a web-interface',
		]
	],
 
  ['client'=>'E-Media Resources', 'from'=>'Dec 2013', 'to'=>'Apr 2014',
		'points'=>[
			'Worked with PHP as a web developer, managing several websites on linux, and implemented git repositories and          helped consolidate a proper git workflow.',
			'Worked with Milio’s Sandwiches www.milios.com – Programmed fax automated retry using php and imap to scan for failed faxes on this high-traffic site',
			'On a day-to-day basis, primarily a PHP programmer for several clients, but also some front-end javascript, jquery and css when needed, sites include different implementations such as CodeIgniter and Wordpress.',
			'Also made recommendations for legacy code, including security protection against SQL injection and proper storage of sensitive data.',
		]
	],

];

$cfg['achievements'] = [
	['name'=>'Derrico Computers & Software Unlimited, Inc', 'sub-title'=>'Skills Test', date=>'2013-11-08', 'results'=>
		[
			'Candidate Skill Level'=>'Mid to Senior Level',
			'PHP'=> ['Score'=>'Very Good','Experience'=>'10 years'],
			'JavaScript'=>['Score'=>'Good', 'Experience'=>'9 years'],
			'jQuery'=>['Score'=>'Good', 'Experience'=>'8 years'],
			'MySQL'=>['Score'=>'Good', 'Experience'=>'9 years'],
			'HTML'=>['Score'=>'Very Good', 'Experience'=>'10+ years'],
			'CSS'=>['Score'=>'Very Good', 'Experience'=>'10+ years'],
			'OOP'=>['Score'=>'Very Good', 'Experience'=>'10+ years'],
			'GIT'=>['Score'=>'Good', 'Experience'=>'1 year'],
		],
	],
	['name'=>'Capella Education Company | Career Builder', 'date'=>'2016-03-20', 'sub-title'=>'Certificate of Achievement - Completed Building Mobile-friendly Web Experiences with a 92%'],
];
