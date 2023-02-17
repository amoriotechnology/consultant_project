<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CustomerQuery Entity
 *
 * @property int $id
 * @property string $message
 * @property string $consultation
 * @property string|null $customer_id
 * @property string $name
 * @property string $mobile
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Customer $customer
 */
class CustomerQuery extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'message' => true,
        'consultation' => true,
        'customer_id' => true,
        'name' => true,
        'mobile' => true,
        'created' => true,
        'modified' => true,
        'customer' => true,
    ];
}
