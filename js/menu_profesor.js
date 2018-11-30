$(document).ready(function(e) {

  var id_profesor = document.getElementById('id_profesor');

    $('#profesor').load('../BI1/paginas/curriculum.php?profesor='.concat(id_profesor.innerHTML.trim()));
		$('#curriculum').on('click', function(){
			$('#profesor').load('../BI1/paginas/curriculum.php?profesor='.concat(id_profesor.innerHTML.trim()));
		});

  	$('#info').on('click', function(){
			$('#profesor').load('../BI1/paginas/info_profesor.php?profesor='.concat(id_profesor.innerHTML.trim()));
		});

		$('#agenda').on('click', function(){
			$('#profesor').load('../BI1/paginas/citas.php?profesor='.concat(id_profesor.innerHTML.trim()));
		});


	});

// $(document).ready(function(e)){
//   $('#curriculum').on('click', function(){
//     $('#profesor').load('../BI1/paginas/curriculum.php');
//   });
// };
