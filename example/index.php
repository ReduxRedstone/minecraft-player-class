<html>
<head>
    <title>Testing</title>
    <script src="files/js/jquery-2.1.4.min.js"></script>
    <script src="files/js/main.js"></script>
</head>
<body>
<div class="get_uuid">
    <textarea rows="1" placeholder="ReduxRedstone" type="text"></textarea><br>
    <button onclick="getPlayerInfo($(this).parent().find('textarea').val(), 'uuid')">Convert to UUID</button>
    <div class="uuid"></div><br>
</div>
<div class="get_username">
    <textarea rows="1" cols="37" placeholder="a8b5c720-34c0-424f-a9bf-a2ec77defad2" type="text"></textarea><br>
    <button onclick="getPlayerInfo($(this).parent().find('textarea').val(), 'name')">Convert to username</button>
    <div class="name"></div><br>
</div>
<div class="get_hist">
    <textarea rows="1" cols="37" placeholder="Username or UUID" type="text"></textarea><br>
    <button onclick="getPlayerInfo($(this).parent().find('textarea').val(), 'hist')">Get name history</button>
    <div class="hist"></div>
</div>
</body>
</html>
