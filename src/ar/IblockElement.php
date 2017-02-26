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

class IblockElement extends ActiveRecord
{
    public function getPropertyByCode(string $code)
    {
        return IblockElementProperty::find()->where([
            'iblock_element_id' => $this->id,
            'iblock_property_id' => IblockProperty::find()->where([
                'code' => $code,
            ]),
        ]);
    }

    public static function getTableName(): string
    {
        return 'b_iblock_element';
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
                'format' => 'Y-m-d H:i:s',
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
            new DatetimeField([
                'name' => 'active_from',
                'format' => 'Y-m-d H:i:s',
            ]),
            new DatetimeField([
                'name' => 'active_to',
                'format' => 'Y-m-d H:i:s',
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
                'name' => 'preview_picture',
            ]),
            new TextField([
                'name' => 'preview_text',
                'validators' => [
                    new RangeValidator(0, 65535),
                ],
            ]),
            new TextField([
                'name' => 'preview_text_type',
                'value' => 'text',
                'validators' => [
                    new RequireValidator(),
                    new RangeValidator(0, 4),
                ],
            ]),
            new IntField([
                'name' => 'detail_picture',
            ]),
            new TextField([
                'name' => 'detail_text',
            ]),
            new TextField([
                'name' => 'detail_text_type',
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
            new IntField([
                'name' => 'wf_status_id',
                'value' => '1',
            ]),
            new IntField([
                'name' => 'wf_parent_element_id',
            ]),
            new TextField([
                'name' => 'wf_new',
                'validators' => [
                    new RangeValidator(0, 1),
                ],
            ]),
            new IntField([
                'name' => 'wf_locked_by',
            ]),
            new DatetimeField([
                'name' => 'wf_date_lock',
                'format' => 'Y-m-d H:i:s',
            ]),
            new TextField([
                'name' => 'wf_comments',
                'validators' => [
                    new RangeValidator(0, 65535),
                ],
            ]),
            new TextField([
                'name' => 'in_sections',
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
                'name' => 'code',
                'validators' => [
                    new RangeValidator(0, 255),
                ],
            ]),
            new TextField([
                'name' => 'tags',
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
                'name' => 'wf_last_history_id',
            ]),
            new IntField([
                'name' => 'show_counter',
            ]),
            new DatetimeField([
                'name' => 'show_counter_start',
                'format' => 'Y-m-d H:i:s',
            ]),
        ];
    }

    public static function getRelations(): array
    {
        return [
            'author' => new OneRelation('created_by', 'id', 'User'),
            'iblock' => new OneRelation('iblock_id', 'id', 'Iblock'),
            'section' => new OneRelation('iblock_section_id', 'id', 'IblockSection'),
            'sections' => (new ManyRelation('id', 'iblock_element_id', 'IblockSectionElement'))->next('iblock_section_id', 'id', 'IblockSection'),
            'properties' => new ManyRelation('id', 'iblock_element_id', 'IblockElementProperty'),
        ];
    }
}
