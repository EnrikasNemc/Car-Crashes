<!DOCTYPE html>
<html>
<head>
	<title>Car Crashes</title>
</head>
<body>

</body>
<script type="text/javascript"> 
/*
var Carcrash = {
	"crash":{
		"2017-11-14":
		[
			{"kaunoAp":{
					"Dalyvis":{
						"Masina":[30],
						"Dviratis":[2],
						"Pestysis":[8],
					}
				}
			},
			{"siauliuAP":{
					"Dalyvis":{
						"Masina":[4],
						"Dviratis":[9],
						"Pestysis":[5]
					}
				}
			},
			{"VilniausAP":{
					"Dalyvis":{
						"Masina":[3],
						"Dviratis":[8],
						"Pestysis":[2],
					}
				}
			},
		],
		"2017-11-15":
		[
			{"kaunoAp":{
					"Dalyvis":{
						"Masina":[45],
						"Dviratis":[0],
						"Pestysis":[2],
					}
				}
			},
			{"siauliuAP":{
					"Dalyvis":{
						"Masina":[5],
						"Dviratis":[2],
						"Pestysis":[4]
					}
				}
			},
			{"VilniausAP":{
					"Dalyvis":{
						"Masina":[80],
						"Dviratis":[0],
						"Pestysis":[4],
					}
				}
			},
		],
		"2017-11-16":
		[
			{"kaunoAp":{
					"Dalyvis":{
						"Masina":[0],
						"Dviratis":[5],
						"Pestysis":[8],
					}
				}
			},
			{"siauliuAP":{
					"Dalyvis":{
						"Masina":[6],
						"Dviratis":[2],
						"Pestysis":[1]
					}
				}
			},
			{"VilniausAP":{
					"Dalyvis":{
						"Masina":[7],
						"Dviratis":[9],
						"Pestysis":[2],
					}
				}
			},
		],
		"2017-11-17":
		[
			{"kaunoAp":{
					"Dalyvis":{
						"Masina":[50],
						"Dviratis":[4],
						"Pestysis":[10],
					}
				}
			},
			{"siauliuAP":{
					"Dalyvis":{
						"Masina":[3],
						"Dviratis":[0],
						"Pestysis":[1]
					}
				}
			},
			{"VilniausAP":{
					"Dalyvis":{
						"Masina":[60],
						"Dviratis":[5],
						"Pestysis":[7],
					}
				}
			},
		],
		"2017-11-18":
		[
			{"kaunoAp":{
					"Dalyvis":{
						"Masina":[8],
						"Dviratis":[20],
						"Pestysis":[84],
					}
				}
			},
			{"siauliuAP":{
					"Dalyvis":{
						"Masina":[30],
						"Dviratis":[2],
						"Pestysis":[5]
					}
				}
			},
			{"VilniausAP":{
					"Dalyvis":{
						"Masina":[57],
						"Dviratis":[6],
						"Pestysis":[4],
					}
				}
			},
		],
		"2017-11-19":
		[
			{"kaunoAp":{
					"Dalyvis":{
						"Masina":[96],
						"Dviratis":[71],
						"Pestysis":[4],
					}
				}
			},
			{"siauliuAP":{
					"Dalyvis":{
						"Masina":[8],
						"Dviratis":[1],
						"Pestysis":[20]
					}
				}
			},
			{"VilniausAP":{
					"Dalyvis":{
						"Masina":[10],
						"Dviratis":[0],
						"Pestysis":[1],
					}
				}
			},
		],
		"2017-11-20":
		[
			{"kaunoAp":{
					"Dalyvis":{
						"Masina":[64],
						"Dviratis":[8],
						"Pestysis":[1],
					}
				}
			},
			{"siauliuAP":{
					"Dalyvis":{
						"Masina":[24],
						"Dviratis":[2],
						"Pestysis":[2]
					}
				}
			},
			{"VilniausAP":{
					"Dalyvis":{
						"Masina":[45],
						"Dviratis":[1],
						"Pestysis":[1],
					}
				}
			},
		]
	}
} 
console.log(Carcrash);
*/

