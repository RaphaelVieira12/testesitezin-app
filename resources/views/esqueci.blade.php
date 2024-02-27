@extends('padrao')
@section('content')
<form method="get" action="{{route('alterar')}}">
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <div class="mb-md-5 mt-md-4 pb-5">
  
                <h2 class="fw-bold mb-2 text-uppercase">Esqueci minha senha</h2>
                <p class="text-white-50 mb-5">Por favor insira sua senha!</p>
  
                <div class="form-outline form-white mb-4">
                  <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                  <label class="form-label" for="typePasswordX">Senha</label>
  
                <div class="form-outline form-white mb-4">
                  <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                  <label class="form-label" for="typePasswordX">Repita sua senha</label>
                </div>
  
                <button class="btn btn-outline-light btn-lg px-5" type="submit"><a class="text-white-50" href="/">Entrar</button>
  
                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                  <a href="https://www.facebook.com/" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                  <a href="https://twitter.com/i/flow/login" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                  <a href="https://accounts.google.com/v3/signin/identifier?hl=pt-br&ifkv=ATuJsjzAVUz_8FAsjmfa3qVAm_vimx7Ip2zoRrLwkqbAIjogVK8JpiB-DmjDtywKS6pLZsSbBzyPLw&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S420403992%3A1708351767342737&theme=glif" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                </div>
  
              </div>
  
              <div>
                <p class="mb-0">Não possui uma conta? <a href="/signup" class="text-white-50 fw-bold">Cadastrar</a>
                </p>
              </div>
            </form>      
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endSection