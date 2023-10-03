{{--Esquema de mesclagem, permite que use tanto atributos internos como externos--}}
<button {{ $attributes->merge(['class' => 'btn btn-'.$variante]) }}>
    {{ $nome }}
</button>
