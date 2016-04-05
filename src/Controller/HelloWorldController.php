<?php
/**
 * @file
 * Contains \Drupal\hello_world\HelloWorldController.
 */
 
namespace Drupal\hello_world\Controller;
 
use Symfony\Component\DependencyInjection\ContainerAware;
 
class HelloWorldController extends ContainerAware {
 

  /**
   * Page Callback Method to Print out Hello World Text to the Screen.
   */
  public function myCallbackMethod() {
    $element = array(
      '#theme' => 'theme_hello_world_primary_page',
      '#items' => 100,
    );
    return $element;
  }
}