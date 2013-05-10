<?php

/**
 * movieActions
 *
 * @package    OpenPNE
 * @subpackage actions
 * @author     Yuya Watanabe <watanabe@openpne.jp>
 */
class movieActions extends sfActions
{
  public function executeIndex()
  {
    $this->filePath = 'http://video-js.zencoder.com/oceans-clip.mp4';
  }
}
