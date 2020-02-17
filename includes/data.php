<?php  

// meta tags values ************************************************
$pg_meta = array(
	'index'			=> array(
		'key'	=> 'Gastroenterologist in Chromepet, Surgical Gastroenterologist in Chromepet, Gastroenterologist in Chennai',
		'desc'	=> 'Vanaja Hospital'
	),
	'home'			=> array(
		'key'	=> 'Gastroenterologist in Chromepet, Surgical Gastroenterologist in Chromepet, Gastroenterologist in Chennai',
		'desc'	=> 'Vanaja Hospital'
	),
	'about'			=> array(
		'key'	=> 'Dr. Senthil Ganesan, Surgical Gastroenterologist, Dr. Senthil Ganesan chromepet, Association of surgeons of india',
		'desc'	=> 'Dr.Senthil Ganesan completed his MBBS from Thanjavur medical college, Thanjavur. He has completed general surgery training from All India Institute Of Medical Sciences New Delhi in 2008'
	),
	'contact'		=> array(
		'key'	=> 'Contact Ambe clinic, Ambe clinic, Ambe clinic chromepet',
		'desc'	=> 'Vanaja Hospital'
	),
	'faq'			=> array(
		'key'	=> 'Gastroenterologist Frequently Asked Question, faq for gastroenterologist',
		'desc'	=> 'If you are 45 years or older, have a family history of GI cancer, or if you have complained to your family doctor about digestive problem such as frequent abdominal pain, nausea, diarrhea, constipation, or heartburn, something is affecting your digestive system'
	),
	'testimonial'	=> array(
		'key'	=> 'Testimonial for Gastroenterologist, ',
		'desc'	=> 'The doctor is simply humble, polite and very elegant. He also explained the result very clearly and made me feel completely satisfied.'
	),
	'ulcer'	=> array(
		'key'	=> 'ulcer treatment in chromepet, ulcer remedy, ulcer causes, what is ulcer',
		'desc'	=> 'The stomach produces a strong acid to help digest food and protect against microbes. To protect the tissues of the body from this acid, it also secretes a thick layer of mucus.'
	),
	'hernia'	=> array(
		'key'	=> 'hernia treatment in chromepet, hernia remedy, hernia causes, what is hernia',
		'desc'	=> 'Hernias are due to weakened muscles that may have been present since birth, or are associated with aging and repeated strains on the abdominal and groin areas.'
	),
	'piles'	=> array(
		'key'	=> 'piles treatment in chromepet, piles remedy, piles causes, what is piles',
		'desc'	=> 'Piles are inflamed and swollen collections of tissue in the anal area. A hard, possibly painful lump may be felt around the anus.'
	),
	'heart-burn'	=> array(
		'key'	=> 'Heart Burn treatment in chromepet, Heart Burn remedy, Heart Burn causes, what is Heart Burn',
		'desc'	=> 'Heartburn is a burning pain in your chest, just behind your breastbone. The pain is often worse after eating, in the evening,.'
	),
	'constipation'	=> array(
		'key'	=> 'constipation treatment in chromepet, constipation remedy, constipation causes, what is constipation',
		'desc'	=> 'Constipation can happen for many reasons, such as when stool passes through the colon too slowly. The slower the food moves through the digestive tract.'
	),
	'gall-bladder'	=> array(
		'key'	=> 'Gall Bladder treatment in chromepet, Gall Bladder remedy, Gall Bladder causes, what is Gall Bladder',
		'desc'	=> 'Gallstones are hardened deposits of the digestive fluid bile, that can form within the gallbladder. They vary in size and shape from as small.'
	),
	'liver-diseases'	=> array(
		'key'	=> 'Liver Diseases treatment in chromepet, Liver Diseases remedy, Liver Diseases causes, what is Liver Diseases',
		'desc'	=> 'The liver is an organ about the size of a football that sits just under your rib cage on the right side of your abdomen.'
	),
	'pancreas-stone'	=> array(
		'key'	=> 'Pancreas Stone treatment in chromepet, Pancreas Stone remedy, Pancreas Stone causes, what is Pancreas Stone',
		'desc'	=> 'The most common cause of acute pancreatitis is stones in the gallbladder. Gallstones pass through the common bile duct to enter the small intestine.'
	),
	'surgical-gastroenterology'	=> array(
		'key'	=> 'Surgical Gastroenterology treatment in chromepet, what is Surgical Gastroenterology',
		'desc'	=> 'The stomach produces a strong acid to help digest food and protect against microbes. To protect the tissues of the body from this acid,.'
	)
);

