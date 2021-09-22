<?php
class Section {
    private Layout $layout;

    public function setLayout(Layout $layout): void{
        $this->layout = $layout;
    }

    public function getLayout(): Layout{
        return $this->layout;
    }
}