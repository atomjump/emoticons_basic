<?php
    include_once("classes/cls.pluginapi.php");

    class plugin_emoticons_basic
    {
        public function before_message($message)
        {
            global $root_server_url;
            
            //Do your thing in here. Here is a sample.
            $api = new cls_plugin_api();
            

            //e.g. hide the message we have just posted if it includes the string 'aargh' in it.
            if(strpos($message, ':)') !== false) {
                $message = str_replace(":)", '<img width="16" height="16" src="' . $root_server_url . '/plugins/emoticons_basic/img/smiley.png">', $message);
            }
            
            if(strpos($message, ';)') !== false) {
                $message = str_replace(";)", '<img width="16" height="16" src="' . $root_server_url . '/plugins/emoticons_basic/img/wink.png">', $message);
            }
            
            if(strpos($message, ':(') !== false) {
                $message = str_replace(":(", '<img width="16" height="16" src="' . $root_server_url . '/plugins/emoticons_basic/img/sad.png">', $message);
            }
            
             if(strpos($message, 'lol') !== false) {
                $message = str_replace("lol", '<img width="16" height="16" src="' . $root_server_url . '/plugins/emoticons_basic/img/lol.png">', $message);
            }

            return $message;

        }
    }
?>
