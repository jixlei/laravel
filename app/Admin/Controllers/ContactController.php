<?php

namespace App\Admin\Controllers;

use App\Contact;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ContactController extends Controller
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

            $content->header(trans('field.contact'));
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

            $content->header(trans('field.contact'));
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

            $content->header(trans('field.contact'));
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
        return Admin::grid(Contact::class, function (Grid $grid) {
            $grid->id('ID')->sortable();
            
            $grid->column('title', trans('field.title'));
            $grid->phone(trans('field.mobile'));
            $grid->qq(trans('field.qq'));
            $grid->email(trans('field.email'));
            $grid->address(trans('field.address'));
            
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
        return Admin::form(Contact::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->text('title', trans('field.title'));
            $form->text('phone', trans('field.mobile'));
            $form->text('qq', trans('field.qq'));
            $form->text('email', trans('field.email'));
            $form->text('address', trans('field.address'));
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
