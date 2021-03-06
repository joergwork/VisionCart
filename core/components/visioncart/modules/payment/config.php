<?php

$defaultProperties = array();

$defaultProperties[] = array(
	'key' => 'paymentCountry',
	'fieldLabel' => 'Country',
	'type' => 'combobox',
	'mandatory' => true,
	'defaultValue' => 'all',
	'values' => array(
		array('option' => 'All countries', 'value' => 'all'),
		array('option' => 'Afghanistan', 'value' => 'afghanistan'),
		array('option' => 'Albania', 'value' => 'albania'),
		array('option' => 'Algeria', 'value' => 'algeria'),
		array('option' => 'Andorra', 'value' => 'andorra'),
		array('option' => 'Angola', 'value' => 'angola'),
		array('option' => 'Antigua & Deps', 'value' => 'antigua & deps'),
		array('option' => 'Argentina', 'value' => 'argentina'),
		array('option' => 'Armenia', 'value' => 'armenia'),
		array('option' => 'Australia', 'value' => 'australia'),
		array('option' => 'Austria', 'value' => 'austria'),
		array('option' => 'Azerbaijan', 'value' => 'azerbaijan'),
		array('option' => 'Bahamas', 'value' => 'bahamas'),
		array('option' => 'Bahrain', 'value' => 'bahrain'),
		array('option' => 'Bangladesh', 'value' => 'bangladesh'),
		array('option' => 'Barbados', 'value' => 'barbados'),
		array('option' => 'Belarus', 'value' => 'belarus'),
		array('option' => 'Belgium', 'value' => 'belgium'),
		array('option' => 'Belize', 'value' => 'belize'),
		array('option' => 'Benin', 'value' => 'benin'),
		array('option' => 'Bhutan', 'value' => 'bhutan'),
		array('option' => 'Bolivia', 'value' => 'bolivia'),
		array('option' => 'Bosnia Herzegovina', 'value' => 'bosnia herzegovina'),
		array('option' => 'Botswana', 'value' => 'botswana'),
		array('option' => 'Brazil', 'value' => 'brazil'),
		array('option' => 'Brunei', 'value' => 'brunei'),
		array('option' => 'Bulgaria', 'value' => 'bulgaria'),
		array('option' => 'Burkina', 'value' => 'burkina'),
		array('option' => 'Burundi', 'value' => 'burundi'),
		array('option' => 'Cambodia', 'value' => 'cambodia'),
		array('option' => 'Cameroon', 'value' => 'cameroon'),
		array('option' => 'Canada', 'value' => 'canada'),
		array('option' => 'Cape Verde', 'value' => 'cape verde'),
		array('option' => 'Central African Rep', 'value' => 'central african rep'),
		array('option' => 'Chad', 'value' => 'chad'),
		array('option' => 'Chile', 'value' => 'chile'),
		array('option' => 'China', 'value' => 'china'),
		array('option' => 'Colombia', 'value' => 'colombia'),
		array('option' => 'Comoros', 'value' => 'comoros'),
		array('option' => 'Congo', 'value' => 'congo'),
		array('option' => 'Congo {Democratic Rep}', 'value' => 'congo {democratic rep}'),
		array('option' => 'Costa Rica', 'value' => 'costa rica'),
		array('option' => 'Croatia', 'value' => 'croatia'),
		array('option' => 'Cuba', 'value' => 'cuba'),
		array('option' => 'Cyprus', 'value' => 'cyprus'),
		array('option' => 'Czech Republic', 'value' => 'czech republic'),
		array('option' => 'Denmark', 'value' => 'denmark'),
		array('option' => 'Djibouti', 'value' => 'djibouti'),
		array('option' => 'Dominica', 'value' => 'dominica'),
		array('option' => 'Dominican Republic', 'value' => 'dominican republic'),
		array('option' => 'East Timor', 'value' => 'east timor'),
		array('option' => 'Ecuador', 'value' => 'ecuador'),
		array('option' => 'Egypt', 'value' => 'egypt'),
		array('option' => 'El Salvador', 'value' => 'el salvador'),
		array('option' => 'Equatorial Guinea', 'value' => 'equatorial guinea'),
		array('option' => 'Eritrea', 'value' => 'eritrea'),
		array('option' => 'Estonia', 'value' => 'estonia'),
		array('option' => 'Ethiopia', 'value' => 'ethiopia'),
		array('option' => 'Fiji', 'value' => 'fiji'),
		array('option' => 'Finland', 'value' => 'finland'),
		array('option' => 'France', 'value' => 'france'),
		array('option' => 'Gabon', 'value' => 'gabon'),
		array('option' => 'Gambia', 'value' => 'gambia'),
		array('option' => 'Georgia', 'value' => 'georgia'),
		array('option' => 'Germany', 'value' => 'germany'),
		array('option' => 'Ghana', 'value' => 'ghana'),
		array('option' => 'Greece', 'value' => 'greece'),
		array('option' => 'Grenada', 'value' => 'grenada'),
		array('option' => 'Guatemala', 'value' => 'guatemala'),
		array('option' => 'Guinea', 'value' => 'guinea'),
		array('option' => 'Guinea-Bissau', 'value' => 'guinea-bissau'),
		array('option' => 'Guyana', 'value' => 'guyana'),
		array('option' => 'Haiti', 'value' => 'haiti'),
		array('option' => 'Honduras', 'value' => 'honduras'),
		array('option' => 'Hungary', 'value' => 'hungary'),
		array('option' => 'Iceland', 'value' => 'iceland'),
		array('option' => 'India', 'value' => 'india'),
		array('option' => 'Indonesia', 'value' => 'indonesia'),
		array('option' => 'Iran', 'value' => 'iran'),
		array('option' => 'Iraq', 'value' => 'iraq'),
		array('option' => 'Ireland {Republic}', 'value' => 'ireland {republic}'),
		array('option' => 'Israel', 'value' => 'israel'),
		array('option' => 'Italy', 'value' => 'italy'),
		array('option' => 'Ivory Coast', 'value' => 'ivory coast'),
		array('option' => 'Jamaica', 'value' => 'jamaica'),
		array('option' => 'Japan', 'value' => 'japan'),
		array('option' => 'Jordan', 'value' => 'jordan'),
		array('option' => 'Kazakhstan', 'value' => 'kazakhstan'),
		array('option' => 'Kenya', 'value' => 'kenya'),
		array('option' => 'Kiribati', 'value' => 'kiribati'),
		array('option' => 'Korea North', 'value' => 'korea north'),
		array('option' => 'Korea South', 'value' => 'korea south'),
		array('option' => 'Kosovo', 'value' => 'kosovo'),
		array('option' => 'Kuwait', 'value' => 'kuwait'),
		array('option' => 'Kyrgyzstan', 'value' => 'kyrgyzstan'),
		array('option' => 'Laos', 'value' => 'laos'),
		array('option' => 'Latvia', 'value' => 'latvia'),
		array('option' => 'Lebanon', 'value' => 'lebanon'),
		array('option' => 'Lesotho', 'value' => 'lesotho'),
		array('option' => 'Liberia', 'value' => 'liberia'),
		array('option' => 'Libya', 'value' => 'libya'),
		array('option' => 'Liechtenstein', 'value' => 'liechtenstein'),
		array('option' => 'Lithuania', 'value' => 'lithuania'),
		array('option' => 'Luxembourg', 'value' => 'luxembourg'),
		array('option' => 'Macedonia', 'value' => 'macedonia'),
		array('option' => 'Madagascar', 'value' => 'madagascar'),
		array('option' => 'Malawi', 'value' => 'malawi'),
		array('option' => 'Malaysia', 'value' => 'malaysia'),
		array('option' => 'Maldives', 'value' => 'maldives'),
		array('option' => 'Mali', 'value' => 'mali'),
		array('option' => 'Malta', 'value' => 'malta'),
		array('option' => 'Marshall Islands', 'value' => 'marshall islands'),
		array('option' => 'Mauritania', 'value' => 'mauritania'),
		array('option' => 'Mauritius', 'value' => 'mauritius'),
		array('option' => 'Mexico', 'value' => 'mexico'),
		array('option' => 'Micronesia', 'value' => 'micronesia'),
		array('option' => 'Moldova', 'value' => 'moldova'),
		array('option' => 'Monaco', 'value' => 'monaco'),
		array('option' => 'Mongolia', 'value' => 'mongolia'),
		array('option' => 'Montenegro', 'value' => 'montenegro'),
		array('option' => 'Morocco', 'value' => 'morocco'),
		array('option' => 'Mozambique', 'value' => 'mozambique'),
		array('option' => 'Myanmar, {Burma}', 'value' => 'myanmar, {burma}'),
		array('option' => 'Namibia', 'value' => 'namibia'),
		array('option' => 'Nauru', 'value' => 'nauru'),
		array('option' => 'Nepal', 'value' => 'nepal'),
		array('option' => 'Netherlands', 'value' => 'netherlands'),
		array('option' => 'New Zealand', 'value' => 'new zealand'),
		array('option' => 'Nicaragua', 'value' => 'nicaragua'),
		array('option' => 'Niger', 'value' => 'niger'),
		array('option' => 'Nigeria', 'value' => 'nigeria'),
		array('option' => 'Norway', 'value' => 'norway'),
		array('option' => 'Oman', 'value' => 'oman'),
		array('option' => 'Pakistan', 'value' => 'pakistan'),
		array('option' => 'Palau', 'value' => 'palau'),
		array('option' => 'Panama', 'value' => 'panama'),
		array('option' => 'Papua New Guinea', 'value' => 'papua new guinea'),
		array('option' => 'Paraguay', 'value' => 'paraguay'),
		array('option' => 'Peru', 'value' => 'peru'),
		array('option' => 'Philippines', 'value' => 'philippines'),
		array('option' => 'Poland', 'value' => 'poland'),
		array('option' => 'Portugal', 'value' => 'portugal'),
		array('option' => 'Qatar', 'value' => 'qatar'),
		array('option' => 'Romania', 'value' => 'romania'),
		array('option' => 'Russian Federation', 'value' => 'russian federation'),
		array('option' => 'Rwanda', 'value' => 'rwanda'),
		array('option' => 'St Kitts & Nevis', 'value' => 'st kitts & nevis'),
		array('option' => 'St Lucia', 'value' => 'st lucia'),
		array('option' => 'Saint Vincent & the Grenadines', 'value' => 'saint vincent & the grenadines'),
		array('option' => 'Samoa', 'value' => 'samoa'),
		array('option' => 'San Marino', 'value' => 'san marino'),
		array('option' => 'Sao Tome & Principe', 'value' => 'sao tome & principe'),
		array('option' => 'Saudi Arabia', 'value' => 'saudi arabia'),
		array('option' => 'Senegal', 'value' => 'senegal'),
		array('option' => 'Serbia', 'value' => 'serbia'),
		array('option' => 'Seychelles', 'value' => 'seychelles'),
		array('option' => 'Sierra Leone', 'value' => 'sierra leone'),
		array('option' => 'Singapore', 'value' => 'singapore'),
		array('option' => 'Slovakia', 'value' => 'slovakia'),
		array('option' => 'Slovenia', 'value' => 'slovenia'),
		array('option' => 'Solomon Islands', 'value' => 'solomon islands'),
		array('option' => 'Somalia', 'value' => 'somalia'),
		array('option' => 'South Africa', 'value' => 'south africa'),
		array('option' => 'Spain', 'value' => 'spain'),
		array('option' => 'Sri Lanka', 'value' => 'sri lanka'),
		array('option' => 'Sudan', 'value' => 'sudan'),
		array('option' => 'Suriname', 'value' => 'suriname'),
		array('option' => 'Swaziland', 'value' => 'swaziland'),
		array('option' => 'Sweden', 'value' => 'sweden'),
		array('option' => 'Switzerland', 'value' => 'switzerland'),
		array('option' => 'Syria', 'value' => 'syria'),
		array('option' => 'Taiwan', 'value' => 'taiwan'),
		array('option' => 'Tajikistan', 'value' => 'tajikistan'),
		array('option' => 'Tanzania', 'value' => 'tanzania'),
		array('option' => 'Thailand', 'value' => 'thailand'),
		array('option' => 'Togo', 'value' => 'togo'),
		array('option' => 'Tonga', 'value' => 'tonga'),
		array('option' => 'Trinidad & Tobago', 'value' => 'trinidad & tobago'),
		array('option' => 'Tunisia', 'value' => 'tunisia'),
		array('option' => 'Turkey', 'value' => 'turkey'),
		array('option' => 'Turkmenistan', 'value' => 'turkmenistan'),
		array('option' => 'Tuvalu', 'value' => 'tuvalu'),
		array('option' => 'Uganda', 'value' => 'uganda'),
		array('option' => 'Ukraine', 'value' => 'ukraine'),
		array('option' => 'United Arab Emirates', 'value' => 'united arab emirates'),
		array('option' => 'United Kingdom', 'value' => 'united kingdom'),
		array('option' => 'United States', 'value' => 'united states'),
		array('option' => 'Uruguay', 'value' => 'uruguay'),
		array('option' => 'Uzbekistan', 'value' => 'uzbekistan'),
		array('option' => 'Vanuatu', 'value' => 'vanuatu'),
		array('option' => 'Vatican City', 'value' => 'vatican city'),
		array('option' => 'Venezuela', 'value' => 'venezuela'),
		array('option' => 'Vietnam', 'value' => 'vietnam'),
		array('option' => 'Yemen', 'value' => 'yemen'),
		array('option' => 'Zambia', 'value' => 'zambia'),
		array('option' => 'Zimbabwe', 'value' => 'zimbabwe')
	)
);

$defaultProperties[] = array(
	'key' => 'paymentMaximimumAmount',
	'fieldLabel' => 'Maximum amount',
	'type' => 'textfield',
	'mandatory' => true,
	'defaultValue' => 0
);

$defaultProperties[] = array(
	'key' => 'paymentPercentage',
	'fieldLabel' => 'Extra cost in percentage',
	'type' => 'textfield',
	'mandatory' => true,
	'defaultValue' => 0
);

$defaultProperties[] = array(
	'key' => 'paymentCosts',
	'fieldLabel' => 'Fixed cost',
	'type' => 'textfield',
	'mandatory' => true,
	'defaultValue' => 0
);