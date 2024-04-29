<div>
    <p {{$attributes->merge(['class'=>'decoration-dashed'])}} >
        Coucou {{ $name }} ,vous etes dans le classe {{$classe}}...!!!
    </p>
    @foreach ($tags as $tag)
        {{$tag}}
    @endforeach
    {{ $substile }}
</div>
