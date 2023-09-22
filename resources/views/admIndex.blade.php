<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adm Index</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="flex flex-col  w-50  sm:w-full">
@if($viewinfo)
<table class="border-separate border border-slate-400 border-spacing-2">
<th class="border-collapse border border-slate-400 bg-slate-300">titulo</th>
<th class="border-collapse border border-slate-400 bg-slate-300">nome da imagem</th>
<th class="border-collapse border border-slate-400 bg-slate-300">texto de ação </th>
<th class="border-collapse border border-slate-400 bg-slate-300">visualizar  </th>
<th class="border-collapse border border-slate-400 bg-slate-300">editar  </th>
<th class="border-collapse border border-slate-400 bg-slate-300">deletar </th>
</tr>
@foreach ($viewinfo as $info )
<tr class="border-collapse border border-slate-400">
<td class="border-collapse border border-slate-400">
{{$info->titulo}}
</td >
<td class="border-collapse border border-slate-400">
{{$info->nomeimg}}
</td>
<td class="border-collapse border border-slate-400">
{{$info->action_text}}
</td>
<td class="border-collapse border border-slate-400 bg-emerald-200" >
<a class="flex justify-center " href="{{route('view',$info->id)}}">Visualizar</a>
</td>
<td class="border-collapse border border-slate-400 bg-emerald-200">
<a class="flex justify-center " href="{{route('admShow',$info->id)}}">Editar</a>
</td>
<td class="border-collapse border border-slate-400 bg-emerald-200">
<a class="flex justify-center "href="{{route('delete',$info->id)}}">Deletar</a>
</td>
</tr>
@endforeach
</table>
@endif
<a href="{{route('admCreate')}}" class=" flex justify-center w-12 border border-slate-400 bg-cyan-500 self-center ">Criar</a>
</div>
</body>
</html>