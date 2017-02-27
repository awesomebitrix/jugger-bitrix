<?php

namespace jugger\bitrix\ar;

use jugger\ar\ActiveRecord;
use jugger\ar\relations\OneRelation;
use jugger\ar\relations\ManyRelation;
use jugger\model\field\DatetimeField;
use jugger\model\field\IntField;
use jugger\model\field\TextField;
use jugger\ar\validator\PrimaryValidator;
use jugger\model\validator\RangeValidator;
use jugger\model\validator\RequireValidator;

class IblockSection extends ActiveRecord
{
    public static function getTableName(): string
    {
        return 'b_iblock_section';
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
                'name' => 'modified_by',
            ]),
            new DatetimeField([
                'name' => 'date_create',
                'format' => 'Y-m-d H:i:s',
            ]),
            new IntField([
                'name' => 'created_by',
            ]),
            new IntField([
                'name' => 'iblock_id',
                'validators' => [
                    new RequireValidator(),
                ],
            ]),
            new IntField([
                'name' => 'iblock_section_id',
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
                'name' => 'global_active',
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
                'name' => 'name',
                'validators' => [
                    new RequireValidator(),
                    new RangeValidator(0, 255),
                ],
            ]),
            new IntField([
                'name' => 'picture',
            ]),
            new IntField([
                'name' => 'left_margin',
            ]),
            new IntField([
                'name' => 'right_margin',
            ]),
            new IntField([
                'name' => 'depth_level',
            ]),
            new TextField([
                'name' => 'description',
                'validators' => [
                    new RangeValidator(0, 65535),
                ],
            ]),
            new TextField([
                'name' => 'description_type',
                'value' => 'text',
                'validators' => [
                    new RequireValidator(),
                    new RangeValidator(0, 4),
                ],
            ]),
            new TextField([
                'name' => 'searchable_content',
                'validators' => [
                    new RangeValidator(0, 65535),
                ],
            ]),
            new TextField([
                'name' => 'code',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'xml_id',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'tmp_id',
                'validators' => [
                    new RangeValidator(0, 40),
                ],
            ]),
            new IntField([
                'name' => 'detail_picture',
            ]),
            new IntField([
                'name' => 'socnet_group_id',
            ]),
        ];
    }

    public static function getRelations(): array
    {
        return [
            'iblock' => new OneRelation('iblock_id', 'id', 'Iblock'),
            'parent' => new OneRelation('iblock_section_id', 'id', 'IblockSection'),
            'childs' => new ManyRelation('id', 'iblock_section_id', 'IblockSection'),
            'elements' => (new ManyRelation('id', 'iblock_section_id', 'IblockSectionElement'))->next('iblock_element_id', 'id', 'IblockElement'),
        ];
    }
}
