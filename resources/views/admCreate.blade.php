<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body> 
<div class="flex justify-center items-center h-screen w-full bg-slate-200">
<form action="{{ route('salvar') }}" method="POST" enctype="multipart/form-data" class="flex flex-col  w-1/3 ">
@csrf
<label  for = "titulo" >Titulo da pagina  </label >
<input type="text" name="titulo" > </input>
<label  for = "nomeimg" >Nome  Da imagem  </label >
<input type="text" name="nomeimg" > </input>
<label  for = "img" >Imagem da pagina  </label >
<input type="file" name="img" > </input>
<label  for = "action_text" >Texto para ação  </label >
<input type="text" name="action_text" > </input>
<button type="submit" value="Submit">Cadastrar</button>
</form>
</div>



</body>
</html>