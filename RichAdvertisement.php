<?php
/**
 *@author nicolaas [at] sunnysideup.co.nz
 **/
class RichAdvertisement extends Widget
{
    public static $has_one = array(
        "RichAdvertisementWidgetObject" => "RichAdvertisementWidgetObject"
    );

    public static $title = 'Rich Advertisement';

    public static $cmsTitle = 'Rich Advertisement';

    public static $description = 'Allows you to add a richly formatted advertisement';

    public function getCMSFields()
    {
        $options = DataObject::get("RichAdvertisementWidgetObject");
        if ($options) {
            return new FieldSet(
                new LiteralField("RichAdvertisementWidgetObjectLink", "Link to modelAdmin goes here..."),
                new DropdownField(
                    $name = "RichAdvertisementWidgetObjectID",
                    $title = "Select advertisement",
                    $source = $options
                )
            );
        } else {
            //put some message here on how to add options
        }
    }

    public function Title()
    {
        return $this->WidgetTitle ? $this->WidgetTitle : self::$title;
    }

    public function getTitle()
    {
        return $this->Title;
    }
}
