@extends('layouts.dashboard.style')

@section('content')
    <div class="register-box">
        <div class="register-logo">
            <a href="#"><b>Egy-</b>Bella</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">أنضم لشركة إيجى بيلا</p>

                <form action="{{ route('client.store') }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('post') }}

                    <div class="input-group mb-3">
                        <input type="text" class="form-control @error('full_name') is-invalid @enderror"
                            placeholder="Full name" name="full_name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>

                    @error('full_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="input-group mb-3">
                        <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="tel"
                            placeholder="phone numper" name="phone_one" autofocus>
                        {{-- <input type="text" class="form-control"
                            data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask> --}}
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                    </div>
                    @error('phone_one')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="form-group">
                                {{-- <label>Minimal</label> --}}
                                <select class="form-control @error('type_compane') is-invalid @enderror select2" style="width: 230%;" name="type_compane">
                                    {{-- <option selected="selected">Alabama</option> --}}
                                    <option>Chooes</option>
                                    @foreach ($companes as $compane)
                                        <option value="{{ $compane->id }}">{{ $compane->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    @error('type_compane')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="input-group mb-3">
                        {{-- <input type="password" class="form-control" placeholder="Retype password"> --}}
                        <div class="col-sm-12">
                            <div class="form-group text-center">
                                <label>العنوان</label>
                                <textarea class="form-control @error('type_location') is-invalid @enderror" rows="3" placeholder="Enter ..."
                                    name="type_location"></textarea>
                            </div>
                        </div>
                    </div>
                    @error('type_location')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">تسجيل</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                {{-- <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign up using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>
                        Sign up using Google+
                    </a>
                </div>

                <a href="login.html" class="text-center">I already have a membership</a> --}}
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
@endsection
