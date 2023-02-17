<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BookAppointment Entity
 *
 * @property int $id
 * @property string $visiting_hours
 * @property string $consultant_name
 * @property string $profession
 * @property string $location
 * @property string|null $specify_address
 * @property string $name
 * @property string|null $email
 * @property string $mobile_number
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class BookAppointment extends Entity
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
        'visiting_hours' => true,
        'consultant_name' => true,
        'profession' => true,
        'location' => true,
        'specify_address' => true,
        'name' => true,
        'email' => true,
        'mobile_number' => true,
        'created' => true,
        'modified' => true,
    ];
}
