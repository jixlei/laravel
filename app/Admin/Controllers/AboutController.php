<?php

namespace App\Admin\Controllers;

use App\About;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class AboutController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(About::class, function (Grid $grid) {
            $grid->id('ID')->sortable();
            
            $grid->column('title', trans('field.title'));
            $grid->image(trans('field.image'))->display(function ($image) {
                return display_image($image);
            });
            $grid->summary(trans('field.summary'));
            $states = [
                'on'  => ['value' => 1, 'text' => trans('field.yes'), 'color' => 'success'],
                'off' => ['value' => 0, 'text' => trans('field.no'), 'color' => 'danger'],
            ];
            $grid->isbottom(trans('field.isbottom'))->switch($states);

            $grid->created_at(trans('field.ctime'));
            $grid->updated_at(trans('field.utime'));

            $grid->disableExport();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(About::class, function (Form $form) {
            $form->display('id', 'ID');
            
            $form->text('title', trans('field.title'));
            $form->image('image', trans('field.image'))->name(function ($file) {
                return getfile_name($file);
            });
            $form->textarea('summary', trans('field.summary'))->rows(2);
            $form->ueditor('content', trans('field.content'));

            $states = [
                'on'  => ['value' => 1, 'text' => trans('field.yes'), 'color' => 'success'],
                'off' => ['value' => 0, 'text' => trans('field.no'), 'color' => 'danger'],
            ];
            $form->switch('isbottom', trans('field.isbottom'))->states($states);

            $form->display('created_at', trans('field.ctime'));
            $form->display('updated_at', trans('field.utime'));
        });
    }
}
