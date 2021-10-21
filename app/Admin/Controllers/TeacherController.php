<?php

namespace App\Admin\Controllers;

use App\Teacher;
use Encore\Admin\Admin;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Widgets\Form as ModalForm;

class TeacherController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Teacher';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Teacher());

        $grid->disableCreateButton();
        $grid->actions(function($actions) {
            $actions->disableEdit();
            $actions->disableView();
        });

        $grid->model()->load(['school:name', 'manageSchools' => function($query) {
            $query->select('id','name', 'principal_id');
        }, 'line'])->latest();

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'))->modal('send message', function($model) {
            $form = new ModalForm();
            $form->hidden('type')->default('teacher');
            $form->hidden('user_id')->default($model->id);
            $form->action('/admin/send');
            $form->method('POST');
            $form->textarea('message');
            return $form->render();
        });
        $grid->column('line.name', 'Line name');
        $grid->column('email', __('Email'));
        $grid->column('role', __('Role'));
        $grid->column('school.name', 'Belong To School');
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
        $show = new Show(Teacher::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('role', __('Role'));
        $show->field('school_id', __('School id'));
        $show->field('line_id', __('Line id'));
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
        $form = new Form(new Teacher());

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->text('role', __('Role'));
        $form->number('school_id', __('School id'));
        $form->number('line_id', __('Line id'));

        return $form;
    }
}
