<?php $numero_paginas = numeroPaginas($blog_config['post_por_pagina'], $conexion); ?>
<section class="pagination-section section">
    <ul>
        <?php if (paginaActual() == 1): ?>
            <li class="disabled"> &laquo; </li>
        <?php else: ?>
            <li class=""><a href="index.php?pagina=<?php echo paginaActual() - 1 ?>">&laquo;</a></li>
        <?php endif; ?>

        <?php for($i = 1; $i <= $numero_paginas; $i++): ?>

            <?php if(paginaActual() == $i):?>
                <li class="active"><?php echo $i; ?></li>
            <?php else: ?>
                <li class=""><a href="index.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php endif; ?>

        <?php endfor; ?>

        <?php if(paginaActual() == $numero_paginas): ?>
            <li class="disabled"> &raquo; </li>
        <?php else: ?>
            <li class=""><a href="index.php?pagina=<?php echo paginaActual() + 1 ?>">&raquo;</a></li>
        <?php endif; ?>

        <!-- <li class=""> &raquo; </li> -->
    </ul>
</section>