{{--Esquema de mesclagem, permite que use tanto atributos internos como externos--}}
<button {{ $attributes->class(['class' => 'btn btn-'.$isRed]) }}>
    {{ $nome }}
</button>
