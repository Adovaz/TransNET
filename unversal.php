<!DOCTYPE html>
<?php

class resourceTile{
    public string $title;
    public string $description;
    public string $pdfUri;
    public function __construct($title, $description, $pdfUri){
        $this->title = $title;
        $this->description = $description;
        $this->pdf = $pdfUri;
    }
    public function display($title, $description, $pdf){
        return<<<HTML
    <html>
        
    </html>
HTML;
    }
}

?>