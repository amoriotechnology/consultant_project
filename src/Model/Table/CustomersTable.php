<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Customers Model
 *
 * @property \App\Model\Table\CustomersTable&\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\SubSubCategoriesTable&\Cake\ORM\Association\BelongsTo $SubSubCategories
 * @property \App\Model\Table\CustomerQueriesTable&\Cake\ORM\Association\HasMany $CustomerQueries
 * @property \App\Model\Table\CustomersTable&\Cake\ORM\Association\HasMany $Customers
 * @property &\Cake\ORM\Association\HasMany $PaymentPages
 *
 * @method \App\Model\Entity\Customer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Customer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Customer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Customer|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Customer saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Customer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Customer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Customer findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CustomersTable extends Table
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

        $this->setTable('customers');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
        ]);
        $this->belongsTo('SubSubCategories', [
            'foreignKey' => 'sub_sub_category_id',
        ]);
        $this->hasMany('CustomerQueries', [
            'foreignKey' => 'customer_id',
        ]);
        $this->hasMany('Customers', [
            'foreignKey' => 'customer_id',
        ]);
        $this->hasMany('PaymentPages', [
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('qualification')
            ->maxLength('qualification', 255)
            ->requirePresence('qualification', 'create')
            ->notEmptyString('qualification');

        $validator
            ->scalar('profession')
            ->maxLength('profession', 255)
            ->requirePresence('profession', 'create')
            ->notEmptyString('profession');

        $validator
            ->scalar('experience')
            ->maxLength('experience', 255)
            ->requirePresence('experience', 'create')
            ->notEmptyString('experience');

        $validator
            ->scalar('address')
            ->maxLength('address', 255)
            ->requirePresence('address', 'create')
            ->notEmptyString('address');

        $validator
            ->scalar('price')
            ->maxLength('price', 255)
            ->requirePresence('price', 'create')
            ->notEmptyString('price');

        $validator
            ->scalar('image')
            ->maxLength('image', 255)
            ->requirePresence('image', 'create')
            ->notEmptyFile('image');

        $validator
            ->scalar('banner_description')
            ->maxLength('banner_description', 1000)
            ->requirePresence('banner_description', 'create')
            ->notEmptyString('banner_description');

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
        $rules->add($rules->existsIn(['sub_sub_category_id'], 'SubSubCategories'));

        return $rules;
    }
}
