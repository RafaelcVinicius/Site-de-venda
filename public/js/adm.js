// -------- habilitar ou desabilitar a forma de pagamento ------------*/

const retirada = document.getElementById("retiradadiv");

retirada.addEventListener('click', tirarpagamento);

function tirarpagamento(){
    const dispaly = document.getElementById("formapagamento");
    const retiradadiv = document.getElementById("retiradadiv");
    const entregadiv = document.getElementById("entregadiv");
    const estabelecimento = document.getElementById("estabelecimento");    
    const enderecocliente = document.getElementById("enderecocliente");   

    document.getElementById('tipopedido').value = 'retirada';

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
    const idendereco = document.getElementById("idendereco");   

    document.getElementById('tipopedido').value = 'entrega';
    
    //idendereco.inner
    enderecocliente.classList.remove('desativado');
    estabelecimento.classList.add('desativado');
    retiradadiv.classList.add('hidden');
    entregadiv.classList.remove('hidden');
    dispaly.classList.remove('desativado');
    dispaly.classList.add('section');

    }




/* -------------  Definir especie ------------------   */

const cartao = document.getElementById("cartao");

cartao.addEventListener('click', formacartao);

    function formacartao(){

        const cartaodiv = document.getElementById("cartaodiv");   
        const dinheirodiv = document.getElementById("dinheirodiv"); 
        const trocodiv = document.getElementById("trocodiv"); 

        document.getElementById('especie').value = 'cartao';
        document.getElementById('troco').value = '0,00';

        cartaodiv.classList.remove('hidden');
        dinheirodiv.classList.add('hidden');
        trocodiv.classList.add('displaynone')
    }


    const dinheiro = document.getElementById("dinheiro");

    dinheiro.addEventListener('click', formadinheiro);

    function formadinheiro(){

        const cartaodiv = document.getElementById("cartaodiv");   
        const dinheirodiv = document.getElementById("dinheirodiv"); 
        const trocodiv = document.getElementById("trocodiv"); 

        document.getElementById('especie').value = 'dinheiro';

        cartaodiv.classList.add('hidden');
        dinheirodiv.classList.remove('hidden');
        trocodiv.classList.remove('displaynone')
    }
/*   -------------- selecionando endereço -------------  */


function endereco(id){

    document.getElementById('id_endereco').value = id;
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

