<?php
/**
 * minnitchat - Main page view template. Lists both categories and items with parent_id = 0 and category_id = 0 
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
if (!defined('SCHLIX_VERSION')) die('No Access');
$this->CSS('minnitchat.css');
?>
<?php if ($chatname): ?>
    <script type='text/javascript'>
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', updateOptions)
        } else {
            updateOptions()
        }
        function updateOptions () {
            if (!document.getElementById('minnit-container')) {
            var minnitContainer = document.createElement('minnit-container')
            minnitContainer.id = 'minnit-container'
            document.body.appendChild(minnitContainer)
            }
            var container = document.getElementById('minnit-container')
            container.setAttribute('data-placement', '<?= ___h($chat_placement) ?>')
            drawButton()
        }
        function drawChat () {
            var vendorIframe = document.createElement('iframe')
            vendorIframe.src = 'https://minnit.chat/<?= ___h($chatname) ?>?embed&nickname='
            vendorIframe.width = '100%'
            vendorIframe.className = 'minnit-chat-iframe'
            var minnitContainer = document.getElementById('minnit-container')
            minnitContainer.setAttribute('data-size', '<?= ___h($chat_size) ?>')
            minnitContainer.innerHTML = ''
            // draw close btn
            var closeChat = document.createElement('minnit-close-chat')
            closeChat.innerHTML = 'Close Chat'
            closeChat.id = 'minnitCloseChatBtn'
            closeChat.onclick = drawButton
            minnitContainer.appendChild(closeChat)
            minnitContainer.appendChild(vendorIframe)
        }
        function drawButton () {
            var minnitSvg = '<svg xmlns="http://www.w3.org/2000/svg" height="57" width="57"><style>.a{fill:#ffffff;stroke-width:2;}</style><circle cx="28.5" cy="28.5" r="28.5" fill="#aaaaaa"/><rect x="13.3" y="11.4" rx="3.8" ry="3.8" width="30.4" height="26.6" style="fill:none;stroke-width:2;stroke:#ffffff"/><polygon points="43.7 49.4 26.6 38 39.9 38" style="fill:none;stroke-width:2;stroke:#ffffff"/><circle cx="28.5" cy="28.5" r="1.9" class="a"/><circle cx="20.9" cy="28.5" r="1.9" class="a"/><circle cx="36.1" cy="28.5" r="1.9" class="a"/></svg>'
            var chatButton = document.createElement('minnit-button')
            chatButton.innerHTML = minnitSvg
            chatButton.onclick = drawChat
            var minnitContainer = document.getElementById('minnit-container')
            minnitContainer.setAttribute('data-size', 'button')
            minnitContainer.innerHTML = ''
            minnitContainer.appendChild(chatButton)
        }
    </script>
<?php else: ?>
    <!-- NOTE - Chat Name was not set up correctly - please add Chat Name -->
    <script>console.error("Chat Name has not been set from configuration");</script>
<?php endif ?>