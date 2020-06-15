@extends('associados.layouts.associado')

<style>
    .bg-light-danger {
        background-color: #FCF6F6;
    }

    .text-purple {
        color: #800080 !important;
        text-transform: none !important;
    }

    .bg-light-info {
        background-color: #E7F6FF;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .table {
        margin-bottom: 0 !important;
    }

    .card-table .card-body {
        padding: 0;
    }

    .card-table .card-body .table-bordered {
        border-style: none;
        margin: 0;
    }

    .card-table .card-body .table-bordered>thead>tr>th:first-of-type {
        text-align: center;
        width: 100px;
    }

    .card-table .card-body .table-bordered>thead>tr>th:last-of-type,
    .card-table .card-body .table-bordered>tbody>tr>td:last-of-type {
        border-right: 0px;
    }

    .card-table .card-body .table-bordered>thead>tr>th:first-of-type,
    .card-table .card-body .table-bordered>tbody>tr>td:first-of-type {
        border-left: 0px;
    }

    .card-table .card-body .table-bordered>tbody>tr:first-of-type>td {
        border-bottom: 0px;
    }

    .card-table .card-body .table-bordered>thead>tr:first-of-type>th {
        border-top: 0px !important;
    }

    .table .thead-light th {
        border: 0 !important;
    }
    }

    .table th,
    .table td {
        border-top: 0 !important;
    }

    .bg-admin-purple {
        background-color: #800080 !important;
    }

    @media (min-width: 1200px) {

        .container,
        .container-fluid {
            max-width: 100%;
            padding-left: 0 !important;
            padding-right: 0 !important;
        }
    }

    .table.table-head-bg thead tr:last-child {
        border-top-right-radius: .675rem !important;
        border-bottom-right-radius: .675rem !important;
    }

    .table.table-head-bg thead tr:first-child {
        border-top-left-radius: .675rem !important;
        border-bottom-left-radius: .675rem !important;
    }

    .table.table-head-bg thead th,
    .table.table-head-bg thead tr {
        background-color: #f3f6f9;
        border-bottom: 0;
        letter-spacing: 1px;
    }

    thead tr {
        font-weight: 600;
        color: #b5b5c3 !important;
        font-size: .9rem;
        text-transform: uppercase;
        letter-spacing: .1rem;
    }
</style>

{{-- @section('title', 'Associados') --}}

@section('pages_associado')


<div class="card card-custom gutter-b border-0">
    <!--begin::Header-->
    <div class="card-header bg-transparent border-0 py-2 pt-4">
        <div class="row">
            <div class="col col-xs-6">
                <h3 class="card-title font-weight-bold text-purple">Associados</h3>
            </div>
            <div class="col col-xs-6 text-right">
                <a href="{{route('associado.create')}}" class="btn btn-purple font-weight-bold">Criar</a>
            </div>
        </div>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body p-4">
        <div class="tab-content">
            <!--begin::Table-->
            <div class="table-responsive">
                <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                    <thead>
                        <tr class="text-left text-uppercase">
                            <th style="min-width: 250px" class="font-weight-bold text-dark pl-7"><span
                                    class="text-dark-75">Descrição</span></th>
                            <th class="font-weight-bold text-dark" style="min-width: 100px">cpf</th>
                            <th class="font-weight-bold text-dark" style="min-width: 100px">setor</th>
                            {{-- <th class="font-weight-bold text-dark" style="min-width: 100px">cargo</th> --}}
                            <th class="font-weight-bold text-dark" style="min-width: 100px">status</th>
                            <th class="font-weight-bold text-dark" style="min-width: 130px" colspan="1">ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($associados as $associado)
                        <tr>
                            <td class="pl-0 py-8">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-50 symbol-light mr-4">
                                        <span class="symbol-label" style="width: 75px; height:75px;">
                                            
                                            <img src="{{$associado->foto}}"
                                                class=" align-self-end rounded" alt="" style="width: 75px; height:75px;">
                                        </span>
                                    </div>
                                    <div>
                                        <a href="#"
                                            class="text-purple font-weight-bolder mb-1 font-size-lg">{{$associado->nome}}</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    {{$associado->cpf}}
                                </span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    {{($associado->vinculo) ? $associado->vinculo->setor_associado->setor : '-----' }}
                                </span>

                            </td>
                            {{-- <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    Supervisor
                                </span>
                                <span class="text-muted font-weight-bold">
                                    Web, UI/UX Design
                                </span>
                            </td> --}}
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                    {{$associado->status}}
                                </span>

                            </td>
                            <td class="py-4 flex-center">
                                @can('view', $associado)                          
                                <a href="{{route('associado.show',$associado->id)}}"
                                    class="btn btn-outline-purple font-weight-bolder font-size-sm p-2 mr-2 ml-2">
                                    <span class="fa fa-eye"></span>
                                </a>
                                @endcan
                                {{-- <a href="{{route('associado.edit',$associado->id)}}"
                                    class="btn btn-outline-purple font-weight-bolder font-size-sm p-2 mr-2 ml-2">
                                    <span class="fa fa-edit"></span>
                                </a> --}}
                                <a href="#"
                                    class="btn btn-outline-purple font-weight-bolder font-size-sm p-2 mr-2 ml-2">
                                    <span class="fas fa-trash-alt"></span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!--end::Table-->
        </div>
    </div>
    <!--end::Body-->
</div>
@endsection