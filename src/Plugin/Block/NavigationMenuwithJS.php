<?php
 
/**
 * @file
 * Contains \Drupal\hello_world\Plugin\Block\NavigationMenuwithJS
 */
 
namespace Drupal\hello_world\Plugin\Block;
 
use Drupal\Core\Block\BlockBase;
use Drupal\block\Annotation\Block;
use Drupal\Core\Annotation\Translation;

/**
 * Provides a simple block.
 *
 * @Block(
 *   id = "Navigation_Menu_with_JS",
 *   admin_label = @Translation("Navigation Menu with JS Accordion"),
 *   module = "hello_world"
 * )
 */
 
class NavigationMenuwithJS extends BlockBase {
 
  /**
   * Implements \Drupal\block\BlockBase::blockBuild().
   */
  public function build() {
    $this->configuration['label'] = t('By Role?');
    return array(
      '#markup' => $this->t('Hello from a custom block.</br></br>I think I can put the collapsible menu here.'),
    );
  }
}
?>