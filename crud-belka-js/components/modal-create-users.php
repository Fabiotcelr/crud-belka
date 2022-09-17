<form id="form-create-users">
    <div class="modal fade" id="modal-create-users" tabindex="-1" aria-labelledby="modal-create-usersLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-orange">
                    <h5 class="modal-title text-white" id="modal-create-usersLabel">Registrar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="users_name" class="form-label">Nombres</label>
                                    <input type="text" id="users_name" class="form-control" placeholder="Nombres..." autocomplete="off" required>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="users_last_name" class="form-label">Apellidos</label>
                                    <input type="text" id="users_last_name" class="form-control" placeholder="Apellidos..." autocomplete="off" required>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="users_phone" class="form-label">Télefono</label>
                                    <input type="number" id="users_phone" class="form-control" placeholder="Télefono..." autocomplete="off" required>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="users_address" class="form-label">Dirección</label>
                                    <input type="text" id="users_address" class="form-control" placeholder="Dirección..." autocomplete="off" required>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="users_country" class="form-label">Pais</label>
                                    <input type="text" id="users_country" class="form-control" placeholder="Pais..." autocomplete="off" required>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="users_date_birth" class="form-label">Fecha Nacimiento</label>
                                    <input type="date" id="users_date_birth" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="users_profile_picture" class="form-label">Foto de Perfil</label>
                                    <input type="file" id="users_profile_picture" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="users_pokemon_url" class="form-label">Pokemon Favorito</label>
                                    <select id="users_pokemon_url" class="form-select" required>
                                        <option value="" selected>Seleccione</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="users_position" class="form-label">Cargo</label>
                                    <select id="users_position" class="form-select" required>
                                        <option value="" selected>Seleccione</option>
                                        <option value="GERENTE">Gerente</option>
                                        <option value="CONTADOR">Contador</option>
                                        <option value="VENDEDOR">Vendedor</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="idroles" class="form-label">Rol</label>
                                    <select id="idroles" class="form-select" required>
                                        <option value="" selected>Seleccione</option>
                                        <option value="1">Administrador</option>
                                        <option value="2">Usuario</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="users_status" class="form-label">Estado</label>
                                    <select id="users_status" class="form-select" required>
                                        <option value="" selected>Seleccione</option>
                                        <option value="ACTIVO">Activo</option>
                                        <option value="INACTIVO">Inactivo</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="users_email" class="form-label">Correo</label>
                                    <input type="email" id="users_email" class="form-control" placeholder="Correo..." autocomplete="off" required>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="users_password" class="form-label">Contraseña</label>
                                    <input type="password" id="users_password" class="form-control" placeholder="Contraseña..." required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-orange">Registrar</button>
                </div>
            </div>
        </div>
    </div>
</form>