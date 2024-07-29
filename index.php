<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distance Between Cities App</title>
    <!-- CSS only Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- google Fonts Arvo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <!-- MapmyIndia Plugin Link -->
    <script src="https://apis.mapmyindia.com/advancedmaps/v1/36d71622-e20e-48ca-b310-f8cdb4ef74f4/map_load?v=1.5"></script>
    <script src="https://apis.mapmyindia.com/advancedmaps/api/36d71622-e20e-48ca-b310-f8cdb4ef74f4/map_sdk_plugins"></script>
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="main">
            <h1 class="text-white">Distance between cities App.</h1>
            <p class="text-white">Our app will help you calculate travelling distances.</p>
            <form>
                <div class="row">
                    <div class="col">
                        <input type="text" id="from" class="form-control" placeholder="Origin" aria-label="Origin">
                    </div>
                    <div class="col">
                        <input type="text" id="to" class="form-control" placeholder="Destination" aria-label="Destination">
                    </div>
                </div>
            </form>
            <div class="block mt-3">
                <button class="btn btn-danger btn-lg" onclick="calcRoute();">Find Route</button>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div id="output"></div>
        <div id="map"></div>
    </div>
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- JavaScript File -->
    <script src="js/script.js"></script>
</body>
</html>