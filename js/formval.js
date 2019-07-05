(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();

  window.onload = function () {
    const myForm = document.getElementById("myForm");
    const name = document.getElementById("validationCustom01");
    const tel = document.getElementById("validationCustom02");
    const dir = document.getElementById("validationCustomUsername");
    const city = document.getElementById("validationCustom03");
    const nameC = document.getElementById("validationCustom04");
    const text = document.getElementById("validationCustom02s");

  


  myForm.addEventListener("submit",(e)=> {
        console.log("form works");
        if(tel.value.length < 7 ){
            alert("introduzca un numero valido")
            e.preventDefault();
            return false;
        } else if(nameC.value.length < 5 || text.value.length < 12){
            alert("rellene los espacios de Descripcion y que se cotizara ");
            e.preventDefault();
            return false;
        }else if(city.value.length < 4){
            alert("Escriba una ciudad Valida ");
            e.preventDefault();
            return false;
        }else if(dir.value.length < 6){
            alert("Escriba una Direccion Valida ");
            e.preventDefault();
            return false;
        }else{
            return true;
        }
  });
};
