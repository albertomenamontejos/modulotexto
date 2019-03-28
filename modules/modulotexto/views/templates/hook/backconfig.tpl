<!-- Block modulo_texto -->
{strip} 
<div id="mymodule_block_home" class="block block-modulo">
  
  {if isset($confirmacion)}
    {$confirmacion}
  {/if}

  {if isset($mensaje_error)}
    {$mensaje_error}
  {/if}

  <form name="form_respuestas" action="" method="POST" class="formulario">
    <div class="caja-titulo">
      <h4>Titulo: <input type="text" name="titulo" value="{$titulo}"></h4>
    </div>
 
    <div class = "seleccionar-producto">
      <h4 class="w-50" >Seleccionar producto:
        <select name="select_producto" id="select_productos">
          <option value="mostrar_todos">Mostrar todos</option>

          {foreach key=key item=item from=$productos}
            {if $producto_seleccionado == $item['id_product']}
            <option value="{$item['id_product']}" selected>{$item['id_product']} - {$item['name']}</option> 
            {else if}
            <option value="{$item['id_product']}">{$item['id_product']} - {$item['name']}</option> 
            {/if}
          {/foreach}
                  
        </select>
      </h4>
      <input type="submit" name="aplicar_filtros" class="btn btn-success" value="Aplicar filtros">
    </div>

    <div class="block-content d-flex justify-content-center flex-column flex-wrap" id="contenedor_preguntas" >

      {foreach key=key item=item from=$form_respuestas}
        <div class="pregunta border border-dark rounded" id="box_{$item['id']}">
          <label for="articulo_{$item['id_producto']}">
              <div class="ids">
                <div class="ids-row">
                  <p class="id-pregunta" id="pregunta_{$item['id']}">ID pregunta: {$item['id']}</p>
                  <p class="id-articulo" id="articulo_{$item['id_producto']}">ID artículo: {$item['id_producto']}</p>
                </div>
              </div>
              <p class="st-pregunta">
                <span id="st_pregunta_{$item['id']}">{$item['pregunta']} </span>
                <a href="#"  data-id="{$item['id']}" class="a-modificar" id="modificar_{$item['id']}">Modificar</a>
                <a href="#"  data-id="{$item['id']}" class="a-guardar" id="guardar_{$item['id']}">Guardar cambios</a>
              </p>
              <textarea name="respuestas[{$item['id']}]" placeholder="Escriba su respuesta aqui.">{$item['respuesta']}</textarea>
          </label>
          <div class="footer-preg">
            <a href="#" class="a-eliminar" data-id="{$item['id']}">Eliminar</a>
          </div>
        </div>
      {/foreach}
    </div>

    <footer class="footer-modulo">
      <div class="paginacion" id="form_paginacion">
        <form method="POST" action="" name="formulario_paginacion" id="form_paginacion">

          {if $pagina_actual != 0 }
            <input type="submit" value="<<" name="paginacion_a">
            <input type="submit" value="<" name="paginacion_a">
          {/if}

          {for $i=$pagina_actual-2 to $pagina_actual}
            {if $i >= 0 && $i < $pagina_actual}
              <input type="submit" value="{$i+1}" name="paginacion">
            {/if}
          {/for}

          {for $i=$pagina_actual to ($pagina_actual+2)}
            {if $i < $num_paginas}
              {if $i == $pagina_actual}
              <input type="submit" value="{$i+1}" name="paginacion" class="text-primary">
              {else if}
              <input type="submit" value="{$i+1}" name="paginacion">
              {/if}
            {/if}
          {/for}

          {if $pagina_actual != ($num_paginas-1)}
            <input type="submit" value=">" name="paginacion_a">
            <input type="submit" value=">>" name="paginacion_a">
          {/if}

          <input type="hidden" name="pagina_actual" value="{$pagina_actual}">
  
        </form>
      </div>

      <div class="caja-input">
        <input type="submit" name="guardar_cambios" value="Guardar cambios" class="btn btn-success">
      </div>
    </footer>

  </form>
</div>
{/strip} 
<!-- /Block modulo_texto -->