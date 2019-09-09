<div class="modal fade" id="historyJobs-{{ $employee->slug }}" tabindex="-1" role="dialog" aria-labelledby="historyJobs-{{ $employee->slug }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="historyJobs-{{ $employee->slug }}">{{ $employee->name }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
                <div class="modal-body">
                    <div class="card" style="width: 100%;">
                        <div class="card-header">
                            Historial de puestos en la empresa
                        </div>
                        <ul class="list-group list-group-flush">
                            @if($employee->jobs->isNotEmpty())
                                @foreach($employee->jobs as $job)
                                <li class="list-group-item"><strong>Puesto: </strong>{{ $job->job }} - <strong>Salario: </strong>{{ $job->salary }}</li>
                                @endforeach
                            @else
                                <li class="list-group-item">No hay puestos registrados</li>
                            @endif
                        </ul>
                    </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>