@extends('layout.auth')

@section('content')
    <main class="form-signin">
        {{--{{url('/login')}} -> utiliza a rota--}}
        {{--{{route('login.index')}} -> utiliza o nome da rota (vantagem q se a rota mudar não quebra o site)--}}
        <form method="POST" action="{{route('login.index')}}">
            {{-- Faz uma segurança para o formulario--}}
            @csrf
            <img class="mb-4" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72"
                 height="57">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="passwor">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
        </form>
    </main>
@endsection
