var scrTimeOut;

function changeScrs (changeIndex)
{
    // alert('Change screens=' + changeIndex);
    // alert('scrCount=' + scrCount);

	//check upto the length of array 
    if (scrCount + changeIndex < scrTotal && scrCount + changeIndex >= 0) {
    	screens[scrCount].endScr();

    	scrCount += changeIndex;
        screens[scrCount].startScr();
    }

	$('#controls .next').show();
	$('#controls .previous').show();
    if (scrCount == 0) {
    	$('#controls .previous').hide();
    }
    if (scrCount + 1 == scrTotal) {
    	$('#controls .next').hide();
    }
};


function initControls () {
	// $('#advanced').hover( // when the mouse is inside of the screen show the controls
	// 	function () {
	// 		$('#controls').fadeIn();
	// 	},
	// 	function () {
	// 		$('#controls').fadeOut();
	// 	}
	// );

	$('.button.pause').click(function (event) {	// pause button
		event.preventDefault();
		
		$('#advanced').addClass("paused");
		clearTimeout(scrTimeOut);					// stop the timer
		screens[scrCount].pauseScr();

		$(this).hide();								// toggle the play pause button
		$('.button.play').show();
	});
	$('.button.play').click(function (event) {	// play button
		event.preventDefault();
		
		$('#advanced').removeClass("paused");
		screens[scrCount].startScr();				// re-start the current screen

		$(this).hide();								// toggle the play pause button
		$('.button.pause').show();
	});

	$('.button.next').click(function(event) {
		event.preventDefault();

		// alert("Next");
		changeScrs(1);
	});

	$('.button.previous').click(function(event) {
		event.preventDefault();

		// alert("Next");
		changeScrs(-1);
	});
}

// set up the option object, display the necessary text and image in the option
function initScreen(scrIndex, xmlScr, htmlScr)
{
	// alert('scrIndex=' + scrIndex);
	
	this.scrIndex		= scrIndex
	this.txt	 		= $(xmlScr).text();
	this.htmlScr		= htmlScr;
	$(this.htmlScr).children('.slideText').html(this.txt);
	// this.htmlScr.html(this.txt);
	
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
		//alert('medType=' + medType);
		if (medType === 'audio')
		{
	        $(this.htmlScr).addClass("audio");

			this.audID			= scrIndex + '-' + j;
			initAudio(this.audID, $(medXml).attr('filename'));
			this.audWait		= true;
		}
		else if (medType === 'image')
		{
			$(this.htmlScr).find('.caption').text($(medXml).attr('caption'));
			
			//alert("$(medXml).attr('filename')=" + $(medXml).attr('filename'));
			initImage($(this.htmlScr).find('img'), $(medXml).attr('filename'), $(medXml).attr('alt'));
			//$(this.htmlScr).find('img').css('width', '100%');
		}
	}

	this.startScr = function() {
	    // alert('start screen' + this.scrIndex);
	    clearTimeout(scrTimeOut); // clear previous timers

	    if (this.audWait) {
	        //alert('play audio: ' + "#audio_" + this.audID);
	        $("#audio_" + this.audID).bind($.jPlayer.event.ended, function(event) {
	            changeScrs(1);
	        });
	        if (!$('#advanced').hasClass("paused")) {
	        	$("#audio_" + this.audID).jPlayer("play");
	        };
	    } else if (!$('#advanced').hasClass("paused")) {
	        scrTimeOut = setTimeout('changeScrs(1)', this.duration);
	    }

	    $('#controls .status').html((scrCount + 1) + '/' + scrTotal); // update the status in the control box

	    $(this.htmlScr).fadeIn();
	};

	this.pauseScr = function() {
		$("#audio_" + this.audID).jPlayer("pause");
	};
	
	this.endScr			= function ()
	{
		// alert('end screen ' + this.scrIndex);
		$(this.htmlScr).fadeOut();

		$("#audio_" + this.audID).jPlayer("stop");
	};
};
