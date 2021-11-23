<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Desenvolvimento Web 02</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            html, body {
                background-color: #4B0082;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
            }

			.m-b-md {
                margin-bottom: 35px;
            }

            .title {
                font-size: 70px;
            }

			.title p{
				margin-top: 0 !important;
                border: 5px solid black;
                background-image: linear-gradient(90deg, black, red);
                color: rgb(248,248,255);
            }

			.title a{
				color: rgb(248,248,255);
                border: 5px solid black;
                background-image: linear-gradient(90deg, black, red);
			}

			.title a:hover{
				color: rgb(0,0,128);
			}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    <p>CodeIgniter Trabalho Web 02</p>
                    <a style="font-size: 50px; margin-left: 30px; text-decoration: none; " href="/clientes">Tabela de Clientes</a>
                    <a style="font-size: 50px; margin-right: 30px; text-decoration: none; " href="produtos/overview">Tabela de Produtos</a>
                </div>
            </div>
        </div>
    </body>
</html>
