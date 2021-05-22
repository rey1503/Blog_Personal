
<?php
	$conexion=mysqli_connect("localhost","root", "1503");
if(mysqli_connect_errno()){
    echo "fallo al conectar con la base de datos";
    exit();
}
    mysqli_select_db($conexion,"blogpe") or die ("no se encuentra la base de datos");
    mysqli_get_charset($conexion, "utf8");
	if((isset($_FILES['miArchivo'])) && ($_FILES['miArchivo'] !='')){
		$file = $_FILES['miArchivo']; //Asignamos el contenido del parametro a una variable para su mejor manejo
		$id=0;
		$temName = $file['tmp_name']; //Obtenemos el directorio temporal en donde se ha almacenado el archivo;
		$fileName = $file['name']; //Obtenemos el nombre del archivo
		$fileExtension = substr(strrchr($fileName, '.'), 1); //Obtenemos la extensiÃ³n del archivo.
		
		//Comenzamos a extraer la informaciÃ³n del archivo
		$fp = fopen($temName, "rb");//abrimos el archivo con permiso de lectura
		$contenido = fread($fp, filesize($temName));//leemos el contenido del archivo
		//Una vez leido el archivo se obtiene un string con caracteres especiales.
		$contenido = addslashes($contenido);//se escapan los caracteres especiales
		fclose($fp);//Cerramos el archivo
}
	?>