{extends file="Template/TemplateError.tpl"}

{block name = main}
    <div class="my-5  bg-white p-5 rounded-3">
        <h3>
            Erro 404 - Pagina não encontrada
        </h3>
        <p>
            A pagina que voce esta tentando entrar não foi encontrada
        </p>
        <p>
            Retorne para a pagina incial
        </p>
        <a href="/index" class="btn btn-primary">Voltar</a>
    </div>
{/block}