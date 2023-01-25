@extends ('layouts.main')

@section('title','HM Events')

@section('content')




         <h1>Olá</h1>
         <img src="/img/events.jpg" alt="Banner">

         @if(10>5)
            <p>A condição é true</p>
         @endif
          <p>{{ $nome }}</p>

          @if($nome == "Cristiano")
            <p>O nome é Cristiano</p>
          @elseif($nome == "Hariel")
             <p>O nome é {{ $nome }} e ele tem {{ $idade }} anos. E trabalha como {{ $profissao }}</p>
          @else
            <p>O nome não é Cristiano</p>
          @endif

           @for($i = 0;$i < count($arr);$i++)
                 <p>{{ $arr[$i] }} - {{ $i }}</p>
                 @if($i == 2)
                   <p>O i é 2</p>
                 @endif
           @endfor

           @forech($nomes as $nome)
                <p>{{ $nome }}</p>
           @endforech

           @php
               $name = "João";
               echo $name;
            @endphp
                <!-- Comentário HTML,sempre aparece para o usuario -->
                {{-- Este é comentário com o blade | Não aparace para o usuario --}}

@endsection
