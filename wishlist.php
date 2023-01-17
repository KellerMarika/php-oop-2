<?php if ($product->getTypeName()) { ?>


<?php if ($product->getTypeName() === "Food") { ?>

  <div class="<?php echo $product->getTypeName() ?>">

    <span>size: <?php $product["size"] ?></span>
  </div>

<?php } else if ($product->getTypeName() === "Toy") { ?>

    <div class="<?php echo $product->getTypeName() ?>">
      <span>size: <?php $product["size"] ?></span>

    </div>

<?php } else if ($product->getTypeName() === "Bed") { ?>

      <div class="<?php echo $product->getTypeName() ?>">
        <span>size: <?php $product["size"] ?></span>


      </div>
<?php } ?>
<?php } else { ?>

<div></div>
<?php } ?>