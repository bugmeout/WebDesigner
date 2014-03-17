$(document).ready(function(){
	$("#n").mouseover(function(){
		$("#n").css({border:"1px #0099FF solid",background:"white"});	
		$("#n").mouseout(function(){
			$("#n").css({border:"1px red solid",background:"#FFCCFF"});
		});
	});
	$("#na").mouseover(function(){
		$("#na").css({border:"1px #0099FF solid",background:"white"});	
		$("#na").mouseout(function(){
			$("#na").css({border:"1px red solid",background:"#FFCCFF"});						
		});
	});
	
});