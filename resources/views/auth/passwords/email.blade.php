@extends('main')

@section('title', '| Forgot My Password')

@section('content')

  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Reset Password</h6>
          <div class="card-text">
          @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
          @endif
            {!! Form::open(['url' => 'password/email', 'method' => 'POST'])!!}

              {{ Form::label('email', 'Email Address:') }}
              {{ Form::email('email', null, ['class' => 'form-control']) }}

              {{ Form::submit('Reset Password', ['class' => 'btn btn-primary']) }}

            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
