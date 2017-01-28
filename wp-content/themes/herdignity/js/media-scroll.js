jQuery(function($){	
	var maxStory = 2;
	$(".story li").each(function(i){
		if(i%maxStory == 0 && i>=maxStory){$(".story")
		.append("<ul class='storyList'></ul>");}
		$(".story .storyList").last().append(this);			
	});
	$('.story').cycle({ 
		fx:     'scrollHorz', 
		speed:  '600', 
		timeout: 0, 
		prev:   '#prev', 
		next:   '#next', 

	});
    $(".left-col .topics-box:nth-child(1)").hide();
    $(".left-col .topics-box:nth-child(2)").hide();
    $(".left-col .topics-box:nth-child(3)").hide();
    $(".news .post-item:eq(2n)").addClass("clear");
    $(".pagination a:nth-child(2n)").addClass("new");
});