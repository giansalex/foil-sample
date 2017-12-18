<!DOCTYPE html>
<html>
    <head>
        <?php $this->section('head') ?>
          <title><?php $this->section('title') ?>My Home Page<?php $this->stop() ?></title>
        <?php $this->stop() ?>
    </head>
    <body>
        <div id="content">
          <?php $this->section('content') ?>
          <?php $this->stop() ?>
        </div>
        <div id="footer">
          <?php $this->section('footer') ?>
            &copy; Copyright 2014 by <a href="http://example.com/">you</a>.
          <?php $this->stop() ?>
        </div>
    </body>
</html>