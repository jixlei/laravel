<?php

namespace App\Admin\Extensions;

use Encore\Admin\Form\Field;

class UEditor extends Field
{
    protected $view = 'admin.ueditor';

    protected static $js = [
        '/vendor/ueditor/ueditor.config.js',
        '/vendor/ueditor/ueditor.all.min.js',
        '/vendor/ueditor/lang/zh-cn/zh-cn.js',
    ];

    public function render()
    {
        $name = $this->formatName($this->column);

        $this->script = <<<EOT
    var ue = UE.getEditor('{$this->id}');
EOT;
        return parent::render();
    }
}