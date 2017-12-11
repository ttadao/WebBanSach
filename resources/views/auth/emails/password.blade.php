<!DOCTYPE html>
<html>
	<head>
		<title>iNews</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<p>Chào bạn,</p>
		<p>Bạn vừa yêu cầu <strong>iNews</strong> khôi phục mật khẩu của mình.</p>
		<p>Xin vui lòng nhấn vào liên kết bên dưới để tiến hành khôi phục:</p>
		<p><a href="{{ $link = url('/password/reset', $token) . '?email=' . urlencode($user->getEmailForPasswordReset()) }}">{{ $link }}</a></p>
		<p>--</p>
		<p>&copy; 2017 iNews</p>
	</body>
</html>