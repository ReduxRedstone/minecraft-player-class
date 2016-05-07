function getPlayerInfo(data, type) {
	if (!data) {
		alert("Enter some data!");
		return;
	}
	$.post('player-conv.php',{type:type,data:data},
    function(res) {
    	if (isJson(res)) {
    		var names = JSON.parse(res);
    		var count = names.length;
    		var orig = names[0]['name'];
    		var str = "";
    		for (var n=count-1; n >= 1; n--) {
    			var str = str+names[n]['name']+" changed on "+names[n]['time']+"<br>";
    		}
    		var str = str+"Original name: "+orig+"<br>";
    		$("."+type).html(str);
    	} else {
    		$("."+type).html(res);
    	}
    });
}
function isJson(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}