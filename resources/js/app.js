


  function valor_entrada() {

    var entrada = document.getElementById('flexRadioDefault2')
    var preco_homem = document.getElementById('preco_homem')
    var preco_mulher = document.getElementById('preco_mulher')
  
      console.log(entrada.checked)
      if (entrada.checked == true) {
          preco_homem.innerHTML =
              '<label for="exampleFormControlInput1" class="form-label">Homem</label><input class="form-control" name="preco_homem" type="number" value="00.00">'
          preco_mulher.innerHTML =
              '<label for="exampleFormControlInput1" class="form-label">Mulher</label><input class="form-control" name="preco_mulher" type="number" value="00.00">'
      } else {
          preco_homem.innerHTML = ''
          preco_mulher.innerHTML = ''
      }
  }



require('./bootstrap');
