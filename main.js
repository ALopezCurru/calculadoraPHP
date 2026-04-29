'use strict';
import {DOM} from './elements/domElements.js';



DOM.botonesNumero.forEach( btn =>{
    btn.addEventListener('click',function(e){
        e.preventDefault();
        console.log(e.target.value);
        DOM.input_operacion.value += e.target.value;
    });
}
);


DOM.botonesOperacion.forEach(btn=>{
    btn.addEventListener('click',function(e){
        e.preventDefault();
        DOM.input_operacion.value += e.target.value;
    });
});

DOM.btn_clear.addEventListener('click',function(){
    DOM.input_operacion.value = "";
});

