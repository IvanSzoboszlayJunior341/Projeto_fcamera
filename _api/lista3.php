<?php
    require __DIR__ . "/../vendor/autoload.php";
    $filaDao = new \_api\Classes\FilaDao();
    $filaDao->read1();
    $cont = 0;
    foreach($filaDao->read3() as $filas):
    $cont = $cont + 1; ?>
                <div class="usuario_chat">
                    <div class="usuario_chat-flex">
                    <span id="testeee"><?php echo $cont ?></span> 
                        <?php echo "<img src='img/".$filas["Foto"]. "' alt='' class='avatar-timeline_home'>"; ?>
                                            
                        <div class="body-conversa_usuario">                  
                            <div class="nome-usuario">
                                <span><?php echo $filas["Nome"]; ?></span>
                            </div> 
                            <div class="ultima-mensagem">
                                <div> <p>JOGO: <?php echo $filas["Jogo"]?></p>  </div> 
                            </div>  
                        </div> 
                    </div>                                                
                </div>
    <?php endforeach;
?>