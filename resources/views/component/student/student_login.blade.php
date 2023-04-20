@extends('root.main')
@section('main')
<div class="container">
    <h1 style="text-align: center; margin-bottom:23px;">Login your account</h1>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>
    @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
      </div>
    @endif
    @if (Session::has('e_fail'))
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:">
            <use xlink:href="#exclamation-triangle-fill" />
        </svg>
        <div>
            {{Session::get('e_fail')}}
        </div>
    </div>
    @endif
    @if (Session::has('p_fail'))
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:">
            <use xlink:href="#exclamation-triangle-fill" />
        </svg>
        <div>
            {{Session::get('p_fail')}}
        </div>
    </div>
    @endif
    @if (Session::has('logout'))
    <div class="alert alert-success" role="alert">
        {{Session::get('logout')}}
      </div>
    </div>
    @endif
    <div class="myform">
        <form action="" method="POST">
            @csrf
            <div class="mb-3 row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword">
                </div>
            </div>
            <button class="btn btn-outline-primary" style="margin-top: 23px; margin-right:23px">LogIn</button>
            <button type="reset" class="btn btn-outline-warning" style="margin-top: 23px; margin-right:23px">Reset</button>
        </form>
        <div class="hyper">
            <a href="{{route('signup')}}">Don't have any account?? signUp here</a>
        </div>
    </div>
</div>
@endsection