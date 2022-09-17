if ([null, undefined, ''].includes(sessionStorage.getItem('idusers'))) {
    window.location.href = "home.php";
}

// caragar datos en tabla --------------------------------------------------------------------------
function setModal(info) {
    document.getElementById('idusers_a').value = info.idusers;
    document.getElementById('users_name_a').value = info.users_name;
    document.getElementById('users_last_name_a').value = info.users_last_name;
    document.getElementById('users_phone_a').value = info.users_phone;
    document.getElementById('users_address_a').value = info.users_address;
    document.getElementById('users_country_a').value = info.users_country;
    document.getElementById('users_date_birth_a').value = info.users_date_birth;
    document.getElementById('btn_users_profile_picture_a').href = info.users_profile_picture;
    document.getElementById('users_profile_picture_old').value = info.users_profile_picture;
    document.getElementById('users_pokemon_url_a').value = info.users_pokemon_url;
    document.getElementById('users_position_a').value = info.users_position;
    document.getElementById('idroles_a').value = info.idroles;
    document.getElementById('users_status_a').value = info.users_status;
    document.getElementById('users_email_a').value = info.users_email;
    document.getElementById('users_code_a').value = info.users_code;
}

function newDataTable(data_info) {
    const table = $('#datatable-users').DataTable({
        scrollX: true,
        scrollY: true,
        destroy: true,
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
        },
        data: data_info,
        columns: [
            { data: 'users_name' },
            { data: 'users_last_name' },
            { data: 'users_phone' },
            { data: 'users_address' },
            { data: 'users_country' }
        ],
        createdRow: (row, data, rowIndex) => {
            row.setAttribute('role', 'button');
            row.setAttribute('data-bs-toggle', 'modal');
            row.setAttribute('data-bs-target', '#modal-action-users');
        }
    });

    if (data_info.length > 0) {
        $("#datatable-users tbody").on("click", "tr", (e) => {
			const data = table.row(e.currentTarget).data();

			if (![null, '', false, undefined].includes(data)) {
				setModal(data);
			}
		});
    }
}
// -------------------------------------------------------------------------------------------------

// leer ususarios ----------------------------------------------------------------------------------
function readUsers() {
    axios.get(`${host_server}/manage/read-users`).then(res => {
        newDataTable(!res.data.status ? res.data : []);
    });
}

readUsers();
// -------------------------------------------------------------------------------------------------

// recargar table con boton ------------------------------------------------------------------------
document.getElementById('btn-reload-table-users').addEventListener('click', () => {
    readUsers();
});

// cargar select pokemon ---------------------------------------------------------------------------
addPokemon('users_pokemon_url');
addPokemon('users_pokemon_url_a');
// -------------------------------------------------------------------------------------------------

// evento que registra usuarios --------------------------------------------------------------------
const form_create_users = document.getElementById('form-create-users');

if (form_create_users) {
    form_create_users.addEventListener('submit', (e) => {
        e.preventDefault();

        const users_name = document.getElementById('users_name');
        const users_last_name = document.getElementById('users_last_name');
        const users_phone = document.getElementById('users_phone');
        const users_address = document.getElementById('users_address');
        const users_country = document.getElementById('users_country');
        const users_date_birth = document.getElementById('users_date_birth');
        const users_profile_picture = document.getElementById('users_profile_picture');
        const users_pokemon_url = document.getElementById('users_pokemon_url');
        const users_position = document.getElementById('users_position');
        const idroles = document.getElementById('idroles');
        const users_status = document.getElementById('users_status');
        const users_email = document.getElementById('users_email');
        const users_password = document.getElementById('users_password');

        const form = getFormData([
            users_name, users_last_name, users_phone, users_address,
            users_country, users_date_birth, users_pokemon_url, users_position,
            idroles, users_status, users_email, users_password
        ]);
        form.append('users_profile_picture', users_profile_picture.files[0]);

        axios.post(`${host_server}/manage/create-users`, form).then(res => {
            // console.log(res.data);
            btn_modal_create_users.click();
            readUsers();
        });
    });
}
// -------------------------------------------------------------------------------------------------

// evento que actualizar usuarios ------------------------------------------------------------------
const form_action_users = document.getElementById('form-action-users');

if (form_action_users) {
    form_action_users.addEventListener('submit', (e) => {
        e.preventDefault();

        const idusers_a = document.getElementById('idusers_a');
        const users_name_a = document.getElementById('users_name_a');
        const users_last_name_a = document.getElementById('users_last_name_a');
        const users_phone_a = document.getElementById('users_phone_a');
        const users_address_a = document.getElementById('users_address_a');
        const users_country_a = document.getElementById('users_country_a');
        const users_date_birth_a = document.getElementById('users_date_birth_a');
        const users_profile_picture_a = document.getElementById('users_profile_picture_a');
        const users_profile_picture_old = document.getElementById('users_profile_picture_old');
        const users_pokemon_url_a = document.getElementById('users_pokemon_url_a');
        const users_position_a = document.getElementById('users_position_a');
        const idroles_a = document.getElementById('idroles_a');
        const users_status_a = document.getElementById('users_status_a');
        const users_email_a = document.getElementById('users_email_a');
        const users_password_a = document.getElementById('users_password_a');
        const users_code_a = document.getElementById('users_code_a');

        const form = getFormData([
            idusers_a, users_name_a, users_last_name_a, users_phone_a,
            users_address_a, users_country_a, users_date_birth_a, users_pokemon_url_a,
            users_position_a, idroles_a, users_status_a, users_email_a,
            users_profile_picture_old, users_code_a
        ]);

        if (![null, ''].includes(users_password_a.value)) {
            form.append('users_password_a', users_password_a.value);
        }

        if (users_profile_picture_a.files.length > 0) {
            form.append('users_profile_picture_a', users_profile_picture_a.files[0]);
        }

        axios.post(`${host_server}/manage/update-users`, form).then(res => {
            // console.log(res.data);
            btn_modal_action_users.click();
            readUsers();
        });
    });
}
// -------------------------------------------------------------------------------------------------
const btn_delete_users = document.getElementById('btn-delete-users');

if (btn_delete_users) {
    btn_delete_users.addEventListener('click', () => {
        if (confirm('Desea eleminar a este usuario?')) {
            const idusers_a = document.getElementById('idusers_a');

            axios.delete(`${host_server}/manage/delete-users/${idusers_a.value}`).then(res => {
                // console.log(res.data);
                btn_modal_action_users.click();
                readUsers();
            });
        }
    });
}