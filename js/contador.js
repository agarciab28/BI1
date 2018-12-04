$( document ).ready(function() {
    console.log( "ready!" );
    var curso = {
      "id_curso" : $('#id_curso').val()
    };
    console.log(id_curso);

    $.ajax({
      data: curso,
      url: '../BI1/db/contador.php',
      type: 'post',
      beforeSend: function(){
        console.log('Entrando al archivo php');
      },
      success: function(response) {
        console.log(response);
      }
    });
    // window.location.href = '../BI1/db/contador.php?curso='.concat(id_curso);
    // $('#profesor').load('../BI1/paginas/curriculum.php?profesor='.concat(id_profesor.innerHTML.trim()));
});