//Tried to optimize
// 0 = Masina
// 1 = Dviratis
// 2 = Pestysis
/*
var Carcrash = {

		"2017-11-21":
		{
			"kaunoAp":[64, 8, 1,],
			"siauliuAP":[24, 2, 2,],
			"VilniausAP":[45, 1, 1,]
		},
		"2017-11-22":
		{
			"kaunoAp":[64, 8, 1,],
			"siauliuAP":[24, 2, 2,],
			"VilniausAP":[45, 1, 1,]
		},
		"2017-11-23":
		{
			"kaunoAp":[64, 8, 1,],
			"siauliuAP":[24, 2, 2,],
			"VilniausAP":[45, 1, 1,]
		},
		"2017-11-24":
		{
			"kaunoAp":[64, 8, 1,],
			"siauliuAP":[24, 2, 2,],
			"VilniausAP":[45, 1, 1,]
		},
		"2017-11-25":
		{
			"kaunoAp":[64, 8, 1,],
			"siauliuAP":[24, 2, 2,],
			"VilniausAP":[45, 1, 1,]
		},
		"2017-11-26":
		{
			"kaunoAp":[64, 8, 1,],
			"siauliuAP":[24, 2, 2,],
			"VilniausAP":[45, 1, 1,]
		},
		"2017-11-27":
		{
			"kaunoAp":[64, 8, 1,],
			"siauliuAP":[24, 2, 2,],
			"VilniausAP":[45, 1, 1,]
		},
}
*/
/*
//Tried to optimize 2.0
// 0 = Masina
// 1 = Dviratis
// 2 = Pestysis
var Carcrash = {

		"kaunoAp":
		{
			"2017-11-28":[64, 8, 1,],
			"2017-11-29":[24, 2, 2,],
			"2017-11-30":[45, 1, 1,],
			"2017-12-1":[64, 8, 1,],
			"2017-12-2":[24, 2, 2,],
			"2017-12-3":[45, 1, 1,],
		},
		"siauliuAP":
		{
			"2017-11-28":[64, 8, 1,],
			"2017-11-29":[24, 2, 2,],
			"2017-11-30":[45, 1, 1,],
			"2017-12-1":[64, 8, 1,],
			"2017-12-2":[24, 2, 2,],
			"2017-12-3":[45, 1, 1,],
		},
		"VilniausAP":
		{
			"2017-11-28":[64, 8, 1,],
			"2017-11-29":[24, 2, 2,],
			"2017-11-30":[45, 1, 1,],
			"2017-12-1":[64, 8, 1,],
			"2017-12-2":[24, 2, 2,],
			"2017-12-3":[45, 1, 1,],
		},
}
*/




//How it should be

var typeDO = [
	{
		"id":1,
		"name":"mašina",

	}
]


var participantsDO =[
	{
		"tipas":1,
		"plate_nr": "GOH 606",
		"id_number": "4555896"

	},
	{
		"tipas":2,
		"plate_nr": "FZR 606",
		"id_number": "4555896"

	},
	{
		"tipas":3,
		"plate_nr": "FZR 756",
		"id_number": "4555896"

	},
	{
		"tipas":4,
		"plate_nr": "TOP 859",
		"id_number": "4555896"

	}
]


var accidentDO = [
	{
		"dataTime":"2017-11-13 18:55:00",
		"address":"Baršausko g. 59, Kaunas",
		"participants":[1,3] 
	},
	{
		"dataTime":"2017-11-13 18:55:00",
		"address":"Baršausko g. 59, Kaunas",
		"participants":[1,3,2] 
	},
	{
		"dataTime":"2017-11-13 18:55:00",
		"address":"Baršausko g. 59, Kaunas",
		"participants":[1,2] 
	}
]



























console.log(Carcrash);

 </script>
</html>

