<?php
namespace App\Shell;

use Cake\Console\Shell;
use Cake\ORM\TableRegistry;

/**
 * SwitchingCreateApiKey shell command.
 */
class SwitchingCreateApiKeyShell extends Shell
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

        $answer = $this->in('Are you sure you want to authenticate ?', ['Yes', 'No']);
        // $answer = $this->in('Are you sure you want to authenticate? (Yes or No)');

        if($answer == 'yes' || $answer == 'Yes'){
            $SwitchingApiKey = TableRegistry::get('TSwitchingApikey');
            $SAK = $SwitchingApiKey->newEntity();
            $SAK->api_key = $randomKey;
            $SAK->api_secret = $randomSecrete;

            if ($SwitchingApiKey->save($SAK)) {
                $this->out('Authenticate successful !');
                $this->loadModel('TSwitchingApikey');
                $TSAK = $this->TSwitchingApikey->find('all');
                foreach ($TSAK as $row) {
                    $this->out($row);
                } 
            }
        }else{
            $this->out('You dont agree. Thanks !');
        }             
    }
}
