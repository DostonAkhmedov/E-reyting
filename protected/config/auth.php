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
    '1' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Teacher',
        'children' => array(
            'user',          // �������� ���������� ��, ��� ��������� ������������
        ),
        'bizRule' => null,
        'data' => null
    ),
    '0' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Admin',
        'children' => array(
            'teacher',         // �������� ������ ��, ��� ��������� ����������
        ),
        'bizRule' => null,
        'data' => null
    ),
);