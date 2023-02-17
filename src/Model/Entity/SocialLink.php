<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SocialLink Entity
 *
 * @property int $id
 * @property string|null $facebook_link
 * @property string|null $twitter_link
 * @property string|null $instagram_link
 * @property string|null $linkedin_link
 * @property string|null $pintrest_link
 * @property string|null $youtube_link
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class SocialLink extends Entity
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
        'facebook_link' => true,
        'twitter_link' => true,
        'instagram_link' => true,
        'linkedin_link' => true,
        'pintrest_link' => true,
        'youtube_link' => true,
        'created' => true,
        'modified' => true,
    ];
}
