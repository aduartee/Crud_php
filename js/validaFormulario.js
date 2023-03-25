function validaFormulario() {
    // Obter os valores dos campos
    var nome = document.getElementById("nome").value;
    var email = document.getElementById("email").value;
    var telefone = document.getElementById("telefone").value;
    var esportePreferido = document.getElementById("esporte_preferido").value;
    var corPreferida = document.querySelectorAll('input[name="cor_preferida[]"]:checked');
  
    //Validar se os campos foram preechidos
    if (nome.length == 0 || email.length == 0 || telefone.length == 0 || esportePreferido == 0 || corPreferida.length == 0) {
      alert("Por favor, preencha todos os campos.");
      return false;
    }
    
    //Verifica se contem apenas numeros no telefone
    if (isNaN(telefone)){
      alert("Insira apenas números no campo de telefone");
      return false;
  }

  //Verifica se o telefone apenas 11 caracteres, caso não tiver exiber um alert
  if (telefone.length > 11){
      alert("Insira um número de telefone válido");
      return false
  }

  //Verifica se o campo cor prefirada está em branco, caso estiver retorna um alert
  if (cor_preferida.length === 0) {
  alert('Por favor, selecione pelo menos uma cor');
  return false;
  }
  
    // Se todos os campos estiverem preenchidos corretamente, retorna true para enviar o formulário
    return true;
  }