@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('¡Te conectaste exitosamente!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="banner">
      <div class="card">
        <a href="https://github.com/javierro22/MyFirstLaravelProject" target="_blank"
          ><img
            src="https://i.pinimg.com/736x/b5/1b/78/b51b78ecc9e5711274931774e433b5e6.jpg"
            alt="Github"
        /></a>
      </div>
      <div class="card">
        <a href="https://www.linkedin.com/in/francisco-javier-rodr%C3%ADguez-ca%C3%B1al-0b8338314/" target="_blank"
          ><img
            src="https://static.vecteezy.com/system/resources/previews/023/986/970/non_2x/linkedin-logo-linkedin-logo-transparent-linkedin-icon-transparent-free-free-png.png"
            alt="x"
        /></a>
      </div>

    </div>
@endsection
