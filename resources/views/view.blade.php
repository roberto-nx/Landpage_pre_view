<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body  class="  grid grid-cols-5  h-screen w-full bg-cover bg-no-repeat"style="background-image: url(/images/{{ $viewinfo->nomeimg }}.jpg)">
@if($viewinfo)
<p class="col-span-5 bg-slate-300 h-12 justify-self-center">{{$viewinfo->titulo}}</p>
<p  class="col-start-2  bg-slate-300  h-24 rounded-lg ">{{$viewinfo->action_text}}</p>
@else
@endif

<form class="col-start-4 flex flex-col w-32 sm:w-full " method="POST">
@csrf
<label  for = "nome" >Nome  </label > 
<input type="text" name = "nome" > </input> 
<label  for = "idade" >Idade</label>
<input  type = "text"  name ="idade"></input>
<label  for ="email">E-mail</label >
<input  type ="text"name ="email" ></input>
<label  for ="contato" >Telefone</label>
<input type="tel" name = "contato" ></input><br>
<button type="submit" value="Submit" class="bg-cyan-600">Cadastrar</button>
  </form>

</body>
</html>