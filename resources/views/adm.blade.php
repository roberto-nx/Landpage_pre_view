<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class=" h-screen w-full bg-slate-200">
<div class="flex flex-col sm:flex-row   justify-center sm:space-x-4 my-8 sm:mx-8 border-y-4 border-indigo-500 bg-slate-400">


<p >Titulo atual: {{$viewinfo->titulo}}</p>
@if($viewinfo)
<p >Texto para ação atual: {{$viewinfo->action_text}}<p>
@endif 
<p>imagem atual:</p>
<img src="/images/{{ $viewinfo->nomeimg }}.jpg" class="h-40 ">
</div>
<div class="flex justify-center  " >
<form  class="flex flex-col  w-1/3 " action="{{ route('admUpdate'),$viewinfo->id }}" method="POST" enctype="multipart/form-data">
@csrf
<label  for = "titulo" >Titulo da pagina  </label >
<input type="text" name="titulo" > </input>
<label  for = "nomeimg" >Nome  Da imagem  </label >
<input type="text" name="nomeimg" > </input>
<label  for = "img" >Imagem da pagina  </label >
<input type="file" name="img" > </input>
<label  for = "action_text" >Texto para ação  </label >
<input type="text" name="action_text" > </input><br>
<button type="submit" value="Submit" class="bg-cyan-600">Cadastrar</button>
</form>
</div>
</body>
</html>