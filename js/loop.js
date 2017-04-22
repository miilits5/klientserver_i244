   $(document).ready(function(){
        	$("li").first().addClass('active');
        $('#next').click(function(){
                 var m = $('li.active');
                 	$('li.active').next().addClass('active');
                 	$('li.active').prev().removeClass('active');
                 	if(m.is($('li').last())){
                 		$('li').first().addClass('active');
                 		$('li').last().removeClass('active');
                 	}
                          
                  });
        $('#prev').click(function(){
        	var m = $('li.active');
        	$('li.active').prev().addClass('active');
        	$('li.active').next().removeClass('active');
        	if(m.is($('li').first())){
        		$('li').last().addClass('active');
        		$('li').first().removeClass('active');
        	}
        });
        });
        
           