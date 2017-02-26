<?php

namespace jugger\bitrix\ar;

use jugger\ar\ActiveRecord;
use jugger\ar\relations\OneRelation;
use jugger\model\field\IntField;
use jugger\model\field\TextField;
use jugger\ar\validator\PrimaryValidator;
use jugger\model\validator\RangeValidator;
use jugger\model\validator\RequireValidator;

class IblockPropertyEnum extends ActiveRecord
{
    public static function getTableName(): string
    {
        return 'b_iblock_property_enum';
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
                'name' => 'property_id',
                'validators' => [
                    new RequireValidator(),
                ],
            ]),
            new TextField([
                'name' => 'value',
                'validators' => [
                    new RequireValidator(),
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'def',
                'value' => 'N',
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
                'name' => 'xml_id',
                'validators' => [
                    new RequireValidator(),
                    new RangeValidator(0, 200),
                ],
            ]),
            new TextField([
                'name' => 'tmp_id',
                'validators' => [
                    new RangeValidator(0, 40),
                ],
            ]),
        ];
    }

    public static function getRelations(): array
    {
        return [
            'property' => new OneRelation('property_id', 'id', 'IblockProperty'),
        ];
    }
}
