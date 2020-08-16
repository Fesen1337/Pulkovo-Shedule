<?php
for ($i = 1; $i <= 7; $i++)
{
	$name_input = 'inputfile' . $i;
	if(isset($_FILES) && $_FILES[$name_input]['error'] == 0){ // Проверяем, загрузил ли пользователь файл
	$_FILES[$name_input]['name'] = 'file' . $i . '.xlsx';
	$destiation_dir = dirname(__FILE__) .'/Exel/'.$_FILES[$name_input]['name']; // Директория для размещения файла
	move_uploaded_file($_FILES[$name_input]['tmp_name'], $destiation_dir); // Перемещаем файл в желаемую директорию
	}
}
exec ("create_plan.py");
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Scheduling Pulkovo</title>
	<link rel="stylesheet" type="text/css" href="testCSS/resetCSS.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<header>
	<nav>
		<div class="logo">
			<img src="img/logo.png">
		</div>
		 <div class="list">
                <ul class="links">
                    <li><a href="#">Создание годового плана обучения</a></li>
                    <li><a href="#">Импорт уже существующего плана</a></li>
                    <li><a href="index2.html">Расписание</a></li>
                </ul>
         </div>
	</nav>
</header>


	<form method="post" action="basic.php" enctype="multipart/form-data">
		<div class="folder">
			<div class="files">
				<i class="fa fa-calendar" aria-hidden="true"></i>
				<span>Производственный календарь</span>
				<div id="inp" class="input">
					<i class="fa fa-plus-circle icons" aria-hidden="true"></i>
					  <button id="button1" style="display:inline-block;width:300px; height:20px;background: none; border: none;border-bottom: 1px solid black; position:absolute; z-index:-1;">
					  	<span>Загрузить новый файл...</span>
					  </button>
		  			  <input type="file" id="inputfile" name="inputfile1" style="z-index: 1000; position:absolute; opacity:0.01;" 
		  			  		 onchange="onCange(this.files)" title=" ">
				</div>
			</div>
			<div class="files">
				<i class="fa fa-list-ol" aria-hidden="true"></i>
				<span>Параметры аудиторий</span>
				<div id="inp" class="input">
					<i class="fa fa-plus-circle icons" aria-hidden="true"></i>
					  <button id="button2" style="display:inline-block;width:300px; height:20px;background: none; border: none;border-bottom: 1px solid black; position:absolute; z-index:-1;">Загрузить новый файл...
					</button>
		  			  <input type="file" id="inputfile" name="inputfile2" style="z-index: 1000; position:absolute; opacity:0.01;" 
		  			  		 onchange="onCange(this.files)" title=" ">
				</div>
			</div>
				<div class="files">
				<i class="fa fa-users" aria-hidden="true"></i>
				<span>Параметры преподавателей</span>
				<div id="inp" class="input">
					<i class="fa fa-plus-circle icons" aria-hidden="true"></i>
					  <button id="button3" style="display:inline-block;width:300px; height:20px;background: none; border: none;border-bottom: 1px solid black; position:absolute; z-index:-1;">Загрузить новый файл...
					  </button>
		  			  <input type="file" id="inputfile" name="inputfile3" style="z-index: 1000; position:absolute; opacity:0.01;" 
		  			  		 onchange="onCange(this.files)" title=" ">
				</div>
			</div>
				<div class="files">
				<i class="fa fa-history" aria-hidden="true"></i>
				<span>График сменности преподавателей</span>
				<div id="inp" class="input">
					<i class="fa fa-plus-circle icons" aria-hidden="true"></i>
					  <button id="button4" style="display:inline-block;width:300px; height:20px;background: none; border: none;border-bottom: 1px solid black; position:absolute; z-index:-1;">Загрузить новый файл...</button>
		  			  <input type="file" id="inputfile" name="inputfile4" style="z-index: 1000; position:absolute; opacity:0.01;" 
		  			  		 onchange="onCange(this.files)" title=" ">
				</div>
			</div>
				<div class="files">
				<i class="fa fa-suitcase" aria-hidden="true"></i>
				<span>График отпусков преподавателей</span>
				<div id="inp" class="input">
					<i class="fa fa-plus-circle icons" aria-hidden="true"></i>
					  <button id="button5" style="display:inline-block;width:300px; height:20px;background: none; border: none;border-bottom: 1px solid black; position:absolute; z-index:-1;">Загрузить новый файл...</button>
		  			  <input type="file" id="inputfile" name="inputfile5" style="z-index: 1000; position:absolute; opacity:0.01;" 
		  			  		 onchange="onCange(this.files)" title=" ">
				</div>
			</div>
				<div class="files">
				<i class="fa fa-tag" aria-hidden="true"></i>
				<span>Учебно тематические программы</span>
				<div id="inp" class="input">
					<i class="fa fa-plus-circle icons" aria-hidden="true"></i>
					  <button id="button6" style="display:inline-block;width:300px; height:20px;background: none; border: none;border-bottom: 1px solid black; position:absolute; z-index:-1;">Загрузить новый файл...</button>
		  			  <input type="file" id="inputfile" name="inputfile6" style="z-index: 1000; position:absolute; opacity:0.01;" 
		  			  		 onchange="onCange(this.files)" title=" ">
				</div>
			</div>
				<div class="files">
				<i class="fa fa-list-alt" aria-hidden="true"></i>
				<span>Перечень учебных программ</span>
				<div id="inp" class="input">
					<i class="fa fa-plus-circle icons" aria-hidden="true"></i>
					  <button id="button7" style="display:inline-block;width:300px; height:20px;background: none; border: none;border-bottom: 1px solid black; position:absolute; z-index:-1;">Загрузить новый файл...</button>
		  			  <input type="file" id="inputfile" name="inputfile7" style="z-index: 1000; position:absolute; opacity:0.01;" 
		  			  		 onchange="onCange(this.files)" title=" ">

				</div>
			</div>
		</div>
		<input type="submit" value="Загрузить"><br>
	</form>
</body>
<script type="text/javascript">
	var onCange=function(files)
	{
		var e = window.event;
	    var obj = e.target||e.srcElement;
		var file = files[0];
		document.getElementById('button' + obj.name.slice(-1)).innerHTML=file.name;
	}
</script>
</body>
</html>