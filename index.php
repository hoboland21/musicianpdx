<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Musician PDX Registry</title>
    </title>
</head>

<body>
    <style>
        body {
            background-color: teal;
        }

        @font-face {
            font-family: Niconne;
            src: url("/fonts/Niconne-Regular.ttf");

        }

        @font-face {
            font-family: Copper;
            src: url("/fonts/copgothb.ttf");
        }
    </style>


  <div class="container">

    <div class="card shadow p-3 mb-5 bg-body rounded" style="margin:2em auto;">
        <div class="card-body">
            <h5 class="card-title">Musician PDX</h5>
            <h6 class="card-subtitle mb-2 text-muted">Portland Musician Registry</h6>
            <h4>Welcome To our Musician Meeting Place</h4>
            <div class="card-text">
                <p>This is a commercial free place to meet other musicians.</p>
                <p>Put your info in and as we expand you may find a connection</p>
                <p>It is time to come out of the cave - put the pandemic behind us and get on with the show.</p>

            </div>
            <div class="card-footer">
                
                <button class="card-link">Add Me To the List</button>
            </div>

        </div>
    </div>
  
            <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne" style="font-family:Copper">
                   Looking For Gig
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="card">
                        <div class="card-body">
                           
                            <h6 class="card-subtitle">Musicians/Groups ready to gig</h6>
                            <div class="card-text"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-family:Copper">
                    Looking For Musicians
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="card">
                        <div class="card-body">
                      
                            <h6 class="card-subtitle">Musicians/Groups Looking for Players</h6>
                            <div class="card-text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>