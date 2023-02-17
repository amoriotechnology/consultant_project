<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CustomerQueries Model
 *
 * @property \App\Model\Table\CustomersTable&\Cake\ORM\Association\BelongsTo $Customers
 *
 * @method \App\Model\Entity\CustomerQuery get($primaryKey, $options = [])
 * @method \App\Model\Entity\CustomerQuery newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CustomerQuery[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CustomerQuery|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CustomerQuery saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CustomerQuery patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CustomerQuery[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CustomerQuery findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CustomerQueriesTable extends Table
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

        $this->setTable('customer_queries');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Customers', [
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
            ->scalar('message')
            ->maxLength('message', 500)
            ->requirePresence('message', 'create')
            ->notEmptyString('message');

        $validator
            ->scalar('consultation')
            ->maxLength('consultation', 255)
            ->requirePresence('consultation', 'create')
            ->notEmptyString('consultation');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('mobile')
            ->maxLength('mobile', 255)
            ->requirePresence('mobile', 'create')
            ->notEmptyString('mobile');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));

        return $rules;
    }
}
