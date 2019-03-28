
<!-- Block mymodule -->
<div id="mymodule_block_home" class="block-module-front block">
  <div class="block_content">
    <h5 class="titulo">{$titulo}</h5>
      <section class="fila">
        <div class="columna">
        {foreach key=key item=item from=$form_respuestas}
          <div class="accordion acordeon">
              <div class="card">
                <div class="card-header w-100" id="headingOne">
                  <h5 class="mb-0">
                    <div class="btn btn-link pregunta" data-toggle="collapse" data-target="#collapse{$key}" aria-expanded="true" aria-controls="collapse{$key}}">
                      {$item['pregunta']}
                    </div>
                  </h5>
                </div>
              <div id="collapse{$key}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body p-2">
                  {$item['respuesta']}
                </div>
              </div>
            </div>
          </div>
        {/foreach}

          <form  action="" method="POST" class="formulario">
            <textarea name="preguntanos" id="preguntados"  class="preguntanos" placeholder="Preguntanos aquí.." required></textarea>
         
            <ul>
              {if isset($errores)}
                {foreach $errores as $error}
                    <li class="alert alert-danger p-1">{$error}</li>
                {/foreach}
              {/if}
            </ul>

            <div class="enviar-pregunta"> 
              <button class="btn btn-primary mt-2">Enviar pregunta</button>
            </div>
        </form>
      </div>  
    </section>
  </div>
</div>
<!-- /Block mymodule -->