<?php

namespace jugger\bitrix\ar;

use jugger\ar\ActiveRecord;
use jugger\ar\relations\ManyRelation;
use jugger\model\field\DatetimeField;
use jugger\model\field\IntField;
use jugger\model\field\TextField;
use jugger\ar\validator\PrimaryValidator;
use jugger\model\validator\RangeValidator;
use jugger\model\validator\RequireValidator;

class Iblock extends ActiveRecord
{
    public static function getTableName(): string
    {
        return 'b_iblock';
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
                'value' => 'CURRENT_TIMESTAMP',
                'format' => 'timestamp',
                'validators' => [
                    new RequireValidator(),
                ],
            ]),
            new TextField([
                'name' => 'iblock_type_id',
                'validators' => [
                    new RequireValidator(),
                    new RangeValidator(0, 50),
                ],
            ]),
            new TextField([
                'name' => 'lid',
                'validators' => [
                    new RequireValidator(),
                    new RangeValidator(0, 2),
                ],
            ]),
            new TextField([
                'name' => 'code',
                'validators' => [
                    new RangeValidator(0, 50),
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
                'name' => 'list_page_url',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'detail_page_url',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'section_page_url',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'canonical_page_url',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new IntField([
                'name' => 'picture',
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
            new IntField([
                'name' => 'rss_ttl',
                'value' => '24',
                'validators' => [
                    new RequireValidator(),
                ],
            ]),
            new TextField([
                'name' => 'rss_active',
                'value' => 'Y',
                'validators' => [
                    new RequireValidator(),
                    new RangeValidator(0, 1),
                ],
            ]),
            new TextField([
                'name' => 'rss_file_active',
                'value' => 'N',
                'validators' => [
                    new RequireValidator(),
                    new RangeValidator(0, 1),
                ],
            ]),
            new IntField([
                'name' => 'rss_file_limit',
            ]),
            new IntField([
                'name' => 'rss_file_days',
            ]),
            new TextField([
                'name' => 'rss_yandex_active',
                'value' => 'N',
                'validators' => [
                    new RequireValidator(),
                    new RangeValidator(0, 1),
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
            new TextField([
                'name' => 'index_element',
                'value' => 'Y',
                'validators' => [
                    new RequireValidator(),
                    new RangeValidator(0, 1),
                ],
            ]),
            new TextField([
                'name' => 'index_section',
                'value' => 'N',
                'validators' => [
                    new RequireValidator(),
                    new RangeValidator(0, 1),
                ],
            ]),
            new TextField([
                'name' => 'workflow',
                'value' => 'Y',
                'validators' => [
                    new RequireValidator(),
                    new RangeValidator(0, 1),
                ],
            ]),
            new TextField([
                'name' => 'bizproc',
                'value' => 'N',
                'validators' => [
                    new RequireValidator(),
                    new RangeValidator(0, 1),
                ],
            ]),
            new TextField([
                'name' => 'section_chooser',
                'validators' => [
                    new RangeValidator(0, 1),
                ],
            ]),
            new TextField([
                'name' => 'list_mode',
                'validators' => [
                    new RangeValidator(0, 1),
                ],
            ]),
            new TextField([
                'name' => 'rights_mode',
                'validators' => [
                    new RangeValidator(0, 1),
                ],
            ]),
            new TextField([
                'name' => 'section_property',
                'validators' => [
                    new RangeValidator(0, 1),
                ],
            ]),
            new TextField([
                'name' => 'property_index',
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
            new IntField([
                'name' => 'last_conv_element',
                'validators' => [
                    new RequireValidator(),
                ],
            ]),
            new IntField([
                'name' => 'socnet_group_id',
            ]),
            new TextField([
                'name' => 'edit_file_before',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'edit_file_after',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'sections_name',
                'validators' => [
                    new RangeValidator(0, 100),
                ],
            ]),
            new TextField([
                'name' => 'section_name',
                'validators' => [
                    new RangeValidator(0, 100),
                ],
            ]),
            new TextField([
                'name' => 'elements_name',
                'validators' => [
                    new RangeValidator(0, 100),
                ],
            ]),
            new TextField([
                'name' => 'element_name',
                'validators' => [
                    new RangeValidator(0, 100),
                ],
            ]),
        ];
    }

    public static function getRelations(): array
    {
        return [
            'elements' => new ManyRelation('id', 'iblock_id', 'IblockElement'),
            'sections' => new ManyRelation('id', 'iblock_id', 'IblockSection'),
        ];
    }
}
