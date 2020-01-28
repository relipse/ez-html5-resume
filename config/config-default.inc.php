<?php

$cfg['name'] = 'Jim A Kinsman';
$cfg['email'] = 'jakinsman@gmail.com';

$cfg['job-title'] = 'Web Developer';
$cfg['location'] = 'Johnson Creek, WI or Remote';

$cfg['main-site-title'] = $cfg['name'] . ', '. $cfg['job-title'] .' in '.$cfg['location'];

$cfg['google-plus-url'] = 'https://plus.google.com/+JimKinsman';


$cfg['meta-description'] = "Jim Kinsman is a Web Developer in Madison, Wisconsin , His highlights are ".(date('Y')-2008)." years as a PHP Programmer, JavaScript and jQuery front end. Also doing responsive HTML5 and CSS3 prefers to use git for version control.";

$cfg['meta-keywords'] = "Resume, CSS, HTML, PHP, MVC, CodeIgniter, Laravel, git, JavaScript, jQuery, jQuery plugins, REST APIs, responsive";

$cfg['education'] = [ 
	['school'=>'University of Maryland Baltimore County (UMBC)', 'gpa'=>'3.19', 'degree'=>'Bachelors', 'study'=>'Computer Science'],
];

$cfg['skills'] = [
	'PHP (MVC TinyMVC, CodeIgniter, Laravel, Zend MVC)',
	'JavaScript, jQuery (jQuery plugins)',
	'HTML5, CSS3 (Responsive)',
	'REST APIs',
];

$cfg['highlights'] = [
	'Starting programming in PHP in 2002',
	'Working for Hand of Help for 8 years, made their desktop website responsive to work on mobile and tablet <a href="http://handofhelp.com">handofhelp.com</a>',
	'Created SharpmailerPhysicial Mailing List for some organizations as seen here <a target="_blank" href="http://sharpmailer.us/admin/sharpmailer">sharpmailer.us</a>',
];

$cfg['employment'] = [
  [
  	'client'=>'Web Courseworks Ltd.',
  	'paren'=>'Senior Developer',
  	'from'=>'July 23, 2018',
  	'to'=>'Current',
  	'points'=>[
  		'Work with learning system built atop of Moodle creating features and plugins',
  		'Program integrations using SOAP within our learning system to connect the LMS to the AMS',
      'Collaborate with other developers and participate in Code Reviews', 
  	],
  ],
  [
  	'client'=>'Management Research Services Inc',
  	'paren' => 'Developer',
  	'from'=>'Oct 2016',
  	'to'=> 'Apr 2018',
  	'points'=> [
  		'Worked with PHP, Composer, Vagrant, MySQL Apache, and Linux to help fix legacy code and patch different areas.',
  		'Worked with and in some cases mentored another developer helping in JavaScript, jQuery and PHP Issues.',
  		'Used git for deploys and in some cases rollbacks.',
  		'Developed a database migration system in PHP for us to implement database migrations and rollbacks.',
  	]
  ],
  ['client'=>'Hand of Help', 'paren'=>'Contractor', 'from'=>'2010','to'=>'Current', 
  	'points'=>[
  	  'Began creating a recurring donations system using Laravel allowing donors to donate monthly automatically using a REST API to interface with forte (payments gateway)',
  		'Used curl to contact a credit card payment gateway REST API for adding new customers, payment methods and transactions',
  		'Created an e-commerce shopping section with cart, checkout, accepting payments with Credit Card and PayPal using CodeIgniter (see <a href="https://www.handofhelp.com/resources" target="_blank">handofhelp.com/resources</a>)',
  		'Converted desktop site to responsive design for mobile and tablet (see <a target="_blank" href="http://www.handofhelp.com">handofhelp.com</a>)',
   		'Updated <a target="_blank" href="http://www.handofhelp.com">handofhelp.com</a> website using PHP/MySQL and HTML/CSS/JavaScript.',
  		'Installed security logging of credit card transactions to deal with massive attacks from Brazil',
  		'Coded central code-base to for our credit card system to be handled by forte for regular donations and recurring transactions.',
  		'Created membership section of website where users can log in and check their transactions',
  		'Transferred legacy system to proper git repositories',
  		'Used TinyMVC to build two back-end projects, one for keeping track of the physical mailing list, and the other to keep track of in-kind donations such as boxes and clothing items.',
 	 ],
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
	
	['name'=>'CEB SHL Talent Measurement PHP Test Aug 19, 2016 - Proficiency Level: Advanced (3.51 - 4.50)', 'sub-title'=>
	'The candidate has mastered the basic concepts of PHP 5.5 (Language Structure, XHTML Integration) and intermediate PHP 5.5 concepts (Language Functions, Communication Functions, Databases). The candidate is likely proficient with more advanced PHP 5.5 concepts such as:  Application Security,  Object Oriented Programming. At the Advanced level, the candidate will be capable of working on projects involving PHP 5.5 and will be capable of mentoring others on most projects in this area.', 'date'=>'2016-08-19'],
	['name'=>'International Knowledge Measurement','date'=>'2016-09-20','sub-title'=>'HTML, CSS AND JAVASCRIPT',
	  'results'=>
		[
			'Score'=>'Overall score of 96 (strong) across all sub-skills in this subject',
			'Percentile'=>'97% - James has scored higher than 97% of all test takers in this subject.',
			'HTML5 Multimedia'=>'Mid-Proficient',
			'HTML5 Document Types and Structure'=>'Upper-Proficient',
			'HTML5 Browser Support'=>'Upper-Proficient',
			'CSS3 Styling'=>'Top-most Proficient',
			'HTML5 Images and External Documents'=>'Mid-Strong',
			'CSS3 Media Types, Layouts and Effects'=>'Mid-Strong',
			'HTML5 Syntax and Semantics'=>'Top-most Strong',
			'HTML5 Graphics'=>'Top-most Strong',
			'Using JavaScript'=>'Top-most Strong',
			'CSS3 Attributes and Properties'=>'Top-most Strong',
			'Work Speed/Accuracy'=>'Above Average - James has demonstrated above average speed in analyzing and answering the questions and may be considered for time critical projects.',
			'Application Ability'=>'Extensive - James has demonstrated a mastery in applying his/her knowledge to practical applications.',
			'Subject Coverage'=>'James has demonstrated a proficient or strong level of knowledge in 100% of the subject',
		],
	],
];
