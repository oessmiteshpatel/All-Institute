// TODO - Play/stop audio with panels
// TODO - Correct classes for text


// set up the option object, display the necessary text and image in the option
function initScreen(scrIndex, xmlScr, htmlScr)
{
	//alert('scrIndex=' + scrIndex);
	
	this.scrIndex		= scrIndex;
	this.isShown		= false;
	this.clickShown		= false;
	
	this.htmlScr		= htmlScr;
	$(this.htmlScr).addClass("screen" + scrTotal);
	$(this.htmlScr).show();
	// var scrWidth		= ($('#advanced').width() / scrTotal) - 20;
	// $(this.htmlScr).css('width', scrWidth + 'px');
	
	var panelXML		= $(xmlScr).find('textContent');
	this.txt	 		= $(panelXML).text();
	this.htmlPanel		= $(this.htmlScr).find('.panel');
	// alert("this.txt" + this.txt);
	if (!this.txt) {
		$(this.htmlPanel).remove();
	} else {
		$(this.htmlPanel).children('.text').html(this.txt);
		$(this.htmlPanel).children('h2').text($(panelXML).attr('title'));/**/
		var vPos			= $(panelXML).attr('vposition');
		var hPos			= $(panelXML).attr('hposition');
		//alert('vPos=' + vPos);
		$(this.htmlPanel).addClass(vPos + ' ' + hPos);
		if (vPos == 'middle')
		{
			var hHalf			= '-' + ($(this.htmlPanel).height() / 2) + 'px';
			//alert('hHalf=' + hHalf);
			$(this.htmlPanel).css('margin-top', hHalf);
		}
	}

	//alert('this.txt=' + this.txt);
	
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
		else if (medType === 'image')
		{
			$(this.htmlScr).children('h2').text($(medXml).attr('title'));
			
			//alert("$(medXml).attr('filename')=" + $(medXml).attr('filename'));
			initImage($(this.htmlScr).find('img'), $(medXml).attr('filename'), $(medXml).attr('alt'));
			//$(this.htmlScr).find('img').css('width', '100%');
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
			var iTemp				= $(this).index('.screen');
			//alert('rollout iTemp=' + iTemp);
			if (!screens[iTemp].clickShown) {
				screens[iTemp].startScr();
			}
		}, 
		function () {
			var iTemp				= $(this).index('.screen');
			//alert('rollout iTemp=' + iTemp);
			if (!screens[iTemp].clickShown && screens[iTemp].isShown) {
				screens[iTemp].endScr();
			}
		}
	);

	$(this.htmlScr).click(function()
	{
		var iTemp				= $(this).index('.screen');
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