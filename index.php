<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">

    <title>Php Api</title>

    <!-- Third party libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- Custom css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="app">
    <main>
        <div class="container d-flex justify-content-center m-4">
            <div class="background_glass_effect">
                <div class="text-left text-white p-3">
                    <h1>To Do List</h1>
                </div>
                <div class="p-3 my-mx">
                    <div class="form-floating mb-3 d-flex">
                        <input type="text" class="form-control" id="floatingInput" placeholder="What do you want to procastinate?">
                        <label for="floatingInput">What do you want to procastinate?</label>
                        <button class="btn btn-primary mx-3" type="submit">Submit</button>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card p-1">
                                    <div class="text-center">
                                        To do 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card p-1">
                                    <div class="text-center">
                                        Done
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card p-1">
                                    <div class="text-center">
                                        To Do Someday
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card p-1">
                                    <div class="text-center">
                                        Canceled
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="js/main.js"></script>
</body>

</html>