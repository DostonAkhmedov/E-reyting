<?php
/**
 * Created by PhpStorm.
 * User: D05T0N
 * Date: 3/21/2016
 * Time: 6:11 PM
 */
return array(
    'guest' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Guest',
        'bizRule' => null,
        'data' => null
    ),
    'user' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'User',
        'children' => array(
            'guest', // ������������ �� �����
        ),
        'bizRule' => null,
        'data' => null
    ),
    'moderator' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Moderator',
        'children' => array(
            'user',          // �������� ���������� ��, ��� ��������� ������������
        ),
        'bizRule' => null,
        'data' => null
    ),
    '0' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Administrator',
        'children' => array(
            'moderator',         // �������� ������ ��, ��� ��������� ����������
        ),
        'bizRule' => null,
        'data' => null
    ),
);