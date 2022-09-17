if (![null, undefined, ''].includes(sessionStorage.getItem('idusers'))) {
    window.location.href = "dashboard.php";
}

const form_login = document.getElementById('form-login');

if (form_login) {
    form_login.addEventListener('submit', (e) => {
        e.preventDefault();

        const users_email = document.getElementById('users_email');
        const users_password = document.getElementById('users_password');

        const form = getFormData([users_email, users_password]);

        axios.post(`${host_server}/auth/login`, form).then(res => {
            console.log(res.data)

            if (res.data.status === "success") {
                sessionStorage.setItem('idusers', res.data.data.idusers);
                sessionStorage.setItem('idroles', res.data.data.idroles);
                window.location.href = "http://localhost:8001/dashboard.php";
            } else {
                alert(res.data.message);
            }
        });
    });
}