<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
      <header>
        {{-- Navigation Bar --}}
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed"
                      data-toggle="collapse" data-target="#navbar-menu">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">{{ config('blog.title') }} Admin</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-menu">
              @include('admin.partials.navbar')
            </div>
          </div>
        </nav>
      </header>
        <div class="container">
          <div class="content">
            @if (Session::has('message'))
          		<div class="flash alert-info">
          			<p>{{ Session::get('message') }}</p>
          		</div>
          	@endif
          	@if ($errors->any())
          		<div class='flash alert-danger'>
          			@foreach ( $errors->all() as $error )
          				<p>{{ $error }}</p>
          			@endforeach
          		</div>
          	@endif

          	@yield('content')
          </div>
        </div>
<script src="{{ elixir('js/scripts.js') }}"></script>
@yield('scripts')

    </body>
</html>
