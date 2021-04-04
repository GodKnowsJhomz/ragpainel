@extends('layout')

@section('title', 'Minha Conta')
@section('description', 'Minha Conta')

@section('content')

    <div class="container-fluid">

        <div class="col-md-4">
            <div class="card card-profile">
                <div class="card-avatar">
                    <a href="#pablo">
                        <img class="img" src="{{asset('assets/img/users')}}/{{$photo}}" />
                    </a>
                </div>
                <div class="card-content">
                    <h6 class="category text-gray">@if($level == 0) Jogador Normal @elseif($level == 1) Jogador VIP @elseif($level == 10) Community Manager @elseif($level == 20) Game Master @elseif($level >= 50) Administrador @endif</h6>
                    <h4 class="card-title">{{ucfirst(trans($user))}}</h4>
                    <a href="#pablo" class="btn btn-primary btn-round">Alterar Foto</a>
                </div>
            </div>
            <div class="col-md-13">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">perm_identity</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Informações Extras
                        </h4>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Quantidade de Acessos</label>
                                        <input type="text" class="form-control" value="{{$logins}}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Último acesso</label>
                                        <input type="text" class="form-control" value="{{date('d-m-Y H:m:i', strtotime($lastlogin))}}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Último IP</label>
                                        <input type="text" class="form-control" value="{{$lastip}}" disabled>
                                    </div>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group label-floating">
                                    <label class="control-label">Dias de VIP</label>
                                    <input type="text" class="form-control" value="{{$cash}}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group label-floating">
                                    <label class="control-label">Créditos</label>
                                    <input type="text" class="form-control" value="{{$daysvip}} CashPoints" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">perm_identity</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Editar Conta -
                            <small class="category">Complete seu perfil</small>
                        </h4>
                        <form method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Login</label>
                                        <input type="text" class="form-control" value="{{$user}}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Email</label>
                                        <input type="email" class="form-control" value="{{$email}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Senha</label>
                                        <input type="password" minlength="8" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Repita a nova senha</label>
                                        <input type="password_confirmation" minlength="8" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="control-label">Data de Nascimento</label>
                                        <input type="date" class="form-control" value="{{$birthdate}}">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Atualizar Conta</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
