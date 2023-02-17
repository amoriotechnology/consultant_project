<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $id
 * @property string|null $customer_id
 * @property int|null $sub_sub_category_id
 * @property string $name
 * @property string $qualification
 * @property string $profession
 * @property string $experience
 * @property string $address
 * @property string $price
 * @property string $image
 * @property string $banner_description
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Customer[] $customers
 * @property \App\Model\Entity\SubSubCategory $sub_sub_category
 * @property \App\Model\Entity\CustomerQuery[] $customer_queries
 */
class Customer extends Entity
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
        'customer_id' => true,
        'sub_sub_category_id' => true,
        'name' => true,
        'qualification' => true,
        'profession' => true,
        'experience' => true,
        'address' => true,
        'price' => true,
        'image' => true,
        'banner_description' => true,
        'created' => true,
        'modified' => true,
        'customers' => true,
        'sub_sub_category' => true,
        'customer_queries' => true,
    ];
}
