<?php


namespace Source\App\Model\Entity;

class OrganizationList{

    /**
     * ID da organização
     * @var integer
     */
    public $id = 1;
    
    /**
     * Nome da organização
     * @var string
     */
    public $name = 'BPT';

    public $description = 'Aqui você pode cadastrar o seu time.';

    public $table = '
    
    <table class="table bg-light mt-3">

    <thead>
        <tr>
            <td>ID</td>
            <td>Nome do Time</td>
            <td>Contato</td>
            <td>Genero</td>
            <td>Estado</td>
            <td>Cidade</td>
            <td>Ações</td>
        </tr>
    </thead>
    <tbody class="table">
        
    </tbody>
</table>
  <script src="../Assets/itemsList.js"></script>';
}

