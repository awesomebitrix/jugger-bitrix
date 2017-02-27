<?php

namespace jugger\bitrix\ar;

use jugger\ar\ActiveRecord;
use jugger\model\field\DatetimeField;
use jugger\model\field\IntField;
use jugger\model\field\TextField;
use jugger\ar\validator\PrimaryValidator;
use jugger\model\validator\RangeValidator;
use jugger\model\validator\RequireValidator;

class IblockProperty extends ActiveRecord
{
    public static function getTableName(): string
    {
        return 'b_iblock_property';
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
            new IntField([
                'name' => 'iblock_id',
                'validators' => [
                    new RequireValidator(),
                ],
            ]),
            new TextField([
                'name' => 'name',
                'validators' => [
                    new RequireValidator(),
                    new RangeValidator(0, 255),
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
            new IntField([
                'name' => 'sort',
                'value' => '500',
                'validators' => [
                    new RequireValidator(),
                ],
            ]),
            new TextField([
                'name' => 'code',
                'validators' => [
                    new RangeValidator(0, 50),
                ],
            ]),
            new TextField([
                'name' => 'default_value',
                'validators' => [
                    new RangeValidator(0, 65535),
                ],
            ]),
            new TextField([
                'name' => 'property_type',
                'value' => 'S',
                'validators' => [
                    new RequireValidator(),
                    new RangeValidator(0, 1),
                ],
            ]),
            new IntField([
                'name' => 'row_count',
                'value' => '1',
                'validators' => [
                    new RequireValidator(),
                ],
            ]),
            new IntField([
                'name' => 'col_count',
                'value' => '30',
                'validators' => [
                    new RequireValidator(),
                ],
            ]),
            new TextField([
                'name' => 'list_type',
                'value' => 'L',
                'validators' => [
                    new RequireValidator(),
                    new RangeValidator(0, 1),
                ],
            ]),
            new TextField([
                'name' => 'multiple',
                'value' => 'N',
                'validators' => [
                    new RequireValidator(),
                    new RangeValidator(0, 1),
                ],
            ]),
            new TextField([
                'name' => 'xml_id',
                'validators' => [
                    new RangeValidator(0, 100),
                ],
            ]),
            new TextField([
                'name' => 'file_type',
                'validators' => [
                    new RangeValidator(0, 200),
                ],
            ]),
            new IntField([
                'name' => 'multiple_cnt',
            ]),
            new TextField([
                'name' => 'tmp_id',
                'validators' => [
                    new RangeValidator(0, 40),
                ],
            ]),
            new IntField([
                'name' => 'link_iblock_id',
            ]),
            new TextField([
                'name' => 'with_description',
                'validators' => [
                    new RangeValidator(0, 1),
                ],
            ]),
            new TextField([
                'name' => 'searchable',
                'value' => 'N',
                'validators' => [
                    new RequireValidator(),
                    new RangeValidator(0, 1),
                ],
            ]),
            new TextField([
                'name' => 'filtrable',
                'value' => 'N',
                'validators' => [
                    new RequireValidator(),
                    new RangeValidator(0, 1),
                ],
            ]),
            new TextField([
                'name' => 'is_required',
                'validators' => [
                    new RangeValidator(0, 1),
                ],
            ]),
            new IntField([
                'name' => 'version',
                'value' => '1',
                'validators' => [
                    new RequireValidator(),
                ],
            ]),
            new TextField([
                'name' => 'user_type',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'user_type_settings',
                'validators' => [
                    new RangeValidator(0, 65535),
                ],
            ]),
            new TextField([
                'name' => 'hint',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
        ];
    }

    public static function getRelations(): array
    {
        return [
            'iblock' => new OneRelation('iblock_id', 'id', 'Iblock'),
            'enums' => new ManyRelation('id', 'property_id', 'IblockPropertyEnum'),
        ];
    }
}
