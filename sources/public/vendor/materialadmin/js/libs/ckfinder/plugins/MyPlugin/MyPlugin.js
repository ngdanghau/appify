CKFinder.define( function () {
     var MyPlugin = {
         init: function ( finder ) {
             finder.on( 'contextMenu:file:view', function( evt ) {
			    evt.data.items.add( {
			        label: 'Show URL',
			        isActive: evt.data.context.file.get( 'folder' ).get( 'acl' ).fileView,
			        icon: 'ckf-view',
			        action: function() {
			        	prompt("Copy to clipboard: Ctrl+C, Enter", evt.data.context.file.getUrl());
			           //alert( evt.data.context.file.getUrl() );
			        }
			    } );
			} );
         }
     };

     return MyPlugin;
 } );