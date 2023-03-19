@extends('boards.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">회원가입</div>

                    {{-- 이름 입력 --}}
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">이름</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                           name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> {{-- col-md-6 end --}}
                            </div> {{-- form-group row end --}}


                            {{-- 이메일 입력 --}}
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">이메일</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                           name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> {{-- col-md-6 end --}}
                            </div> {{-- form-group row end --}}


                            {{-- 비밀번호 입력 --}}
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">비밀번호</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                           name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> {{-- col-md-6 end --}}
                            </div> {{-- form-group row end --}}


                            {{-- 비밀번호 재확인 --}}
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">비밀번호 재입력</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>


                            {{-- 보내기 --}}
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                       회원가입
                                    </button>
                                </div> {{-- col-md-6 offset-md-4 end --}}
                            </div> {{-- form-group row mb-0 end --}}

                        </form>
                    </div> {{-- card-body end --}}
                </div> {{-- card end --}}
            </div> {{-- col-md-8 end --}}
        </div> {{-- row justify-content-center end --}}
    </div> {{-- container end --}}
@endsection