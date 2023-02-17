<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SubSubCategory Entity
 *
 * @property int $id
 * @property int $category_id
 * @property int $sub_category_id
 * @property string $name
 * @property string $banner_description
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\SubCategory $sub_category
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\SubSubCategory[] $sub_sub_categories
 */
class SubSubCategory extends Entity
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
        'category_id' => true,
        'sub_category_id' => true,
        'name' => true,
        'banner_description' => true,
        'created' => true,
        'modified' => true,
        'category' => true,
        'sub_category' => true,
        'customer' => true,
        'sub_sub_categories' => true,
    ];
}
