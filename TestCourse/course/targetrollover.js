var orgHeight		= 425;
var orgWidth		= 800;
var orgRatio		= orgWidth / orgHeight;

function flexSize () {
	// keep the media container and targets all the same ratio
	var mediaTargets 		= $('.targetrollover #targets, .targetrollover #media1');
	$(mediaTargets).height( '' );
	var mediaHeight			= $(mediaTargets).height();
	var mediaWidth			= mediaHeight * orgRatio;

	if (mediaWidth  >= $('#advanced').width()) {
		$(mediaTargets).width( $('#advanced').width() );
		$(mediaTargets).height( $(mediaTargets).width() / orgRatio );
	} else {
		$(mediaTargets).width( mediaHeight * orgRatio );
	}
}

window.onresize = function(){
	flexSize();
};

// set up the background image, scale if necessary
function initBackground(filename, alt) {
	initImage($('#UDUTU_MultiMedia1_Content'), filename, alt);

	flexSize();

	// if the image woul have been smaller than the original media space maintain same size ratio to media space
	var mediaImg	= $('.targetrollover #media1 img');
	if ($(mediaImg).height() >= orgHeight) {
		$(mediaImg).css('height', '100%');
	} else {
		var imgDif			= $(mediaImg).height() / orgHeight;
		// alert("imgDif= "+imgDif);
		$(mediaImg).css('height', (imgDif * 100) + '%');
	}
}

// set up the option object, display the necessary text and image in the option
function initScreen(scrIndex, xmlScr, htmlScr)
{
	//alert('scrIndex=' + scrIndex);
	
	this.scrIndex		= scrIndex;
	this.isShown		= false;
	this.clickShown		= false;
	
	$('#targets').append('<div id="target' + scrIndex + '" class="target"><div class="panel"><h2 class="title"></h2><div class="text"></div></div></div>');
	this.htmlScr		= $('.target').eq(scrIndex);
	var coords			= $(xmlScr).attr('coords');
	if (coords)
	{
		//alert("word=" + word);
		var x1				= coords.split('-')[0].split(',')[0];
		var y1				= coords.split('-')[0].split(',')[1];
		var x2				= coords.split('-')[1].split(',')[0];
		var y2				= coords.split('-')[1].split(',')[1];
		// alert("x1=" + x1 + " y1=" + y1 + " x2=" + x2 + " y2=" + y2);

		var scrLeft			= (x1 / orgWidth) * 100;
		var scrTop			= (y1 / orgHeight) * 100;
		var scrWidth		= ((x2 - x1) / orgWidth) * 100;
		var scrHeight		= ((y2 - y1) / orgHeight) * 100;
		// alert('scrLeft=' + scrLeft);

		$(this.htmlScr).css('left', scrLeft + '%');
		$(this.htmlScr).css('top', scrTop + '%');
		$(this.htmlScr).css('width', scrWidth + '%');
		$(this.htmlScr).css('height', scrHeight + '%');
	}
	
	var panelXML		= $(xmlScr).find('textContent');
	this.txt	 		= $(panelXML).text();
	this.htmlPanel		= $('.panel').eq(scrIndex);
	$(this.htmlPanel).children('.text').html(this.txt);
	$(this.htmlPanel).children('h2').text($(panelXML).attr('title'));/**/
	var vPos			= $(panelXML).attr('vposition');
	var hPos			= $(panelXML).attr('hposition');
	$(this.htmlPanel).css('width', (100 * (50/scrWidth)) + '%');
	//alert('vPos=' + vPos);
	$(this.htmlPanel).addClass(vPos + ' ' + hPos);
	if (vPos == 'middle')
	{
		var hHalf			= '-' + ($(this.htmlPanel).height() / 2) + 'px';
		//alert('hHalf=' + hHalf);
		$(this.htmlPanel).css('margin-top', hHalf);
	}
	
	var medCount		= $(xmlScr).find('mediaContent').length;
	//alert('medCount=' + medCount);
	for (j = 0; j < medCount; j++)
	{
		var medXml			= $(xmlScr).find('mediaContent').eq(j);
		
		var medType			= $(medXml).attr('type');
		//alert('medType=' + medType);
		if (medType === 'audio')
		{
			this.audID			= scrIndex + '-' + j;
			initAudio(this.audID, $(medXml).attr('filename'));
			this.audWait		= true;
		}
	}	
	
	this.startScr		= function ()
	{
		//alert('start screen' + this.scrIndex);
		if (!this.isShown)
		{
			this.isShown		= true;
			
			if	(this.audWait)
			{
				$("#audio_" + this.audID).jPlayer("play", 0);
				//alert('play audio: ' + "#audio_" + this.audID);			
			}
			$(this.htmlPanel).fadeIn(500);
		}
	};
	
	this.endScr			= function ()
	{
		//alert('end screen ' + this.scrIndex);
		if (this.isShown)
		{
			this.isShown		= false;
			
			if	(this.audWait)
			{
				$("#audio_" + this.audID).jPlayer("stop", 0);		
				//alert('stop audio: ' + "#audio_" + this.audID);	
			}
			$(this.htmlPanel).fadeOut(250);
		}
	};
	
	$(this.htmlScr).hover(
		function () {
			var iTemp				= $(this).index('.target');
			//alert('rollout iTemp=' + iTemp);
			if (!screens[iTemp].clickShown) {
				screens[iTemp].startScr();
			}
		}, 
		function () {
			var iTemp				= $(this).index('.target');
			//alert('rollout iTemp=' + iTemp);
			if (!screens[iTemp].clickShown && screens[iTemp].isShown) {
				screens[iTemp].endScr();
			}
		}
	);

	$(this.htmlScr).click(function()
	{
		var iTemp				= $(this).index('.target');
		if (screens[iTemp].isShown && screens[iTemp].clickShown)
		{
			screens[iTemp].clickShown	= false;
			screens[iTemp].endScr();
		}
		else if (!screens[iTemp].clickShown)
		{
			screens[iTemp].clickShown	= true;
			screens[iTemp].startScr();
		}
	});/**/
};