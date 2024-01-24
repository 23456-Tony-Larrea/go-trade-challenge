<!doctype html>
<html>
<head>
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Mi Aplicación</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/add-establishment">Agregar Establecimiento</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ml-lg-5">
                <a class="nav-link" href="/">Cerrar Sesión</a>
            </li>
        </ul>
    </div>
</nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">Agregar nuevo establecimiento</div>
                    <div class="card-body">
                        <form id="addEstablishmentForm" class="needs-validation" novalidate>
                        <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre" required>
                         <div class="invalid-feedback">
                        Por favor ingrese un nombre.
                         </div>
                            </div>
                            <div class="form-group">
                                <label for="direccion_manzana">Dirección Manzana</label>
                                <input type="text" class="form-control" id="direccion_manzana" placeholder="Dirección Manzana" required>
                                <div class="invalid-feedback">
                                    Por favor ingrese una dirección de manzana.
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="direccion_calle_principal">Dirección Calle Principal</label>
                                <input type="text" class="form-control" id="direccion_calle_principal" placeholder="Dirección Calle Principal" required>
                                <div class="invalid-feedback">
                                    Por favor ingrese una dirección de calle principal.
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="direccion_numero">Número de Dirección</label>
                                <input type="text" class="form-control" id="direccion_numero" placeholder="Número de Dirección" required>
                                <div class="invalid-feedback">
                                    Por favor ingrese un número de dirección.
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="direccion_transversal">Dirección Transversal</label>
                                <input type="text" class="form-control" id="direccion_transversal" placeholder="Dirección Transversal" required>
                                <div class="invalid-feedback">
                                    Por favor ingrese una dirección transversal.
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="direccion_referencia">Referencia de Dirección</label>
                                <input type="text" class="form-control" id="direccion_referencia" placeholder="Referencia de Dirección" required>
                                <div class="invalid-feedback">
                                    Por favor ingrese una referencia de dirección.
                                    </div>

                            </div>
                            <div class="form-group">
                                <label for="administrador">Administrador</label>
                                <input type="text" class="form-control" id="administrador" placeholder="Administrador" required>
                                <div class="invalid-feedback">
                                    Por favor ingrese un administrador.
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="telefonos_contacto">Teléfonos de Contacto</label>
                                <input type="text" class="form-control" id="telefonos_contacto" placeholder="Teléfonos de Contacto" required>
                                <div class="invalid-feedback">
                                    Por favor ingrese un teléfono de contacto.
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="email_contacto">Email de Contacto</label>
                                <input type="text" class="form-control" id="email_contacto" placeholder="Email de Contacto" required>
                                <div class="invalid-feedback">
                                    Por favor ingrese un email de contacto.
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="ubicacion">Ubicación</label>
                                <input type="text" class="form-control" id="ubicacion" placeholder="Ubicación" required>
                                <div class="invalid-feedback">
                                    Por favor ingrese una ubicación.
                                    </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<!-- importa axios y SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // JavaScript para activar la validación de Bootstrap
    (function () {
        'use strict'

        var forms = document.querySelectorAll('.needs-validation')

        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    } else {
                        // Si el formulario es válido, recoge los valores y envía la solicitud
                        event.preventDefault()

                        var nombre = document.getElementById('nombre').value;
var direccion_manzana = document.getElementById('direccion_manzana').value;
var direccion_calle_principal = document.getElementById('direccion_calle_principal').value;
var direccion_numero = document.getElementById('direccion_numero').value;
var direccion_transversal = document.getElementById('direccion_transversal').value;
var direccion_referencia = document.getElementById('direccion_referencia').value;
var administrador = document.getElementById('administrador').value;
var telefonos_contacto = document.getElementById('telefonos_contacto').value;

var email_contacto = document.getElementById('email_contacto').value;
var emailRegex = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
if (!emailRegex.test(email_contacto)) {
    Swal.fire(
        'Error',
        'Por favor, introduce un correo electrónico válido.',
        'error'
    );
    return;
}
var ubicacion = document.getElementById('ubicacion').value;
var numberRegex = /^[0-9]+$/;

if (!numberRegex.test(telefonos_contacto)) {
    Swal.fire(
        'Error',
        'Por favor, introduce solo números en el campo de teléfono.',
        'error'
    );
    return;
}

if (!numberRegex.test(ubicacion)) {
    Swal.fire(
        'Error',
        'Por favor, introduce solo números en el campo de ubicación.',
        'error'
    );
    return;
}

                        

                        axios.post('http://test.gosice.com/api/v1/establecimientos/agregar-establecimiento', {
                            nombre: nombre,
                            direccion_manzana: direccion_manzana,
                            direccion_calle_principal: direccion_calle_principal,
                            direccion_numero: direccion_numero,
                            direccion_transversal: direccion_transversal,
                            direccion_referencia: direccion_referencia,
                            administrador: administrador,
                            telefonos_contacto: telefonos_contacto,
                            email_contacto: email_contacto,
                            ubicacion: ubicacion,
                            "id_provincia": "b4e2f21c-7df4-4b4a-a110-f8beeed5794e",
                            "id_ciudad": "b1fd5659-18c9-498e-9935-2e33b24205ff",
                            "id_zona": "98b07509-3eea-4e74-8e74-f3f36649244f",
                            "id_canal": "4fce0b22-4990-4a20-ba91-adfe9af39215",
                            "id_subcanal": "94e3df1e-38cc-4727-9d3e-a375b4711a4a",
                            "id_cadena": "7a086f5d-e039-4c1e-b391-b8aae45b547d",
                            "en_ruta": "1",
                            "cliente_proyecto_id": "568cf8ce-a2d6-411b-85bf-d9678c2a8c4b"
                        })
                        .then(function (response) {
                            console.log(response)
                            Swal.fire(
                                '¡Buen trabajo!',
                                'El establecimiento ha sido agregado.',
                                'success'
                            )
                        })
                        .catch(function (error) {
                            console.log(error)
                            Swal.fire(
                                'Error',
                                'Hubo un problema al agregar el establecimiento.',
                                'error'
                            )
                        })
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>