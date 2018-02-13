$('a[data-target="#Modal"]').click(function(){
	var url = $(this).data('url');
	$('#agree').attr('href',url);
});