'use strict';

$(document).ready(function(){
    
    $('.a-guardar').hide();


    //Eliminar una pregunta.
    $(document).on('click','.a-eliminar',function(e)
    {
        e.preventDefault();
        $.ajax({
            url: ajax_link,
            type:'POST',  
            data: {
                accion: "eliminar",
                id: $(this).data('id')
            },
            success: function(response){
                $('#box_' + response.id).remove();
            },
            fail: function(response){
                console.log(response);
            }
        });
    });

    //Modificar pregunta
    $(document).on('click', '.a-modificar' , function(e)
    {
        e.preventDefault();
        let id= $(this).data('id');
        let preg = $('#st_pregunta_' + id);
        let pregunta = preg.text();
        preg.empty();
        preg.append('<input type="text" id="cambios_pregunta_'+id+'" value="'+pregunta+'">');
        $('#modificar_' + id).hide();
        $('#guardar_' + id).show();
    });

    //Guardar cambios en una pregunta
    $(document).on('click','.a-guardar',function()
    {
        let id= $(this).data('id');
        let preg = $('#st_pregunta_' + id);
        let new_pregunta = $('#cambios_pregunta_'+id).val();

        $.ajax({
            type:'POST',
            data:{
                accion: 'modificar',
                id : id,
                pregunta: new_pregunta
            },
            url:ajax_link,
            success:function(response){
                preg.empty().text(response.pregunta);
            },
            fail:function(response){
                console.log(response);
            },
            complete: function(response){
                $('#modificar_' + id).show();
                $('#guardar_' + id).hide();
            }
        });
        
    });

    //Comportamiento al usar el select de seleccion de productos
    $(document).on('change','select#select_productos',function(e){
        e.preventDefault();
        $.ajax({
            url:ajax_link,
            type:'POST',
            data:{
                accion: 'cambioSelectPaginacion',
                select_producto: $('select#select_productos').val()
            },
            success:function(response){
                $('div#contenedor_preguntas').empty();
                mostrarPreguntas(response.form_respuestas);
                $('div#form_paginacion').empty();
                mostrarPaginacion(response.num_paginas,response.pagina_actual);
            },
            fail:function(response){
                console.log(response);
            }
        });
    });

    //Comportamiento al usar la paginación
    $(document).on('click','div#form_paginacion > input',function(e){
        e.preventDefault();
 
        let parametros = {
            accion: 'cambioSelectPaginacion',
            select_producto: $('select#select_productos').val(),
        };
 
        if(e.target.name == 'paginacion'){
            parametros['paginacion'] = e.target.value;
        }else{
            parametros['paginacion_a'] = e.target.value;
            parametros['pagina_actual'] = $('input[name=pagina_actual]').val();
        }
        $.ajax({
            url: ajax_link,
            type: 'POST',
            data: parametros,
            success:function(response){
                $('div#contenedor_preguntas').empty();
                mostrarPreguntas(response.form_respuestas);
                $('div#form_paginacion').empty();
                mostrarPaginacion(response.num_paginas,response.pagina_actual);
            },
            fail:function(response){
                console.log(response);
            }
        });
    });

    function mostrarPreguntas(preguntas)
    {

        for(let i = 0 ; i < preguntas.length; i++){
            let respuesta = preguntas[i].respuesta;
            if(respuesta === null)
                respuesta = "";
            
            $('#contenedor_preguntas').append(`
            <div class="pregunta border border-dark rounded" id="box_${preguntas[i].id}">
            <label for="articulo_${preguntas[i].id_producto}">
                <div class="ids">
                  <div class="ids-row">
                    <p class="id-pregunta" id="pregunta_${preguntas[i].id}">ID pregunta: ${preguntas[i].id}</p>
                    <p class="nom-product text-center text-secondary">${preguntas[i].name}</p> 
                    <p class="id-articulo" id="articulo_${preguntas[i].id_producto}">ID artículo: ${preguntas[i].id_producto}</p>
                  </div>
                </div>
                <p class="st-pregunta">
                  <span id="st_pregunta_${preguntas[i].id}">${preguntas[i].pregunta} </span>
                  <a href="#"  data-id="${preguntas[i].id}" class="a-modificar" id="modificar_${preguntas[i].id}">Modificar</a>
                  <a href="#"  data-id="${preguntas[i].id}" class="a-guardar" id="guardar_${preguntas[i].id}">Guardar cambios</a>
                </p>
                <textarea name="respuestas[${preguntas[i].id}]" placeholder="Escriba su respuesta aqui.">${respuesta}</textarea>
            </label>
            <div class="footer-preg">
              <a href="#" class="a-eliminar" data-id="${preguntas[i].id}">Eliminar</a>
            </div>
          </div>
            `);
        }
        $('.a-guardar').hide();
    }
    
    function mostrarPaginacion(num_paginas,pagina_actual)
    {

        let flechas_anterior = "";
        let numeros_anterior = "";
        let numeros_siguientes = "";
        let flechas_siguientes = "";
        if(pagina_actual != 0 ){
            flechas_anterior = `
                <input type="submit" value="<<" name="paginacion_a">
                <input type="submit" value="<" name="paginacion_a">
            `; 
        }

        for(let i = pagina_actual - 2 ; i < pagina_actual; i++){
            if(i >= 0 && i < pagina_actual){
                numeros_anterior +=`
                    <input type="submit" value="${i+1}" name="paginacion">
                `;
            }
        }

        for(let i = pagina_actual ; i < (pagina_actual + 2); i++){
            if(i < num_paginas){
                if(i == pagina_actual){
                    numeros_siguientes += `
                        <input type="submit" value="${i+1}" name="paginacion" class="text-primary">
                    `;  
                }else{
                    numeros_siguientes += `
                        <input type="submit" value="${i+1}" name="paginacion">
                    `;  
                }
            }
        }

        if(pagina_actual != (num_paginas - 1 )){
            flechas_siguientes = `
                <input type="submit" value=">" name="paginacion_a">
                <input type="submit" value=">>" name="paginacion_a">
            `;
        }

        let input_pag_actual = `<input type="hidden" name="pagina_actual" value="${pagina_actual}">`;
        
        $('#form_paginacion').append(
            flechas_anterior +
            numeros_anterior +
            numeros_siguientes +
            flechas_siguientes +
            input_pag_actual
        );
    }

});