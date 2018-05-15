var arrDraggables	= new Array();

function placeDrag (drag, top, left) {
	// alert('top=' + top + "left=" + left);
	if (top.indexOf('px') != -1) {
		var topPer			= ((top.split('px')[0] / $('div#assessment').height()) * 100) + "%";
	} else {
		var topPer			= top;
	}
	if (left.indexOf('px') != -1) {
		var leftPer			= ((left.split('px')[0] / $('div#assessment').width()) * 100) + "%";
	} else {
		var leftPer			= left;
	}
	// alert('topPer=' + topPer + "leftPer=" + leftPer);
	$(drag).css({'top': topPer, 'left': leftPer});
}

function clearDrag(drag) 
{
	//alert('clear the dragged item');
	var dragNum			= $('#dragOptions .button').index(drag);
	
	var top				= arrDraggables[dragNum].top;
	var left			= arrDraggables[dragNum].left;		
	// alert('top=' + top);	
	placeDrag(drag, top, left);

	arrDraggables[dragNum].dropNum = null;	
	
	$(drag).removeClass('dragged');	
}

function clearDrop(drop) 
{
	// alert('clear the dropped item');
	var dropNum			= $('.option').index(drop);
	
	var tmpOption 		= arrOptions[dropNum];
	tmpOption.dragNum 	= null;
	tmpOption.checked 	= false;
	tmpOption.isCorrect = false;
		
	$(drop).removeClass('dropped');	
}

function startDrag (dragged)
{
	var dragNum			= $('#dragOptions .button').index(dragged);
	var dropNum			= arrDraggables[dragNum].dropNum;
	// alert('dropNum=' + dropNum);
	if (dropNum != null)
	{
		//alert('dropNum=' + dropNum);
			
		clearDrop($('.option').eq(dropNum));
	}
	
	$('#dragOptions .button').removeClass('selected');
	$(dragged).removeClass('dragged');
	$(dragged).addClass('selected');
}

// check if the dragged item matches the drop target
function stopDrag (dragged, drop)
{
	$('#dragOptions .button').removeClass('selected');	
	$(dragged).addClass('dragged');		
	$(drop).addClass('dropped');	

	placeDrag(dragged, $(drop).css('top'), $(drop).css('left'));
			
	var dropNum			= $('.option').index(drop);
	// alert("dropNum= " + dropNum + " arrOptions[dropNum]= " + arrOptions[dropNum]);
	var tmpOption 		= arrOptions[dropNum];
	var dropWord		= tmpOption.txtOption;	
	var dragWord		= $(dragged).find('a').text();
	var dragNum			= tmpOption.dragNum;
	if (dragNum)
	{
		clearDrag($('#dragOptions .button').eq(dragNum));
	}
	dragNum				= $('#dragOptions .button').index(dragged);
	// alert("dragNum=" + dragNum);
	tmpOption.dragNum 	= arrDraggables[dragNum].optIndex;
	arrDraggables[dragNum].dropNum = dropNum;
	// alert('arrDraggables[dragNum].optIndex=' + arrDraggables[dragNum].optIndex);	
	
	tmpOption.checked 	= true;
	tmpOption.isCorrect = dropWord == dragWord;
}

function initDraggable (drgIndex, optIndex, htmlDrg, word)
{
	this.txtOption 		= word;
	this.optIndex 		= optIndex;
	// alert('this.optIndex=' + this.optIndex);
	
	$(htmlDrg).children('.button a').text( word );
	$(htmlDrg).show();

	// position the draggable elements
	if (aClasses.indexOf('dd8options') != -1) {
		// alert('(drgIndex * 10)= ' + (drgIndex * 10));	
		$(htmlDrg).css('top', (drgIndex * 10) + '%');
	} else if (aClasses.indexOf('dd5phrases5false') != -1 || aClasses.indexOf('dd8images2false') != -1) {
		$(htmlDrg).css('left', (drgIndex * 20) + '%');
		if (drgIndex > 4) {
			$(htmlDrg).css('left', ((drgIndex - 5) * 20) + '%');
			$(htmlDrg).css('top', '10%');
		}
	} else if (aClasses.indexOf('dd4images4false') != -1) {
		$(htmlDrg).css('left', (drgIndex * 25) + '%');
		if (drgIndex > 3) {
			$(htmlDrg).css('left', ((drgIndex - 4) * 25) + '%');
			$(htmlDrg).css('top', '10%');
		}
	}
	this.top = $(htmlDrg).css('top');
	this.left = $(htmlDrg).css('left');
	
	$(htmlDrg).draggable({
		start: function()
		{ 
			startDrag(this);
		},
		stop: function()
		{ 
			if (!$(this).hasClass('dragged')) {
				clearDrag(this);
			}
		},
		containment: '#assessment',
		revert: false,
		revertDuration: 0,
		zIndex: 500
		
	});
	
	$(htmlDrg).click(function(event) {
		event.preventDefault();
		
		if ($('#dragOptions .button').hasClass('selected') && $(this).hasClass('dragged'))
		{
			//alert("stop dragging here");
			var dragNum			= $('#dragOptions .button').index(this);
			var dropNum			= arrDraggables[dragNum].dropNum;
			//alert("dropNum=" + dropNum);
			
			stopDrag($('.selected'), $('.option').eq(dropNum));
		}
		else
		{
			//alert("start dragging");
			startDrag(this);
		}
	});
}

