<?php

namespace App\Admin\Controllers;

use App\LineUser;
use Encore\Admin\Admin;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Widgets\Form as ModalForm;

class LineUserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'LineUser';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new LineUser());


        $grid->model()->latest();
        $grid->disableCreateButton();
        $grid->actions(function ($actions) {
            $actions->disableEdit();
            $actions->disableView();
        });

        $grid->column('id', __('Id'));
        $grid->column('official_id', __('Official id'));
        $grid->column('name', __('Name'))->modal('send line message', function ($model) {
            $form = new ModalForm();
            $form->hidden('user_id')->default($model->official_id);
            $form->textarea('message');
            $form->action('/admin/line_send');
            $form->method('POST');
            return $form->render();
        });
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        Admin::script("$('.modal-backdrop').remove();");

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(LineUser::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('official_id', __('Official id'));
        $show->field('name', __('Name'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new LineUser());

        $form->text('official_id', __('Official id'));
        $form->text('name', __('Name'));

        return $form;
    }
}
