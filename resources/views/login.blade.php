<!DOCTYPE html>
<html>
<head>
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">Login</div>
                    <div class="card-body">
                        <form  id="loginForm">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" id="password" placeholder="Contraseña">
                            </div>
                            <button type="submit" class="btn btn-primary">Ingresar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<!-- importa axios -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        axios.post('http://test.gosice.com/api/v1/login', {
            email: email,
            password: password,
            "getToken": true
        })
        .then(function (response) {
            console.log(response.data);
            if (response.data.status) {
                Swal.fire('Success', 'Usuario autenticado exitosamente.', 'success');
                window.location.href = '/add-establishment';
            } else {
                Swal.fire('Error', response.data.message, 'error');
            }
        })
        .catch(function (error) {
            console.error(error);
            Swal.fire('Error', 'There was an error logging in.', 'error');
        });
    });
</script>