@extends('layouts.auth')

@section('content')
    <div class="login-box">
      <div class="login-logo">
        <a href="{{url('/')}}"><b>User</b> Panel </a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
          @if (session('status'))
              <div class="alert text-success">
                  {{ session('status') }}
              </div>
          @endif

        <form method="POST" action="{{ route('admin.password.email') }}">
            {{csrf_field()}}
          <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required autofocus>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Send Password Reset Link</button>
        </form>
        <!-- /.social-auth-links -->
      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
@endsection
@push('scripts')
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
@endpush
