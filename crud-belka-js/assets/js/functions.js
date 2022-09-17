const host_server = "https://belka-example.herokuapp.com" // "http://localhost:8000"

function getFormData(list) {
    const form = new FormData();
    list.forEach(field => form.append(field.id, field.value));
    return form;
}