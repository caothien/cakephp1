<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TSwitchingApikey Model
 *
 * @method \App\Model\Entity\TSwitchingApikey get($primaryKey, $options = [])
 * @method \App\Model\Entity\TSwitchingApikey newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TSwitchingApikey[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TSwitchingApikey|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TSwitchingApikey patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TSwitchingApikey[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TSwitchingApikey findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TSwitchingApikeyTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('t_switching_apikey');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('api_key', 'create')
            ->notEmpty('api_key');

        $validator
            ->requirePresence('api_secret', 'create')
            ->notEmpty('api_secret');

        return $validator;
    }
}
