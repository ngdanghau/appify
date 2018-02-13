ajax_url = site_url + '/';
$('#blog').click(function(){
	pageid = parseInt($(this).attr('data-page'));
	$.post(ajax_url, {
		LOAD_MORE: 1,
		page: pageid
	}, function (data) {
		if(data == 'err') console.log('Fail');
		else {
			pageid = pageid + 1;
			$('.load-more').attr('data-page',pageid);
			$('.blog-listing').append( data );
			$('.masonry').isotope('reloadItems');
			$('.masonry').isotope({
		        itemSelector: '.masonry-item',
		        masonry: {
		            columnWidth: '.grid-sizer',
		            gutter: 30
		        }
		    });
		}
	});
});
$('#tag').click(function(){
	pageid = parseInt($(this).attr('data-page'));
	tag = $(this).attr('data-tag');
	$.post(ajax_url, {
		LOAD_MORE_TAG: 1,
		page: pageid,
		tag: tag
	}, function (data) {
		if(data == 'err') console.log('Fail');
		else {
			pageid = pageid + 1;
			$('.load-more').attr('data-page',pageid);
			$('.blog-listing').append( data );
			$('.masonry').isotope('reloadItems');
			$('.masonry').isotope({
		        itemSelector: '.masonry-item',
		        masonry: {
		            columnWidth: '.grid-sizer',
		            gutter: 30
		        }
		    });
		}
	});
});
$('#category').click(function(){
	pageid = parseInt($(this).attr('data-page'));
	category = $(this).attr('data-category');
	$.post(ajax_url, {
		LOAD_MORE_CAT: 1,
		page: pageid,
		category: category
	}, function (data) {
		if(data == 'err') console.log('Fail');
		else {
			pageid = pageid + 1;
			$('.load-more').attr('data-page',pageid);
			$('.blog-listing').append( data );
			$('.masonry').isotope('reloadItems');
			$('.masonry').isotope({
		        itemSelector: '.masonry-item',
		        masonry: {
		            columnWidth: '.grid-sizer',
		            gutter: 30
		        }
		    });
		}
	});
});

$('#search').click(function(){
	pageid = parseInt($(this).attr('data-page'));
	search = $(this).attr('data-search');
	$.post(ajax_url, {
		LOAD_MORE_SEARCH: 1,
		page: pageid,
		search: search
	}, function (data) {
		if(data == 'err') console.log('Fail');
		else {
			pageid = pageid + 1;
			$('.load-more').attr('data-page',pageid);
			$('.blog-listing').append( data );
			$('.masonry').isotope('reloadItems');
			$('.masonry').isotope({
		        itemSelector: '.masonry-item',
		        masonry: {
		            columnWidth: '.grid-sizer',
		            gutter: 30
		        }
		    });
		}
	});
});

$('#searchsubmit').click(function(){
	kw = $('#searchinput').val();
	kw = encodeURIComponent(kw);
	kw = kw.replace(/%20/g, '-');
	$("#sidebarSearch").submit(function(e){
        e.preventDefault();
    });
    link_search = site_url + "/search/" + kw;
	window.location.replace(link_search);
});