// set up the option object, display the necessary text and image in the option
function initOption(optIndex, xmlOpt, htmlOpt)
{
	//alert("optIndex=" + optIndex);
	
	var word			= $(xmlOpt).attr('word');
	$(htmlOpt).has('p').children('p').html( $(xmlOpt).text() );
	if ( $(htmlOpt).has('img') )
	{
		initImage($(htmlOpt).children('img'), $(xmlOpt).text(), '');
	}
	
	this.txtOption 		= word;
	this.isCorrect 		= ($(xmlOpt).attr('correct') == '1');
	if (this.isCorrect)
	{
		$(htmlOpt).show();
		
		totalRight++;
		rightAnswers[rightAnswers.length] = optIndex;
	}
	
	this.checked 		= false;
	
	if (this.isCorrect)
	{
	// position the droppable elements
	if (aClasses.indexOf('dd8options') != -1) {
		// alert('(optIndex * 10)= ' + (optIndex * 10));	
		$(htmlOpt).css('top', (optIndex * 10) + '%');
	} else if (aClasses.indexOf('dd5phrases5false') != -1) {
		$(htmlOpt).css('top', ((optIndex * 10) + 22) + '%');
	} else if (aClasses.indexOf('dd4images4false') != -1) {
		$(htmlOpt).css('left', (optIndex * 25) + '%');
		$(htmlOpt).css('top', '22%');
	} else if (aClasses.indexOf('dd8images2false') != -1) {
		$(htmlOpt).css('left', (optIndex * 25) + '%');
		$(htmlOpt).css('top', '22%');
		if (optIndex > 3) {
			$(htmlOpt).css('left', ((optIndex - 4) * 25) + '%');
			$(htmlOpt).css('top', '56%');
		}
	}
	}
	else $(htmlOpt).css('visibility','hidden');
		
	$(htmlOpt).droppable({
		drop: function( event, ui ) {
			// alert("dropped!");
			stopDrag($('.ui-draggable-dragging'), this);
			
			if (!attempted)
			{
				//alert('first attempt');
				
				$('#checkBtn').removeClass('disabled');
				attempted 			= true;
			}
		}
	});	
	
	$(htmlOpt).click(function(event) {
		event.preventDefault();
		
		if ($('#dragOptions .button').hasClass('selected'))
		{
			stopDrag($('.selected'), this);
			
			if (!attempted)
			{
				//alert('first attempt');
				
				$('#checkBtn').removeClass('disabled');
				attempted 			= true;
			}
		};
	});	
	
	var optRand			= optRandCount.getNum(true);
	if (loadAnswers != '') {
		optRand 			= optIndex;
	}
	arrDraggables[optRand] = new initDraggable(optRand, optIndex, $('#dragOptions .button').eq(optRand), word);

	if (optIndex === 0)
	{
		$('#bg').click(function(event) {
			event.preventDefault();
			
			if ($('#dragOptions .button').hasClass('selected'))
			{
				var dragNum			= $('#dragOptions .selected').index();
				//alert('dragNum=' + dragNum);				
				clearDrag($('#dragOptions .selected'));
				
				$('#dragOptions .button').removeClass('selected');	
				
				var dropNum			= arrDraggables[dragNum].dropNum;
				//alert('dropNum=' + dropNum);
				if (dropNum)
				{
					clearDrop($('.option').eq(dropNum));	
				}
			}
		});
	}

};

function placeAnswers () {
	// load previous dragged options if last option loaded

	for (var i = 0, j = loadAnswers.length; i < j; i += 1) {
		var tmpDrag		= loadAnswers[i].split(".")[0];
		var tmpOpt		= loadAnswers[i].split(".")[1];
		
		stopDrag($('#dragOptions .button').eq(tmpDrag), $('.option').eq(tmpOpt));
	}
}

function showAnswers()
{
	//alert('Show the answers in the correct order');
	
	for (var j = 0; j<$('#dragOptions .button').length; j++) 
	{
		var drag			= $('#dragOptions .button').eq(j);
		var dropNum			= arrDraggables[j].optIndex;
		if (dropNum < $('.option').length)
		{
			//alert("dropNum=" + dropNum);
			var drop 			= $('.option').eq(dropNum);
			var tAnchor = $('.option').eq(dropNum).children('a');
			
			// var offset			= $(drop).children('.drop').offset();
			// $(drag).offset({ top: offset.top, left: offset.left });

			placeDrag(drag, $(drop).css('top'), $(drop).css('left'));

			$(tAnchor).removeClass().addClass('correct');
		}
		else
		{
			var top				= arrDraggables[j].top;
			var left			= arrDraggables[j].left;		
			//alert('top=' + top);	
			var tOldDragged		= $('#dragOptions .button').eq(j);
			// $(tOldDragged).offset({ top: top, left: left });
			placeDrag(tOldDragged, top, left);
		}
	}
}