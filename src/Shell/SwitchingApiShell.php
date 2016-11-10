<?php
namespace App\Shell;

use Cake\Console\Shell;

/**
 * SwitchingApi shell command.
 */
class SwitchingApiShell extends Shell
{

    /**
     * Manage the available sub-commands along with their arguments and help
     *
     * @see http://book.cakephp.org/3.0/en/console-and-shells.html#configuring-options-and-generating-help
     *
     * @return \Cake\Console\ConsoleOptionParser
     */
    public function getOptionParser()
    {
        $parser = parent::getOptionParser();

        return $parser;
    }

    /**
     * main() method.
     *
     * @return bool|int Success or error code.
     */
    public function main() 
    {
        $length = 10;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomKey = '';
        $randomSecrete = '';
        for ($i = 0; $i < $length; $i++) {
            $randomKey .= $characters[rand(0, $charactersLength -1)];
            $randomSecrete .= $characters[rand(0, $charactersLength -1)];
        }
        $this->out('api_key: '.$randomKey);
        $this->out('api_secrete: '.$randomSecrete);
    }
}
