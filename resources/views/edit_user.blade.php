@if(Auth::user()->isAdmin())
<div class="div_usuario">
   
    <form class="contact-form" action="{{route('admin.update')}}" method="post">
        @csrf
        <div class="form-group">

            <input type="text" class="form-control" name="name" value=" {{ Auth::user()->name }}">
            @if($errors->has('name'))
            <div class="error">{{ $errors->first('name') }}</div>
            @endif
        </div>

        <div class="form-group">
            <input type="email" class="form-control" name="email" value=" {{ Auth::user()->email }}">
            @if($errors->has('email'))
            <div class="error">{{ $errors->first('email') }}</div>
            @endif
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password...">
            @if($errors->has('password'))
            <div class="error">{{ $errors->first('password') }}</div>
            @endif
        </div>
        <input type="hidden" name="id" value=" {{ Auth::user()->id }}">

        <button type="submit" class="btn btn-primary" name="Send">{{ __('multi.enviar') }}</button>
    </form>

</div>
@endif