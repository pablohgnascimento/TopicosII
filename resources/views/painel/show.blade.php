<!-- Button trigger modal -->


<!-- Modal -->
@if(isset($dado))
    <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Aluno:  {!! $dado->nome !!}</h4>
                </div>
                <div class="modal-body">
                    <table border="0" class="table table-bordered table-hover">
                        <tbody>
                        <tr>

                            <td>
                                {!! $dado->id !!}
                            </td>

                            <td>
                                {!! $dado->data !!}
                            </td>
                            <td>
                                {!! $dado->atividadedesenvolvida !!}
                            </td>
                            <td>
                                {!! $dado->proximaatividade !!}
                            </td>
                            <td>
                                {!! $dado->status !!}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Fechar</button>
                    {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                </div>
            </div>
        </div>
    </div>
@endif