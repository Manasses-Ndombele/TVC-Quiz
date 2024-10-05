<?php
      session_start();
      $_SESSION['first_quiz'] = True;
?>
<!DOCTYPE html>
<html lang="pt-br">
      <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Socorre-me!</title>
            <meta name="author" content="Daniel dos Santos Cardoso">
            <meta name="description" content="Quiz para teste de vício em compulsão pornográfica baseado em critérios da OMS">
            <meta name="keywords" content="vício em pornografia, teste de compulsão, diagnóstico de dependência, uso de pornografia, metanoia">
            <meta name="robotos" content="index,follow">
            <link rel="shortcut icon" href="../assets/images/logo.ico" type="image/x-icon">
            <link rel="stylesheet" href="../assets/css/index.min.css">
      </head>
      <body>
            <main>
                  <div id="quiz-start" class="main-container active-container">
                        <div class="progress-bar">
                              <div class="progress-container">
                                    <div class="progress" style="width: 8.07%;"></div>
                              </div>
                              <span class="progress-number" style="left: .8%;">9%</span>
                        </div>
                        <img src="../assets/images/logo.png" alt="Logotipo da Socorre.me" id="logo">
                        <h1 class="main-title">Tenha uma <strong>verdadeira Metanoia</strong> para vencer o <strong>vício em pornografia</strong> imediatamente!</h1>
                        <p>TESTE DE 1 MINUTO</p>
                        <button type="button" class="next-step-btn btn-lg" data-step="1" data-status="none">CONTINUAR</button>
                  </div>
                  <div id="quiz-congratulations" class="main-container">
                        <div class="progress-bar">
                              <div class="progress-container">
                                    <div class="progress" style="width: 10.38%;"></div>
                              </div>
                              <span class="progress-number" style="left: 1.1%;">11%</span>
                        </div>
                        <span class="emoji">&#x1F44F</span>
                        <h2 class="main-title"><strong>Parabéns você já está á frente</strong> da maioria das pessoas que pensam que a <strong>pornografia é um prazer inofensivo!</strong></h2>
                        <button type="button" class="next-step-btn btn-lg" data-step="2" data-status="none">QUERO TER A METANOIA</button>
                  </div>
                  <div id="quiz-sex-selecting" class="main-container">
                        <div class="progress-bar">
                              <div class="progress-container">
                                    <div class="progress" style="width: 18.45%;"></div>
                              </div>
                              <span class="progress-number" style="left: 8%;">19%</span>
                        </div>
                        <h2 class="main-title">Selecione seu sexo <strong>para continuarmos:</strong></h2>
                        <div id="sex-options">
                              <div class="option">
                                    <img src="../assets/images/male.png" alt="Homem">
                                    <button type="button" class="next-step-btn btn-sm" data-step="3" data-status="none">SOU HOMEM</button>
                              </div>
                              <div class="option">
                                    <img src="../assets/images/female.png" alt="Mulher">
                                    <button type="button" class="next-step-btn btn-sm" data-step="3" data-status="none">SOU MULHER</button>
                              </div>
                        </div>
                  </div>
                  <div id="quiz-danger-warning" class="main-container">
                        <div class="progress-bar">
                              <div class="progress-container">
                                    <div class="progress" style="width: 23.64%;"></div>
                              </div>
                              <span class="progress-number" style="left: 13%;">24%</span>
                        </div>
                        <header>
                              <h2 class="main-title">ATENÇÃO</h2>
                              <img src="../assets/images/danger signal.png" alt="Sinal de aviso">
                        </header>
                        <div class="description-container">
                              <p>Este teste de Vício em Pornografia usa critérios da Associação Americana de Psiquiatria (DSM-IV) e da Organização Mundial de Saúde (CID-10) para avaliar o diagnóstico de dependência (vício).</p>
                              <p>As informações e opiniões contidas neste teste de Vício em Pornografia são de caráter informativo e educacional.</p>
                        </div>
                        <button type="button" class="next-step-btn btn-lg" data-step="4" data-status="none">VAMOS COMEÇAR?</button>
                  </div>
                  <div id="quiz-first-question" class="main-container question">
                        <div class="progress-bar">
                              <div class="progress-container">
                                    <div class="progress" style="width: 28.83%;"></div>
                              </div>
                              <span class="progress-number" style="left: 19%;">29%</span>
                        </div>
                        <header>
                              <h2 class="main-title">1ª PERGUNTA:</h2>
                              <img src="../assets/images/calendar.png" alt="Calendário">
                        </header>
                        <p>Perda de tempo e de energia: Você já gastou uma quantidade significativa de tempo procurando, usando, planejando ou se recuperando do uso de pornografia? Você passou muito tempo pensando em usar? Você já escondeu ou minimizou seu uso?</p>
                        <div class="next-step-options">
                              <button type="button" class="next-step-btn btn-sm" data-step="5" data-status="true">SIM</button>
                              <button type="button" class="next-step-btn btn-sm" data-step="5" data-status="false">NÃO</button>
                        </div>
                  </div>
                  <div id="quiz-second-question" class="main-container question">
                        <div class="progress-bar">
                              <div class="progress-container">
                                    <div class="progress" style="width: 34.02%;"></div>
                              </div>
                              <span class="progress-number" style="left: 24%;">35%</span>
                        </div>
                        <h2 class="main-title">2ª PERGUNTA: &#x1F612</h2>
                        <p>Sintomas de abstinência: Quando você para de usar pornografia, você experimenta sintomas físicos ou emocionais de abstinência? você teve alguns dos seguintes sintomas: irritabilidade, ansiedade, agitação, dores de cabeça, suores, náuseas ou vômitos?</p>
                        <div class="next-step-options">
                              <button type="button" class="next-step-btn btn-sm" data-step="6" data-status="true">SIM</button>
                              <button type="button" class="next-step-btn btn-sm" data-step="6" data-status="false">NÃO</button>
                        </div>
                  </div>
                  <div id="quiz-third-question" class="main-container question">
                        <div class="progress-bar">
                              <div class="progress-container">
                                    <div class="progress" style="width: 39.21%;"></div>
                              </div>
                              <span class="progress-number" style="left: 28.6%;">40%</span>
                        </div>
                        <h2 class="main-title">3ª PERGUNTA: &#x1F552</h2>
                        <p>Dificuldade de controlar o uso: As vezes você usa mais pornografia ou por mais tempo que você gostaria de usar?</p>
                        <div class="next-step-options">
                              <button type="button" class="next-step-btn btn-sm" data-step="7" data-status="true">SIM</button>
                              <button type="button" class="next-step-btn btn-sm" data-step="7" data-status="false">NÃO</button>
                        </div>
                  </div>
                  <div id="quiz-fourth-question" class="main-container question">
                        <div class="progress-bar">
                              <div class="progress-container">
                                    <div class="progress" style="width: 44.4%;"></div>
                              </div>
                              <span class="progress-number" style="left: 34%;">45%</span>
                        </div>
                        <h2 class="main-title">4ª PERGUNTA: &#x1F44E</h2>
                        <p>Consequências negativas: Você continuou a usar pornografia, apesar de ter percebido consequências negativas no seu humor, auto-estima, saúde, trabalho ou família?</p>
                        <div class="next-step-options">
                              <button type="button" class="next-step-btn btn-sm" data-step="8" data-status="true">SIM</button>
                              <button type="button" class="next-step-btn btn-sm" data-step="8" data-status="false">NÃO</button>
                        </div>
                  </div>
                  <div id="quiz-fifth-question" class="main-container question">
                        <div class="progress-bar">
                              <div class="progress-container">
                                    <div class="progress" style="width: 49.59%;"></div>
                              </div>
                              <span class="progress-number" style="left: 39.5%;">50%</span>
                        </div>
                        <h2 class="main-title">5ª PERGUNTA: &#x1F61F</h2>
                        <p>Negligência e procrastinação: Você já adulterou ou reduziu atividades sociais, recreativas, de trabalho ou domésticas por causa do uso de pornografia?</p>
                        <div class="next-step-options">
                              <button type="button" class="next-step-btn btn-sm" data-step="9" data-status="true">SIM</button>
                              <button type="button" class="next-step-btn btn-sm" data-step="9" data-status="false">NÃO</button>
                        </div>
                  </div>
                  <div id="quiz-sixth-question" class="main-container question">
                        <div class="progress-bar">
                              <div class="progress-container">
                                    <div class="progress" style="width: 54.78%;"></div>
                              </div>
                              <span class="progress-number" style="left: 45%;">55%</span>
                        </div>
                        <header>
                              <h2 class="main-title">6ª PERGUNTA:</h2>
                              <img src="../assets/images/clock.png" alt="Relógio">
                        </header>
                        <p>Perda de tempo e de energia: Você já gastou uma quantidade significativa de tempo procurando, usando, escondendo, planejando ou se recuperando do uso de pornografia? Você passou muito tempo pensando em usar? Você já escondeu ou minimizou o seu uso?</p>
                        <div class="next-step-options">
                              <button type="button" class="next-step-btn btn-sm" data-step="10" data-status="true">SIM</button>
                              <button type="button" class="next-step-btn btn-sm" data-step="10" data-status="false">NÃO</button>
                        </div>
                  </div>
                  <div id="quiz-seventh-question" class="main-container question">
                        <div class="progress-bar">
                              <div class="progress-container">
                                    <div class="progress" style="width: 59.97%;"></div>
                              </div>
                              <span class="progress-number" style="left: 50.2%;">60%</span>
                        </div>
                        <header>
                              <h2 class="main-title">7ª PERGUNTA:</h2>
                              <img src="../assets/images/man thinking.png" alt="Homem pensando 2D">
                        </header>
                        <p>Desejo de parar: Alguma vez você pensou em reduzir ou controlar o uso de pornografia? Você já fez tentativas mal sucedidas para parar com a pornografia ou controlar seu uso?</p>
                        <div class="next-step-options">
                              <button type="button" class="next-step-btn btn-sm" data-step="11" data-status="true">SIM</button>
                              <button type="button" class="next-step-btn btn-sm" data-step="11" data-status="false">NÃO</button>
                        </div>
                  </div>
            </main>
            <script src="../assets/js/index.js"></script>
      </body>
</html>
