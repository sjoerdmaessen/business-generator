<?php
$parts = [
	[
		'Het proces',
		'De factor mens',
		'Het management',
		'De communicatie',
		'De kerncompetentie',
		'Human capital',
		'De organisatieontwikkeling',
		'De missie',
		'Kennismanagement',
		'De eerste aanzet',
	],
	[
		'moet meerwaarde leveren bij',
		'stelt eisen aan',
		'dient te faciliteren bij',
		'is uitgangspunt bij',
		'is onlosmakelijk verbonden met',
		'schept voorwaarden voor',
		'dient te focussen op',
		'stuurt',
		'hangt nauw samen met',
		'moet een opstap bieden voor',
	],
	[
		'de implementatie van',
		'de terugkoppeling van',
		'het aftimmeren van',
		'het aansturen van ',
		'de ontwikkeling van',
		'de flexibilisering van ',
		'de integratie van',
		'de inventarisatie van',
		'de definitie van ',
		'de insteek van',
	],
	[
		'complexe',
		'optimale',
		'in elkaar grijpende',
		'eenduidige',
		'onderling afhankelijke',
		'structurele',
		'pro-actieve',
		'resultaatgerichte',
		'efficiënte',
		'consistente',
	],
	[
		'targets',
		'supply chain processen',
		'business architecture',
		'mijlpalen',
		'business units',
		'organisatie-onderdelen',
		'scenario’s',
		'best practices',
		'communicerende vaten',
		'business models',
		'conceptplannen',
		// eigen
		'billabillity',
		'business development',
		'time to delivery',
		'time to market',
	],
	[
		'waarbij het belang van',
		'waarbij de feedback van',
		'waarbij het kader voor',
		'waarbij afstemming met',
		'waarbij de structuur van',
		'waarbij de synergie met',
		'waarbij de interface met',
		'waarbij input van',
		'waarbij commitment van',
		'waarbij klankborden met',
		// eigen
		'waarbij het gremium voor'
	],
	[
		'strategisch beleid',
		'de taskforce',
		'de communicatie',
		'de werkgroepen',
		'new business development',
		'de systeemintegratie',
		'de markt',
		'de stakeholders',
		'het management',
		'de projectorganisatie',
		// eigen
		'de business operandi',
		'de core bussiness',
		'de core competence',
		'de venture capitalist',
		'het yesable proposal'
	],
	[
		'moet uitkristalliseren',
		'voorop staat',
		'wordt aangestuurd',
		'leading is',
		'toegevoegde waarde levert',
		'win-win situaties creëert',
		'moet worden gemanaged',
		'voldoende draagvlak moet creëren',
		'doorslaggevend is',
		'cruciaal is',
	]
];

// Build the result
$cleverRandomAnswer = '';
$pickedParts = [];
if (isset($_POST['business'])) {
	foreach ($parts as $part) {
		$pickedParts[] = $part[array_rand($part)];
	}

	$cleverRandomAnswer = (implode(' ', $pickedParts)) . '.';
}

?>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Business generator</h1>
		<p><?=$cleverRandomAnswer;?></p>
		<form method="POST">
			<input type="submit" name="business" value="Generate something clever">
		</form>
	</body>
</html>


