{extends file="template.tpl"}

{block name=main}
    <nav class="row d-flex justify-content-between">
        <h3 class="col-sm-12 col-md-6 col-lg-3 py-3 text-white d-flex align-self-center mb-0">
            NOVIDADES
        </h3>
        <div class="col-sm-12 col-md-6 col-lg-3 py-3 d-flex align-self-center">
            <select class="selec form-select form-select-sm text-white" style="background-color: #982a25; " aria-label=".form-select-sm">
                <option value="1">Preço crescente</option>
                <option value="2">Preço decrescente</option>
            </select>
        </div>
    </nav>

    <div class="row card-container template-card-destination">

    </div>
{/block}

