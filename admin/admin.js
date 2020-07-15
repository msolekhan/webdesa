$(".menu li > a").click(function(a){
	$(".menu ul ul").slideUp(), $(this).next().is(":visible") || $(this).next().slideDown(), $(function)stopPropagation()
})