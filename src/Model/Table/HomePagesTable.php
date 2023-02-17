<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HomePages Model
 *
 * @method \App\Model\Entity\HomePage get($primaryKey, $options = [])
 * @method \App\Model\Entity\HomePage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HomePage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HomePage|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HomePage saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HomePage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HomePage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HomePage findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HomePagesTable extends Table
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

        $this->setTable('home_pages');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        

        // $this->hasOne('Categories', [
        //     'foreignKey' => 'category_id',
        // ]);

        $this->hasOne('Customers', [
            'foreignKey' => 'customer_id',
        ]);
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
            ->scalar('image')
            ->maxLength('image', 255)
            ->requirePresence('image', 'create')
            ->notEmptyFile('image');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        return $validator;
    }
}
