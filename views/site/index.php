<?= $this->render('main'); ?>
<?= $this->render('about'); ?>
<?= $this->render('product', compact('products','modelProduct')); ?>
<?= $this->render('equipment'); ?>
<?= $this->render('more',compact('model','success')); ?>


