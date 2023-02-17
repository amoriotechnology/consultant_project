<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BookAppointments Model
 *
 * @method \App\Model\Entity\BookAppointment get($primaryKey, $options = [])
 * @method \App\Model\Entity\BookAppointment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BookAppointment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BookAppointment|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BookAppointment saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BookAppointment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BookAppointment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BookAppointment findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BookAppointmentsTable extends Table
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

        $this->setTable('book_appointments');
        $this->setDisplayField('name');
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
            ->scalar('visiting_hours')
            ->maxLength('visiting_hours', 255)
            ->requirePresence('visiting_hours', 'create')
            ->notEmptyString('visiting_hours');

        $validator
            ->scalar('consultant_name')
            ->maxLength('consultant_name', 255)
            ->requirePresence('consultant_name', 'create')
            ->notEmptyString('consultant_name');

        $validator
            ->scalar('profession')
            ->maxLength('profession', 255)
            ->requirePresence('profession', 'create')
            ->notEmptyString('profession');

        $validator
            ->scalar('location')
            ->maxLength('location', 255)
            ->requirePresence('location', 'create')
            ->notEmptyString('location');

        $validator
            ->scalar('specify_address')
            ->maxLength('specify_address', 500)
            ->allowEmptyString('specify_address');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('mobile_number')
            ->maxLength('mobile_number', 255)
            ->requirePresence('mobile_number', 'create')
            ->notEmptyString('mobile_number');

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
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
