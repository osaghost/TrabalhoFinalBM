<?php

namespace Source\App\Model\Entity;

class OrganizationRegistro{

    public $conteudo = '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <body class="bg-dark ">
       
      <div class="mask d-flex align-items-center h-100 gradient-custom-3" >
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
              <div class="card bg-danger p-2   py-4 " style="--bs-bg-opacity: .6; border-radius: 15px;">
                <div class="card-body p-5">
                  <h2 class="text-uppercase text-center mb-5">Criar uma conta</h2>
    
                  <form method="POST">
    
                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="name" required>
                      <label class="form-label" for="form3Example1cg">Nome</label>
                    </div>
    
                    <div class="form-outline mb-4">
                      <input type="email" id="form3Example3cg" class="form-control form-control-lg" required />
                      <label class="form-label" for="form3Example3cg">Usuário</label>
                    </div>
    
                    <div class="form-outline mb-4">
                      <input type="password" id="form3Example4cg" class="form-control form-control-lg"  required/>
                      <label class="form-label" for="form3Example4cg">Senha</label>
                    </div>
    
                    <div class="d-flex justify-content-center">
                      <button type="button"
                        class="btn btn-secondary btn-block btn-lg gradient-custom-4 text-body">Register</button>
                    </div>
    
                    <p class="text-center text-muted mt-5 mb-0">Já possui uma conta? <a href="http://localhost/projetos/Basketball/login"
                        class="fw-bold text-body"><u>Login aqui</u></a></p>
    
                  </form>
    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    </body>';

}