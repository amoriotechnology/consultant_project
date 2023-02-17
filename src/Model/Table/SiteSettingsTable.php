<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SiteSettings Model
 *
 * @method \App\Model\Entity\SiteSetting get($primaryKey, $options = [])
 * @method \App\Model\Entity\SiteSetting newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SiteSetting[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SiteSetting|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SiteSetting saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SiteSetting patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SiteSetting[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SiteSetting findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SiteSettingsTable extends Table
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

        $this->setTable('site_settings');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('meta_description')
            ->maxLength('meta_description', 1000)
            ->requirePresence('meta_description', 'create')
            ->notEmptyString('meta_description');

        $validator
            ->scalar('meta_title')
            ->maxLength('meta_title', 1000)
            ->requirePresence('meta_title', 'create')
            ->notEmptyString('meta_title');

        $validator
            ->scalar('meta_keyword')
            ->maxLength('meta_keyword', 1000)
            ->requirePresence('meta_keyword', 'create')
            ->notEmptyString('meta_keyword');

        return $validator;
    }
}
