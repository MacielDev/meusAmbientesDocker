
<h1 align="center">
    <img alt="Ambientes para desenvolvimento com Docker" title="Meus Ambientes Com Docker" src="https://www.globalmind.com.br/wp-content/uploads/2021/03/docker-banner-1.png" />
</h1>
<h2>Ambientes para desenvolvimento com Docker</h2>
<p>  Uma nova fase em meus estudos e desenvolvimento de projetos. Sempre  perdi muito tempo preparando os meus ambientes de estudos para que eu pudesse parametrizar minha maquina de acordo com o que eu precisava. </p>
<p>Pesquisei sobre o Docker e fiquei com muita vontade de estudar mais sobre o assunto. Realizei alguns cursos, estudei a documentação e comecei a realizar alguns testes para poder criar ambientes que sejam facilmente modificados e que eu possa rapidamente começar meus estudos ou projetos.</p>
<p>Pensando em outros colegas que assim como eu podem precisar de ambientes para desenvolvimento com PHP, disponibilizarei aqui meus ambientes e estudos.  Deixo também o convite aos colegas para poderem cooperar com melhorias nos ambientes, assim todos nos ajudamos.
    
<h2>Primeiramente devemos instalar tanto o Docker quanto o Docker Compose:</h2>
    <p><a href="https://docs.docker.com/get-docker/">Docker</a></p>
    <p><a href="https://docs.docker.com/compose/install/">Docker Compose</a></p>
    
<h3>Clone o projeto para a sua pasta de preferencia</h3>
<p>https://github.com/MacielDev/meusAmbientesDocker.git</p>

<p>Observe que existem vários ambientes diferentes dentro do repositório, portanto escolha aquele que melhor atenda as suas necessidades. Realize os ajustes das versões das imagens utilizadas e  desejadas para parametrizar seus ambientes , e já pode usar.</p>

<h3>=> Ambiente 1 : PHP DOCKER SIMPLES</h3>
    <p>Trata-se de um ambiente que utiliza somente a imagem do PHP, sendo assim destina-se a estudos que tenham somente a necessidade de rodarmos o PHP na linha de comando de nosso editor de textos ou IDE. Não seria indicado utilizar esse ambiente em aplicações mais robustas. Como eu disse , trata-se de um ambiente ideal para realizarmos cursos mais básicos sobre PHP.</p>
    

<p>Para “subir” o container através do Docker Compose execute o seguinte comando dentro da pasta do projeto:
docker-compose up -d</p>
<p>Você pode acessar o container através do browser no seguinte endereço:
http://localhost:9000/  ou http://localhost:9000/views/paginaTeste.html ou http://localhost:9000/src/index.php </p>

