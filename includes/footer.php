
  <script>
// sidenav
document.addEventListener('DOMContentLoaded', function() {
    var sideNav = document.querySelectorAll('.sidenav');
    var nom =  M.Sidenav.init(sideNav, {});
});

document.addEventListener('DOMContentLoaded', function() {
    var slider = document.querySelectorAll('.slider');
    var slider2 = M.Slider.init(slider, {
      indicators: false,
      height: 500,
      transition: 500,
      interval: 6000,
    });
  });

document.addEventListener('DOMContentLoaded', function() {
    var floatingButton = document.querySelectorAll('.fixed-action-btn');
    var floating = M.FloatingActionButton.init(floatingButton, {});
  });

  document.addEventListener('DOMContentLoaded', function() {
    var secGallery = document.querySelectorAll('.materialboxed');
    var gallery = M.Materialbox.init(secGallery, {});
  });

document.addEventListener('DOMContentLoaded', function() {
    var autoComplete = document.querySelectorAll('.autocomplete');
    var auto = M.Autocomplete.init(autoComplete, {
      data:{
        "Computer Science": null,
        "Computer Engineering": null,
        "Mass Communication": null,
        "Public Administration": null,
        "Accounting": null,
        "Pharm Technology": null,
        "Electrical Engineering": null,
        "Laboratory Technology": null,
        "Estate Management": null,
        
      }

    });
  });

 document.addEventListener('DOMContentLoaded', function() {
    var scroll = document.querySelectorAll('.scrollspy');
    var spy = M.ScrollSpy.init(scroll, {});
  });

</script>
     <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>