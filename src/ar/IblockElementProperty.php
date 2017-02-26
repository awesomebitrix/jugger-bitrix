<?php

namespace jugger\bitrix\ar;

use jugger\ar\ActiveRecord;
use jugger\ar\relations\OneRelation;
use jugger\model\field\FloatField;
use jugger\model\field\IntField;
use jugger\model\field\TextField;
use jugger\ar\validator\PrimaryValidator;
use jugger\model\validator\RangeValidator;
use jugger\model\validator\RequireValidator;

class IblockElementProperty extends ActiveRecord
{
    public static function getTableName(): string
    {
        return 'b_iblock_element_property';
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
            new IntField([
                'name' => 'iblock_property_id',
                'validators' => [
                    new RequireValidator(),
                ],
            ]),
            new IntField([
                'name' => 'iblock_element_id',
                'validators' => [
                    new RequireValidator(),
                ],
            ]),
            new TextField([
                'name' => 'value',
                'validators' => [
                    new RequireValidator(),
                    new RangeValidator(0, 65535),
                ],
            ]),
            new TextField([
                'name' => 'value_type',
                'value' => 'text',
                'validators' => [
                    new RequireValidator(),
                    new RangeValidator(0, 4),
                ],
            ]),
            new IntField([
                'name' => 'value_enum',
            ]),
            new FloatField([
                'name' => 'value_num',
            ]),
            new TextField([
                'name' => 'description',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
        ];
    }

    public static function getRelations(): array
    {
        return [
            'enum' => new OneRelation('value_enum', 'id', 'IblockPropertyEnum'),
            'element' => new OneRelation('iblock_element_id', 'id', 'IblockElement'),
            'property' => new OneRelation('iblock_property_id', 'id', 'IblockProperty'),
        ];
    }
}
