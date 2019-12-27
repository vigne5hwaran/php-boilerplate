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
	'about'		=> 'About us',
	'services'		=> array(
		'ulcer'			=> 'Ulcer',
		'hernia'		=> 'Hernia',
		'piles'			=> 'Piles',
		'heart-burn'	=> 'Heart Burn',
		'constipation'	=> 'Constipation',
		'gall-bladder-stones'	=> 'Gall Bladder Stones',
		'liver-diseases'	=> 'Liver Diseases',
		'pancreatitis'	=> 'Pancreatitis',
		'surgical-gastroenterology'	=> 'Surgical Gastroenterology',
	),
	'faq' 			=> 'faq',
	'testimonial' 	=> 'Testimonial',
	'contact'		=> 'contact us'
);

$services = $all_pages['services'];
$service = array_keys($all_pages['services']);
$services_cone = array_slice($services, 0, 3);
$services_ctwo = array_slice($services, 3, 3);
$services_cthr = array_slice($services, 6, 3);

// testimonial data ********************************************
$testi_path = 'assets/img/testimonial/';
$testimonial = array(
	'Karthiga Ruthvik' 	=> 'The doctor is simply humble, polite and very elegant. 
							He also explained the result very clearly and made me feel completely satisfied. 
							I\'m really overwhelmed. Thank you so much doctor. Wish you long live and I\'m 
							blessed to get your service.',
	'Venkatesan' 		=> 'Had a surgery recently based on doctors advice. I\'m doing good. Thanks to Doctor. 
							Doctor is really up-to-date in his field and professional, patient.He is crisp in talk 
							and care for his patients.i wish you for your great future Doc.',
	'Dilip kumar' 		=> 'Met him for consultation- he was amazingly modest and answered all my doubts without 
							murmur- appreciations and best wishes to keep this spirit up!',
	'Mugesh Sekar' 		=> 'I was operated for umbilical hernia on 11th of November\'s the treatment was 
							excellent, I was totally satisfied,.',
	'Vishwanathan' 		=> 'The Best Gastroenterologist Surgeon in Chrompet we can Trust. Doctor understands 
							and provides all the comfort that is required for a patient. Thank you doctor 
							for the treatment and excellent care !!',
	'MG Mayilvahanan' 	=> 'Excellent Patient Friendly doctor.. Very thorough and caring... Impressed with his 
							way of explaining about the illness and his staffs are very much helpful. 
							I would strongly recommend him for others.'
);

$testi_slice = array_slice($testimonial, 0, 2);
$testi_2 = array_slice($testimonial, 2, 2);

