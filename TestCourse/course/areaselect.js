
var optIndex		= 0;
var tarCount		= 0;
var arrTargets 		= new Array();

var orgHeight		= 425;
var orgWidth		= 800;
var orgRatio		= orgWidth / orgHeight;
var newHeight		= 425;
var newWidth		= 800;
var dif 			= 0;

function flexSize () {
	// keep the media container and targets all the same ratio
	var mediaTargets 		= $('.areaselect #questionOptions, .areaselect #media1.full');
	$(mediaTargets).height( '' );
	var mediaHeight			= $(mediaTargets).height();
	var mediaWidth			= mediaHeight * orgRatio;
	// alert("mediaWidth=" + mediaWidth);

	if (mediaWidth >= $('#assessment').width()) {
		$(mediaTargets).width( $('#assessment').width() );
		$(mediaTargets).height( $(mediaTargets).width() / orgRatio );
	} else {
		$(mediaTargets).width( mediaHeight * orgRatio );
	}
	newHeight				= $(mediaTargets).height();
	newWidth				= $(mediaTargets).width();
	dif 					= newHeight / orgHeight;
	// alert("newHeight=" + newHeight + " newWidth=" + newWidth);
}

window.onresize = function(){
	flexSize();
};

// set up the background image, scale
function initBackground() {
	flexSize();

	// if the image woul have been smaller than the original media space maintain same size ratio to media space
	var mediaImg	= $('.areaselect #media1 img');
	if ($(mediaImg).height() >= orgHeight) {
		$(mediaImg).css('height', '100%');
	} else {
		var imgDif			= $(mediaImg).height() / orgHeight;
		// alert("imgDif= "+imgDif);
		$(mediaImg).css('height', (imgDif * 100) + '%');
	}
}

function killEverything ()
{
	$('.option a').each(function() {
		killButton(this);
	});
	$('.button').not('#panel .button').each(function() {
		$(this).addClass('disabled');
		killButton(this);
	});
	
	killButton($('div#questionOptions')); //just for area select
}

function sendAnswers()
{
	//alert('send answers: rightWrongStatus=' +rightWrongStatus+' rightAnswers.join("[,]")='+rightAnswers.join("[,]")+' selAnswers.join("[,]")='+selAnswers.join("[,]"));
	UDUTU_Custom_Answer(rightWrongStatus, rightAnswers.join("[,]"), selAnswers.join("[,]"));
}

function initTarget(tarIndex, coords)
{
	$('#questionOptions').append('<div id="target' + tarIndex + '" class="target"></div>');
		
	rightAnswers[tarIndex] = coords;
	if (coords)
	{
		//alert("word=" + word);
		var x = new Array();
		var y = new Array();
		x[0]				= coords.split('-')[0].split(',')[0];
		y[0]				= coords.split('-')[0].split(',')[1];
		x[1]				= coords.split('-')[1].split(',')[0];
		y[1]				= coords.split('-')[1].split(',')[1];
		x.sort(function(a,b){return a-b});
		y.sort(function(a,b){return a-b});
		//alert("x[0]=" + x[0] + " y[0]=" + y[0] + " x[1]=" + x[1] + " y[1]=" + y[1]);

		var scrLeft			= (x[0] / orgWidth) * 100;
		var scrTop			= (y[0] / orgHeight) * 100;
		var scrWidth		= ((x[1] - x[0]) / orgWidth) * 100;
		var scrHeight		= ((y[1] - y[0]) / orgHeight) * 100;
		// alert('scrLeft=' + scrLeft);

		$('#questionOptions .target').eq(tarIndex).css('left', scrLeft + '%');
		$('#questionOptions .target').eq(tarIndex).css('top', scrTop + '%');
		$('#questionOptions .target').eq(tarIndex).css('width', scrWidth + '%');
		$('#questionOptions .target').eq(tarIndex).css('height', scrHeight + '%');
	}
	
	this.optCount		= 0;
	
	totalRight++;
	tarCount++;
}

