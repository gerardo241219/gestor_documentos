<?php
session_start();

if (!$_SESSION['status']) {
    header('location: ./../');
}

require_once 'templates/header.php';
?>

<style>
    table {
        font-size: 13px;
    }

    .dataTables_length,
    .dataTables_filter,
    .dataTables_info,
    .dataTables_paginate {
        font-size: 13px;
        padding: 10px 0;
    }
</style>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4" style="font-size: 2rem;">Registros</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Listado de registros</li>
        </ol>

        <div class="row">
            <div class="card mb-4 shadow">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        <i class="fas fa-list me-1"></i>
                        Documentos registrados
                    </div>
                    <div>
                        <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalNewRegister"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tableDocuments" style="width: 100%;">
                            <thead>
                                <tr style="background-color: #e1e1e1;">
                                    <th class="text-nowrap">Num. Oficio</th>
                                    <th class="text-nowrap">Dependencia</th>
                                    <th class="text-nowrap">Remitente</th>
                                    <th class="text-nowrap">Cargo</th>
                                    <th class="text-nowrap">Telefono</th>
                                    <th class="text-nowrap">Asunto</th>
                                    <th class="text-nowrap">Tipo</th>
                                    <th class="text-nowrap">Estatus</th>
                                    <th class="text-nowrap">Turnado a</th>
                                    <th class="text-nowrap">Prioridad</th>
                                    <th class="text-nowrap">Observaciones</th>
                                    <th class="text-nowrap">Respuesta</th>
                                </tr>
                            </thead>
                            <tfoot style="background-color: #e1e1e1;">
                                <tr>
                                    <th class="text-nowrap">Num. Oficio</th>
                                    <th class="text-nowrap">Dependencia</th>
                                    <th class="text-nowrap">Remitente</th>
                                    <th class="text-nowrap">Cargo</th>
                                    <th class="text-nowrap">Telefono</th>
                                    <th class="text-nowrap">Asunto</th>
                                    <th class="text-nowrap">Tipo</th>
                                    <th class="text-nowrap">Estatus</th>
                                    <th class="text-nowrap">Turnado a</th>
                                    <th class="text-nowrap">Prioridad</th>
                                    <th class="text-nowrap">Observaciones</th>
                                    <th class="text-nowrap">Respuesta</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</main>

<!-- Modal -->
<div class="modal fade" id="modalNewRegister" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalNewRegisterLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalNewRegisterLabel">Nuevo registro</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formNewRegister">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-lg-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm" id="num_oficio" name="num_oficio" placeholder="name@example.com">
                                <label for="num_oficio">Número de oficio</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-lg-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm" id="dependencia" name="dependencia" placeholder="name@example.com">
                                <label for="dependencia">Dependencia</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm" id="remitente" name="remitente" placeholder="name@example.com">
                                <label for="remitente">Remitente</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm" id="cargo" name="cargo" placeholder="name@example.com">
                                <label for="cargo">Cargo</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-lg-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control form-control-sm" id="telefono" name="telefono" placeholder="name@example.com">
                                <label for="telefono">Telefono</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <div class="form-floating">
                                <select class="form-select" id="tipo" name="tipo" aria-label="Floating label select example">
                                    <option selected disabled></option>
                                    <option value="Audiencia">Audiencia</option>
                                    <option value="Archivo">Archivo</option>
                                    <option value="Invitación">Invitación</option>
                                    <option value="Gestion">Gestion</option>
                                    <option value="Firma">Firma</option>
                                    <option value="Tarjeta informativa">Tarjeta informativa</option>
                                    <option value="Convenio">Convenio</option>
                                    <option value="Publicacion">Publicacion</option>
                                    <option value="Oficina del Gobernador">Oficina del Gobernador</option>
                                    <option value="Dependencias y Organizaciones">Dependencias y Organizaciones</option>
                                    <option value="Titulos de propiedad">Titulos de propiedad</option>
                                    <option value="Protocolos">Protocolos</option>
                                    <option value="Acuerdo Administrativo">Acuerdo Administrativo</option>
                                    <option value="Particular">Particular</option>
                                    <option value="Punto de Acuerdo">Punto de Acuerdo</option>
                                    <option value="Copia de Conocimiento">Copia de Conocimiento</option>
                                    <option value="Decretos">Decretos</option>
                                    <option value="Circular">Circular</option>
                                    <option value="Sobre cerrado">Sobre cerrado</option>
                                </select>
                                <label for="tipo">Tipo de documento</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <div class="form-floating">
                                <select class="form-select" id="estatus" name="estatus" aria-label="Floating label select example">
                                    <option selected disabled></option>
                                    <option value="Recibido">Recibido</option>
                                    <option value="En proceso">En proceso</option>
                                    <option value="Resuelto">Resuelto</option>
                                </select>
                                <label for="estatus">Estatus del documento</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-12 col-lg-4">
                            <div class="form-floating">
                                <select class="form-select" id="turnado" name="turnado" aria-label="Floating label select example">
                                    <option selected disabled></option>
                                    <option value="Operador">Operador</option>
                                    <option value="Sub Desarrollo">Sub Desarrollo</option>
                                    <option value="Secretaria Privada">Secretaria Privada</option>
                                </select>
                                <label for="turnado">Turnado a</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <div class="form-floating">
                                <select class="form-select" id="prioridad" name="prioridad" aria-label="Floating label select example">
                                    <option selected disabled></option>
                                    <option value="Alta">Alta</option>
                                    <option value="Media">Media</option>
                                    <option value="Baja">Baja</option>
                                </select>
                                <label for="prioridad">Prioridad</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="asunto" name="asunto"></textarea>
                                <label for="asunto">Asunto</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-lg-4">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="observaciones" name="observaciones"></textarea>
                                <label for="observaciones">Observaciones</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="respuesta" name="respuesta"></textarea>
                                <label for="respuesta">Respuesta</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-sm btn-primary">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once 'templates/footer.php'; ?>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const formNewRegister = document.querySelector('#formNewRegister');

        const tableDocuments = $('#tableDocuments').DataTable({
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json",
                paginate: {
                    previous: "<",
                    next: ">"
                }
            },
            info: true,
            length: false,
            lengthChange: false,
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf'
            ],
            ajax: {
                type: 'POST',
                url: `../server/getRegister.php`
            },
            order: [],
            columns: [{
                data: 'numOficio'
            }, {
                data: 'dependencia'
            }, {
                data: 'remitente'
            }, {
                data: 'cargo'
            }, {
                data: 'telefono'
            }, {
                data: 'asunto'
            }, {
                data: 'tipo'
            }, {
                data: 'estatus'
            }, {
                data: 'turnado'
            }, {
                data: 'prioridad'
            }, {
                data: 'observaciones'
            }, {
                data: 'respuesta'
            }]
        });

        formNewRegister.addEventListener('submit', e => {
            e.preventDefault();

            const data = Object.fromEntries(new FormData(e.target));

            $.ajax({
                url: '../server/newRegister.php',
                data,
                type: 'POST',
                success: response => {
                    const data = JSON.parse(response);
                    Swal.fire({
                        icon: data.icon,
                        title: data.title,
                        text: data.message,
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        allowEnterKey: false,
                        confirmButtonText: 'Continuar'
                    }).then(action => {
                        if (data.status == 200) {
                            if (action.isConfirmed) {
                                tableDocuments.ajax.url('../server/getRegister.php').load();
                                formNewRegister.reset();
                                $('#modalNewRegister').modal('hide');
                            }
                        }
                    })
                }
            })
        })
    })
</script>