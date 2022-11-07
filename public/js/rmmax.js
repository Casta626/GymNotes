var current = null;
document.querySelector('#email').addEventListener('focus', function(e) {
  if (current) current.pause();
  current = anime({
    targets: 'path',
    strokeDashoffset: {
      value: 0,
      duration: 700,
      easing: 'easeOutQuart'
    },
    strokeDasharray: {
      value: '240 1386',
      duration: 700,
      easing: 'easeOutQuart'
    }
  });
});
document.querySelector('#password').addEventListener('focus', function(e) {
  if (current) current.pause();
  current = anime({
    targets: 'path',
    strokeDashoffset: {
      value: -336,
      duration: 700,
      easing: 'easeOutQuart'
    },
    strokeDasharray: {
      value: '240 1386',
      duration: 700,
      easing: 'easeOutQuart'
    }
  });
});
document.querySelector('#submit').addEventListener('focus', function(e) {
  if (current) current.pause();
  current = anime({
    targets: 'path',
    strokeDashoffset: {
      value: -730,
      duration: 700,
      easing: 'easeOutQuart'
    },
    strokeDasharray: {
      value: '530 1386',
      duration: 700,
      easing: 'easeOutQuart'
    }
  });
});

// Deberia añadir un evento submit al formulario sobreescribiendo el evento por defecto
//* https://es.stackoverflow.com/questions/483261/como-utilizo-un-calculo-hecho-en-php-en-javascript-ajax-laravel

// $(document).on('keyup', '#resultado_lab', function () { //ejecutar funcion/calculo al escribir en el campo deseado
//   var age = $('#datosAge').val();      //variables con
//   var gen = $('#datosGen').val();      //los campos que 
//   var raz = $('#datosRaz').val();      //se usan para el
//   var lab = $('#resultado_lab').val(); //calculo
//   $.ajaxSetup({
//       headers: {
//           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//       }
//   });
//   $.ajax({
//       type: 'POST',
//       url: 'rm-max2?peso=12&rep=12',
//       data: { 'age': age, 'gen': gen, 'raz': raz, 'lab': lab }, //se envia y recibe de la funcion php "equation"
//       success: function (response) {
//           $('#resultadoEcuacion').text(response); //setea el resutado de la ecuacion en el blade
//       },
//       error: function (err) {
//           console.log(err);
//       }
//   });
// });