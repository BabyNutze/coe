<!doctype html>
<html>

<head>
	<meta HTTP=EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
	<title>SMS</title>
</head>

<body>
	<form action="https://corpsms.dtac.co.th/servlet/com.iess.socket.SmsCorplink" method="post">
		Mobile Number : <input type="text" name="Msn" maxlength="10" size="10" value="66909366391"><br> 
		Mobile Number Lists : <input type="text" name="Msnlist" maxlength="30" size="100" value="66880183022;6632737158"><br>
		Message Type[T/E]: <input type="text" name="MsgType" value="E"><br> 
		Message <input type="text" name="Msg" value="Test sending a massage via DTAC gateway"><br> 
		User <input type="text" name="User" value="TestUser"><br> 
		Password <input type='text' name="Password" value="testuser"><br>
		<input type="submit" value="submit"><input type="reset" value="reset">
	</form>
</body>

</html>