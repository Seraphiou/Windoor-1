<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: News
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
    size:  large
  date:
    label: Date
    type:   date
    format: dd.mm.yy