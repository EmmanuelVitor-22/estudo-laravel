{{--Esquema de mesclagem, permite que use tanto atributos internos como externos--}}
<button {{ $attributes->class([ 'btn','btn-danger'=> $isRed])  }}>


    {{--Você pode recuperar o valor de um atributo específico usando o getmétodo:--}}
    {{ $attributes->get('type') }}

    {{--    Se quiser verificar se um atributo está presente no componente, você pode usar o hasmétodo.
     Este método aceita o nome do atributo como único argumento e retorna um booleano indicando se o atributo está presente ou não:--}}
    @if($attributes->get('text-color'))
        <div class="{{$attributes->get('text-color')}}">
            {{ $nome }}
        </div>
    @else
        {{ $nome }}
    @endif

</button>
