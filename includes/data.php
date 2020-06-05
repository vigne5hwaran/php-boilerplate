<?php  

// meta tags values ************************************************
$pg_meta = array(
	'index'			=> array(
    'title' => 'Best Knee Surgery in Chennai',
		'key'	=> 'Knee replacement Chennai, Knee specialist chennai,Knee pain treatment, Knee transplant chennai, Knee surgeon chennai, Best knee surgeon chennai, Best Ortho surgeon chennai, Best Ortho specialist chennai, Knee injury specialist, Key hole surgery specialist, Ligament surgery specialist',
		'desc'	=> 'Dr. Kanna Knee & Ortho Clinic is a pioneering effort in Chennai, located at the heart of the city at Shanthi Colony, Anna Nagar. The clinic offers specialized care for arthritis, ligament injuries and various other knee disorders by delivering the latest and best in knee care for every patient'
	),
	'home'			=> array(
    'title' => 'Best Knee Surgery in Chennai',
		'key'	=> 'Knee replacement Chennai, Knee specialist chennai,Knee pain treatment, Knee transplant chennai, Knee surgeon chennai, Best knee surgeon chennai, Best Ortho surgeon chennai, Best Ortho specialist chennai, Knee injury specialist, Key hole surgery specialist, Ligament surgery specialist',
		'desc'	=> 'Dr. Kanna Knee & Ortho Clinic is a pioneering effort in Chennai, located at the heart of the city at Shanthi Colony, Anna Nagar. The clinic offers specialized care for arthritis, ligament injuries and various other knee disorders by delivering the latest and best in knee care for every patient'
	),
	'about'			=> array(
    'title' => 'About Dr Raj kanna knee Surgeon in Chennai',
		'key'	=> 'Dr Raj kanna Knee news in chennai, dr raj kanna news letter in chennai,Best Knee Osteoarthritis treatment in chennai',
		'desc'	=> 'Lifetime squatting, lotus (cross leg sitting) and side-knee bending positions increase the risk of knee osteoarthritis'
	),
	'contact'			=> array(
    'title' => 'Dr.Raj Kanna Knee Clinic in chennai, anna nagar, Knee Clinic in chennai, anna nagar',
		'key'	=> 'Dr.Raj Kanna Knee Clinic in chennai, anna nagar, Knee Clinic in chennai, anna nagar, arthopedic surgeon in chennai, Anna nagar,  arthopedic clinic in chennai, Anna nagar',
		'desc'	=> 'Total Knee Replacement (TKR) surgery is one of the most significant advancements of the 20th century in orthopaedic surgery. With rapid improvement in technology, computer navigation is being increasingly used in knee replacement surgeries.'
	),
	'appointment'			=> array(
    'title' => 'Dr.Raj Kanna Knee Clinic in chennai, anna nagar, Knee Clinic in chennai, anna nagar',
		'key'	=> 'Dr.Raj Kanna Knee Clinic in chennai, anna nagar, Knee Clinic in chennai, anna nagar, arthopedic surgeon in chennai, Anna nagar,  arthopedic clinic in chennai, Anna nagar',
		'desc'	=> 'Total Knee Replacement (TKR) surgery is one of the most significant advancements of the 20th century in orthopaedic surgery. With rapid improvement in technology, computer navigation is being increasingly used in knee replacement surgeries.'
	),
	'faq'			=> array(
    'title' => 'FAQ about Knee',
		'key'	=> 'Dr Raj kanna Knee news in chennai, dr raj kanna news letter in chennai,Best Knee Osteoarthritis treatment in chennai',
		'desc'	=> 'Habitual Floor Activities Increase Risk of Knee Osteoarthritis? Lifetime squatting, lotus (cross leg sitting) and side-knee bending positions increase the risk of knee osteoarthritis'
	)
);

// all menus *********************************************************
$all_pages = array(
  'home'  => 'Home',
  'about' => 'About',
  'Services' => array(
    'dermaroller' => 'Dermaroller',
    'chemical-peel' => 'Chemical Peel',
    'electro-cautery' => 'Electro Cautery',
    'microdermabrassion' => 'Microdermabrassion',
    'stemcell-therapy-for-skin' => 'Stemcell Therapy for Skin',
    'stemcell-therapy-for-hair' => 'Stemcell Therapy for Hair',
    'platelet-rich-plasma' => 'Platelet Rich Plasma',
    'ear-lobe-repair' => 'Ear lobe repair',
    'mole-excision' => 'Mole excision',
    'wart-removal' => 'Wart Removal',
    'corn-excision' => 'Corn Excision',
    'skintag-removal' => 'Skintag removal',
    'botox' => 'BOTOX',
    'fillers' => 'FILLERS',
    'scar-revision' => 'Scar revision',
    'skin-biopsy' => 'Skin biopsy',
  ),
  'Lasers' => array(
    'fraction-for-acne' => 'Fraction for Acne',
    'diode-for-hair-removal' => 'Diode for Hair Removal',
    'ipl-hair-removal' => 'IPL hair removal',
    'tatoo-removal' => 'Tatoo Removal',
    ),
  
  'gallery' => 'Gallery',
  'faq' => 'faq',
  'contact' => 'Contact'
);

