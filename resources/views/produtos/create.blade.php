@extends('layouts.app')

@section('content')
    <div class="row">
        @if(Session::has('mensagem_erro'))
            <div class="alert alert-success">{{ Session::get('mensagem_erro')}}</div>
        @endif
        <div class="col">
            <div class="box col ">
                <div class="box-header with-border">
                    <h3 class="box-title"> Informe os dados do produto </h3>
                    <div class="box-tools">
                        <div class="input-group-btn">
                            <button type="button" onclick="window.history.go(-1); return false;"  class="btn btn-success"><i class="fa fa-window-close"></i> fechar</button>
                        </div>
                    </div>
                </div>
                <br>
                <div class="register-box-body">
                    <form action="{{ route('produtos.store') }}" method="post">
                        {!! csrf_field() !!}

                        <div class="form-group has-feedback {{ $errors->has('nome') ? 'has-error' : '' }}">
                            <input type="text" name="nome" class="form-control" value="{{ old('nome') }}"
                                   placeholder="Nome">
                            <span class="form-control-feedback"></span>
                            @if ($errors->has('nome'))
                                <span class="help-block">
                                <strong>{{ $errors->first('nome') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Situação</label>
                            <select class="form-control" id="situacao" name="situacao">
                                <option value="">Selecione</option>
                                <option value="1">Ativo</option>
                                <option value="0">Inativo</option>
                            </select>
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('valor_unitario') ? 'has-error' : '' }}">
                            <input type="number" name="valor_unitario" class="form-control" value="{{ old('valor_unitario') }}"
                                   placeholder="Valor UN">
                            <span class="form-control-feedback"></span>
                            @if ($errors->has('valor_unitario'))
                                <span class="help-block">
                                <strong>{{ $errors->first('valor_unitario') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group has-feedback {{ $errors->has('quantidade') ? 'has-error' : '' }}">
                            <input type="number" name="quantidade" class="form-control" value="{{ old('quantidade') }}"
                                   placeholder="Quantidade">
                            <span class="form-control-feedback"></span>
                            @if ($errors->has('quantidade'))
                                <span class="help-block">
                                <strong>{{ $errors->first('quantidade') }}</strong>
                            </span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-success btn-block btn-flat"  >Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop