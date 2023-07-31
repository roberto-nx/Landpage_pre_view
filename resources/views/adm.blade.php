<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Titulo atual:</p>
@if($viewinfo)
<p>{{$viewinfo->titulo}}</p>
@else
<p></p>
@endif
<p>imagem atual:</p>
@if($viewinfo)
<img src="/images/{{ $viewinfo->nomeimg }}.jpg">
@else
<img>
@endif
<p>Texto para ação atual:<p>
@if($viewinfo)
<p>{{$viewinfo->action_text}}<p>
<div>
@endif  
<form action="{{ route('salvar') }}" method="POST" enctype="multipart/form-data">
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
<div>
</div>



</body>
</html>