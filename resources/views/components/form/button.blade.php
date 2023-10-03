{{--Esquema de mesclagem, permite que use tanto atributos internos como externos--}}
<button {{ $attributes->class([ 'btn','btn-danger'=> $isRed]) }}>
    {{ $nome }}
</button>
