<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PaymentPage Entity
 *
 * @property int $id
 * @property string|null $payment_id
 * @property string|null $customer_id
 * @property string $payment_date
 * @property string|null $reference_number
 * @property string $bank_name
 * @property string|null $total_amount
 * @property string|null $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Payment $payment
 * @property \App\Model\Entity\Customer $customer
 */
class PaymentPage extends Entity
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
        'payment_id' => true,
        'customer_id' => true,
        'payment_date' => true,
        'reference_number' => true,
        'bank_name' => true,
        'total_amount' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'payment' => true,
        'customer' => true,
    ];
}
