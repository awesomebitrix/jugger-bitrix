<?php

namespace jugger\bitrix\ar;

use jugger\ar\ActiveRecord;
use jugger\model\field\DatetimeField;
use jugger\model\field\IntField;
use jugger\model\field\TextField;
use jugger\ar\validator\PrimaryValidator;
use jugger\model\validator\RangeValidator;
use jugger\model\validator\RequireValidator;

class User extends ActiveRecord
{
    public static function getTableName(): string
    {
        return 'b_user';
    }

    public static function getSchema(): array
    {
        return [
            new IntField([
                'name' => 'id',
                'validators' => [
                    new PrimaryValidator(),
                ],
            ]),
            new DatetimeField([
                'name' => 'timestamp_x',
                'format' => 'timestamp',
            ]),
            new TextField([
                'name' => 'login',
                'validators' => [
                    new RequireValidator(),
                    new RangeValidator(0, 50),
                ],
            ]),
            new TextField([
                'name' => 'password',
                'validators' => [
                    new RequireValidator(),
                    new RangeValidator(0, 50),
                ],
            ]),
            new TextField([
                'name' => 'checkword',
                'validators' => [
                    new RangeValidator(0, 50),
                ],
            ]),
            new TextField([
                'name' => 'active',
                'value' => 'Y',
                'validators' => [
                    new RequireValidator(),
                    new RangeValidator(0, 1),
                ],
            ]),
            new TextField([
                'name' => 'name',
                'validators' => [
                    new RangeValidator(0, 50),
                ],
            ]),
            new TextField([
                'name' => 'last_name',
                'validators' => [
                    new RangeValidator(0, 50),
                ],
            ]),
            new TextField([
                'name' => 'email',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new DatetimeField([
                'name' => 'last_login',
                'format' => 'Y-m-d H:i:s',
            ]),
            new DatetimeField([
                'name' => 'date_register',
                'format' => 'Y-m-d H:i:s',
                'validators' => [
                    new RequireValidator(),
                ],
            ]),
            new TextField([
                'name' => 'lid',
                'validators' => [
                    new RangeValidator(0, 2),
                ],
            ]),
            new TextField([
                'name' => 'personal_profession',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'personal_www',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'personal_icq',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'personal_gender',
                'validators' => [
                    new RangeValidator(0, 1),
                ],
            ]),
            new TextField([
                'name' => 'personal_birthdate',
                'validators' => [
                    new RangeValidator(0, 50),
                ],
            ]),
            new IntField([
                'name' => 'personal_photo',
            ]),
            new TextField([
                'name' => 'personal_phone',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'personal_fax',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'personal_mobile',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'personal_pager',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'personal_street',
                'validators' => [
                    new RangeValidator(0, 65535),
                ],
            ]),
            new TextField([
                'name' => 'personal_mailbox',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'personal_city',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'personal_state',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'personal_zip',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'personal_country',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'personal_notes',
                'validators' => [
                    new RangeValidator(0, 65535),
                ],
            ]),
            new TextField([
                'name' => 'work_company',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'work_department',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'work_position',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'work_www',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'work_phone',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'work_fax',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'work_pager',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'work_street',
                'validators' => [
                    new RangeValidator(0, 65535),
                ],
            ]),
            new TextField([
                'name' => 'work_mailbox',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'work_city',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'work_state',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'work_zip',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'work_country',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'work_profile',
                'validators' => [
                    new RangeValidator(0, 65535),
                ],
            ]),
            new IntField([
                'name' => 'work_logo',
            ]),
            new TextField([
                'name' => 'work_notes',
                'validators' => [
                    new RangeValidator(0, 65535),
                ],
            ]),
            new TextField([
                'name' => 'admin_notes',
                'validators' => [
                    new RangeValidator(0, 65535),
                ],
            ]),
            new TextField([
                'name' => 'stored_hash',
                'validators' => [
                    new RangeValidator(0, 32),
                ],
            ]),
            new TextField([
                'name' => 'xml_id',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new DatetimeField([
                'name' => 'personal_birthday',
                'format' => 'Y-m-d',
            ]),
            new TextField([
                'name' => 'external_auth_id',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new DatetimeField([
                'name' => 'checkword_time',
                'format' => 'Y-m-d H:i:s',
            ]),
            new TextField([
                'name' => 'second_name',
                'validators' => [
                    new RangeValidator(0, 50),
                ],
            ]),
            new TextField([
                'name' => 'confirm_code',
                'validators' => [
                    new RangeValidator(0, 8),
                ],
            ]),
            new IntField([
                'name' => 'login_attempts',
            ]),
            new DatetimeField([
                'name' => 'last_activity_date',
                'format' => 'Y-m-d H:i:s',
            ]),
            new TextField([
                'name' => 'auto_time_zone',
                'validators' => [
                    new RangeValidator(0, 1),
                ],
            ]),
            new TextField([
                'name' => 'time_zone',
                'validators' => [
                    new RangeValidator(0, 50),
                ],
            ]),
            new IntField([
                'name' => 'time_zone_offset',
            ]),
            new TextField([
                'name' => 'title',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'bx_user_id',
                'validators' => [
                    new RangeValidator(0, 32),
                ],
            ]),
            new TextField([
                'name' => 'language_id',
                'validators' => [
                    new RangeValidator(0, 2),
                ],
            ]),
        ];
    }

    public static function getRelations(): array
    {
        return [
            'elements' => new OneRelation('id', 'created_by', 'IblockElement'),
        ];
    }
}
