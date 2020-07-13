<div class="row">
    <div class="container-fluid mx-auto">

        @if(isset($associado->vinculo))
        <a href="#" class="btn btn-sm text-purple float-right" data-toggle="modal" data-target="#VinculoModal"><i
                class="fa fa-edit"></i></a>
        <h4 class="text-dark text-purple font-weight-bold">Informações do Vínculo</h4>

        <div class="col-md-12  p-2 mb-3">

            {{-- <div class=""><span class="font-weight-bold text-dark">Setor:</span> {{$associado->vinculo->setor}}
        </div>
        <div class=""><span class="font-weight-bold text-dark">Inicio do Vinculo</span>
            {{date('d/m/Y', strtotime($associado->vinculo->data_vinculo))}}</div>
        <div class=""><span class="font-weight-bold text-dark">Tipo de vinculo:</span>
            {{$associado->vinculo->tipo_vinculo}}</div>
        <div class=""><span class="font-weight-bold text-dark">Supervisor:</span>
            {{$associado->vinculo->supervisor}}
        </div> --}}
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="">
                    <tr class="text-purple font-weight-bold">
                        <th>Setor</th>
                        <th>Inicio do Vinculo</th>
                        <th>Tipo de Vinculo</th>
                        <th>Cargo</th>
                        <th>Supervisor</th>
                        <th>Status</th>
                        <th>Saída</th>

                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td class="font-weight-bold text-black">{{$associado->vinculo->setor_associado->setor}}</td>
                        <td class="font-weight-bold text-black">
                            {{date('d/m/Y', strtotime($associado->vinculo->data_vinculo))}}</td>
                        <td class="font-weight-bold text-black">{{$associado->vinculo->tipo_vinculo}}</td>
                        <td class="font-weight-bold text-black">{{$associado->vinculo->cargos->cargo}}</td>
                        <td class="font-weight-bold text-black">
                            {{(isset($associado->vinculo->supervisor->nome))? $associado->vinculo->supervisor->nome : '---'}}
                        </td>
                        <td class="font-weight-bold text-black">{{$associado->vinculo->status}}</td>
                        <td class="font-weight-bold text-black">
                            {{($associado->vinculo->data_saida == null)? '------' : $associado->vinculo->data_saida}}
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    <h4 class="text-dark text-purple font-weight-bold">Historico do Vínculo</h4>
    <div class="col-md-12  p-2 mb-3">

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="">
                    <tr class="text-purple font-weight-bold">
                        <th>Data</th>
                        <th>Responsável</th>
                        <th>Descrição</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($associado->vinculo->logs as $log)
                    <tr>
                        <td class="font-weight-bold text-black">{{$log->created_at->format('d/m/Y - H:i') }}</td>
                        <td class="font-weight-bold text-black">{{$log->responsavel->nome}}</td>
                        <td class="font-weight-bold text-black">{{$log->descricao}}</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>
    @else
    <div class="col-md-12 p-2 mb-3 text-center">
        <h3 class="text-dark text-purple font-weight-bold">Associado não possui vínculo cadastrado!</h4>
            <button href="#" class="btn btn-sm text-purple" data-toggle="modal" data-target="#VinculoModal"><i
                    class="fa fa-plus"></i> Adicionar Vinculo</button>
    </div>

    @endif

    @include('vinculos.components.modal_cad')
</div>
<!--container-fluid-->


</div>