// set up the option object, display the necessary text and image in the option
function initOption(target, x, y)
{
	$('#questionOptions').append('<div id="option' + optIndex + '" class="option"><a href="#select"></a></div>');
	var $option			= $('#questionOptions #option' + optIndex);
	$option.css('top', (y/newHeight)*100 + '%').css('left', (x/newWidth)*100 + '%');
	
	this.x				= (x / dif);
	this.y				= (y / dif);	
	// alert("(x / dif)=" + (x / dif));
	this.isCorrect 		= $(target).is(".target");
	if (this.isCorrect)
	{
		//alert('correct');
		
		tarIndex			= $(target).attr('id').substring(6);
		this.tarIndex		= tarIndex;
		//alert('tarIndex=' + tarIndex);		
		if (arrTargets[tarIndex].optCount > 0)
		{
			totalRight++;
		}
		arrTargets[tarIndex].optCount++;
	}
	this.checked 		= true;
		
	optIndex++;
	optCount			= optIndex;
};

function initAreaSelect()
{	
	/*newHeight			= $('#UDUTU_MultiMedia1_Content').height();
	newWidth			= $('#UDUTU_MultiMedia1_Content').width();
	$('#questionOptions').height(newHeight);
	$('#questionOptions').width(newWidth);*/
	// alert("difHeight=" + difHeight);

	if (loadAnswers != '')
	{
		for (var i = 0, j = loadAnswers.length; i < j; i += 1) {
			var coords			= loadAnswers[i].split("-")[0];
			var coordX			= new Number(coords.split(",")[0]);
			var coordY			= new Number(coords.split(",")[1]);
			var correct			= loadAnswers[i].split("-")[1];
			
			if (correct == "true")
			{
				for (var k = 0, l = rightAnswers.length; k < l; k += 1)
				{
					coords				= rightAnswers[k];
					var x1				= coords.split('-')[0].split(',')[0];
					var y1				= coords.split('-')[0].split(',')[1];
					var x2				= coords.split('-')[1].split(',')[0];
					var y2				= coords.split('-')[1].split(',')[1];
					// alert("x1=" + x1 + " y1=" + y1 + " x2=" + x2 + " y2=" + y2 + " (coordX + 13)=" + (coordX + 13) + " (coordY + 12)=" + (coordY + 12));
					
					if ((coordX + 13) >= x1 && (coordX + 13) <= x2 && (coordY + 12) >= y1 && (coordY + 12) <= y2)
					{
						arrOptions[optIndex] = new initOption($('#questionOptions .target').eq(k), (coordX * dif), (coordY * dif));
						stop;
					}
				}
			}
			else
			{
				arrOptions[optIndex] = new initOption($('div#questionOptions'), coordX * dif, coordY * dif);
			}
		}  
	}

	// flexSize();

	$('div#questionOptions').click(function(event) {
		event.preventDefault();
		event.stopImmediatePropagation();
		
		if ($(event.target).parent('div').hasClass('option'))
		{
			var tIndex			= $(event.target).parent('div').attr('id').substring(6);
			// alert("arrOptions[tIndex].checked=" + arrOptions[tIndex].checked);
			
			if (arrOptions[tIndex].checked)
			{
				$(event.target).parent('div').addClass('disabled');
				arrOptions[tIndex].checked	= false;
				
				var tarIndex		= arrOptions[tIndex].tarIndex;				
				arrTargets[tarIndex].optCount--;
				if (arrOptions[tIndex].isCorrect && arrTargets[tarIndex].optCount > 0)
				{
					//alert('removing correct answer');
					/*totalRight > tarCount*/
					totalRight--;
				}
			}
		}
		else
		{
			var offset = $(this).offset();
			arrOptions[optIndex] = new initOption(event.target, event.pageX - (offset.left + 13), event.pageY - (offset.top + 12));
			
			if (!attempted)
			{
				// alert('first attempt');
				
				$('#checkBtn').removeClass('disabled');
				attempted 			= true;
			}
		}
	});	
};

function showAnswers()
{
	//alert('Show the targets');
	
	//killButton($('div#questionOptions'));
		
	$('.target').addClass('show');
}