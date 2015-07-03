<?php
namespace Themosis\Field\Fields;

use Themosis\View\ViewFactory;

class ColorField extends FieldBuilder implements IField
{
    /**
     * @param array $properties
     * @param ViewFactory $view
     */
    public function __construct(array $properties, ViewFactory $view)
    {
        parent::__construct($properties, $view);
        $this->fieldType();
    }

    /**
     * Override the input type that handles the value.
     *
     * @return void
     */
    protected function fieldType()
    {
        $this->type = 'text';
    }

    /**
     * Handle the HTML code for metabox output.
     *
     * @return string
     */
    public function metabox()
    {
        return View::make()
    }

    /**
     * Handle the HTML code for page/settings output.
     *
     * @return string
     */
    public function page()
    {
        // TODO: Implement page() method.
    }

    /**
     * Handle the HTML code for user output.
     *
     * @return string
     */
    public function user()
    {
        // TODO: Implement user() method.
    }
}