$services = $all_pages['Services'];
$service = array_keys($all_pages['Services']);

$lasers = $all_pages['Lasers'];
$lasers = array_keys($all_pages['Lasers']);

$all_keys = array();
array_walk_recursive($all_pages, function($v, $k) use (&$all_keys) {
  $all_keys[$k] = $v;
});
$all_key = array_keys($all_keys);
// print_r($all_keys);


// foreach($all_keys as $k => $v) {
// $myfile = fopen('view/'.$k.'.php', "w") or die("Unable to open file!");
// }

// testimonial data ********************************************
$testi_path = 'assets/img/testimonial/';
$testimonial = array(
	'Vinees, Mumbai' 		=> 'Hi, my name is Vineesh and I want to share my experience which I went through with ACL
                  reconstruction on my left knee. I am a football player and I had a small knee injury which I taught
                  was small at that point of time. Subsequently I realized that I was not able to walk or climb
                  stairs freely even after couple of months. That is when I contacted Dr Raj Kanna and I had an ACL
                  reconstruction at Apollo Hospitals under him',
	'Anand, Chennai' => 'My name is Anand and I have been quite active in my sports life. However for the past two years I
                        have been severely handicapped because of the injury which I sustained in my left knee.',
	'Sujatha, Andhra Pradesh' => 'My name is Mrs Sujatha and I was suffering from arthritis of both my knees for more than five
                          years. I was literally crippled because of my illness. Finally I contacted Dr Rajkanna at Apollo
                          Hospital, Greams Road, Chennai and I have undergone total knee replacement of both my knees..',
  'kanagalakshmi, Sri lanka' => 'My name is Mr Rajendran , my wife Mrs Kanagalaxmi was suffering from severe arthritis of both the
                              knees. We were running from pillar to post to find a permanent solution for her problem.
                              Unfortunately nothing worked. We even tried alternative medicines like Ayurveda and other native
                              treatments. But everything failed. That is when we contacted Dr Rajkanna',
  'Deo Anita, UK' => 'My name is Deo Anita, and I am 55 years old. I had pain in both my knees which were severely
                    worn-out because of Rheumatoid Arthritis. Walking for even a short distance was so painful and
                    literally impossible. I used to shed tears every night because of the pain in my knees',
  'Debanjan Dey, West Bengal' => 'Hope you are well... And also hope you remember me...I am Debanjan... I am well now...I don’t have
                                any more problems in my leg...lots of thanks to you..'
);

$testi_slice = array_slice($testimonial, 0, 2);
$testi_2 = array_slice($testimonial, 2, 2);


// youtube 
$youtube_india = array(
	'qpdQZFI12yc',
	'j2d0sfuA1J0',
	'rYYX0iuLgw4',
	'EeKhp9lWQi0',
	'KMtV7txOfLU',
	'aBllU9IzYfc',
	'3XlRJs4lbP0',
	'shYGfA45Ivs',
);

$youtube_srilanka = array(
  'pTJnzivhcDo',
  'L5gQSR2JTvo',
);

$youtube_knee = array(
	'6zc7XwoSwsw',
	'5vLTuNLDIHU',
	'fjkatzfhwcc',
	'irHG1FpVv3I',
	'Y9dRIEdzClQ',
	'9yXihZhIQno',
	'5L1mu5iVcLM',
	'rr_c2MaDFQc',
	'_SBKAlRgWL0',
	'CLy06nomd9g'
);

$youtube_pin = array(
	'slW2cl8Ez6U',
	'0Pz-iFrwZck',
	'UHTo1a4w7wU',
	'Zd_V3tDlrK0',
	'vu_HLPLzCZQ',
	'8dohrhtx2Ck',
);

$youtube_faq = array(
  'X4TRchpSuR0',
  'FNT6-DqssvA',
  'CjfBD5wyTrE',
  'CkK_XbuPGCE',
  'fB4HVZAueaw',
  'iCE5IDbspRY',
  'xyxtP7tOEW8',
  'fuoMCqykMbs',
  'HTWaKhCsv3M',
  'gnAglk4SZfI',
  'VvkqrLxLCeo',
  'HMPLDePd958'
);

// galler 
$images = array(
	'photo 1' => 'gallery-1.jpg',
	'photo 2' => 'gallery-2.jpg',
	'photo 3' => 'gallery-3.jpg',
	'photo 4' => 'gallery-9.jpg',
	'photo 5' => 'gallery-10.jpg',
	'photo 6' => 'gallery-11.jpg'
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