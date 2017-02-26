<?php

namespace jugger\bitrix\ar;

use jugger\ar\ActiveRecord;
use jugger\ar\relations\OneRelation;
use jugger\model\field\IntField;
use jugger\model\validator\RequireValidator;

class IblockSectionElement extends ActiveRecord
{
    public static function getTableName(): string
    {
        return 'b_iblock_section_element';
    }

    public static function getSchema(): array
    {
        return [
            new IntField([
                'name' => 'iblock_section_id',
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
            new IntField([
                'name' => 'additional_property_id',
            ]),
        ];
    }

    public static function getRelations(): array
    {
        return [
            'element' => new OneRelation('iblock_element_id', 'id', 'IblockElement'),
            'section' => new OneRelation('iblock_section_id', 'id', 'IblockSection'),
        ];
    }
}
