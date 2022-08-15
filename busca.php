<h3> Busca por Cep 2 - teste </h3>

<div>
    <label for="">Cep: </label>
    <input type="text" id="cep" placeholder="Digite aqui seu cep..">
</div>
<div>
    <button id="buscar"> Buscar </button>
</div>
<div>
    <p>Cidade: <span id="cidade"> </span></p>
    <p>Estado: <span id="estado"> </span></p>
    <p>DDD: <span id="ddd"> </span></p>
</div>
<script>
    const cep = document.querySelector("#cep");

    document.querySelector("#buscar").addEventListener('click', function(){
        const opcoes = {
            method:'GET',
            mode:'cors',
            cache:'default'
        }

        fetch(`https://viacep.com.br/ws/${cep.value}/json/`, opcoes)
        .then(
            response => { response.json()
                .then(data => {
                    document.querySelector("#cidade").textContent = data['localidade'];
                    document.querySelector("#estado").textContent = data['uf'];
                    document.querySelector("#ddd").textContent = data['ddd'];
                });
            }
        )
    });

</script>