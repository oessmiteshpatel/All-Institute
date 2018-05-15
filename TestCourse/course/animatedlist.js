function changeScrs (changeIndex)
{
    //alert('Change screens=' + changeIndex);
	//check upto the length of array 
    if (scrCount + changeIndex < scrTotal) {
        screens[scrCount].endScr();

    	scrCount += changeIndex;
        screens[scrCount].startScr();
    }
};


// set up the option object, display the necessary text and image in the option
function initScreen(scrIndex, xmlScr, htmlScr)
{
	//alert('scrIndex=' + scrIndex);
	
	this.scrIndex		= scrIndex
	this.txt	 		= $(xmlScr).text();
	this.htmlScr		= htmlScr;
	this.htmlScr.html(this.txt);
	
	this.duration		= $(xmlScr).attr('duration');
	if (this.duration == 0) this.duration = defDur;
	this.duration		*= 1000;
	//alert('this.duration=' + this.duration);
	
	var medCount		= $(xmlScr).find('mediaContent').length;
	//alert('medCount=' + medCount);
	for (j = 0; j < medCount; j++)
	{
		var medXml			= $(xmlScr).find('mediaContent').eq(j);
		
		var medType			= $(medXml).attr('type');
		// alert('medType=' + medType);
		if (medType === 'audio')
		{
	        $(this.htmlScr).addClass("audio");

			this.audID			= scrIndex + '-' + medCount;
			initAudio(this.audID, $(medXml).attr('filename'));			
			this.audWait		= true;
		}
	}

	this.startScr = function() {
	    // alert('start screen' + this.scrIndex);

	    if (this.audWait) {
	        // alert('play audio: ' + "#audio_" + this.audID);
	        $("#audio_" + this.audID).bind($.jPlayer.event.ended, function(event) {
	            changeScrs(1);
	        });
	        $("#audio_" + this.audID).jPlayer("play");
	    } else {
	        var t = setTimeout('changeScrs(1)', this.duration);
	    }
	    //move this from top to bottom.
	    $(this.htmlScr).fadeIn();
	};
	
	this.endScr			= function ()
	{
		//alert('end screen ' + this.scrIndex);
	};
};
