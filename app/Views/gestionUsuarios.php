<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="h4 mb-1">Gestión de Usuarios</h2>
        <p class="text-muted small mb-0">Administración de docentes, auxiliares y roles de la plataforma</p>
    </div>
    <button class="btn btn-primary d-flex align-items-center gap-2">
        <i class="bi bi-plus-lg"></i>
        <span>Registrar Nuevo Usuario</span>
    </button>
</div>

<div class="card border-0 shadow-sm mb-4">
    <div class="card-header bg-white py-3 border-0 d-flex justify-content-between align-items-center">
        <h5 class="card-title fw-bold mb-0">Listado de Usuarios Registrados</h5>
        <div class="input-group style-search" style="max-width: 300px;">
            <span class="input-group-text bg-light border-0"><i class="bi bi-search text-muted"></i></span>
            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar usuario...">
        </div>
    </div>
    <div class="table-responsive px-3 pb-3">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th>Nombre Completo</th>
                    <th>Usuario / Correo</th>
                    <th>Rol / Departamento</th>
                    <th>Último Acceso</th>
                    <th>Estado</th>
                    <th class="text-end">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center fw-bold me-3" style="width: 40px; height: 40px;">
                                CP
                            </div>
                            <div>
                                <span class="d-block fw-semibold text-dark">Carlos Pérez</span>
                                <span class="text-muted small">C.I. 15.489.652</span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="d-block text-dark fw-medium">carlos.perez</span>
                        <span class="text-muted small">cperez@uptaeb.edu.ve</span>
                    </td>
                    <td>
                        <span class="badge bg-light text-dark border me-1"><i class="bi bi-journal-bookmark me-1 text-primary"></i>Docente</span>
                        <span class="d-block text-muted small mt-1">Dpto. de Química</span>
                    </td>
                    <td>
                        <span class="d-block text-dark"><i class="bi bi-clock me-1 text-primary"></i> Hace 10 min</span>
                    </td>
                    <td>
                        <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-2 py-1"><i class="bi bi-check2-circle me-1"></i>Activo</span>
                    </td>
                    <td class="text-end">
                        <button class="btn btn-sm btn-outline-primary" title="Editar"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-warning" title="Cambiar Permisos"><i class="bi bi-shield-lock"></i></button>
                        <button class="btn btn-sm btn-outline-danger" title="Suspender Cuenta"><i class="bi bi-slash-circle"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center fw-bold me-3" style="width: 40px; height: 40px;">
                                MG
                            </div>
                            <div>
                                <span class="d-block fw-semibold text-dark">María Gómez</span>
                                <span class="text-muted small">C.I. 18.236.415</span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="d-block text-dark fw-medium">maria.gomez</span>
                        <span class="text-muted small">mgomez@uptaeb.edu.ve</span>
                    </td>
                    <td>
                        <span class="badge bg-light text-dark border me-1"><i class="bi bi-tools me-1 text-success"></i>Auxiliar</span>
                        <span class="d-block text-muted small mt-1">Lab. Química A-01</span>
                    </td>
                    <td>
                        <span class="d-block text-dark"><i class="bi bi-clock me-1 text-primary"></i> Ayer</span>
                    </td>
                    <td>
                        <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-2 py-1"><i class="bi bi-check2-circle me-1"></i>Activo</span>
                    </td>
                    <td class="text-end">
                        <button class="btn btn-sm btn-outline-primary" title="Editar"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-warning" title="Cambiar Permisos"><i class="bi bi-shield-lock"></i></button>
                        <button class="btn btn-sm btn-outline-danger" title="Suspender Cuenta"><i class="bi bi-slash-circle"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="bg-warning bg-opacity-10 text-warning rounded-circle d-flex align-items-center justify-content-center fw-bold me-3" style="width: 40px; height: 40px;">
                                RS
                            </div>
                            <div>
                                <span class="d-block fw-semibold text-dark">Ricardo Silva</span>
                                <span class="text-muted small">C.I. 12.986.321</span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="d-block text-dark fw-medium">ricardo.silva</span>
                        <span class="text-muted small">rsilva@uptaeb.edu.ve</span>
                    </td>
                    <td>
                        <span class="badge bg-light text-dark border me-1"><i class="bi bi-shield-check me-1 text-warning"></i>Administrador</span>
                        <span class="d-block text-muted small mt-1">Rectorado UPTAEB</span>
                    </td>
                    <td>
                        <span class="d-block text-dark"><i class="bi bi-clock me-1 text-primary"></i> Hoy</span>
                    </td>
                    <td>
                        <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-2 py-1"><i class="bi bi-check2-circle me-1"></i>Activo</span>
                    </td>
                    <td class="text-end">
                        <button class="btn btn-sm btn-outline-primary" title="Editar"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-warning" title="Cambiar Permisos"><i class="bi bi-shield-lock"></i></button>
                        <button class="btn btn-sm btn-outline-danger" title="Suspender Cuenta"><i class="bi bi-slash-circle"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="bg-danger bg-opacity-10 text-danger rounded-circle d-flex align-items-center justify-content-center fw-bold me-3" style="width: 40px; height: 40px;">
                                JT
                            </div>
                            <div>
                                <span class="d-block fw-semibold text-dark">Juan Torres</span>
                                <span class="text-muted small">C.I. 16.784.956</span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="d-block text-dark fw-medium">juan.torres</span>
                        <span class="text-muted small">jtorres@uptaeb.edu.ve</span>
                    </td>
                    <td>
                        <span class="badge bg-light text-dark border me-1"><i class="bi bi-journal-bookmark me-1 text-primary"></i>Docente</span>
                        <span class="d-block text-muted small mt-1">Dpto. de Informática</span>
                    </td>
                    <td>
                        <span class="d-block text-dark"><i class="bi bi-clock me-1 text-primary"></i> Hace 5 días</span>
                    </td>
                    <td>
                        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-slash-circle me-1"></i>Suspendido</span>
                    </td>
                    <td class="text-end">
                        <button class="btn btn-sm btn-outline-primary" title="Editar"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-warning" title="Cambiar Permisos"><i class="bi bi-shield-lock"></i></button>
                        <button class="btn btn-sm btn-outline-success" title="Activar Cuenta"><i class="bi bi-check2-circle"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
