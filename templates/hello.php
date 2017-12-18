<?php $this->layout('main') ?>

<?php $this->section('title') ?>
My Hello Page
<?php $this->replace() ?>

<?php $this->section('content') ?>
<h1>Index</h1>
<p>Welcome <?= $this->name ?>.</p>
<?php $this->append() ?>