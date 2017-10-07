@extends('layouts.app')

@section('header-content')
     <div class="container">
          <div class="text-center logo"> <a href="{{url('/')}}"><img src="assets/theme/images/logo.png" alt=""></a></div>
        </div>

@endsection

@section('content')
<!-- body-content -->
<div class="body-content clearfix" >
    <div class="block-section bg-color4">
        <div class="container">
            <div class="panel panel-md">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- buttons top -->
                            <p><a href="#" class="btn btn-primary btn-theme btn-block"><i class="fa fa-facebook pull-left bordered-right"></i> Login with Facebook</a></p>
                            <p><a href="#" class="btn btn-danger btn-theme btn-block"><i class="fa fa-google-plus pull-left bordered-right"></i> Login with Google</a></p>
                            <!-- end buttons top -->

                            <div class="white-space-10"></div>
                            <p class="text-center"><span class="span-line">OR</span></p>

                            <!-- form login -->
                            <form method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label>Е-мейл</label>
                                    <input type="email" name="email" class="form-control" placeholder="Your Email" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label>Парола</label>
                                    <input type="password" name="password" class="form-control" placeholder="Your Password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="checkbox flat-checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <span class="fa fa-check"></span>
                                                    Запомни
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <p class="help-block"><a href="#myModal" data-toggle="modal">Забравихте паролата си?</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group no-margin">
                                    <button type="submit" class="btn btn-theme btn-lg btn-t-primary btn-block">Вход</button>
                                </div>
                            </form><!-- form login -->

                        </div>
                    </div>
                </div>
            </div>

            <div class="white-space-20"></div>
            <div class="text-center color-white">Нямате регистрация? &nbsp; <a href="#" class="link-white"><strong>Създайте своят акаунт сега</strong></a></div>
        </div>
    </div>

    <!-- box bottom -->
    <div class="block-section bg-color2">
        <div class="container text-center">
            <i class="fa fa-mobile-phone fa-5x box-icon"></i>
            <h2 class=""> Открийте обявите за стажове, курсове и работа и на вашият телефон</h2>

            <p>Изтеглете приложението за стажове и курсове</p>
            <a href="#" class="btn btn-theme btn-default"><i class="fa fa-android bordered-right dark"></i> Android</a>
            <span class="space-inline-10"></span>
            <a href="#" class="btn btn-theme btn-default"><i class="fa fa-apple bordered-right dark"></i> Iphone</a>
        </div>
    </div><!-- end box bottom -->

    <!-- modal forgot password -->
    <div class="modal fade" id="myModal" >
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <form method="post" action="{{ route('password.email') }}">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" >Забравена парола</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Въведете вашият е-мейл</label>
                            <input type="email" class="form-control " name="text" placeholder="Email">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-theme" data-dismiss="modal">Затвори</button>
                        <button type="submit" class="btn btn-success btn-theme">Изпрати</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- end modal forgot password -->
</div><!--end body-content -->
@endsection
