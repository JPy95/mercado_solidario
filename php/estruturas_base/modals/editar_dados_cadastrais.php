<!-- Modal Dados Cadastris -->
<div class="modal fade" id="modalEditDadosCadastrais" tabindex="-1" role="dialog" aria-labelledby="modalEditDadosCadastraisTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"5 id="modalEditDadosCadastraisTitle">Alterar Dados</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
            <h4 class="subtitle_edit_perfil">Dados Cadastrais</h4>
            <div>
                <label for="" class="subtitle_register">Nome:</label><br>
                <input type="text" class="format_input">
            </div>
            <div>
                <label for="" class="subtitle_register">E-mail:</label><br>
                <input type="text" class="format_input w-50">
            </div>
            <div>
                <label for="" class="subtitle_register">CPF:</label><br>
                <input type="text" class="format_input w-50">
            </div>
            <a data-toggle="collapse" href="#alterarSenha" role="button" aria-expanded="false" aria-controls="alterarSenha">Alterar Senha</a>
            <div class="collapse col-12" id="alterarSenha">
                <div class="row">
                    <div>
                        <label for="" class="subtitle_register">Nova senha:</label><br>
                        <input type="text" class="format_input">
                    </div>
                    <div>
                        <label for="" class="subtitle_register">Confirmar senha:</label><br>
                        <input type="text" class="format_input">
                    </div>
                </div>
            </div>
            <div class="btn_modal_edit_perfil">
                <button class="format_btn">Salvar</button>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>