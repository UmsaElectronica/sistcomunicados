$(document).ready(function(){
var t=setInterval(function(){avanzar();},18000);//varios
var t=setInterval(function(){avanzar1();},10000);//clases
var t=setInterval(function(){avanzar2();},10000);//examenes
var t=setInterval(function(){avanzar3();},15000);//imagenes

});

function avanzar()
	{
	var size = $('.sldvarasc').find('.s_element').size();
		$('.sldvarasc').find('.s_element').each(
			function(index,value){
				if($(value).hasClass('s_visible'))
				{
					$(value).slideUp("fast");
					$(value).removeClass('s_visible');
					
					if(index+1<size)
					{
						$($('.sldvarasc').find('.s_element').get(index+1)).slideDown("slow");
						$($('.sldvarasc').find('.s_element').get(index+1)).addClass('s_visible');
						return false;
					}
					else
					{
						$($('.sldvarasc').find('.s_element').get(0)).slideDown("slow");
						$($('.sldvarasc').find('.s_element').get(0)).addClass('s_visible');	
						return false;
					}
				}
		});
		var size = $('.sldvarasc').find('.s1').size();
		$('.sldvarasc').find('.s1').each(
			function(index,value){
				if($(value).hasClass('s_v'))
				{
					
					$(value).removeClass('s_v');
					
					if(index+1<size)
					{
						$($('.sldvarasc').find('.s1').get(index+1));
						$($('.sldvarasc').find('.s1').get(index+1)).addClass('s_v');
						return false;
					}
					else
					{
						$($('.sldvarasc').find('.s1').get(0));
						$($('.sldvarasc').find('.s1').get(0)).addClass('s_v');	
						return false;
					}
				}
		});
		var size = $('.sldvardesc').find('.s_element').size();
		$('.sldvardesc').find('.s_element').each(
			function(index,value){
				if($(value).hasClass('s_visible'))
				{
					$(value).slideUp("fast");
					$(value).removeClass('s_visible');
					
					if(index+1<size)
					{
						$($('.sldvardesc').find('.s_element').get(index+1)).slideDown("slow");
						$($('.sldvardesc').find('.s_element').get(index+1)).addClass('s_visible');
						return false;
					}
					else
					{
						$($('.sldvardesc').find('.s_element').get(0)).slideDown("slow");
						$($('.sldvardesc').find('.s_element').get(0)).addClass('s_visible');	
						return false;
					}
				}
		});
		var size = $('.sldvardesc').find('.s1').size();
		$('.sldvardesc').find('.s1').each(
			function(index,value){
				if($(value).hasClass('s_v'))
				{
					
					$(value).removeClass('s_v');
					
					if(index+1<size)
					{
						$($('.sldvardesc').find('.s1').get(index+1));
						$($('.sldvardesc').find('.s1').get(index+1)).addClass('s_v');
						return false;
					}
					else
					{
						$($('.sldvardesc').find('.s1').get(0));
						$($('.sldvardesc').find('.s1').get(0)).addClass('s_v');	
						return false;
					}
				}
		});
}
function avanzar1()
	{
		var size = $('.sldclasasc').find('.s_element').size();
		$('.sldclasasc').find('.s_element').each(
			function(index,value){
				if($(value).hasClass('s_visible'))
				{
					$(value).slideUp("fast");
					$(value).removeClass('s_visible');
					
					if(index+1<size)
					{
						$($('.sldclasasc').find('.s_element').get(index+1)).slideDown("slow");
						$($('.sldclasasc').find('.s_element').get(index+1)).addClass('s_visible');
						return false;
					}
					else
					{
						$($('.sldclasasc').find('.s_element').get(0)).slideDown("slow");
						$($('.sldclasasc').find('.s_element').get(0)).addClass('s_visible');	
						return false;
					}
				}
		});
		var size = $('.sldclasasc').find('.s').size();
		$('.sldclasasc').find('.s').each(
			function(index,value){
				if($(value).hasClass('s_v'))
				{
					
					$(value).removeClass('s_v');
					
					if(index+1<size)
					{
						$($('.sldclasasc').find('.s').get(index+1)).slideDown("slow");
						$($('.sldclasasc').find('.s').get(index+1)).addClass('s_v');
						return false;
					}
					else
					{
						$($('.sldclasasc').find('.s').get(index+1)).slideDown("slow");
						$($('.sldclasasc').find('.s').get(0)).addClass('s_v');	
						return false;
					}
				}
		});
		var size = $('.sldclasdesc').find('.s_element').size();
		$('.sldclasdesc').find('.s_element').each(
			function(index,value){
				if($(value).hasClass('s_visible'))
				{
					$(value).slideUp("fast");
					$(value).removeClass('s_visible');
					
					if(index+1<size)
					{
						$($('.sldclasdesc').find('.s_element').get(index+1)).slideDown("slow");
						$($('.sldclasdesc').find('.s_element').get(index+1)).addClass('s_visible');
						return false;
					}
					else
					{
						$($('.sldclasdesc').find('.s_element').get(0)).slideDown("slow");
						$($('.sldclasdesc').find('.s_element').get(0)).addClass('s_visible');	
						return false;
					}
				}
		});
		var size = $('.sldclasdesc').find('.s').size();
		$('.sldclasdesc').find('.s').each(
			function(index,value){
				if($(value).hasClass('s_v'))
				{
					
					$(value).removeClass('s_v');
					
					if(index+1<size)
					{
						$($('.sldclasdesc').find('.s').get(index+1)).slideDown("slow");
						$($('.sldclasdesc').find('.s').get(index+1)).addClass('s_v');
						return false;
					}
					else
					{
						$($('.sldclasdesc').find('.s').get(index+1)).slideDown("slow");
						$($('.sldclasdesc').find('.s').get(0)).addClass('s_v');	
						return false;
					}
				}
		});
		var size = $('.sldclasrdm').find('.s_element').size();
		$('.sldclasrdm').find('.s_element').each(
			function(index,value){
				if($(value).hasClass('s_visible'))
				{
					$(value).slideUp("fast");
					$(value).removeClass('s_visible');
					
					if(index+1<size)
					{
						$($('.sldclasrdm').find('.s_element').get(index+1)).slideDown("slow");
						$($('.sldclasrdm').find('.s_element').get(index+1)).addClass('s_visible');
						return false;
					}
					else
					{
						$($('.sldclasrdm').find('.s_element').get(0)).slideDown("slow");
						$($('.sldclasrdm').find('.s_element').get(0)).addClass('s_visible');	
						return false;
					}
				}
		});
		var size = $('.sldclasrdm').find('.s').size();
		$('.sldclasrdm').find('.s').each(
			function(index,value){
				if($(value).hasClass('s_v'))
				{
					
					$(value).removeClass('s_v');
					
					if(index+1<size)
					{
						$($('.sldclasrdm').find('.s').get(index+1)).slideDown("slow");
						$($('.sldclasrdm').find('.s').get(index+1)).addClass('s_v');
						return false;
					}
					else
					{
						$($('.sldclasrdm').find('.s').get(index+1)).slideDown("slow");
						$($('.sldclasrdm').find('.s').get(0)).addClass('s_v');	
						return false;
					}
				}
		});
	}
