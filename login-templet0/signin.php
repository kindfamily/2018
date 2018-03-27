<!DOCTYPE html>
<meta charset="utf-8" />
<head>
<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
</head>

<body>
	<form method='post' action='signin_ok.php'>
		<p>
			아이디
			<input type='text' name='user_id' tabindex='1' id="id"/>
			<div id="idch">아이디를 입력하세요.
				<input type="hidden" value="0" name="use"/>
			</div>
		</p>
		<p>
			비밀번호
			<input type='password' name='user_pw' tabindex='2'/>
		</p>
		<p>
			이름
			<input type='text' name='user_name' tabindex='2'/>
		</p>
		<p>
			<select name="user_type">
				<option value="회원">회원</option>
				<option value="교사">교사</option>
				<option value="판매자">판매자</option>
			</select>
		</p>
		<input type='submit' tabindex='3' value='회원가입' style='height:50px'/>
	</form>
	<script>
	$(document).ready(function(){
		
		$('#id').blur(function(){    
		
				$.ajax({ // ajax실행부분
					type: "post",
					url : "./checkid.php",
					data : {
						id : $('#id').val()
					},
					success : function s(a){ $('#idch').html(a); },
					error : function error(){ alert('시스템 문제발생');}
				});
		});
		
	});
	</script>
	
</body>
