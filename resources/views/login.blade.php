<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <div class="card card-body card-center">
        Login
        <form method="POST" action="/login" class="bg bg-center">
            @csrf
            <input type="text" name="login" placeholder="Username / NIS" required>
            <br>
            <input type="password" name="password" placeholder="Password (Admin saja)">
            <br><br>

            <button type="submit">Login</button>
        </form>
    </div>


    @if (session('error'))
        <p style="color:red">{{ session('error') }}</p>
    @endif

</body>

</html>
