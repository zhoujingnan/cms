<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>会员添加</title>
    <script src="{{asset('jquery-1.8.3.js')}}"></script>	
</head>
<body>
	<form action="{{url('backmember/upload')}}" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>会员名：</td>
				<td>
					<input type="text" name="member_name">
				</td>
			</tr>
			<tr>
				<td>会员头像：</td>
				<td>
					<input type="file" name="member_img">
				</td>
			</tr>
			<tr>
				<td>会员年龄：</td>
				<td>
					<select name="member_age">
						@for($i =20; $i < 50; $i++)
						<option value="{{$i}}">{{$i}}</option>
						@endfor
					</select>
				</td>
			</tr>
			<tr>
				<td>会员工作：</td>
				<td>
					<input type="text" name="member_work">
				</td>
			</tr>
			<tr>
				<td>会员薪资：</td>
				<td>
					<select name="member_money" id="">
						<option value="10000">10000元</option>				
						<option value="15000">15000元</option>				
						<option value="20000">2000元</option>				
						<option value="30000">30000元</option>	
					</select>			
				</td>
			</tr>
			<tr>
				<td>会员地址：</td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="添加">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>