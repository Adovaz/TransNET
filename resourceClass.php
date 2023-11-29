<!DOCTYPE html>
<?php

class ResourceTile
{
    public string $title;
    public string $description;
    public string $pdfUri;
    public function __construct($title, $description, $pdfUri)
    {
        $this->title = $title;
        $this->description = $description;
        $this->pdfUri = $pdfUri;
    }
    public function display()
    {
        return <<<HTML
                <div class="p-2 rounded-lg justify-items-center text-center text-xl bg-slate-700">
                    $this->title
                    <div class="text-base text-justify">
                        $this->description
                    </div>
                    <div class="flex justify-center gap-4 pt-4 text-sm">
                        <a href=$this->pdfUri
                            class="p-2 text-center rounded-md bg-violet-400 hover:bg-violet-500 focus:outline-none focus:ring focus:ring-violet-500">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20">
                                <path
                                    d="M480-320 280-520l56-58 104 104v-326h80v326l104-104 56 58-200 200ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z" />
                            </svg>
                        </a>
                    </div>
                </div> 
HTML;
    }
}


?>