function avanzar2()
	{

		var size = $('.sldexamasc').find('.s_element').size();
		$('.sldexamasc').find('.s_element').each(
			function(index,value){
				if($(value).hasClass('s_visible'))
				{
					$(value).slideUp("fast");
					$(value).removeClass('s_visible');
					
					if(index+1<size)
					{
						$($('.sldexamasc').find('.s_element').get(index+1)).slideDown("slow");
						$($('.sldexamasc').find('.s_element').get(index+1)).addClass('s_visible');
						return false;
					}
					else
					{
						$($('.sldexamasc').find('.s_element').get(0)).slideDown("slow");
						$($('.sldexamasc').find('.s_element').get(0)).addClass('s_visible');	
						return false;
					}
				}
		});
		var size = $('.sldexamasc').find('.s').size();
		$('.sldexamasc').find('.s').each(
			function(index,value){
				if($(value).hasClass('s_v'))
				{
					
					$(value).removeClass('s_v');
					
					if(index+1<size)
					{
						$($('.sldexamasc').find('.s').get(index+1));
						$($('.sldexamasc').find('.s').get(index+1)).addClass('s_v');
						return false;
					}
					else
					{
						$($('.sldexamasc').find('.s').get(0));
						$($('.sldexamasc').find('.s').get(0)).addClass('s_v');	
						return false;
					}
				}
		});
		
		var size = $('.sldexamdesc').find('.s_element').size();
		$('.sldexamdesc').find('.s_element').each(
			function(index,value){
				if($(value).hasClass('s_visible'))
				{
					$(value).slideUp("fast");
					$(value).removeClass('s_visible');
					
					if(index+1<size)
					{
						$($('.sldexamdesc').find('.s_element').get(index+1)).slideDown("slow");
						$($('.sldexamdesc').find('.s_element').get(index+1)).addClass('s_visible');
						return false;
					}
					else
					{
						$($('.sldexamdesc').find('.s_element').get(0)).slideDown("slow");
						$($('.sldexamdesc').find('.s_element').get(0)).addClass('s_visible');	
						return false;
					}
				}
		});
		var size = $('.sldexamdesc').find('.s').size();
		$('.sldexamdesc').find('.s').each(
			function(index,value){
				if($(value).hasClass('s_v'))
				{
					
					$(value).removeClass('s_v');
					
					if(index+1<size)
					{
						$($('.sldexamdesc').find('.s').get(index+1));
						$($('.sldexamdesc').find('.s').get(index+1)).addClass('s_v');
						return false;
					}
					else
					{
						$($('.sldexamdesc').find('.s').get(0));
						$($('.sldexamdesc').find('.s').get(0)).addClass('s_v');	
						return false;
					}
				}
		});
		var size = $('.sldexamrdm').find('.s_element').size();
		$('.sldexamrdm').find('.s_element').each(
			function(index,value){
				if($(value).hasClass('s_visible'))
				{
					$(value).slideUp("fast");
					$(value).removeClass('s_visible');
					
					if(index+1<size)
					{
						$($('.sldexamrdm').find('.s_element').get(index+1)).slideDown("slow");
						$($('.sldexamrdm').find('.s_element').get(index+1)).addClass('s_visible');
						return false;
					}
					else
					{
						$($('.sldexamrdm').find('.s_element').get(0)).slideDown("slow");
						$($('.sldexamrdm').find('.s_element').get(0)).addClass('s_visible');	
						return false;
					}
				}
		});
		var size = $('.sldexamrdm').find('.s').size();
		$('.sldexamrdm').find('.s').each(
			function(index,value){
				if($(value).hasClass('s_v'))
				{
					
					$(value).removeClass('s_v');
					
					if(index+1<size)
					{
						$($('.sldexamrdm').find('.s').get(index+1)).slideDown("slow");
						$($('.sldexamrdm').find('.s').get(index+1)).addClass('s_v');
						return false;
					}
					else
					{
						$($('.sldexamrdm').find('.s').get(index+1)).slideDown("slow");
						$($('.sldexamrdm').find('.s').get(0)).addClass('s_v');	
						return false;
					}
				}
		});
	}
	
