$(init);
	function init(){
		$('#makeMeDraggable').draggable( {
			containment: '#content',
			cursor: 'move',
			snap: '#content'
		} );
		
		$('#makeMeDraggable2').draggable( {
			containment: '#content',
			cursor: 'move',
			snap: '#content'
		} );
	}
	