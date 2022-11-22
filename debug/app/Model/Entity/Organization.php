<?php

namespace App\Model\Entity;

class Organization{

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

    public $description = 
    'Aqui nosso objetivo é gerar um sistema
    para que jogadores encontrem clubes/escolinhas
    a sua volta de maneira simples,
    visando maior disponibilidade.'
   ;

    public $conteudo =
    '<main>
    <section>
        <a href="cadastrar.php">
            <button class="btn btn-danger">Cadastre seu time</button>
        </a>
    </section>

</main>' ; 

    public $table = 
        '
        <section>

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
            <tbody>
                
            </tbody>
        </table>

    </section>';
}
   