<?php
namespace Block;
/**
 * minnitchat - Main Class
 * 
 * Minnit Chat is an easy-to-use, embeddable HTML5 group chat service. You can appoint moderators/managers to watch over your chat, customize the look and feel of your chat, and users can even change their emoji’s skin tone, accessories, hair styles, and more, to make their messages uniquely their own.
 * 
 * @copyright 2019 calip
 *
 * @license MIT
 *
 * @package minnitchat
 * @version 1.0
 * @author  Alip <asalip.putra@gmail.com>
 * @link    https://github.com/calip/block_minnitchat
 */
class minnitchat extends \SCHLIX\cmsBlock
{
	public function Run()
	{
    global $__minnitchat_loaded;
		if ($__minnitchat_loaded !== 'loaded') // prevent the built-in duplicate blocks feature 
		{
      $chatname = $this->config['str_chatname'];
      $placement = (int) $this->config['int_placement'];
      $chat_placement = "minnitPlacementL";
      if ($placement == 2) {
        $chat_placement = "minnitPlacementR";
      }
      $chat_size = (int) $this->config['int_size'];
      
			$__minnitchat_loaded = 'loaded';
			$this->loadTemplateFile('view.block',compact(array_keys(get_defined_vars())));
		}
  }
}
