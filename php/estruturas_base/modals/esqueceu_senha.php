<!-- Modal Comentários -->
<div class="modal fade" id="modalEsqueceuSenha" tabindex="-1" role="dialog" aria-labelledby="modalEsqueceuSenhaTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"5 id="modalEsqueceuSenhaTitle">Recuperar senha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <span class="desc_esqueceu_senha">
              Para recuperar a senha será necessario confirmar os seguintes dados. 
              Logo em seguida iremos encaminhar para o email cadastrado um link para cadastrar uma nova senha.
          </span>
          <form action="php\objetos\_esqueceuSenha.php" method="post">
            <div class="form_recuperar_senha">
              <div>
                <label for="tipo_pessoa" id="lblPessoa" class="subtitle_register">Tipo de Pessoa:</label><br>
                <select name="pessoa" id="tipo_pessoa" class="format_select_tipo_pessoa" >
                    <option value="fisica" class="format_option_tipo_pessoa">Pessoa Física</option>
                    <option value="juridica" class="format_option_tipo_pessoa">Pessoa Jurídica</option>
                    <option value="instituicao" class="format_option_tipo_pessoa">Instituição</option>
                </select>
              </div>
              <label for="email" class="subtitle_register">E-mail:</label><br>
              <input type="text" id="email" class="format_input"><br>
              <label for="cpf" id="lblCpf" class="subtitle_register">CPF:</label><br>
              <input type="text" id="cpf" class="format_input">
            </div>
            <div class="btn_esqueceu_senha">
                <button class="btn_edit">Enviar</button>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>