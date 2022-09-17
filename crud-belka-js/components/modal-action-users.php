<form id="form-action-users">
    <div class="modal fade" id="modal-action-users" tabindex="-1" aria-labelledby="modal-action-usersLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-orange">
                    <h5 class="modal-title text-white" id="modal-action-usersLabel">Editar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="container">
                        <input type="hidden" id="idusers_a" class="form-control">
                        <input type="hidden" id="users_profile_picture_old" class="form-control">
                        <input type="hidden" id="users_code_a" class="form-control">

                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="users_name_a" class="form-label">Nombres</label>
                                    <input type="text" id="users_name_a" class="form-control" placeholder="Nombres..." autocomplete="off" required>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="users_last_name_a" class="form-label">Apellidos</label>
                                    <input type="text" id="users_last_name_a" class="form-control" placeholder="Apellidos..." autocomplete="off" required>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="users_phone_a" class="form-label">Télefono</label>
                                    <input type="number" id="users_phone_a" class="form-control" placeholder="Télefono..." autocomplete="off" required>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="users_address_a" class="form-label">Dirección</label>
                                    <input type="text" id="users_address_a" class="form-control" placeholder="Dirección..." autocomplete="off" required>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="users_country_a" class="form-label">Pais</label>
                                    <input type="text" id="users_country_a" class="form-control" placeholder="Pais..." autocomplete="off" required>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="users_date_birth_a" class="form-label">Fecha Nacimiento</label>
                                    <input type="date" id="users_date_birth_a" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="users_profile_picture_a" class="form-label">Foto de Perfil</label>

                                    <div class="input-group mb-3">
                                        <input type="file" id="users_profile_picture_a" class="form-control">

                                        <a href="#" class="btn btn-light border" id="btn_users_profile_picture_a" target="__blank">
                                            <i class="bi bi-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="users_pokemon_url_a" class="form-label">Pokemon Favorito</label>
                                    <select id="users_pokemon_url_a" class="form-select" required>
                                        <option value="" selected>Seleccione</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="users_position_a" class="form-label">Cargo</label>
                                    <select id="users_position_a" class="form-select" required>
                                        <option value="" selected>Seleccione</option>
                                        <option value="GERENTE">Gerente</option>
                                        <option value="CONTADOR">Contador</option>
                                        <option value="VENDEDOR">Vendedor</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="idroles_a" class="form-label">Rol</label>
                                    <select id="idroles_a" class="form-select" required>
                                        <option value="" selected>Seleccione</option>
                                        <option value="1">Administrador</option>
                                        <option value="2">Usuario</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="users_status_a" class="form-label">Estado</label>
                                    <select id="users_status_a" class="form-select" required>
                                        <option value="" selected>Seleccione</option>
                                        <option value="ACTIVO">Activo</option>
                                        <option value="INACTIVO">Inactivo</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="users_email_a" class="form-label">Correo</label>
                                    <input type="email" id="users_email_a" class="form-control" placeholder="Correo..." autocomplete="off" required>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="mb-3">
                                    <label for="users_password_a" class="form-label">Contraseña</label>
                                    <input type="password" id="users_password_a" class="form-control" placeholder="Contraseña...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" id="btn-delete-users">Eliminar</button>
                    <button type="submit" class="btn btn-orange">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
</form>