function avanzar3()
	{
		var size = $('.sldimgasc').find('.s_element').size();
		$('.sldimgasc').find('.s_element').each(
			function(index,value){
				if($(value).hasClass('s_visible'))
				{
					$(value).slideUp("fast");
					$(value).removeClass('s_visible');
					
					if(index+1<size)
					{
						$($('.sldimgasc').find('.s_element').get(index+1)).slideDown("slow");
						$($('.sldimgasc').find('.s_element').get(index+1)).addClass('s_visible');
						return false;
					}
					else
					{
						$($('.sldimgasc').find('.s_element').get(0)).slideDown("slow");
						$($('.sldimgasc').find('.s_element').get(0)).addClass('s_visible');	
						return false;
					}
				}
		});
		var size = $('.sldimgasc').find('.s1').size();
		$('.sldimgasc').find('.s1').each(
			function(index,value){
				if($(value).hasClass('s_v'))
				{
					
					$(value).removeClass('s_v');
					
					if(index+1<size)
					{
						$($('.sldimgasc').find('.s1').get(index+1));
						$($('.sldimgasc').find('.s1').get(index+1)).addClass('s_v');
						return false;
					}
					else
					{
						$($('.sldimgasc').find('.s1').get(0));
						$($('.sldimgasc').find('.s1').get(0)).addClass('s_v');	
						return false;
					}
				}
		});
		var size = $('.sldimgdesc').find('.s_element').size();
		$('.sldimgdesc').find('.s_element').each(
			function(index,value){
				if($(value).hasClass('s_visible'))
				{
					$(value).slideUp("fast");
					$(value).removeClass('s_visible');
					
					if(index+1<size)
					{
						$($('.sldimgdesc').find('.s_element').get(index+1)).slideDown("slow");
						$($('.sldimgdesc').find('.s_element').get(index+1)).addClass('s_visible');
						return false;
					}
					else
					{
						$($('.sldimgdesc').find('.s_element').get(0)).slideDown("slow");
						$($('.sldimgdesc').find('.s_element').get(0)).addClass('s_visible');	
						return false;
					}
				}
		});
		var size = $('.sldimgdesc').find('.s1').size();
		$('.sldimgdesc').find('.s1').each(
			function(index,value){
				if($(value).hasClass('s_v'))
				{
					
					$(value).removeClass('s_v');
					
					if(index+1<size)
					{
						$($('.sldimgdesc').find('.s1').get(index+1));
						$($('.sldimgdesc').find('.s1').get(index+1)).addClass('s_v');
						return false;
					}
					else
					{
						$($('.sldimgdesc').find('.s1').get(0));
						$($('.sldimgdesc').find('.s1').get(0)).addClass('s_v');	
						return false;
					}
				}
		});

	}
 
