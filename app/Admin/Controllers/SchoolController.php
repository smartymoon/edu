<?php

namespace App\Admin\Controllers;

use App\School;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SchoolController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'School';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new School());
        $grid->disableCreateButton();
        $grid->actions(function($actions) {
           $actions->disableEdit();
           $actions->disableView();
        });

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('principal.name', __('Principal Name'));
        $grid->column('if_approve', __('If approve'))->switch();
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(School::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('principal_id', __('Principal id'));
        $show->field('if_approve', __('If approve'));
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
        $form = new Form(new School());

        $form->text('name', __('Name'));
        $form->number('principal_id', __('Principal id'));
        $form->switch('if_approve', __('If approve'));

        return $form;
    }
}
