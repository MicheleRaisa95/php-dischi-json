<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- /bootstrap -->
     <!-- custom css -->
      <link rel="stylesheet" href="./css/style.css">
      <!-- /custom css -->
</head>
<body>
    <div id="app">
        <header>
            <div class="container p-5 text-center">
                <h1>{{title}}</h1>
            </div>
        </header>

        <main>
          <div class="container">
           <div class="row">
             <div v-for="disco in dischi" :key="disco.titolo_album" class="col-md-4 mb-4">
                <div class="card h-100">
                    <img :src="disco.copertina" class="card-img-top" :alt="disco.titolo_album">
                    <div class="card-body">
                        <h5 class="card-title">{{ disco.titolo_album }}</h5>
                        <p class="card-text">{{ disco.artista }}</p>
                        <p class="card-text"><small class="text-muted">{{ disco.genere_musicale }} - {{ disco.anno_uscita }}</small></p>
                    </div>
           </div>
          </div>
    </main>
    </div>

    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- /vue -->

    <!-- axios -->
     <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
     <!-- /axios -->

    <!-- js -->
    <script src="./js/main.js"></script>
    <!-- /js -->

</body>
</html>