function audioPlayer(){
            var video_activo = 0;
            $("#audioPlayer")[0].src = $("#playlist li a")[0];
            $("#audioPlayer")[0].play();
            $("#playlist li a").click(function(e){
               e.preventDefault(); 
               $("#audioPlayer")[0].src = this;
               $("#audioPlayer")[0].play();
               $("#playlist li").removeClass("videoactivo");
                video_activo = $(this).parent().index();
                $(this).parent().addClass("videoactivo");
            });
            
            $("#audioPlayer")[0].addEventListener("ended", function(){
               video_activo++;
                if(video_activo == $("#playlist li a").length)
                    video_activo = 0;
                $("#playlist li").removeClass("videoactivo");
                $("#playlist li:eq("+video_activo+")").addClass("videoactivo");
                $("#audioPlayer")[0].src = $("#playlist li a")[video_activo].href;
                $("#audioPlayer")[0].play();
            });
        }

 function show5(){
        if (!document.layers&&!document.all&&!document.getElementById)
        return

         var Digital=new Date()
         var hours=Digital.getHours()
         var minutes=Digital.getMinutes()
         var seconds=Digital.getSeconds()

        var dn="PM"
        if (hours<12)
        dn="AM"
        if (hours>12)
        hours=hours-12
        if (hours==0)
        hours=12

         if (minutes<=9)
         minutes="0"+minutes
         if (seconds<=9)
         seconds="0"+seconds
        //change font size here to your desire
        myclock="<font size='6' face='Arial' color=#fff ><b>"+hours+":"+minutes+":"
         +seconds+" "+dn+"</b></font>"
        if (document.layers){
        document.layers.liveclock.document.write(myclock)
        document.layers.liveclock.document.close()
        }
        else if (document.all)
        liveclock.innerHTML=myclock
        else if (document.getElementById)
        document.getElementById("liveclock").innerHTML=myclock
        setTimeout("show5()",1000)
         }
       window.onload=show5
         //-->
    
