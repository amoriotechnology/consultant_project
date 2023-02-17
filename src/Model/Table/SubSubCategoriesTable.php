<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SubSubCategories Model
 *
 * @property \App\Model\Table\CategoriesTable&\Cake\ORM\Association\BelongsTo $Categories
 * @property \App\Model\Table\SubCategoriesTable&\Cake\ORM\Association\BelongsTo $SubCategories
 * @property \App\Model\Table\CustomersTable&\Cake\ORM\Association\HasMany $Customers
 *
 * @method \App\Model\Entity\SubSubCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\SubSubCategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SubSubCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SubSubCategory|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SubSubCategory saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SubSubCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SubSubCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SubSubCategory findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SubSubCategoriesTable extends Table
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

        $this->setTable('sub_sub_categories');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('SubCategories', [
            'foreignKey' => 'sub_category_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Customers', [
            'foreignKey' => 'sub_sub_category_id',
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
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

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
        $rules->add($rules->existsIn(['category_id'], 'Categories'));
        $rules->add($rules->existsIn(['sub_category_id'], 'SubCategories'));

        return $rules;
    }
}
