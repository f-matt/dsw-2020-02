@if (count($errors) > 0)
    <div>
        <strong>Ocorreu um erro!</strong>

        <br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
