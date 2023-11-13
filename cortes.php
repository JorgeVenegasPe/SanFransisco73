<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="resources/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>
    <div class="scrollToTop-btn flex-center">
        <i class="fas fa-arrow-up"></i>
    </div>
    <?php
    require 'views/header.php';
    ?>
    <section class="services section" id="services">
        <div class="container flex-center">
            <h1 class="section-title-01">Cortes</h1>
            <h1 class="section-title-02">Cortes</h1>
            <div class="services-container">
                <?php
    require_once("Controlador/Corte/ControllorCorte.php");
    $obj=new control();
    $rows=$obj->ver_corte_1();
    ?>
                <?php if ($rows) :?>
                <?php foreach ($rows as $row): ?>
                <article class="card"
                    style="background: url('data:image/jpeg;base64,<?=base64_encode($row[3])?>') center no-repeat;background-size:120%;">
                    <div class="card__body">
                        <h2 class="card__title"><?=$row[1]?></h2>
                        <p>
                            <?=$row[2]?>
                        </p>
                        <h2 class="card__title">S/. <?=$row[4]?> </h2>
                        <br>
                        <a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
                <?php endforeach;?><?php else:?><?php endif;?>
                <?php
    require_once("Controlador/Corte/ControllorCorte.php");
    $obj=new control();
    $rows=$obj->ver_corte_2();
    ?>
                <?php if ($rows) :?>
                <?php foreach ($rows as $row): ?>
                <article class="card"
                    style="background: url('data:image/jpeg;base64,<?=base64_encode($row[3])?>') center no-repeat;background-size:120%;">
                    <div class="card__body">
                        <h2 class="card__title"><?=$row[1]?></h2>
                        <p>
                            <?=$row[2]?>
                        </p>
                        <h2 class="card__title">S/. <?=$row[4]?> </h2>
                        <br>
                        <a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
                <?php endforeach;?><?php else:?><?php endif;?>
                <?php
    require_once("Controlador/Corte/ControllorCorte.php");
    $obj=new control();
    $rows=$obj->ver_corte_3();
    ?>
                <?php if ($rows) :?>
                <?php foreach ($rows as $row): ?>
                <article class="card"
                    style="background: url('data:image/jpeg;base64,<?=base64_encode($row[3])?>') center no-repeat;background-size:120%;">
                    <div class="card__body">
                        <h2 class="card__title"><?=$row[1]?></h2>
                        <p>
                            <?=$row[2]?>
                        </p>
                        <h2 class="card__title">S/. <?=$row[4]?> </h2>
                        <br>
                        <a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
                <?php endforeach;?><?php else:?><?php endif;?>
                <?php
    require_once("Controlador/Corte/ControllorCorte.php");
    $obj=new control();
    $rows=$obj->ver_corte_4();
    ?>
                <?php if ($rows) :?>
                <?php foreach ($rows as $row): ?>
                <article class="card"
                    style="background: url('data:image/jpeg;base64,<?=base64_encode($row[3])?>') center no-repeat;background-size:120%;">
                    <div class="card__body">
                        <h2 class="card__title"><?=$row[1]?></h2>
                        <p>
                            <?=$row[2]?>
                        </p>
                        <h2 class="card__title">S/. <?=$row[4]?> </h2>
                        <br>
                        <a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
                <?php endforeach;?><?php else:?><?php endif;?>

                <?php
    require_once("Controlador/Corte/ControllorCorte.php");
    $obj=new control();
    $rows=$obj->ver_corte_5();
    ?>
                <?php if ($rows) :?>
                <?php foreach ($rows as $row): ?>
                <article class="card"
                    style="background: url('data:image/jpeg;base64,<?=base64_encode($row[3])?>') center no-repeat;background-size:120%;">
                    <div class="card__body">
                        <h2 class="card__title"><?=$row[1]?></h2>
                        <p>
                            <?=$row[2]?>
                        </p>
                        <h2 class="card__title">S/. <?=$row[4]?> </h2>
                        <br>
                        <a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
                <?php endforeach;?><?php else:?><?php endif;?>
                <?php
    require_once("Controlador/Corte/ControllorCorte.php");
    $obj=new control();
    $rows=$obj->ver_corte_6();
    ?>
                <?php if ($rows) :?>
                <?php foreach ($rows as $row): ?>
                <article class="card"
                    style="background: url('data:image/jpeg;base64,<?=base64_encode($row[3])?>') center no-repeat;background-size:120%;">
                    <div class="card__body">
                        <h2 class="card__title"><?=$row[1]?></h2>
                        <p>
                            <?=$row[2]?>
                        </p>
                        <h2 class="card__title">S/. <?=$row[4]?> </h2>
                        <br>
                        <a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
                <?php endforeach;?><?php else:?><?php endif;?>
                <?php
    require_once("Controlador/Corte/ControllorCorte.php");
    $obj=new control();
    $rows=$obj->ver_corte_7();
    ?>
                <?php if ($rows) :?>
                <?php foreach ($rows as $row): ?>
                <article class="card"
                    style="background: url('data:image/jpeg;base64,<?=base64_encode($row[3])?>') center no-repeat;background-size:120%;">
                    <div class="card__body">
                        <h2 class="card__title"><?=$row[1]?></h2>
                        <p>
                            <?=$row[2]?>
                        </p>
                        <h2 class="card__title">S/. <?=$row[4]?> </h2>
                        <br>
                        <a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
                <?php endforeach;?><?php else:?><?php endif;?>
                <?php
    require_once("Controlador/Corte/ControllorCorte.php");
    $obj=new control();
    $rows=$obj->ver_corte_8();
    ?>
                <?php if ($rows) :?>
                <?php foreach ($rows as $row): ?>
                <article class="card"
                    style="background: url('data:image/jpeg;base64,<?=base64_encode($row[3])?>') center no-repeat;background-size:120%;">
                    <div class="card__body">
                        <h2 class="card__title"><?=$row[1]?></h2>
                        <p>
                            <?=$row[2]?>
                        </p>
                        <h2 class="card__title">S/. <?=$row[4]?> </h2>
                        <br>
                        <a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
                <?php endforeach;?><?php else:?><?php endif;?>
                <?php
    require_once("Controlador/Corte/ControllorCorte.php");
    $obj=new control();
    $rows=$obj->ver_corte_9();
    ?>
                <?php if ($rows) :?>
                <?php foreach ($rows as $row): ?>
                <article class="card"
                    style="background: url('data:image/jpeg;base64,<?=base64_encode($row[3])?>') center no-repeat;background-size:120%;">
                    <div class="card__body">
                        <h2 class="card__title"><?=$row[1]?></h2>
                        <p>
                            <?=$row[2]?>
                        </p>
                        <h2 class="card__title">S/. <?=$row[4]?> </h2>
                        <br>
                        <a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
                <?php endforeach;?><?php else:?><?php endif;?>
                <?php
    require_once("Controlador/Corte/ControllorCorte.php");
    $obj=new control();
    $rows=$obj->ver_corte_10();
    ?>
                <?php if ($rows) :?>
                <?php foreach ($rows as $row): ?>
                <article class="card"
                    style="background: url('data:image/jpeg;base64,<?=base64_encode($row[3])?>') center no-repeat;background-size:120%;">
                    <div class="card__body">
                        <h2 class="card__title"><?=$row[1]?></h2>
                        <p>
                            <?=$row[2]?>
                        </p>
                        <h2 class="card__title">S/. <?=$row[4]?> </h2>
                        <br>
                        <a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
                <?php endforeach;?><?php else:?><?php endif;?>

                <?php
    require_once("Controlador/Corte/ControllorCorte.php");
    $obj=new control();
    $rows=$obj->ver_corte_11();
    ?>
                <?php if ($rows) :?>
                <?php foreach ($rows as $row): ?>
                <article class="card"
                    style="background: url('data:image/jpeg;base64,<?=base64_encode($row[3])?>') center no-repeat;background-size:120%;">
                    <div class="card__body">
                        <h2 class="card__title"><?=$row[1]?></h2>
                        <p>
                            <?=$row[2]?>
                        </p>
                        <h2 class="card__title">S/. <?=$row[4]?> </h2>
                        <br>
                        <a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
                <?php endforeach;?><?php else:?><?php endif;?>
                <?php
    require_once("Controlador/Corte/ControllorCorte.php");
    $obj=new control();
    $rows=$obj->ver_corte_12();
    ?>
                <?php if ($rows) :?>
                <?php foreach ($rows as $row): ?>
                <article class="card"
                    style="background: url('data:image/jpeg;base64,<?=base64_encode($row[3])?>') center no-repeat;background-size:120%;">
                    <div class="card__body">
                        <h2 class="card__title"><?=$row[1]?></h2>
                        <p>
                            <?=$row[2]?>
                        </p>
                        <h2 class="card__title">S/. <?=$row[4]?> </h2>
                        <br>
                        <a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
                <?php endforeach;?><?php else:?><?php endif;?>
                <?php
    require_once("Controlador/Corte/ControllorCorte.php");
    $obj=new control();
    $rows=$obj->ver_corte_13();
    ?>
                <?php if ($rows) :?>
                <?php foreach ($rows as $row): ?>
                <article class="card"
                    style="background: url('data:image/jpeg;base64,<?=base64_encode($row[3])?>') center no-repeat;background-size:120%;">
                    <div class="card__body">
                        <h2 class="card__title"><?=$row[1]?></h2>
                        <p>
                            <?=$row[2]?>
                        </p>
                        <h2 class="card__title">S/. <?=$row[4]?> </h2>
                        <br>
                        <a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
                <?php endforeach;?><?php else:?><?php endif;?>
                <?php
    require_once("Controlador/Corte/ControllorCorte.php");
    $obj=new control();
    $rows=$obj->ver_corte_14();
    ?>
                <?php if ($rows) :?>
                <?php foreach ($rows as $row): ?>
                <article class="card"
                    style="background: url('data:image/jpeg;base64,<?=base64_encode($row[3])?>') center no-repeat;background-size:120%;">
                    <div class="card__body">
                        <h2 class="card__title"><?=$row[1]?></h2>
                        <p>
                            <?=$row[2]?>
                        </p>
                        <h2 class="card__title">S/. <?=$row[4]?> </h2>
                        <br>
                        <a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
                <?php endforeach;?><?php else:?><?php endif;?>
                <?php
    require_once("Controlador/Corte/ControllorCorte.php");
    $obj=new control();
    $rows=$obj->ver_corte_15();
    ?>
                <?php if ($rows) :?>
                <?php foreach ($rows as $row): ?>
                <article class="card"
                    style="background: url('data:image/jpeg;base64,<?=base64_encode($row[3])?>') center no-repeat;background-size:120%;">
                    <div class="card__body">
                        <h2 class="card__title"><?=$row[1]?></h2>
                        <p>
                            <?=$row[2]?>
                        </p>
                        <h2 class="card__title">S/. <?=$row[4]?> </h2>
                        <br>
                        <a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
                <?php endforeach;?><?php else:?><?php endif;?>
                <?php
    require_once("Controlador/Corte/ControllorCorte.php");
    $obj=new control();
    $rows=$obj->ver_corte_16();
    ?>
                <?php if ($rows) :?>
                <?php foreach ($rows as $row): ?>
                <article class="card"
                    style="background: url('data:image/jpeg;base64,<?=base64_encode($row[3])?>') center no-repeat;background-size:120%;">
                    <div class="card__body">
                        <h2 class="card__title"><?=$row[1]?></h2>
                        <p>
                            <?=$row[2]?>
                        </p>
                        <h2 class="card__title">S/. <?=$row[4]?> </h2>
                        <br>
                        <a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
                <?php endforeach;?><?php else:?><?php endif;?>
                <?php
    require_once("Controlador/Corte/ControllorCorte.php");
    $obj=new control();
    $rows=$obj->ver_corte_17();
    ?>
                <?php if ($rows) :?>
                <?php foreach ($rows as $row): ?>
                <article class="card"
                    style="background: url('data:image/jpeg;base64,<?=base64_encode($row[3])?>') center no-repeat;background-size:120%;">
                    <div class="card__body">
                        <h2 class="card__title"><?=$row[1]?></h2>
                        <p>
                            <?=$row[2]?>
                        </p>
                        <h2 class="card__title">S/. <?=$row[4]?> </h2>
                        <br>
                        <a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
                <?php endforeach;?><?php else:?><?php endif;?>
                <?php
    require_once("Controlador/Corte/ControllorCorte.php");
    $obj=new control();
    $rows=$obj->ver_corte_18();
    ?>
                <?php if ($rows) :?>
                <?php foreach ($rows as $row): ?>
                <article class="card"
                    style="background: url('data:image/jpeg;base64,<?=base64_encode($row[3])?>') center no-repeat;background-size:120%;">
                    <div class="card__body">
                        <h2 class="card__title"><?=$row[1]?></h2>
                        <p>
                            <?=$row[2]?>
                        </p>
                        <h2 class="card__title">S/. <?=$row[4]?> </h2>
                        <br>
                        <a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
                <?php endforeach;?><?php else:?><?php endif;?>
                <?php
    require_once("Controlador/Corte/ControllorCorte.php");
    $obj=new control();
    $rows=$obj->ver_corte_19();
    ?>
                <?php if ($rows) :?>
                <?php foreach ($rows as $row): ?>
                <article class="card"
                    style="background: url('data:image/jpeg;base64,<?=base64_encode($row[3])?>') center no-repeat;background-size:120%;">
                    <div class="card__body">
                        <h2 class="card__title"><?=$row[1]?></h2>
                        <p>
                            <?=$row[2]?>
                        </p>
                        <h2 class="card__title">S/. <?=$row[4]?> </h2>
                        <br>
                        <a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
                <?php endforeach;?><?php else:?><?php endif;?>
                <?php
    require_once("Controlador/Corte/ControllorCorte.php");
    $obj=new control();
    $rows=$obj->ver_corte_20();
    ?>
                <?php if ($rows) :?>
                <?php foreach ($rows as $row): ?>
                <article class="card"
                    style="background: url('data:image/jpeg;base64,<?=base64_encode($row[3])?>') center no-repeat;background-size:120%;">
                    <div class="card__body">
                        <h2 class="card__title"><?=$row[1]?></h2>
                        <p>
                            <?=$row[2]?>
                        </p>
                        <h2 class="card__title">S/. <?=$row[4]?> </h2>
                        <br>
                        <a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
                <?php endforeach;?><?php else:?><?php endif;?>
                <?php
    require_once("Controlador/Corte/ControllorCorte.php");
    $obj=new control();
    $rows=$obj->ver_corte_21();
    ?>
                <?php if ($rows) :?>
                <?php foreach ($rows as $row): ?>
                <article class="card"
                    style="background: url('data:image/jpeg;base64,<?=base64_encode($row[3])?>') center no-repeat;background-size:120%;">
                    <div class="card__body">
                        <h2 class="card__title"><?=$row[1]?></h2>
                        <p>
                            <?=$row[2]?>
                        </p>
                        <h2 class="card__title">S/. <?=$row[4]?> </h2>
                        <br>
                        <a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
                <?php endforeach;?><?php else:?><?php endif;?>
                <?php
    require_once("Controlador/Corte/ControllorCorte.php");
    $obj=new control();
    $rows=$obj->ver_corte_22();
    ?>
                <?php if ($rows) :?>
                <?php foreach ($rows as $row): ?>
                <article class="card"
                    style="background: url('data:image/jpeg;base64,<?=base64_encode($row[3])?>') center no-repeat;background-size:120%;">
                    <div class="card__body">
                        <h2 class="card__title"><?=$row[1]?></h2>
                        <p>
                            <?=$row[2]?>
                        </p>
                        <h2 class="card__title">S/. <?=$row[4]?> </h2>
                        <br>
                        <a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
                <?php endforeach;?><?php else:?><?php endif;?>
    </section>
    <?php
    require 'views/footer.php';
    ?>
    <script src="resources/js/main.js"></script>
</body>

</html>