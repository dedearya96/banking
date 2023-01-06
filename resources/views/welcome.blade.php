<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home Banking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex justify-content-center">
        <div class="col-12 col-md-3 col-lg-3">
            <div class="card mt-2">
                <div class="card-header">
                    API BANKING
                </div>
                <div class="card-body">
                    <p class="text-secondary">Auth</p>
                    <div class="container mb-2">
                        <div class="bg-primary rounded text-white">
                            <div class="row">
                                <div class="col-4">
                                    <div class="p-2 small">
                                        POST
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="p-2 small">
                                        /api/auth/login
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-success mt-2 rounded text-white">
                            <div class="row">
                                <div class="col-4">
                                    <div class="p-2 small">
                                        GET
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="p-2 small">
                                        /api/auth/currentUser
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-success mt-2 rounded text-white">
                            <div class="row">
                                <div class="col-4">
                                    <div class="p-2 small">
                                        GET
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="p-2 small">
                                        /api/auth/logout
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-secondary">Customer Services</p>
                    <div class="container mb-2">
                        <div class="bg-primary mt-2 rounded text-white">
                            <div class="row">
                                <div class="col-4">
                                    <div class="p-2 small">
                                        POST
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="p-2 small">
                                        /api/customer-services/transfer
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-success mt-2 rounded text-white">
                            <div class="row">
                                <div class="col-4">
                                    <div class="p-2 small">
                                        GET
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="p-2 small">
                                        /api/customer-services/transaction
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-success mt-2 rounded text-white">
                            <div class="row">
                                <div class="col-4">
                                    <div class="p-2 small">
                                        GET
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="p-2 small">
                                        /api/customer-services/all-transaction
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-success mt-2 rounded text-white">
                            <div class="row">
                                <div class="col-4">
                                    <div class="p-2 small">
                                        GET
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="p-2 small">
                                        /api/customer-services/all-nasabah
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-secondary">Nasabah</p>
                    <div class="container">
                        <div class="bg-primary mt-2 rounded text-white">
                            <div class="row">
                                <div class="col-4">
                                    <div class="p-2 small">
                                        POST
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="p-2 small">
                                        /api/nasabah/transfer
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-success mt-2 rounded text-white">
                            <div class="row">
                                <div class="col-4">
                                    <div class="p-2 small">
                                        POST
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="p-2 small">
                                        /api/nasabah/transaction
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
