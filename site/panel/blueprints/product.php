<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Product
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  description:
    label: Description
    type:  text
  text:
    label: Text
    type:  textarea
    size:  large
filefields:
  caption:
    label: Caption
    type:  text