// -------- habilitar ou desabilitar a forma de pagamento ------------*/

const retirada = document.getElementById("retirada");

retirada.addEventListener('click', tirarpagamento);

function tirarpagamento(){
    const dispaly = document.getElementById("formapagamento");
    const retiradadiv = document.getElementById("retiradadiv");
    const entregadiv = document.getElementById("entregadiv");
    const estabelecimento = document.getElementById("estabelecimento");    
    const enderecocliente = document.getElementById("enderecocliente");   

    enderecocliente.classList.add('desativado');
    estabelecimento.classList.remove('desativado');
    retiradadiv.classList.remove('hidden');
    entregadiv.classList.add('hidden');
    dispaly.classList.remove('section');
    dispaly.classList.add('desativado');
}

const entrega = document.getElementById("entrega");

entrega.addEventListener('click', pagamento);

    function pagamento(){


    const dispaly = document.getElementById("formapagamento");
    const retiradadiv = document.getElementById("retiradadiv");
    const entregadiv = document.getElementById("entregadiv");
    const estabelecimento = document.getElementById("estabelecimento");    
    const enderecocliente = document.getElementById("enderecocliente");   

    enderecocliente.classList.remove('desativado');
    estabelecimento.classList.add('desativado');
    retiradadiv.classList.add('hidden');
    entregadiv.classList.remove('hidden');
    dispaly.classList.remove('desativado');
    dispaly.classList.add('section');
    }



// ---------- nav bar menu  mobile -----------*/
const btnmobile = document.getElementById("btn-mobile");

    btnmobile.addEventListener('click', mobilemenu);

    function mobilemenu(){
        const nav = document.getElementById("nav_bar");
        const btn = document.getElementById("btn-mobile");
        nav.classList.toggle('active');
        btn.classList.toggle('active');
    }

