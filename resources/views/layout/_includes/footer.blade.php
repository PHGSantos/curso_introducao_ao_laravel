<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
    
    var elems = document.querySelectorAll('.autocomplete');
    var instances = M.Autocomplete.init(elems, options);
  
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  
  });

    //inicialiar os forms e a navbar
  // Or with jQuery

  //$(document).ready(function(){
    //$('input.autocomplete').autocomplete({
      //data: {
        //"Apple": null,
        //"Microsoft": null,
        //"Google": 'https://placehold.it/250x250'
      //},
    //});
    //$('.sidenav').sidenav();
  //});
</script>

</body>
</html>
