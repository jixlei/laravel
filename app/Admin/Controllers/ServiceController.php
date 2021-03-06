<?php

namespace App\Admin\Controllers;

use App\Service;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ServiceController extends Controller
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

            $content->header(trans('field.service'));
            $content->description(trans('field.list'));

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

            $content->header(trans('field.service'));
            $content->description(trans('field.edit'));

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

            $content->header(trans('field.service'));
            $content->description(trans('field.add'));

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
        return Admin::grid(Service::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

            $grid->column('title', trans('field.title'));
            $grid->image(trans('field.image'))->display(function ($image) {
                return display_image($image);
            });
            $grid->summary(trans('field.summary'));

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
        return Admin::form(Service::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->text('title', trans('field.title'));
            $form->image('image', trans('field.image'))->name(function ($file) {
                return getfile_name($file);
            });
            $form->textarea('summary', trans('field.summary'))->rows(2);
            $form->ueditor('content', trans('field.content'));

            $form->display('created_at', trans('field.ctime'));
            $form->display('updated_at', trans('field.utime'));
        });
    }
}