// services ***************************************************
$img_path = 'assets/img/services/';
$services_data = array(
	$service[0]		=>  'The stomach produces a strong acid to help digest food and protect against microbes. 
					To protect the tissues of the body from this acid, it also secretes a thick layer of
					mucus. If the mucus layer is worn away and stops functioning effectively, the acid can 
					damage the stomach tissue, causing an ulcer. Stomach ulcers are
					relatively easy to cure, but they can cause significant problems if left untreated.',

	$service[1]		=>  'Hernias are due to weakened muscles that may have been present since birth, or are associated with aging
					and repeated strains on the abdominal and groin areas. Such strain may come from physical exertion, obesity,
					pregnancy, frequent coughing, or straining on the toilet due to constipation.
					Adults may get an umbilical hernia by straining the abdominal area, being overweight, having a long-lasting
					heavy cough or after giving birth.',
					
	$service[2]		=>  'Piles are inflamed and swollen collections of tissue in the anal area. A hard, possibly painful lump may be felt
					around the anus. It may contain coagulated blood. Piles that contain blood are called thrombosed external
					hemorrhoids. Excessive anal bleeding, also possibly leading to anemia Excessive anal bleeding can lead 
					to anemia. Piles is classified into four grades: GRADE I, II, III, IV',

	$service[3]	=>  'Heartburn is a burning pain in your chest, just behind your breastbone. The pain is often worse after eating, in
					the evening, or when lying down or bending over.Occasional heartburn is common and no cause for
					alarm. Most people can manage the discomfort of heartburn on their own with lifestyle changes and over-
					the-counter medications.Heartburn that is more frequent or interferes with your daily routine may be a
					symptom of a more serious condition that requires medical care.',

	$service[4]	=>  'Constipation can happen for many reasons, such as when stool passes through the colon too slowly. The
					slower the food moves through the digestive tract, the more water the colon will absorb and the harder the
					feces will become. A person who poops fewer than 3 times per week may have constipation. However, it can
					become a problem if it is a symptom of a more serious underlying condition, such as colorectal cancer, or if it
					starts to cause further damage.',

	$service[5]	=>  'Gallstones are hardened deposits of the digestive fluid bile, that can form within the gallbladder. They vary in
					size and shape from as small as a grain of sand to as large as a golf ball. Gallstones occur when there is an
					imbalance in the chemical constituents of bile that result in precipitation of one or more of the
					components.',

	$service[6]	=>  'The liver is an organ about the size of a football that sits just under your rib cage on the right side of your
					abdomen. The liver is essential for digesting food and ridding your body of toxic substances.Liver disease can
					be inherited (genetic) or caused by a variety of factors that damage the liver, such as viruses and alcohol use.
					Obesity is also associated with liver damage. Over time, damage to the liver results in scarring (cirrhosis), which
					can lead to liver failure, a life-threatening condition.',

	$service[7]	=>  'The most common cause of acute pancreatitis is stones in the gallbladder. Gallstones pass through the common
					bile duct to enter the small intestine. At the entry of the small intestine, the main pancreatic duct joins or lies
					immediately next to the common bile duct. It is believed that stones that get stuck in the common bile
					duct impinge on the main pancreatic duct, causing an obstruction of the normal flow of pancreatic fluid and
					leading to pancreatic injury, Second common cause for acute pancreatitis is alcoholism.',
					
	$service[8]	=>  'Gastroenterology deals with the organ system responsible for consumption (oral cavity) and passage of 
					food (oesophagus), digestion (stomach, pancreas & liver), absorption of nutrients (small intestine) 
					and expelling of waste from body (colon, rectum & anus).<br /><br />
					The team at SIMS hospital Nungambakkam, Chennai cover comprehensive diseases- infective diseases, tumours 
					(both cancerous & non-cancerous), traumatic and post-surgical complications.<br /><br />
					The surgeries performed are mostly advanced as orientation, anatomy and location of 
					wound is a matter of up to date knowledge, technological knowhow and experience of the surgeon.<br /><br />
					Laparoscopy or key hole surgery is much preferred because of minimal post-operative pain, cosmesis and early 
					return to work. However very few surgeons adopt laparoscopy for most of the surgical conditions and 
					SIMS has experienced team, infrastructure and supportive staff to provide the same.<br /><br />
					The procedures to take centre stage at the hospital include:<br />
					> &nbsp;&nbsp;&nbsp; Advanced laparoscopic surgeries – Upper GI/ colorectal/ hepato-biliary and pancreatic<br />
					> &nbsp;&nbsp;&nbsp; Laparoscopic gastro intestinal cancer surgery<br />
					> &nbsp;&nbsp;&nbsp; Metabolic and bariatric surgery<br />
					> &nbsp;&nbsp;&nbsp; To Single incision laparoscopic surgery (instead of multiple tiny incisions).',
);


// faq ************************************************************

$faq = array(
	'Why Do I Need To See A Gastroenterologist?' 		=> 'If you are 45 years or older, have a family history of GI cancer, 
															or if you have complained to your family doctor about digestive 
															problem such as frequent abdominal pain, nausea, diarrhea, constipation, 
															or heartburn, something is affecting your digestive system.',
	'Do Surgical Gastroenterologists Perform Surgery?' 	=> 'Yes. Surgical Gastroenterologists perform endoscopic procedures, 
															and also perform surgery. When necessary.',
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
	'I saw blood in my stool, what should I do?' 		=> 'You need to consult your doctor. Blood in the stool warrants an 
															endoscopic examination of the large intestine (colon) to identify 
															a possible source of the bleeding even if you suspect hemorrhoids. 
															If you bleed a lot you must consult your doctor for immediate evaluation.',
);

$faq_slice = array_slice($faq, 2, 3);
$faq_tiny = array_slice($faq, 1, 3);

?>