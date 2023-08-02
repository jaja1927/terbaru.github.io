<!DOCTYPE html>
<html lang="en">
  <head>
    @include('templates.partials.head')
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top shadow-sm bg-info" >
      @include('templates.partials.navbar')
    </nav>
   <section id="daftar" class="">
    @include('templates.partials.isi')
     </section>  
      <script           
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"
      ></script>
    <script>
      feather.replace()
    </script>
     <script src="js/script.js"></script>
  </body>
</html>
