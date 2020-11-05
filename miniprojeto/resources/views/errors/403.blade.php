@extends('errors.minimal')

@section('code', 'Erro: 403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))
