<!DOCTYPE html>
<head>
    <meta charset="UTF-8" lang="ru">
	<meta name="description" content="This is second lab">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="lab4.css" type="text/css">
    <title>Test</title>    
</head>
<body>	
	<main>				
		<h1></h1>
		<form method="POST"> <!--Используем метод Post-->		
			<textarea name='way' placeholder="Way"><?php if (isset($_POST['enter'])) { echo $_POST['way'];}?></textarea><br>					
			<input id="button" type="submit" name="enter" value="Обработать"><br><br>
			<?php				
				//error_reporting(0);
				if (isset($_POST['enter'])) {
					// кладем в переменные сообщения взятые из формы
					$way = $_POST['way'];					
				}							
				if(is_file($way)) {			
					if(file_get_contents($way) == '') {
						echo 'Файл пуст.';
					} 
					else {
						echo preg_replace('/((https?:\/\/|www\d{0,3}[.]|[a-z0-9\-]+[.][a-z]+\/)([^\s`!()\{};:]+))/',
						"<a style='color:red; text-decoration: none;' href='$0'>$0</a>", file_get_contents($way));	
					}					
				}
				else {
					echo 'Вы указали не файл.';					
				}
			?>								
		</form>		
	</main>
</body>
</html>