// all menus *********************************************************
$all_pages = array(
	'home'		=> 'Home',
	'specialist'			=> 'Specialist',
	'Cancer & Treatment'	=> array(
		'Gi Oncology'		=> array(
			'billary'				=> 'Billary',
			'colon'					=> 'Colon',
			'colorectal-cancer'		=> 'Colorectal Cancer',
			'liver'					=> 'Liver',
			'lung'					=> 'Lung',
			'neuroendocrine'		=> 'Neuroendocrine',
			'oesophago'				=> 'Oesophago',
			'stomach'				=> 'Stomach'
		),
		'Urology'			=> array(
			'prostate'				=> 'Prostate',
			'urology-kidney'		=> 'Urology Kidney',
			'urinary-bladder'		=> 'Urinary Bladder',
		),
		'Breast'			=> array(
			'breast-cancer'					=> 'Breast Cancer',
			'breast-construction-surgery'	=> 'Breast Construction Surgery',
			'sentinel-lymph-node-biopsy'	=> 'Sentinel Lymph Node Biopsy',
		),
		'Gynaec oncology'				=> array(
			'ovary'					=> 'ovary',
			'cervical'				=> 'Cervical',
			'uterus-cancer'			=> 'Uterus Cancer',
		),
		'Bone'			=> array(
			'bone-cancer'					=> 'Bone Cancer',
			'soft-tissue-sarcomas'	=> 'Soft tissue sarcomas',
		),
		'skin'			=> 'Skin',
		'thyroid'		=> 'Thyroid',
		'hipec-surgery'	=> 'HIPEC Surgery'
	),
	'Gallery' 			=> array(
		'photo-gallery'	=> 'Photo Gallery',
		'video-gallery'	=> 'Video Gallery'
	),
	'contact'		=> 'contact us'
);

$services = $all_pages['Cancer & Treatment'];
$service = array_keys($all_pages['Cancer & Treatment']);
// print_r($service);

// foreach($otherserv as $k => $v):
// 	if(is_array($v)):
// 		unset($otherserv[$k]);
// 	endif;
// endforeach;
// foreach($othserv as $k1 => $v1):
// 	if(is_array($v1)):
// 		foreach($v1 as $k2 => $v2):
// 			return $k2;
// 		endforeach;
// 	endif;
// endforeach;

$all_serv = array();

foreach($services as $key => $value){
    if(is_array($value)){
        $all_serv = array_merge($all_serv, $value);
    } else {
        $all_serv[$key] = $value;
    }
}

// print_r ($all_serv);
$sub_serv = array('gi-oncology', 'urology', 'breast', 'gynaec-oncology', 'bone');
$service_keys = array_keys($all_serv);
$service_keys = array_merge($service_keys, $sub_serv);
// print_r($service_keys);

// foreach($service_keys as $serv) {
// $myfile = fopen('view/'.$serv.'.php', "w") or die("Unable to open file!");
// $write = 'service page content goes here';
// fwrite($myfile, $write);
// }

// testimonial data ********************************************
$testi_path = 'assets/img/testimonial/';
$testimonial = array(
	'Tamizh Ram' 		=> 'Thank you so much for the difference you make in the lives of your patients! Your 
							kindness, sincere caring, and concern make everything better and are a great 
							encouragement.” “Thank you so very much for taking care of our friend who came to you 
							with lots of health issues and being so skilled at what you do. Every day of his life 
							is better because of you and he feels confident after meeting a doctor like you. We 
							owe all our gratitude for your service!',
	'Mohammed Ashfaque' => 'Dr. Ayyappan is one of the best surgical oncologist in Chennai. He is not only a good Dr. 
							but a good human being. He is very patient in explaining the treatment to the family members 
							and takes extreme care in ensuring patients are very comfortable. 
							He treated my mother with extreme care and gave her lot of confidence during her most 
							difficult time. I am ever thankful to his care and treatment which helped my mother come 
							out of the treatment successfully.',
	'nithya shivakumar' => 'One of the best doctor i have ever met. so down to earth and explained the treatment 
							so well  that we were able to understand. My cousin got operated under him and she is 
							doing extremely well and the follow up is also wonderful. Very very rare to  meet such 
							good human being.  I would def recommend him for the people who require help.'
);

$testi_slice = array_slice($testimonial, 0, 2);
$testi_2 = array_slice($testimonial, 2, 2);

$youtube = array(
	'video-1'	=>	'https://www.youtube.com/watch?v=MH8Qnd5jX6c',
	'video-2'	=>	'https://www.youtube.com/watch?v=Q2V3N7-dDGM',
	'video-3'	=>	'https://www.youtube.com/watch?v=ZEeS0eqknXE',
	'video-4'	=>	'https://www.youtube.com/watch?v=9BUrngIGOCY'
);


// faq ************************************************************

$faq = array(
	'Why Do I Need To See A Gastroenterologist?' 		=> 'Gastroenterology is the speciality dealing with disgestive system 
															diseases. They provide tertiary level consultation for any 
															digestive ailments. Patients with any problem related to 
															abdomen or digestive system, they can consult Gastroenterologists.',
	'Do you treat children and adults?' 				=> 'We take care of adult patients. Our gastroenterologist 
															care for children above 12 years of age.',
	'Do your support staff speak English?' 				=> 'Yes, Our staff can make a conversation with you in English.',
	'Where Are You Located?'							=> 'We are located in Chromepet, Chennai, Tamil Nadu 600044. 
															Check the Contact us page for map directions and more informations',
	'Why do I have trouble swallowing?' 				=> 'There are many reasons why swallowing is impaired usually 
															related to the esophagus (swallowing tube) such as acid reflux or, 
															in some cases, cancer. You must see a 
															gastroenterologist to identify the reason of your problem.',
	'Are hemorrhoids dangerous?' 						=> 'In general, no. Only in very rare circumstances can hemorrhoids bleed profusely requiring hospitalization.',
	'I saw blood in my stool, what should I do?' 		=> 'You should consult a Doctor. Even though blood in stool is 
															often associated with benign conditions, rarely they may be the 
															symptom of underlying cancer.',
);

$faq_slice = array_slice($faq, 2, 3);
$faq_tiny = array_slice($faq, 1, 3);

?>