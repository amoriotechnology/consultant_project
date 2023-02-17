<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PaymentPages Model
 *
 * @property \App\Model\Table\PaymentsTable&\Cake\ORM\Association\BelongsTo $Payments
 * @property \App\Model\Table\CustomersTable&\Cake\ORM\Association\BelongsTo $Customers
 *
 * @method \App\Model\Entity\PaymentPage get($primaryKey, $options = [])
 * @method \App\Model\Entity\PaymentPage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PaymentPage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PaymentPage|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PaymentPage saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PaymentPage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PaymentPage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PaymentPage findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PaymentPagesTable extends Table
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

        $this->setTable('payment_pages');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Payments', [
            'foreignKey' => 'payment_id',
        ]);
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
            ->scalar('payment_date')
            ->maxLength('payment_date', 255)
            ->requirePresence('payment_date', 'create')
            ->notEmptyString('payment_date');

        $validator
            ->scalar('reference_number')
            ->maxLength('reference_number', 255)
            ->allowEmptyString('reference_number');

        $validator
            ->scalar('bank_name')
            ->maxLength('bank_name', 255)
            ->requirePresence('bank_name', 'create')
            ->notEmptyString('bank_name');

        $validator
            ->scalar('total_amount')
            ->maxLength('total_amount', 255)
            ->allowEmptyString('total_amount');

        $validator
            ->scalar('status')
            ->maxLength('status', 255)
            ->allowEmptyString('status');

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
        $rules->add($rules->existsIn(['payment_id'], 'Payments'));
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));

        return $rules;
    }
}
