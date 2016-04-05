<?php
 
/**
 * @file
 * Contains \Drupal\hello_world\Plugin\Block\HelloWorldBlock1
 */
 
namespace Drupal\hello_world\Plugin\Block;
 
use Drupal\Core\Block\BlockBase;
use Drupal\block\Annotation\Block;
use Drupal\Core\Annotation\Translation;

/**
 * Provides a simple block.
 *
 * @Block(
 *   id = "hello_world_block1",
 *   admin_label = @Translation("Hello World Block1"),
 *   module = "hello_world"
 * )
 */
 
class HelloWorldBlock extends BlockBase {
 
  /**
   * Implements \Drupal\block\BlockBase::blockBuild().
   */
  public function build() {
    $this->configuration['label'] = t('HWB1 - Some eLearner\'s output.');
    return array(
      '#markup' => $this->t('Hello from a custom block.</br></br>I think I can put quiz or curriculum output here in this second sidebar via PHP arrays or some such.'),
    );
  }
}
?>