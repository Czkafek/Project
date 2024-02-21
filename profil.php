<?php
include "header.html";
session_start();
echo $_SESSION['username'];
if (empty($_SESSION['username'])){
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="profil.css" type="text/css">
    <style>
        #profil-logo{
            width: 40% !important;
        }
        @media (max-width: 500px){
            #profil-logo{
                width: 70% !important;
            }
            .informations p{
                font-size: 13px !important;
            }
            .category{
                font-size: 13px;
            }
            .profil-button{
                font-size: 10px !important;
            }
        }
        .profil-button{
            width: 25%;
            height: auto;
            font-size: 80%;
        }

    </style>
</head>
<body>
    <main class="d-flex flex-column align-items-center" style="min-height: 75%;">
        <div class="container mt-xl-4 m-0 d-flex profil-container pb-3 px-2" style="background-color: #1e1e1e; color: #f8f8f8;">
            <div class="h-100" id="profil-logo" >
                <img src="images/logo-white.png" class="w-100 h-100 object-fit-cover">
            </div>
            <div class="profil-content w-100">
                <div class="informations">
                    <col1 class="d-flex flex-column justify-content-end">
                        <p class="h1 m-0">Username</p>
                        <p class="h5 mt-1" style="color: #6D6D6D;">He/him</p>
                    </col1>
                    <col2 class="d-flex flex-column justify-content-end" style="overflow: hidden;">
                        <p class="h2 m-0">Tytuł</p>
                        <p class="h5 mt-1" style="color: #6D6D6D; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">Senior front-end developer</p>
                    </col2>
                    <col2 class="d-flex flex-column justify-content-end">
                        <p class="h2 m-0">Newsletter</p>
                        <p class="h5 mt-1" style="color: #6D6D6D;">Active</p>
                    </col2>
                </div>
                <div class="buttons">
                    <button class="m-1 profil-button" style="color: #1e1e1e; font-weight: 700;">Edytuj dane</button>
                    <button class="m-1 profil-button" style="color: #1e1e1e; font-weight: 700;">Zmień hasło</button>
                    <button class="m-1 profil-button" style="color: #1e1e1e; font-weight: 700;">Wyloguj się</button>
                </div>
            </div>
        </div>
        <div class="container d-flex w-100 p-0 hover-overlay" style="color: #1e1e1e;">
            <div class="category flex-grow-1 d-flex justify-content-center h4 p-2" style="background-color: #EB8259;" type="button" data-bs-toggle="collapse" data-bs-target="#twojeWpisy" aria-expanded="false" aria-controls="twojeWpisy">Twoje wpisy</div>
            <div class="category flex-grow-1 d-flex justify-content-center h4 p-2" style="background-color: #EB8259;" type="button" data-bs-toggle="collapse" data-bs-target="#sledzoneKursy" aria-expanded="false" aria-controls="sledzoneKursy">Śledzone kursy</div>
        </div>

        <div class="wpisy collapse pb-5 w-100" id="twojeWpisy">
            <div class="d-flex flex-column align-items-center">
                <div class="container w-75 p-5 m-0 mt-5" style="background-color: #1e1e1e; color: #9d9d9d;">
                    <div class="wpis-title h1" style="color: #f8f8f8;">Nazwa wpisu</div>
                    <div class="wpis-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae nulla sit amet est vestibulum ultrices ut a arcu. Curabitur vitae aliquet tellus, ultrices tincidunt urna. Aenean sem...</div>
                    <div class="wpis-stats-buttons my-auto mt-4">
                        <div class="wpis-stats m-2 me-5 p-0 h5 col-12" style="font-size: small;">
                            <p class="me-4 my-auto">Odpowiedzi: <span style="color: #EB8259;">0</span></p>
                            <p class="my-auto">Likes: <span style="color: #EB8259;">0</span></p>
                        </div>
                        <div class="wpis-buttons align-items-center" style="font-size: small;">
                            <button class="me-3">Edytuj</button>
                            <button>Przejdź do wpisu</button>
                        </div>
                    </div>
                </div>
                <div class="container w-75 p-5 m-0 mt-5" style="background-color: #1e1e1e; color: #9d9d9d;">
                    <div class="wpis-title h1" style="color: #f8f8f8;">Nazwa wpisu</div>
                    <div class="wpis-content h5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae nulla sit amet est vestibulum ultrices ut a arcu. Curabitur vitae aliquet tellus, ultrices tincidunt urna. Aenean sem...</div>
                    <div class="wpis-stats-buttons d-flex my-auto mt-4">
                        <div class="wpis-stats m-0 me-5 p-0 h5 d-flex">
                            <p class="me-4 my-auto">Odpowiedzi: <span style="color: #EB8259;">0</span></p>
                            <p class="my-auto">Likes: <span style="color: #EB8259;">0</span></p>
                        </div>
                        <div class="wpis-buttons d-flex align-items-center">
                            <button class="me-3">Edytuj</button>
                            <button>Przejdź do wpisu</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="kursy collapse pb-5 w-100" id="sledzoneKursy">
            <div class="d-flex flex-column align-items-center">
                <div class="container w-75 p-5 m-0 mt-5 d-flex" style="background-color: #1e1e1e; color: #9d9d9d;">
                    <div class="kurs-img" style="height: 12vw; width: 12vw;">
                        <img src="images/course-image.jpg" alt="course image" class="w-100 h-100 object-fit-cover">
                    </div>
                    <div class="kurs-content ms-4 pt-2">
                        <div class="kurs-title">
                            <p class="h1" style="color: #f8f8f8;">Nazwa kursu</p>
                        </div>
                        <div class="kurs-stats h5 mt-3">
                            <p class="mb-1">Następny temat: <span style="color: #EB8259;">6. Nazwa tematu</span></p>
                            <p>Postęp: <span style="color: #EB8259;">52%</span></p>
                        </div>
                        <div class="kurs-buttons mt-4">
                            <button class="me-3">Kontynuuj</button>
                            <button>Zakończ kurs</button>
                        </div>
                    </div>
                </div>
                <div class="container w-75 p-5 m-0 mt-5 d-flex" style="background-color: #1e1e1e; color: #9d9d9d;">
                    <div class="kurs-img" style="height: 12vw; width: 12vw;">
                        <img src="images/course-image.jpg" alt="course image" class="w-100 h-100 object-fit-cover">
                    </div>
                    <div class="kurs-content ms-4 pt-2">
                        <div class="kurs-title">
                            <p class="h1" style="color: #f8f8f8;">Nazwa kursu</p>
                        </div>
                        <div class="kurs-stats h5 mt-3">
                            <p class="mb-1">Następny temat: <span style="color: #EB8259;">6. Nazwa tematu</span></p>
                            <p>Postęp: <span style="color: #EB8259;">52%</span></p>
                        </div>
                        <div class="kurs-buttons mt-4">
                            <button class="me-3">Kontynuuj</button>
                            <button>Zakończ kurs</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="js/bootstrap.js"></script>
    
    
</body>
</html>
<?php 
include_once "footer.html";

?>