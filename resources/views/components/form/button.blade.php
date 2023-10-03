{{--Esquema de mesclagem, permite que use tanto atributos internos como externos--}}
<button {{ $attributes->class([ 'btn','btn-danger'=> $isRed])  }}>
    {{--{{ $nome }}--}}

    {{--cê pode usar o whereStartsWithmétodo para recuperar todos os atributos cujas chaves começam com uma determinada string--}}
    {{$attributes->whereStartsWith('type')}}

    {{--Por outro lado, o whereDoesntStartWithmétodo pode ser usado para excluir todos os atributos cujas chaves começam com uma determinada string:--}}

    {{ $attributes->whereDoesntStartWith('wire:model') }}
</button>
