///////////////////////////////////////////////////////////
/// Magic Image Rotation								///
///	v 1.0.1												///
/// Copyright 2007, Loyce Bradley Petrey				///
///	All Rights Reserved.								///
/// http://www.EchoChrist.com/MagicImage				///
/// webmaster@EchoChrist.com							///
///														///
///	This script is free to use as long as this notice 	///
/// remains unchanged and intact.					 	///
///														///
/// This program is free software: you can redistribute ///
///	it and/or modify it under the terms of the GNU 		///
///	General Public License as published by the Free 	///
///	Software Foundation. 								///
///														///
/// This program is distributed in the hope that it 	///
/// will be useful, but WITHOUT ANY WARRANTY; without 	///
///	even the implied warranty of MERCHANTABILITY or 	///
///	FITNESS FOR A PARTICULAR PURPOSE.  					///
/// 													///
/// Be Imitators of God as dear children and walk		///
/// in love as Christ also loved us.					///
///	Ephesians 5:1-2										///
///////////////////////////////////////////////////////////

var ImageLoad = 
[
['index.htm', 	'images/Focus1.jpg', 	'GK'			],		//  ['URL to linked page', 'URL to image', 'Caption under picture']	//
['index.htm', 	'images/Focus2.jpg', 	'MSZ'		],		//  The caption is not required and may be left blank like this:		//
['index.htm', 	'images/Focus3.jpg', 	'DH1'	],		//  ['URL to linked page', 'URL to image', '']							//
['index.htm', 	'images/Focus4.jpg', 	'FC1'			],		//  Add as many images as you like seperated by commmas					//
['index.htm', 	'images/Focus5.jpg', 	'MOS1'				],		//  Almost ALL errors are caused by the url or path being wrong 		//
['index.htm', 	'images/Focus6.jpg', 	'JJ1'			],		//  Add as many images as you like seperated by commmas					//
['index.htm', 	'images/Focus7.jpg', 	'PRH'				],		//  Almost ALL errors are caused by the url or path being wrong 		//
['index.htm', 	'images/Focus8.jpg', 	'DH2'			],		//  Add as many images as you like seperated by commmas					//
['index.htm', 	'images/Focus9.jpg', 	'JJ2'				],		//  Almost ALL errors are caused by the url or path being wrong 		//
['index.htm', 	'images/Focus10.jpg', 	'FC2'			],		//  Add as many images as you like seperated by commmas					//
['index.htm', 	'images/Focus11.jpg', 	'ESF'				],		//  Almost ALL errors are caused by the url or path being wrong 		//
['index.htm', 	'images/Focus12.jpg', 	'MOS2'			]		//  The LAST image declaration does NOT have a comma after it			//
];


var ImageCount		= 6;			//  *****  Change this to the total number of images loaded above  ***** 		//	
var ImageDelay		= 5000;			//  *****  Set this to the delay interval desired.  5000 = 5 seconds.			// 
var LinkTarget		= "_self"		//  *****  Defines where you want linked page to open. _self, _blank, _top, etc	//
var ImageIndex		= 0;			//  DO NOT ALTER	//
var FirstLoad 		= 0;			//  DO NOT ALTER	//
var QuickStartID 	= 0;  			//  DO NOT ALTER	//
var htmlString 		= ""			//  DO NOT ALTER 	//
var randomnumber	= 0;			//  DO NOT ALTER	//

//  This function rotates the banner  //
function ImageChange()

{		

htmlString = '<center>';
htmlString = htmlString + '<font face = "Verdana" size="2">';		//  Font and Font Size for caption may be changed here	//
htmlString = htmlString +'<a target="';
htmlString = htmlString + LinkTarget;
htmlString = htmlString + '" href="';
htmlString = htmlString + ImageLoad[ImageIndex][0];
htmlString = htmlString + '"><img border="0" src="';				//  Image border size may be changed here				//	
htmlString = htmlString + ImageLoad[ImageIndex][1];
htmlString = htmlString + '"></a><br>';
htmlString = htmlString + ImageLoad[ImageIndex][2];
htmlString = htmlString + '</font>';
htmlString = htmlString + '</center>';		

document.getElementById('MagicImage').innerHTML = htmlString; 				

ImageIndex = Math.floor(Math.random()*ImageCount);																				

if(FirstLoad == 0)						//  Determins if this is the first time function has run.   // 
{
SlowFinish();
}

}
//  End Funtion  //

//  This function ensures first banner is displayted without a delay  //
function  QuickStart()
{
QuickStartID=setInterval("ImageChange()", 1000);
}
//  End Funtion  //																		

//  This function sets display rate to user defined speed  //
function SlowFinish()
{
clearInterval(QuickStartID);
FirstLoad = 1;
setInterval("ImageChange()", ImageDelay);	 
}
//  End Funtion  //

QuickStart()