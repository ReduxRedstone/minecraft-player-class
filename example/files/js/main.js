function getPlayerInfo(data, type) {
	if (!data) {
		alert("Enter some data!");
		return;
	}
	$.post('player-conv.php',{type:type,data:data},
    function(res) {
    	$("."+type).html(res);
    });
}