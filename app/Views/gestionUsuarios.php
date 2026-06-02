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
                <?php if (!empty($usuarios) && is_array($usuarios)): ?>
                    <?php foreach ($usuarios as $user): 
                        $palabras = explode(' ', $user['nombre_completo']);
                        $iniciales = strtoupper(substr($palabras[0], 0, 1) . (isset($palabras[1]) ? substr($palabras[1], 0, 1) : ''));
                        
    
                        $avatarColor = 'bg-primary text-primary';
                        $rolIcon = 'bi-journal-bookmark text-primary';
                        
                        if ($user['rol'] === 'Auxiliar') {
                            $avatarColor = 'bg-success text-success';
                            $rolIcon = 'bi-tools text-success';
                        } elseif ($user['rol'] === 'Administrador') {
                            $avatarColor = 'bg-warning text-warning';
                            $rolIcon = 'bi-shield-check text-warning';
                        }
                    ?>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="<?= $avatarColor ?> bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center fw-bold me-3" style="width: 40px; height: 40px;">
                                        <?= $iniciales ?>
                                    </div>
                                    <div>
                                        <span class="d-block fw-semibold text-dark"><?= htmlspecialchars($user['nombre_completo']) ?></span>
                                        <span class="text-muted small">C.I. <?= htmlspecialchars($user['cedula']) ?></span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="d-block text-dark fw-medium"><?= htmlspecialchars($user['usuario']) ?></span>
                                <span class="text-muted small"><?= htmlspecialchars($user['correo']) ?></span>
                            </td>
                            <td>
                                <span class="badge bg-light text-dark border me-1">
                                    <i class="bi <?= $rolIcon ?> me-1"></i><?= htmlspecialchars($user['rol']) ?>
                                </span>
                                <span class="d-block text-muted small mt-1"><?= htmlspecialchars($user['departamento']) ?></span>
                            </td>
                            <td>
                                <span class="d-block text-dark"><i class="bi bi-clock me-1 text-primary"></i> <?= htmlspecialchars($user['ultimo_acceso']) ?></span>
                            </td>
                            <td>
                                <?php if ($user['estado'] === 'Activo'): ?>
                                    <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-2 py-1"><i class="bi bi-check2-circle me-1"></i>Activo</span>
                                <?php else: ?>
                                    <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-2 py-1"><i class="bi bi-slash-circle me-1"></i>Suspendido</span>
                                <?php endif; ?>
                            </td>
                            <td class="text-end">
                                <button class="btn btn-sm btn-outline-primary" title="Editar" data-id="<?= $user['id'] ?>" data-rol="<?= $user['rol'] ?>"><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-sm btn-outline-warning" title="Cambiar Permisos" data-id="<?= $user['id'] ?>"><i class="bi bi-shield-lock"></i></button>
                                <button class="btn btn-sm btn-outline-danger" title="Suspender Cuenta" data-id="<?= $user['id'] ?>" data-rol="<?= $user['rol'] ?>"><i class="bi bi-slash-circle"></i></button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center py-4 text-muted">
                            <i class="bi bi-people me-2"></i> No hay personal registrado en la base de datos.
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>