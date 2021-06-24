<?php

function contact_section() {
  
  $context = Timber::context();
  
  $out = Timber::compile('contact-section.twig', $context);
  return $out;
}