<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SocialLinks Model
 *
 * @method \App\Model\Entity\SocialLink get($primaryKey, $options = [])
 * @method \App\Model\Entity\SocialLink newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SocialLink[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SocialLink|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SocialLink saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SocialLink patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SocialLink[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SocialLink findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SocialLinksTable extends Table
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

        $this->setTable('social_links');
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
            ->scalar('facebook_link')
            ->maxLength('facebook_link', 255)
            ->allowEmptyString('facebook_link');

        $validator
            ->scalar('twitter_link')
            ->maxLength('twitter_link', 255)
            ->allowEmptyString('twitter_link');

        $validator
            ->scalar('instagram_link')
            ->maxLength('instagram_link', 255)
            ->allowEmptyString('instagram_link');

        $validator
            ->scalar('linkedin_link')
            ->maxLength('linkedin_link', 255)
            ->allowEmptyString('linkedin_link');

        $validator
            ->scalar('pintrest_link')
            ->maxLength('pintrest_link', 255)
            ->allowEmptyString('pintrest_link');

        $validator
            ->scalar('youtube_link')
            ->maxLength('youtube_link', 255)
            ->allowEmptyString('youtube_link');

        return $validator;
    }
}
