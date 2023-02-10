<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>realtor</title>
    
    <!--style are found in styles.blade.php-->
    @include('partials.styles')

  </head>
  <body>
    
    <!--laravel derivative-->
    <!--the content appearing is coming from todo.blade.php-->
    <div class="container">

        <!--error and success message from TodoController.php class store-->
        <div class="row justify-content-center mt-5">
            <div class="div col-lg-6">
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @endif

                @if($errors->any())
                    @foreach($errors->all() as $error)
                    <div class="div alert alert-danger">
                        {{ $error }}
                    </div>
                    @endforeach
                @endif

            </div>
        </div>

        @yield('content')

    </div>
    
    
  </body>
</html>