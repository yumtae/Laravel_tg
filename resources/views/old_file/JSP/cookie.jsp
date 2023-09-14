<%@ page language="java" contentType="text/html; charset=EUC-KR"
    pageEncoding="EUC-KR"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="EUC-KR">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

</head>
<body>
	<div class='container'>
		<h1>쿠키, URL/URI, 요청방식에 관련된 정보 예제</h1>
	
		<table class='table table-striped'>
		<tr>
			<td>쿠키정보</td>
	
			<% 
				Cookie[] cookie = request.getCookies();
			if(cookie == null){
			%>
				<td>쿠키가 존재하지 않습니다</td>
			
			<%
				}else{
					for (int i = 0; i < cookie.length ; i++){
			%>
	
				<td><%= cookie[i].getName() %> (<%= cookie[i].getValue() %>)
	
			<%
					}
				} %>	
	
		</tr>
		
		<tr>
			<td>서버 도메인명</td>
			<td><%= request.getServerName() %></td>			
		</tr>
		
		<tr>
			<td>서버 포트번호</td>
			<td><%= request.getServerPort() %></td>			
		</tr>
		
		<tr>
			<td>요청 URL</td>
			<td><%= request.getRequestURL() %></td>			
		</tr>
		
		<tr>
			<td>서버 URI ( Uniform Resource Identifier)</td>
			<td><%= request.getRequestURI() %></td>			
		</tr>
		
		<tr>
			<td>요청 쿼리</td>
			<td><%= request.getQueryString() %></td>			
		</tr>
		
		<tr>
			<td>클라이언트 호스트명</td>
			<td><%= request.getRemoteHost() %></td>			
		</tr>
		
	
		
	
		
		



		
		
		
		</table>
	</div>

</body>
</html>