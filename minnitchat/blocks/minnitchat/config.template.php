<?php
/**
 * minnitchat - Config
 * 
 * Minnit Chat is an easy-to-use, embeddable HTML5 group chat service. You can appoint moderators/managers to watch over your chat, customize the look and feel of your chat, and users can even change their emoji’s skin tone, accessories, hair styles, and more, to make their messages uniquely their own.
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
if (!defined('SCHLIX_VERSION'))
    die('No Access');
?>
<h4><?= ___('Minnit Chat Settings') ?></h4>
<p><?= ___('Configure your Minnit Chat here. <a href="https://minnit.chat/" target="_blank">Minnit Chat</a>') ?></p>
<schlix-config:textbox config-key='str_chatname' label='<?= ___('Chat Name') ?>' class='form-control' required='required'/>
<schlix-config:radiogroup config-key="int_placement" label="<?= ('Chat Placement') ?>">
    <schlix-config:option value="1"><?= ___h('Bottom Left') ?></schlix-config:option>
    <schlix-config:option value="2"><?= ___h('Bottom Right') ?></schlix-config:option>
</schlix-config:radiogroup>

<schlix-config:radiogroup config-key="int_size" label="<?= ('Chat Size') ?>">
    <schlix-config:option value="1"><?= ___h('Small') ?></schlix-config:option>
    <schlix-config:option value="2"><?= ___h('Medium') ?></schlix-config:option>
    <schlix-config:option value="3"><?= ___h('Large') ?></schlix-config:option>
</schlix-config:radiogroup>