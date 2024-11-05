let form = document.getElementById('formulario'),
    nombre = document.getElementById('nombre'),
    correo = document.getElementById('correo'),
    contra = document.getElementById('contra');

form.addEventListener("submit", (e) => {
    if(nombre.value.length == 0 || correo.value.length == 0 || contra.value.length == 0){
        e.preventDefault();
        alert('Error: Debes rellenar todos los campos.')
        return;
    }
})