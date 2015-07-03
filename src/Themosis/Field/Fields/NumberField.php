<?php
namespace Themosis\Field\Fields;

use Themosis\View\ViewFactory;

class NumberField extends FieldBuilder implements IField
{
    /**
     * Define a core TextField.
     *
     * @param array $properties The text field properties.
     * @param ViewFactory $view
     */
    public function __construct(array $properties, ViewFactory $view)
    {
        parent::__construct($properties, $view);
        $this->fieldType();
    }

    /**
     * Method to override to define the input type
     * that handles the value.
     *
     * @return void
     */
    protected function fieldType()
    {
        $this->type = 'number';
    }

    /**
     * Handle the field HTML code for metabox output.
     *
     * @return string
     */
    public function metabox()
    {
        return $this->view->make('metabox._themosisNumberField', ['field' => $this])->render();
    }

    /**
     * Handle the field HTML code for the Settings API output.
     *
     * @return string
     */
    public function page()
    {
        return $this->metabox();
    }

    /**
     * Handle the HTML code for user output.
     *
     * @return string
     */
    public function user()
    {
        return $this->metabox();
    }


}