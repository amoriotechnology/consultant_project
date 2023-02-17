<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SiteSetting Entity
 *
 * @property int $id
 * @property string $meta_description
 * @property string $meta_title
 * @property string $meta_keyword
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class SiteSetting extends Entity
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
        'meta_description' => true,
        'meta_title' => true,
        'meta_keyword' => true,
        'created' => true,
        'modified' => true,
    ];
}
