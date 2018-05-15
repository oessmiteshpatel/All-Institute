// counters
var scrCount		= 0;
var scrTotal		= 0;
var txtCount		= 0;
var medCount		= 0;
var optCount		= 0;
var audCount		= 0;
var pnlCount		= 0;
var currNum			= 0;
var nextNum			= 0;
var ctrlBoxTimer	= 0;

// durations
var defDur			= 1;
var scrDur			= 0;
var vidWait			= false;
var audWait			= false;
var wait			= false;
var jumpTo			= false;

var screens			= new Array();
var aType			= new String();
	
// set the src and alt of an image
function initImage(imgLoc, imgSrc, imgAlt)
{
	//alert("imgSrc=" + imgSrc);
	var imgWidth	= $(imgLoc).attr("width");
	var imgHeight	= $(imgLoc).attr("height");
	
	$(imgLoc).removeAttr("width");
	$(imgLoc).removeAttr("height");
	
	$(imgLoc).attr("src", imgSrc);
	$(imgLoc).attr("alt", imgAlt);	
	
	$(imgLoc).attr("width", imgWidth);
	if ( $(imgLoc).height() > imgHeight ) 
	{ 
		$(imgLoc).removeAttr("width");
		$(imgLoc).attr("height", imgHeight); 
	};
	//alert("$(imgLoc).height()=" + $(imgLoc).height());	
};

// append a jPlayer div into the destination and set its source
function initAudio(audioName, audioSrc, playLoc, audioAlt)
{
	$("#audio").append('<div id="audio_' + audioName + '" class="jplayer"></div>');	
	//alert("audioSrc=" + audioSrc);	
	
	$("#audio_" + audioName).jPlayer({
		/*errorAlerts: true,*/
		ready: function () {
			//alert("audioSrc=" + audioSrc);
			$(this).jPlayer("setMedia", {
				mp3: audioSrc
			});
		},
		preload: "auto",
		swfPath: "jplayer",
		supplied: "mp3",
		cssSelectorAncestor: "#audio"
	});
	
	// if a location was specified add a play/pause button
	if (playLoc)
	{
			var audioID = "#audio_" + audioName;
			$(playLoc).find('a').attr('href', audioID);
			
			$(playLoc).click(function(event) {
				event.preventDefault();
				
				if ($(this).hasClass('play'))
				{
					var audioID = $(this).find('a').attr('href');
					//alert("$(audioID).html()=" + $(audioID).html());	
					$(audioID).jPlayer("play");
				}
				else
				{
					$('#audio .jplayer').jPlayer("stop");
				}
				
				$(this).toggleClass('play pause');
			});
			
			if (audioAlt)
			{
				$(playLoc).parent().append('<span class="text audio"> ' + audioAlt + '</span>');
			};
	}
};


function html_entity_decode(str)
{
    try
	{
		var  tarea=document.createElement('textarea');
		tarea.innerHTML = str; return tarea.value;
		tarea.parentNode.removeChild(tarea);
	}
	catch(e)
	{
		//for IE add <div id="htmlconverter" style="display:none;"></div> to the page
		document.getElementById("htmlconverter").innerHTML = '<textarea id="innerConverter">' + str + '</textarea>';
		var content = document.getElementById("innerConverter").value;
		document.getElementById("htmlconverter").innerHTML = "";
		return content;
	}
}

// get the info out of the xml file
function initAdvanced(xmlFile, themeDir)
{	
	//alert("xmlFile=" + xmlFile);
	aType	= $('#advanced').attr("class").split(' ')[0];
	jumpTo	= $('#advanced').hasClass('jumpto');
	// alert("jumpTo=" + jumpTo);
	
	// kill button function, remove current click function and replace with empty click
	function killButton(button)
	{
		//alert("$(button).text()=" + $(button).text());
		$(button).unbind('click');
		$(button).click(function(event) {
			event.preventDefault();
		});
	};
	
	// get that sweet, sweet xml
	$.ajax({
        type: "GET",
		url: xmlFile,
		dataType: "xml",
		success: function(xml) {
			// load attributes from root node
			defDur						= $(xml).find('module').attr('duration');	// get the default duration	
			$('.pageTitle').text( $(xml).find('module').attr('title') );	// get the title

			var decoded = $(xml).find('module').attr('instructions');
			$('.instructions').html( html_entity_decode(decoded)  );	// get the instructions
					
			if (aType === 'targetrollover')
			{
				initBackground($(xml).find('module').attr('multimedia_filename'), $(xml).find('module').attr('alt')); // add the background image
			}			

			// load up all the options, hide the unnecessary ones
 			scrTotal 			= $(xml).find('screen').length;	
			// alert("scrTotal=" + scrTotal);		
			for (i = 0; i < scrTotal; i++)
			{
				screens[i]			= new initScreen(i, $(xml).find('screen').eq(i), $('.screen').eq(i));
			}
			
			if (aType === 'animatedlist') {
				setTimeout(function() {
					screens[scrCount].startScr();	// start the first screen
				}, 100);				
			}
			if (aType === 'slideshow') {
				setTimeout(function() {
					screens[scrCount].startScr();	// start the first screen
				}, 100);
				initControls();
			}
		}
	});
};
