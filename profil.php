<?php 
    include("header.html");
?>
<!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Bootstrap demo</title>
      
    <style>
        a {
            text-decoration: none;
        }
        body {
            background-color: #111111;
            width: 100vw;
            height: 100vh;
        }
        button {
            background-color: #EB8259;
            font-size: 1.1rem;
            font-weight: 700;
            color: #1e1e1e;
            border-radius: 100px;
            padding: 3px 15px 5px 15px;
            /*margin: 30px 10px 0px 0px;*/
            transition: background-color 0.15s;
            border: none;
        }
        button:hover {
            background-color: #eb9979;
        }
        .category {
            font-weight: 700;
            transition: background-color 0.15s;
        }
        .category:hover {
            background-color: #eb9979 !important;
        }
    </style>
    </head>
    <body style="background-color: #1a1a1a;">
        
    <main>
        <div class="container mt-xl-4 p-5 w-75 h-75 d-flex" style="background-color: #1e1e1e; color: #f8f8f8;">
            <div class="profil-logo w-25">
                <img src="images/logo-white.png" class="w-100 h-100 object-fit-cover">
            </div>
            <div class="profil-content pt-5">
                <div class="informations d-flex">
                    <col1 class="pe-5">
                        <p class="h1 m-0">Username</p>
                        <p class="h5 m-1" style="color: #6D6D6D;">He/him</p>
                    </col1>
                    <col2 class="pe-5 justify-content-end d-flex flex-column">
                        <p class="h3 m-0">Newsletter</p>
                        <p class="h5 m-1" style="color: #6D6D6D;">Active</p>
                    </col2>
                    <col3 class="pe-5 justify-content-end d-flex flex-column">
                        <p class="h3 m-0">Tytuł</p>
                        <p class="h5 m-1" style="color: #6D6D6D;">Senior front-end developer</p>
                    </col3>
                </div>
                <div class="buttons">
                    <button class="mt-4 me-3">Edytuj dane</button>
                    <button class="mt-4 me-3">Zmień hasło</button>
                    <button class="mt-4 me-3">Wyloguj się</button>
                </div>
            </div>
        </div>
        <div class="container d-flex w-75 p-0 hover-overlay" style="color: #1e1e1e;">
            <div class="category flex-grow-1 d-flex justify-content-center h4 p-2" style="background-color: #EB8259;" type="button" data-bs-toggle="collapse" data-bs-target="#twojeWpisy" aria-expanded="false" aria-controls="twojeWpisy">Twoje wpisy</div>
            <div class="category flex-grow-1 d-flex justify-content-center h4 p-2" style="background-color: #EB8259;" type="button" data-bs-toggle="collapse" data-bs-target="#sledzoneKursy" aria-expanded="false" aria-controls="sledzoneKursy">Śledzone kursy</div>
        </div>
        <div class="wpisy collapse pb-5" id="twojeWpisy">
            <div class="category-title container w-75 p-0 h1 mt-3" style="color: #f8f8f8;">
                <p>Twoje wpisy:</p>
            </div>
            <div class="container w-75 p-5 mt-5" style="background-color: #1e1e1e; color: #9d9d9d;">
                <div class="wpis-title h1" style="color: #f8f8f8;">Nazwa wpisu</div>
                <div class="wpis-content h5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae nulla sit amet est vestibulum ultrices ut a arcu. Curabitur vitae aliquet tellus, ultrices tincidunt urna. Aenean sem...</div>
                <div class="wpis-stats-buttons d-flex my-auto mt-4">
                    <div class="wpis-stats m-0 me-5 p-0 h5 d-flex">
                        <p class="me-4 my-auto">Odpowiedzi: <span style="color: #EB8259;">0</span></p>
                        <p class="my-auto">Likes: <span style="color: #EB8259;">0</span></p>
                    </div>
                    <div class="wpis-buttons d-flex align-items-center"">
                        <button class="me-3">Edytuj</button>
                        <button>Przejdź do wpisu</button>
                    </div>
                </div>
            </div>
            <div class="container w-75 p-5 mt-5" style="background-color: #1e1e1e; color: #9d9d9d;">
                <div class="wpis-title h1" style="color: #f8f8f8;">Nazwa wpisu</div>
                <div class="wpis-content h5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae nulla sit amet est vestibulum ultrices ut a arcu. Curabitur vitae aliquet tellus, ultrices tincidunt urna. Aenean sem...</div>
                <div class="wpis-stats-buttons d-flex my-auto mt-4">
                    <div class="wpis-stats m-0 me-5 p-0 h5 d-flex">
                        <p class="me-4 my-auto">Odpowiedzi: <span style="color: #EB8259;">0</span></p>
                        <p class="my-auto">Likes: <span style="color: #EB8259;">0</span></p>
                    </div>
                    <div class="wpis-buttons d-flex align-items-center"">
                        <button class="me-3">Edytuj</button>
                        <button>Przejdź do wpisu</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="kursy collapse pb-5" id="sledzoneKursy">
            <div class="category-title container w-75 p-0 h1 mt-3" style="color: #f8f8f8;">
                <p>Twoje kursy:</p>
            </div>
            <div class="container w-75 p-4 mt-5 d-flex" style="background-color: #1e1e1e; color: #9d9d9d;">
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
            <div class="container w-75 p-4 mt-5 d-flex" style="background-color: #1e1e1e; color: #9d9d9d;">
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

    </main>
      
      
    </body>
</html>
<?php 
    include("footer.html");
?>