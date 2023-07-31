<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if($viewinfo)
<img src="/images/{{ $viewinfo->nomeimg }}.jpg">
<p>{{$viewinfo->titulo}}</p>
<p>{{$viewinfo->action_text}}</p>
@else
@endif
<classe div="contêiner">

<form  method="POST">
        @csrf
        <label  for = "nome" >Nome  </ label >
        <input type="text" name = "nome" > </input>
        
    

         <br>         
        <label  for = "idade" >Idade</ label >
        <input  type = "text"  name ="idade"></input>
             
        
        <br>  
        <label  for ="email">E-mail</label >
        <input  type ="text"name ="email" ></input>
    
<br>         
        <label  for ="contato" >Telefone</label>
        <input type="tel" name = "contato" ></input>
       
        <button type="submit" value="Submit">Cadastrar</button>
  </form>
</div>
</body>
</html>