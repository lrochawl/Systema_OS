<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/table-custom.css" />
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js"></script>
<a href="<?php echo base_url() ?>index.php/usuarios/adicionar" class="btn btn-success"><i class="fas fa-user-plus"></i> Adicionar Usuário</a>

<div class="widget-box">
    <div class="widget-title">
        <span class="icon">
            <i class="fas fa-user"></i>
        </span>
        <h5>Usuários</h5>

    </div>
    <div class="widget-content nopadding">
        <div class="table-responsive">
        <table class="table table-bordered ">
            <thead>
                <tr style="backgroud-color: #2D335B">
                    <th>#</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Nível</th>
                    <th>Validade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if (!$results) {
                        echo '<tr>
                                <td colspan="5">Nenhum Usuário Cadastrado</td>
                            </tr>';
                    }
                    foreach ($results as $r) {
                        echo '<tr>';
                        echo '<td>' . $r->idUsuarios . '</td>';
                        echo '<td>' . $r->nome . '</td>';
                        echo '<td>' . $r->cpf . '</td>';
                        echo '<td>' . $r->telefone . '</td>';
                        echo '<td>' . $r->permissao . '</td>';
                        echo '<td>' . $r->dataExpiracao . '</td>';
                        echo '<td>
                                <a href="' . base_url() . 'index.php/usuarios/editar/' . $r->idUsuarios . '" class="btn btn-info tip-top" title="Editar Usuário"><i class="fas fa-edit"></i></a>
                                </td>';
                        echo '</tr>';
                    } ?>
            </tbody>
        </table>
    </div>
    </div>
</div>

<?php echo $this->pagination->create_links(); ?>
