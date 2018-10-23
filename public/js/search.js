
    $(document).ready(function() {
        var boton_rut;
          
        boton_rut = $('#rut_check');
                  
        boton_rut.on('click', function(){
                    
            var valor_input, valor_rut;
                    
            valor_input = $('.rut_txt');
            valor_rut = valor_input.val();
                        
            if(valor_rut !== ''){
                $('body').loadingModal({
                  position: 'auto',
                  text: 'Cargando...',
                  color: 'rgb(63,63,63)',
                  opacity: '0',
                  backgroundColor: 'rgb(0,0,0)',
                  animation: 'chasingDots'
                });
            }
        }); 
    });